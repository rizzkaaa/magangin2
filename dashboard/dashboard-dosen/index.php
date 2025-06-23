<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../../db.php';
include '../../middleware/role.php';
include '../components/render-components.php';

only(['dosen']);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$idUser = $_SESSION['id_user'];
$email = $_SESSION['email'];

$dataDosen = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM dosen WHERE id_user = '$idUser'"));

// Proses update profil
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['kirim_notifikasi'])) {
    $nama_dosen = $_POST['nama_dosen'];
    $nip = $_POST['nip'];
    $universitas = $_POST['universitas'];
    $fotoName = $dataDosen['foto_dosen']; // default tetap pakai yang lama

    if (isset($_FILES['profil']) && $_FILES['profil']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = realpath(__DIR__ . '/../../') . '/assets/img/profil-dosen/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }

        $file_tmp = $_FILES['profil']['tmp_name'];
        $original_name = basename($_FILES['profil']['name']);
        $clean_name = str_replace(' ', '_', $original_name);
        $file_name = uniqid() . '_' . $clean_name;
        $file_path = $upload_dir . $file_name;

        // Hapus foto lama jika ada
        if (!empty($dataDosen['foto_dosen'])) {
            $old_file = $upload_dir . $dataDosen['foto_dosen'];
            if (file_exists($old_file)) {
                unlink($old_file);
            }
        }

        if (move_uploaded_file($file_tmp, $file_path)) {
            $fotoName = $file_name;
        } else {
            http_response_code(500);
            echo json_encode(['error' => 'Gagal upload foto']);
            exit;
        }
    }

    // Update data dosen
    $query = "UPDATE dosen 
              SET nama_dosen='$nama_dosen', nip='$nip', universitas='$universitas', foto_dosen='$fotoName' 
              WHERE id_user='$idUser'";
    mysqli_query($connect, $query);

    header("Location: index.php#profil");
    exit;
}


// Proses simpan notifikasi
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['kirim_notifikasi'])) {
    $id_mhs = $_POST['id_mahasiswa'] ?? null;
    $judul = trim($_POST['judul'] ?? '');
    $pesan = trim($_POST['pesan'] ?? '');

    if ($idUser && $id_mhs && $judul && $pesan) {
        $judul = mysqli_real_escape_string($connect, $judul);
        $pesan = mysqli_real_escape_string($connect, $pesan);

        $idDosen = $dataDosen['id_dosen'];

        $queryInsert = "INSERT INTO notifikasi (id_dosen, id_mhs, judul_pesan, isi_pesan, status, created_at)
                        VALUES ('$idDosen', '$id_mhs', '$judul', '$pesan', 'Belum dibaca', NOW())";

        if (mysqli_query($connect, $queryInsert)) {
            $_SESSION['notif_success'] = "Notifikasi berhasil dikirim!";
        } else {
            $_SESSION['notif_error'] = "Gagal menyimpan notifikasi: " . mysqli_error($connect);
        }
    } else {
        $_SESSION['notif_error'] = "Semua field wajib diisi.";
    }

    header("Location: index.php#kirim-notifikasi");
    exit;
}

$dataDosen = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM dosen WHERE id_user = '$idUser'"));
$idDosen = $dataDosen['id_dosen'] ?? null;

if (!$idDosen) {
    die("Dosen tidak ditemukan.");
}

