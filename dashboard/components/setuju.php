<?php
include '../../db.php';
$id_lamaran = $_POST['id_lamaran'];
$status = "Disetujui";
$update = mysqli_query($connect, "UPDATE lamaran SET 
    status = '".$status."'
    WHERE id_lamaran = '$id_lamaran' 
");

header("location:../dashboard-perusahaan/index.php#lihat-pelamar");