<?php
include '../../db.php';

if(!isset($_GET["id_kegiatan"]) || empty($_GET["id_kegiatan"])){
    die("Error: ID tidak ditemukan.");
}

$id_kegiatan = $_GET["id_kegiatan"];
$delete= "DELETE FROM kegiatan_magang WHERE id_kegiatan='$id_kegiatan'";

if(mysqli_query($connect, $delete)){
    header('Location:  ./#laporan-magang');
} else {
    echo "Error: " . $delete . "<br>" . mysqli_error($connect);
}
?>