// Ambil mahasiswa untuk notifikasi
$resultMahasiswaNotif = mysqli_query($connect, "
    SELECT DISTINCT mhs.id_mhs, mhs.nama, mhs.npm
    FROM magang mg
    JOIN mahasiswa mhs ON mg.id_mhs = mhs.id_mhs
    WHERE mg.id_dosen = '$idDosen'
");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Magangin | Dashboard Dosen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/dashboard.css">
</head>

<body class="h-screen flex flex-col">

    <?php
    $nama = $dataDosen['nama_dosen'] ?? 'Dosen';
    echo renderHeader($nama, $email, 'Bimbing');
    ?>

    <?php
    $getDosen = mysqli_query($connect, "SELECT id_dosen FROM dosen WHERE id_user = '$idUser'");
    $dataDosenInfo = mysqli_fetch_assoc($getDosen);
    $idDosen = $dataDosenInfo['id_dosen'] ?? null;

    if (!$idDosen) {
        die("❌ Dosen tidak ditemukan di database. Pastikan Anda sudah mengisi data profil terlebih dahulu.");
    }

    $queryMahasiswa = "
    SELECT mhs.nama, mhs.npm, mg.nilai, mg.status 
    FROM magang mg
    JOIN mahasiswa mhs ON mg.id_mhs = mhs.id_mhs
    WHERE mg.id_dosen = '$idDosen'
";
    $resultMahasiswa = mysqli_query($connect, $queryMahasiswa);

    if (!$resultMahasiswa) {
        die("❌ Query gagal dijalankan: " . mysqli_error($connect));
    }
    ?>


    <div class="flex flex-1 relative">
        <?= renderSidebar([
            ['icon' => 'home', 'label' => 'Dashboard', 'url' => '#dashboard'],
            ['icon' => 'user', 'label' => 'Profil', 'url' => '#profil'],
            ['icon' => 'users', 'label' => 'Lihat Mahasiswa', 'url' => '#lihat_mahasiswa'],
            ['icon' => 'calendar-days', 'label' => 'Jadwal Bimbingan', 'url' => '#jadwal-bimbingan'],
            ['icon' => 'bell', 'label' => 'Kirim Notifikasi', 'url' => '#kirim-notifikasi'],
        ]); ?>

        <section class="bg-[#1d222efb] w-full overflow-hidden flex flex-col items-center">
            <div id="dashboard" class="menu w-full overflow-hidden flex-col items-center">
                <!-- Header -->
                <div class="w-[90%] flex justify-between">
                    <!-- Box Kiri -->
                    <?php
                    $queryCount = "
                            SELECT COUNT(*) as total 
                            FROM magang 
                            WHERE id_dosen = '{$dataDosen['id_dosen']}'
                        ";
                    $resultCount = mysqli_query($connect, $queryCount);
                    $totalMahasiswa = 0;
                    if ($resultCount && $row = mysqli_fetch_assoc($resultCount)) {
                        $totalMahasiswa = $row['total'];
                    }

                    ?>
                    <div
                        class="flex-1 bg-[#f0f4ff] mx-5 my-5 p-8 rounded-[15px] text-center font-bold shadow-md border border-[#cdd9ff]">
                        <p class="text-[#003c9e]">Mahasiswa yang Dibimbing</p>
                        <p class="text-[32px] mt-2 text-[#000]"><?= $totalMahasiswa ?></p>
                    </div>


                    <!-- Box Kanan -->
                    <?php
                    $queryUpcomingBimbingan = "
                                SELECT b.*
                                FROM bimbingan b
                                JOIN magang m ON b.id_magang = m.id_magang
                                WHERE m.id_dosen = '$idDosen'
                                AND b.tanggal > CURDATE()
                                ORDER BY b.tanggal ASC
                                LIMIT 1
                            ";

                    $resultUpcomingBimbingan = mysqli_query($connect, $queryUpcomingBimbingan);
                    $dataUpcomingBimbingan = mysqli_fetch_assoc($resultUpcomingBimbingan);


                    $resultUpcomingBimbingan = mysqli_query($connect, $queryUpcomingBimbingan);
                    $dataUpcomingBimbingan = mysqli_fetch_assoc($resultUpcomingBimbingan);
                    ?>

                    <div
                        class="flex-1 bg-[#f0f4ff] mx-5 my-5 p-8 rounded-[15px] text-center font-bold shadow-md border border-[#cdd9ff]">
                        <p class="text-[#003c9e]">Bimbingan Waktu Dekat Ini</p>
                        <p class="text-[32px] mt-2 text-[#000]">
                            <?= $dataUpcomingBimbingan ? date('d F Y', strtotime($dataUpcomingBimbingan['tanggal'])) : '-' ?>
                        </p>
                    </div>

                </div>

                <!-- Tabel Index Dosen Start -->
                <table class="w-[90%] rounded-[20px] overflow-hidden">
                    <thead class="bg-[#003c9e] text-white">
                        <tr>
                            <th class="p-[15px] text-center">Nama Mahasiswa</th>
                            <th class="p-[15px] text-center">NPM</th>
                            <th class="p-[15px] text-center">Total Nilai</th>
                            <th class="p-[15px] text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-[#c3cbe2] text-center">
                        <?php
                        $updateNilaiQuery = "UPDATE magang m LEFT JOIN (
                        SELECT id_magang, ROUND(AVG(nilai_kegiatan), 2) AS rata_rata
                                FROM kegiatan_magang
                                GROUP BY id_magang
                            ) km ON m.id_magang = km.id_magang
                            SET m.nilai = IFNULL(km.rata_rata, 0)
                            WHERE m.id_dosen = '{$dataDosen['id_dosen']}'
                        ";

                        mysqli_query($connect, $updateNilaiQuery);

                        $queryMahasiswa = "SELECT 
                                mhs.nama, 
                                mhs.npm, 
                                mg.status, 
                                mg.id_magang,
                                (
                                    SELECT 
                                        ROUND(AVG(nilai_kegiatan), 2) 
                                    FROM kegiatan_magang 
                                    WHERE kegiatan_magang.id_magang = mg.id_magang
                                ) AS nilai
                            FROM magang mg
                            JOIN mahasiswa mhs ON mg.id_mhs = mhs.id_mhs
                            WHERE mg.id_dosen = '{$dataDosen['id_dosen']}'
                        ";

                        $resultMahasiswa = mysqli_query($connect, $queryMahasiswa);

                        if ($resultMahasiswa && mysqli_num_rows($resultMahasiswa) > 0):
                            while ($row = mysqli_fetch_assoc($resultMahasiswa)):
                                $nama = htmlspecialchars($row['nama'] ?? '');
                                $npm = htmlspecialchars($row['npm'] ?? '');
                                $nilai = isset($row['nilai']) ? htmlspecialchars($row['nilai']) : '0';
                                $status = $row['status'] ?? '';

                                switch ($status) {
                                    case 'Selesai':
                                        $statusClass = 'bg-[#a8d5ff] text-[#004080]';
                                        break;
                                    case 'Gagal':
                                        $statusClass = 'bg-[#ffc1c1] text-[#b30000]';
                                        break;
                                    case 'Berlangsung':
                                    default:
                                        $statusClass = 'bg-[#d9e3ff] text-[#1a237e]';
                                        break;
                                }
                        ?>
                                <tr class="border-b border-gray-300">
                                    <td class="p-[15px]"><?= $nama ?></td>
                                    <td class="p-[15px]"><?= $npm ?></td>
                                    <td class="p-[15px]"><?= $nilai ?></td>
                                    <td class="p-[15px]">
                                        <span class="px-4 py-1 rounded-full <?= $statusClass ?>">
                                            <?= $status ?>
                                        </span>
                                    </td>
                                </tr>
                            <?php endwhile;
                        else: ?>
                            <tr>
                                <td colspan="4" class="p-[15px] text-gray-700">Belum ada data mahasiswa bimbingan.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>



                </table>
                <!-- Tabel Index Dosen end -->

            </div>
            <!-- Profil Start -->
            <form id="profil" method="POST" enctype="multipart/form-data"
                class="menu w-full h-[560px] overflow-y-auto flex-col items-end">
                <div class="flex w-full p-5">
                    <div class="mx-5 my-2">
                        <label class="text-white font-bold">Profil</label>
                        <div
                            class="bg-[#e8f0fe] rounded-[20px] border-2 border-dashed border-gray-400 h-[250px] w-[250px] shadow-sm flex justify-center items-center overflow-hidden relative">
                            <label class="absolute inset-0 cursor-pointer">
                                <input type="file" name="profil" class="hidden" onchange="this.form.submit()" />
                                <?php if (!empty($dataDosen['foto_dosen'])): ?>
                                    <img src="../../assets/img/profil-dosen/<?= $dataDosen['foto_dosen'] ?>"
                                        class="object-cover h-full w-full" />
                                <?php else: ?>
                                    <div class="flex justify-center items-center h-full w-full">
                                        <i class="fa-solid fa-image text-[36px] text-gray-600"></i>
                                    </div>
                                <?php endif; ?>
                            </label>

                        </div>
                    </div>

                    <div class="flex-1 w-2/3">
                        <div class="flex flex-col px-5 py-2">
                            <label class="text-white font-bold">Nama</label>
                            <input type="text" name="nama_dosen" value="<?= $dataDosen['nama_dosen'] ?? '' ?>"
                                class="bg-[#e8f0fe] p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
                        </div>

                        <div class="flex flex-col px-5 py-2">
                            <label class="text-white font-bold">Email</label>
                            <input type="email" name="email_dosen" value="<?= $email ?>"
                                class="bg-[#e8f0fe] p-[5px] rounded-[10px] shadow-sm" disabled />
                        </div>

                        <div class="flex flex-col px-5 py-2">
                            <label class="text-white font-bold">NIP</label>
                            <input type="text" name="nip" value="<?= $dataDosen['nip'] ?? '' ?>"
                                class="bg-[#e8f0fe] p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
                        </div>

                        <div class="flex flex-col px-5 py-2">
                            <label class="text-white font-bold">Universitas</label>
                            <input type="text" name="universitas" value="<?= $dataDosen['universitas'] ?? '' ?>"
                                class="bg-[#e8f0fe] p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
                        </div>
                    </div>
                </div>
                <div class="mx-5 my-2">
                    <button type="submit"
                        class="bg-orange-500 text-white px-6 py-2 rounded-md cursor-pointer hover:bg-orange-600 transition-all duration-300">
                        Simpan Profil
                    </button>
                </div>
            </form>
            <!-- Profil End -->
            <!-- Lihat mahasiswa Start -->
            <div id="lihat_mahasiswa" class="menu w-full h-[560px] overflow-y-auto flex-col items-center">
                <div class="w-[90%] flex justify-between">
                    <!-- Box Kiri -->
                    <div
                        class="flex-1 bg-[#f0f4ff] mx-5 my-5 p-8 rounded-[15px] text-center font-bold shadow-md border border-[#cdd9ff]">
                        <p class="text-[#003c9e]">Mahasiswa yang Dibimbing</p>
                        <p class="text-[32px] mt-2 text-[#000]"><?= $totalMahasiswa ?></p>
                    </div>

                    <!-- Box Kanan -->
                    <?php
                    $queryUpcomingBimbingan = "SELECT b.*
                    FROM bimbingan b
                    JOIN magang m ON b.id_magang = m.id_magang
                    WHERE m.id_dosen = '$idDosen'
                    AND b.tanggal > CURDATE()
                    ORDER BY b.tanggal ASC
                    LIMIT 1
                ";

                    $resultUpcomingBimbingan = mysqli_query($connect, $queryUpcomingBimbingan);
                    $dataUpcomingBimbingan = mysqli_fetch_assoc($resultUpcomingBimbingan);


                    $resultUpcomingBimbingan = mysqli_query($connect, $queryUpcomingBimbingan);
                    $dataUpcomingBimbingan = mysqli_fetch_assoc($resultUpcomingBimbingan);
                    ?>

                    <div
                        class="flex-1 bg-[#f0f4ff] mx-5 my-5 p-8 rounded-[15px] text-center font-bold shadow-md border border-[#cdd9ff]">
                        <p class="text-[#003c9e]">Bimbingan Waktu Dekat Ini</p>
                        <p class="text-[32px] mt-2 text-[#000]">
                            <?= $dataUpcomingBimbingan ? date('d F Y', strtotime($dataUpcomingBimbingan['tanggal'])) : '-' ?>
                        </p>
                    </div>
                </div>
                <?php
                $queryMahasiswaBimbingan = "
                            SELECT mahasiswa.id_mhs, mahasiswa.nama, mahasiswa.npm
                            FROM magang
                            JOIN mahasiswa ON mahasiswa.id_mhs = magang.id_mhs
                            WHERE magang.id_dosen = '{$dataDosen['id_dosen']}'
                        ";


                $resultMahasiswaBimbingan = mysqli_query($connect, $queryMahasiswaBimbingan);

                ?>
                <div class="w-[90%] flex flex-wrap justify-center">
                    <?php if (mysqli_num_rows($resultMahasiswaBimbingan) > 0): ?>
                        <?php while ($mhs = mysqli_fetch_assoc($resultMahasiswaBimbingan)): ?>
                            <a href="./mahasiswa-page/index.php?id=<?= $mhs['id_mhs'] ?>"
                                class="bg-[#a5bfff] m-[10px] p-[15px] rounded-[12px] shadow-[0_5px_0_#003c9e] transition-transform duration-200 ease-in-out transform hover:-translate-y-[3px] cursor-pointer text-center">
                                <p class="font-bold mb-[5px] text-black"><?= htmlspecialchars($mhs['nama']) ?></p>
                                <p class="text-[14px] text-[#333]">NIM <?= htmlspecialchars($mhs['npm']) ?></p>
                            </a>

                        <?php endwhile; ?>
                    <?php else: ?>
                        <p class="text-white">Belum ada mahasiswa yang dibimbing.</p>
                    <?php endif; ?>
                </div>


            </div>
            <!-- Lihat Mahasiswa End -->
            <!-- Jadwal Bimbingan Start -->
            <div id="jadwal-bimbingan" class="menu w-full h-[560px] overflow-y-auto flex-col items-center">
                <div class="w-[90%] flex justify-between">
                    <!-- Box Kiri -->
                    <?php
                    $queryCount = "
                            SELECT COUNT(*) as total 
                            FROM magang 
                            WHERE id_dosen = '{$dataDosen['id_dosen']}'
                        ";
                    $resultCount = mysqli_query($connect, $queryCount);
                    $totalMahasiswa = 0;
                    if ($resultCount && $row = mysqli_fetch_assoc($resultCount)) {
                        $totalMahasiswa = $row['total'];
                    }

                    ?>
                    <div
                        class="flex-1 bg-[#f0f4ff] mx-5 my-5 p-8 rounded-[15px] text-center font-bold shadow-md border border-[#cdd9ff]">
                        <p class="text-[#003c9e]">Mahasiswa yang Dibimbing</p>
                        <p class="text-[32px] mt-2 text-[#000]"><?= $totalMahasiswa ?></p>
                    </div>


                    <!-- Box Kanan -->
                    <?php
                    $queryUpcomingBimbingan = "
    SELECT b.*
    FROM bimbingan b
    JOIN magang m ON b.id_magang = m.id_magang
    WHERE m.id_dosen = '$idDosen'
    AND b.tanggal > CURDATE()
    ORDER BY b.tanggal ASC
    LIMIT 1
