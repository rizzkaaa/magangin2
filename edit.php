<?php
include '../../../db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id_bimbingan'];
    $topik = $_POST['topik_bimbingan'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $tempat = $_POST['tempat'];

    if (!$id || !$topik || !$tanggal || !$jam || !$tempat) {
        die("Data tidak lengkap.");
    }

    $query = "
        UPDATE bimbingan 
        SET 
            topik_bimbingan = '$topik',
            tanggal = '$tanggal',
            jam = '$jam',
            tempat = '$tempat'
        WHERE id_bimbingan = '$id'
    ";

    if (mysqli_query($connect, $query)) {
        header("Location: index.php?edit=success");
        exit;
    } else {
        echo "Gagal mengedit: " . mysqli_error($connect);
    }
} else {
    die("Metode tidak diperbolehkan.");
}