<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
include '../../../db.php';
include '../../../middleware/role.php';
include '../../components/render-components.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_lamaran'], $_POST['status'])) {
  $idLamaran = intval($_POST['id_lamaran']);
  $status = $_POST['status'];

  if (in_array($status, ['Menunggu', 'Disetujui', 'Ditolak'])) {
    $query = "UPDATE lamaran SET status = '$status' WHERE id_lamaran = $idLamaran";
    mysqli_query($connect, $query) or die(mysqli_error($connect)); // debug error jika ada
  }

  // Hindari submit ulang saat refresh
  header("Location:../../dashboard-perusahaan/index.php#lihat-pelamar ");
  exit;
}

