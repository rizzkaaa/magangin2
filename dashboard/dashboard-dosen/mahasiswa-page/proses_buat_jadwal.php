<?php
include '../../../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_tambah'])) {
    $id_magang = $_POST['id_magang'];
    $topik = $_POST['topik_bimbingan'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $tempat = $_POST['tempat'];

    $query = "INSERT INTO bimbingan (id_magang, topik_bimbingan, tanggal, jam, tempat)
              VALUES ('$id_magang', '$topik', '$tanggal', '$jam', '$tempat')";

    if (mysqli_query($connect, $query)) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    } else {
        echo "Gagal menambahkan jadwal bimbingan: " . mysqli_error($connect);
    }
}
?>