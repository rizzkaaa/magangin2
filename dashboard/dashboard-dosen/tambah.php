<?php
include '../../../db.php';

$idMhs = $_GET['id_mhs'] ?? '';
if (!$idMhs) die("ID Mahasiswa tidak ditemukan");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $topik = $_POST['topik_bimbingan'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $tempat = $_POST['tempat'];

    $qMagang = mysqli_query($connect, "SELECT id_magang FROM magang WHERE id_mhs = '$idMhs' LIMIT 1");
    $magang = mysqli_fetch_assoc($qMagang);
    $idMagang = $magang['id_magang'] ?? null;

    if ($idMagang) {
        mysqli_query($connect, "INSERT INTO bimbingan (id_magang, topik_bimbingan, tanggal, jam, tempat)
            VALUES ('$idMagang', '$topik', '$tanggal', '$jam', '$tempat')");
        header("Location: index.php?id_mhs=$idMhs");
    } else {
        echo "Data magang tidak ditemukan.";
    }
}
?>

<form method="POST">
    <label>Topik:</label><br>
    <input name="topik_bimbingan" required><br><br>
    <label>Tanggal:</label><br>
    <input type="date" name="tanggal" required><br><br>
    <label>Jam:</label><br>
    <input type="time" name="jam" required><br><br>
    <label>Tempat:</label><br>
    <input name="tempat" required><br><br>
    <button type="submit">Tambah</button>
</form>