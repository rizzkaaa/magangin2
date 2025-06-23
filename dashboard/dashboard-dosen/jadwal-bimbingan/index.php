<?php
include '../../../db.php';
include '../../components/render-components.php';

$idMhs = $_GET['id_mhs'] ?? null;

if (!$idMhs) {
    die("ID mahasiswa tidak ditemukan.");
}

$queryMhs = "SELECT * FROM mahasiswa WHERE id_mhs = '$idMhs'";
$dataMhs = mysqli_fetch_assoc(mysqli_query($connect, $queryMhs));

if (!$dataMhs) {
    die("Data mahasiswa tidak ditemukan di database.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit_tambah'])) {
        $topik = $_POST['topik_bimbingan'];
        $tanggal = $_POST['tanggal'];
        $jam = $_POST['jam'];
        $tempat = $_POST['tempat'];

        $getMagang = mysqli_fetch_assoc(mysqli_query($connect, "SELECT id_magang FROM magang WHERE id_mhs = '$idMhs'"));
        $idMagang = $getMagang['id_magang'] ?? null;

        if ($idMagang) {
            mysqli_query($connect, "INSERT INTO bimbingan (id_magang, topik_bimbingan, tanggal, jam, tempat) VALUES ('$idMagang', '$topik', '$tanggal', '$jam', '$tempat')");
        }
    }

    if (isset($_POST['submit_edit'])) {
        $id_bimbingan = $_POST['id_bimbingan'];
        $topik = $_POST['topik_bimbingan'];
        $tanggal = $_POST['tanggal'];
        $jam = $_POST['jam'];
        $tempat = $_POST['tempat'];

        mysqli_query($connect, "UPDATE bimbingan SET topik_bimbingan='$topik', tanggal='$tanggal', jam='$jam', tempat='$tempat' WHERE id_bimbingan='$id_bimbingan'");
    }

    if (isset($_POST['submit_hapus'])) {
        $id_bimbingan = $_POST['id_bimbingan'];
        mysqli_query($connect, "DELETE FROM bimbingan WHERE id_bimbingan='$id_bimbingan'");
    }
}

$queryBimbingan = "
    SELECT 
        bimbingan.*, 
        perusahaan.nama_perusahaan 
    FROM bimbingan
    JOIN magang ON magang.id_magang = bimbingan.id_magang
    JOIN lowongan ON lowongan.id_lowongan = magang.id_lowongan
    JOIN perusahaan ON perusahaan.id_perusahaan = lowongan.id_perusahaan
    WHERE magang.id_mhs = '$idMhs'
    ORDER BY bimbingan.tanggal DESC
";

$resultBimbingan = mysqli_query($connect, $queryBimbingan);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Magangin | Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#1d222efb] text-black">

    <div class="max-w-5xl mx-auto py-10">
        <div class="bg-white p-6 rounded shadow">
            <h1 class="text-2xl font-bold text-[#003c9e] mb-4">Jadwal Bimbingan -
                <?= htmlspecialchars($dataMhs['nama']) ?> (<?= htmlspecialchars($dataMhs['npm']) ?>)</h1>
            <button onclick="document.getElementById('modalTambah').classList.remove('hidden')"
                class="bg-[#003c9e] text-white px-4 py-2 rounded mb-4">Tambah Bimbingan</button>
            <table class="w-full table-auto border">
                <thead class="bg-[#003c9e] text-white">
                    <tr>
                        <th class="px-4 py-2">Perusahaan</th>
                        <th class="px-4 py-2">Topik</th>
                        <th class="px-4 py-2">Tanggal</th>
                        <th class="px-4 py-2">Jam</th>
                        <th class="px-4 py-2">Tempat</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($b = mysqli_fetch_assoc($resultBimbingan)): ?>
                    <tr class="border text-center">
                        <td class="px-4 py-2"><?= htmlspecialchars($b['nama_perusahaan']) ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($b['topik_bimbingan']) ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($b['tanggal']) ?></td>
                        <td class="px-4 py-2"><?= substr($b['jam'], 0, 5) ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($b['tempat']) ?></td>
                        <td class="px-4 py-2 flex justify-center gap-2">
                            <button onclick='editData(<?= json_encode($b) ?>)'
                                class="text-blue-600 hover:underline">Edit</button>
                            <form method="post">
                                <input type="hidden" name="id_bimbingan" value="<?= $b['id_bimbingan'] ?>">
                                <button name="submit_hapus" class="text-red-600 hover:underline"
                                    onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Tambah -->
    <div id="modalTambah" class="hidden fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center">
        <div class="bg-white p-6 rounded w-[90%] max-w-lg">
            <h2 class="text-xl font-bold mb-4">Tambah Jadwal Bimbingan</h2>
            <form method="post">
                <input name="topik_bimbingan" required placeholder="Topik" class="w-full mb-2 p-2 border rounded">
                <input type="date" name="tanggal" required class="w-full mb-2 p-2 border rounded">
                <input type="time" name="jam" required class="w-full mb-2 p-2 border rounded">
                <input name="tempat" required placeholder="Tempat" class="w-full mb-2 p-2 border rounded">
                <div class="flex justify-end gap-3">
                    <button type="button" onclick="document.getElementById('modalTambah').classList.add('hidden')"
                        class="px-4 py-2 bg-gray-300 rounded">Batal</button>
                    <button type="submit" name="submit_tambah"
                        class="px-4 py-2 bg-blue-600 text-white rounded">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Edit -->
    <div id="modalEdit" class="hidden fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center">
        <div class="bg-white p-6 rounded w-[90%] max-w-lg">
            <h2 class="text-xl font-bold mb-4">Edit Jadwal Bimbingan</h2>
            <form method="post">
                <input type="hidden" name="id_bimbingan" id="edit_id">
                <input name="topik_bimbingan" id="edit_topik" required class="w-full mb-2 p-2 border rounded">
                <input type="date" name="tanggal" id="edit_tanggal" required class="w-full mb-2 p-2 border rounded">
                <input type="time" name="jam" id="edit_jam" required class="w-full mb-2 p-2 border rounded">
                <input name="tempat" id="edit_tempat" required class="w-full mb-2 p-2 border rounded">
                <div class="flex justify-end gap-3">
                    <button type="button" onclick="document.getElementById('modalEdit').classList.add('hidden')"
                        class="px-4 py-2 bg-gray-300 rounded">Batal</button>
                    <button type="submit" name="submit_edit"
                        class="px-4 py-2 bg-blue-600 text-white rounded">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script>
    function editData(data) {
        document.getElementById('edit_id').value = data.id_bimbingan;
        document.getElementById('edit_topik').value = data.topik_bimbingan;
        document.getElementById('edit_tanggal').value = data.tanggal;
        document.getElementById('edit_jam').value = data.jam;
        document.getElementById('edit_tempat').value = data.tempat;
        document.getElementById('modalEdit').classList.remove('hidden');
    }
    </script>
</body>

</html>