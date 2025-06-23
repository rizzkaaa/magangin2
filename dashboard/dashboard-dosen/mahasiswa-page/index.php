<?php
include '../../../db.php';
include '../../../middleware/role.php';
include '../../components/render-components.php';

only(['dosen']);

if (!isset($_GET['id'])) {
    echo "ID mahasiswa tidak ditemukan.";
    exit;
}

$id_mhs = $_GET['id'];
$query = "SELECT * FROM mahasiswa WHERE id_mhs = '$id_mhs'";
$result = mysqli_query($connect, $query);

if (!$result || mysqli_num_rows($result) === 0) {
    echo "Data mahasiswa tidak ditemukan.";
    exit;
}

$dataMahasiswa = mysqli_fetch_assoc($result);
$queryMagang = "SELECT * FROM magang WHERE id_mhs = '$id_mhs'";
$dataMagang = mysqli_fetch_assoc(mysqli_query($connect, $queryMagang));
$id_magang = $dataMagang['id_magang'] ?? null;

$queryKegiatan = "SELECT * FROM kegiatan_magang WHERE id_magang = '$id_magang' ORDER BY tgl ASC";
$resultKegiatan = mysqli_query($connect, $queryKegiatan);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Magangin | Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="../../../assets/css/dashboard.css">
</head>