";

                    $resultUpcomingBimbingan = mysqli_query($connect, $queryUpcomingBimbingan);
                    $dataUpcomingBimbingan = mysqli_fetch_assoc($resultUpcomingBimbingan);


                    $resultUpcomingBimbingan = mysqli_query($connect, $queryUpcomingBimbingan);
                    $dataUpcomingBimbingan = mysqli_fetch_assoc($resultUpcomingBimbingan);
                    ?>

                    <div
                        class="flex-1 bg-[#f0f4ff] mx-5 my-5 p-8 rounded-[15px] text-center font-bold shadow-md border border-[#cdd9ff]">
                        <p class="text-[#003c9e]">Bimbingan Waktu Dekat Ini</p>
                        <p class="text-[32px] mt-2 text-[#000]">
                            <?= $dataUpcomingBimbingan ? date('d F Y', strtotime($dataUpcomingBimbingan['tanggal'])) : '-' ?>
                        </p>
                    </div>

                </div>
                <?php
                $queryBimbingan = "
    SELECT 
        bimbingan.id_bimbingan,
        mhs.id_mhs,
        mhs.nama,
        bimbingan.tanggal,
        bimbingan.jam,
        bimbingan.tempat,
        bimbingan.topik_bimbingan
    FROM bimbingan
    JOIN magang ON magang.id_magang = bimbingan.id_magang
    JOIN mahasiswa mhs ON mhs.id_mhs = magang.id_mhs
    WHERE magang.id_dosen = '$idDosen'
    ORDER BY bimbingan.tanggal DESC
