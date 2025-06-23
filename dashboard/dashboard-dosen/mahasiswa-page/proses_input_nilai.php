<?php
include '../../../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_kegiatan = $_POST['id_kegiatan'];
    $nilai = $_POST['nilai'];

    $query = "UPDATE kegiatan_magang SET nilai_kegiatan = '$nilai' WHERE id_kegiatan = '$id_kegiatan'";
    if (mysqli_query($connect, $query)) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    } else {
        echo "Gagal menyimpan nilai.";
    }
}
?>