<body class="h-screen flex flex-col font-sans">
    <header class="flex items-center bg-[#455bd4] text-white px-8 py-3">
        <a href="../" style="width: 10%; font-size: 20px; font-weight: bold; cursor: pointer;">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h2 class="font-semibold text-[25px]">Data Mahasiswa</h2>
    </header>

    <section class="bg-[#1d222efb] w-full h-full flex flex-col items-center">
        <div class="flex justify-between m-8 w-[90%]">
            <div class="bg-[#c3cbe2] p-5 rounded-[15px] text-center flex-1 mx-2 shadow-md">
                <h1 class="text-[22px] text-[#003c9e] mb-1 font-bold">
                    <?= htmlspecialchars($dataMahasiswa['nama']) ?>
                </h1>
            </div>
            <div class="bg-[#c3cbe2] p-5 rounded-[15px] text-center flex-1 mx-2 shadow-md">
                <h1 class="text-[22px] text-[#003c9e] mb-1 font-bold">
                    <?= htmlspecialchars($dataMahasiswa['npm']) ?>
                </h1>
            </div>
        </div>

        <table class="w-[90%] border-collapse mt-5 bg-[#c3cbe2] rounded-[12px] shadow-md overflow-hidden">
            <thead class="bg-[#003c9e] text-white">
                <tr>
                    <th class="p-4 text-center">Tanggal</th>
                    <th class="p-4 text-center">Laporan Harian</th>
                    <th class="p-4 text-center">Nilai</th>
                    <th class="p-4 text-center" colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($resultKegiatan) > 0): ?>
                <?php while ($kegiatan = mysqli_fetch_assoc($resultKegiatan)): ?>
                <tr class="text-center border-b border-gray-300">
                    <td class="p-4"><?= date('d/m/Y', strtotime($kegiatan['tgl'])) ?></td>
                    <td class="p-4">
                        <a href="#lihat-laporan"
                            onclick="lihatLaporan('<?= addslashes($kegiatan['kegiatan']) ?>', '<?= $kegiatan['bukti_kegiatan'] ?>')"
                            class="bg-[#00b894] text-white font-bold py-2 px-4 rounded-lg">Lihat</a>
                    </td>
                    <td class="p-4"><?= $kegiatan['nilai_kegiatan'] ?? '-' ?></td>
                    <td class="p-4" colspan="2">
                        <a href="#input-nilai" onclick="isiNilai('<?= $kegiatan['id_kegiatan'] ?>')"
                            class="bg-[#0066ff] text-white font-bold py-2 px-4 rounded-lg">Input Nilai</a>
                    </td>
                </tr>
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center py-6">Belum ada data kegiatan.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <!-- Tombol Buat Jadwal selalu muncul -->
        <div class="w-[90%] flex justify-end mt-4">
            <a href="javascript:void(0)" onclick="document.getElementById('modalTambah').classList.remove('hidden')"
                class="bg-[#0066ff] text-white font-bold py-3 px-6 rounded-lg shadow-md">
                Buat Jadwal Bimbingan
            </a>
        </div>

        <!-- Popup Lihat Laporan -->
        <div id="lihat-laporan"
            class="modal-parent absolute top-0 left-0 w-full h-full hidden flex justify-center items-center">
            <a href="#" class="overlay absolute w-full h-full bg-black/30 backdrop-blur-sm"></a>
            <div class="z-10 bg-white p-6 rounded-xl w-[400px] shadow-lg">
                <h3 class="text-xl font-bold mb-4 text-[#003c9e]">Laporan Kegiatan</h3>
                <p id="isi-kegiatan"></p>
                <p class="mt-2 font-semibold text-sm">Bukti: <span id="bukti-kegiatan"></span></p>
                <div class="flex justify-end mt-4">
                    <a href="#" class="px-4 py-2 bg-gray-400 rounded text-white">Tutup</a>
                </div>
            </div>
        </div>

        <!-- Popup Input Nilai -->
        <div id="input-nilai"
            class="modal-parent absolute top-0 left-0 w-full h-full hidden flex justify-center items-center">
            <a href="#" class="overlay absolute w-full h-full bg-black/30 backdrop-blur-sm"></a>
            <form action="proses_input_nilai.php" method="POST"
                class="z-10 bg-white p-6 rounded-xl w-[400px] shadow-lg">
                <input type="hidden" name="id_kegiatan" id="id-kegiatan-input">
                <h3 class="text-xl font-bold mb-4 text-[#003c9e]">Input Nilai</h3>
                <input type="number" name="nilai" required min="0" max="100" class="w-full p-2 border rounded-lg">
                <div class="flex justify-end mt-4">
                    <a href="#" class="px-4 py-2 bg-gray-400 rounded text-white">Batal</a>
                    <button type="submit" class="px-4 py-2 bg-blue-600 rounded text-white ml-2">Simpan</button>
                </div>
            </form>
        </div>

        <!-- Modal Tambah Jadwal Bimbingan -->
        <div id="modalTambah" class="hidden fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
            <div class="bg-white p-6 rounded w-[90%] max-w-lg">
                <h2 class="text-xl font-bold mb-4 text-[#003c9e]">Tambah Jadwal Bimbingan</h2>
                <form method="post" action="proses_buat_jadwal.php">
                    <input type="hidden" name="id_magang" value="<?= htmlspecialchars($id_magang) ?>">
                    <input name="topik_bimbingan" required placeholder="Topik" class="w-full mb-2 p-2 border rounded">
                    <input type="date" name="tanggal" required class="w-full mb-2 p-2 border rounded">
                    <input type="time" name="jam" required class="w-full mb-2 p-2 border rounded">
                    <input name="tempat" required placeholder="Tempat" class="w-full mb-2 p-2 border rounded">
                    <div class="flex justify-end gap-3 mt-4">
                        <button type="button" onclick="document.getElementById('modalTambah').classList.add('hidden')"
                            class="px-4 py-2 bg-gray-300 rounded">Batal</button>
                        <button type="submit" name="submit_tambah"
                            class="px-4 py-2 bg-blue-600 text-white rounded">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
    function isiNilai(id) {
        document.getElementById('id-kegiatan-input').value = id;
    }

    function lihatLaporan(kegiatan, bukti) {
        document.getElementById('isi-kegiatan').innerText = kegiatan;
        document.getElementById('bukti-kegiatan').innerText = bukti;
    }
    </script>
</body>

</html>