";

                $resultBimbingan = mysqli_query($connect, $queryBimbingan);
                ?>

                <!-- Tabel Jadwal Pembimbingan -->
                <div class="bg-[#99a6d7] p-5 rounded-[10px] w-[90%] mt-6">
                    <h3 class="mb-5 text-[20px] font-bold text-[#000]">Pembimbingan Terjadwal</h3>

                    <?php if (mysqli_num_rows($resultBimbingan) > 0): ?>
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-black border border-gray-300 rounded-lg bg-white">
                                <thead class="bg-[#003c9e] text-white text-center">
                                    <tr>
                                        <th class="px-4 py-2">Mahasiswa</th>
                                        <th class="px-4 py-2">Topik</th>
                                        <th class="px-4 py-2">Tanggal</th>
                                        <th class="px-4 py-2">Jam</th>
                                        <th class="px-4 py-2">Tempat</th>
                                        <th class="px-4 py-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($b = mysqli_fetch_assoc($resultBimbingan)): ?>
                                        <tr class="border-b text-center hover:bg-gray-100">
                                            <td class="px-4 py-3 font-semibold"><?= htmlspecialchars($b['nama']) ?></td>
                                            <td class="px-4 py-3">
                                                <?= !empty($b['topik_bimbingan']) ? htmlspecialchars($b['topik_bimbingan']) : 'Belum ditentukan' ?>
                                            </td>
                                            <td class="px-4 py-3">
                                                <?= !empty($b['tanggal']) ? date('d F Y', strtotime($b['tanggal'])) : 'Belum ditentukan' ?>
                                            </td>
                                            <td class="px-4 py-3">
                                                <?= !empty($b['jam']) ? substr($b['jam'], 0, 5) : 'Belum ditentukan' ?>
                                            </td>
                                            <td class="px-4 py-3">
                                                <?= !empty($b['tempat']) ? htmlspecialchars($b['tempat']) : 'Belum ditentukan' ?>
                                            </td>
                                            <td class="px-4 py-3">
                                                <a href="jadwal-bimbingan/?id_mhs=<?= $b['id_mhs'] ?>"
                                                    class="text-blue-600 hover:underline">Lihat</a>

                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php else: ?>
                        <p class="text-white text-center">Belum ada jadwal bimbingan yang tercatat.</p>
                    <?php endif; ?>
                </div>






            </div>
            <!-- Jadwal bimbingan end -->
            <!-- Notifikasi Start -->
            <<div id="kirim-notifikasi"
                class="menu hidden w-full h-[560px] overflow-y-auto flex flex-col items-center mt-[80px]">
                <div class="w-[90%]">
                    <!-- Alert Notifikasi -->
                    <div id="alert-notifikasi" class="hidden mb-4">
                        <?php if (isset($_SESSION['notif_success'])): ?>
                            <div class="bg-green-100 text-green-800 px-4 py-2 rounded text-center shadow">
                                <?= $_SESSION['notif_success']; ?>
                            </div>
                            <?php unset($_SESSION['notif_success']); ?>
                        <?php elseif (isset($_SESSION['notif_error'])): ?>
                            <div class="bg-red-100 text-red-800 px-4 py-2 rounded text-center shadow">
                                <?= $_SESSION['notif_error']; ?>
                            </div>
                            <?php unset($_SESSION['notif_error']); ?>
                        <?php endif; ?>
                    </div>

                    <!-- Form Kirim Notifikasi -->
                    <div class="bg-white p-6 rounded-[10px] shadow-lg">
                        <h2 class="text-[20px] font-bold text-[#003c9e] mb-4">Form Kirim Notifikasi</h2>
                        <form method="POST" action="">
                            <input type="hidden" name="kirim_notifikasi" value="1">

                            <div class="mb-4">
                                <label for="id_mahasiswa" class="block font-bold mb-2 text-black">Pilih Mahasiswa
                                    :</label>
                                <select name="id_mahasiswa" id="id_mahasiswa" class="w-full px-3 py-2 border rounded"
                                    required>
                                    <option value="">-- Pilih Mahasiswa --</option>
                                    <?php while ($mhs = mysqli_fetch_assoc($resultMahasiswaNotif)): ?>
                                        <option value="<?= $mhs['id_mhs'] ?>">
                                            <?= htmlspecialchars($mhs['npm']) ?> - <?= htmlspecialchars($mhs['nama']) ?>
                                        </option>
                                    <?php endwhile; ?>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="judul" class="block font-bold mb-2 text-black">Judul Notifikasi :</label>
                                <input type="text" id="judul" name="judul"
                                    class="w-full px-3 py-2 border rounded bg-gray-100" required>
                            </div>

                            <div class="mb-4">
                                <label for="pesan" class="block font-bold mb-2 text-black">Isi Pesan :</label>
                                <input type="text" id="pesan" name="pesan"
                                    class="w-full px-3 py-2 border rounded bg-gray-100" required>
                            </div>

                            <div class="flex justify-end">
                                <button type="submit"
                                    class="bg-[#003c9e] text-white px-5 py-2 rounded hover:opacity-90">
                                    Kirim Notifikasi
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
    </div>





    <!-- Notifikasi End -->

    </section>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hash = window.location.hash;

            if (hash === '#kirim-notifikasi') {
                const alertBox = document.getElementById('alert-notifikasi');
                if (alertBox) {
                    alertBox.classList.remove('hidden');
                }

                const menu = document.getElementById('kirim-notifikasi');
                if (menu) {
                    menu.classList.remove('hidden');
                }
            }
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function showMenuByHash() {
                const hash = window.location.hash;
                const menus = document.querySelectorAll(".menu");

                menus.forEach(menu => menu.classList.add("hidden"));

                if (hash) {
                    const activeMenu = document.querySelector(hash);
                    if (activeMenu) {
                        activeMenu.classList.remove("hidden");
                    }
                } else {
                    const defaultMenu = document.querySelector("#dashboard");
                    if (defaultMenu) defaultMenu.classList.remove("hidden");
                }
            }

            window.addEventListener("hashchange", showMenuByHash);
            showMenuByHash();
        });
    </script>




    <script src="../../assets/js/dashboard.js"></script>
</body>

</html>