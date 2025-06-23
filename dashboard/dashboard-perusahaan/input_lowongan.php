<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
include '../../db.php';
include '../../middleware/role.php';
include '../components/render-components.php';

only(['perusahaan']);

$idUser = $_SESSION['id_user'];
$email = $_SESSION['email'];

$dataPerusahaan = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM perusahaan WHERE id_user = '$idUser'"));




if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['judul'])) {
    // Ambil data form
    
    $idPerusahaan = $_POST['perusahaan_id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $lokasi = $_POST['lokasi'];
    $posisi = $_POST['posisi'];
    $kuota = $_POST['kuota'];
    $gender = $_POST['jenis_kelamin'];
    $rentang_usia = $_POST['rentang_usia'];
    $mulai = $_POST['mulai_magang'];
    $selesai = $_POST['selesai_magang'];
    $deadline = $_POST['deadline_apply'];
    $uang_saku = $_POST['uang_saku'];

    // Generate ID lowongan: cari ID terakhir, lalu tambah 1
    $result = mysqli_query($connect, "SELECT id_lowongan FROM lowongan ORDER BY id_lowongan DESC LIMIT 1");
    $lastId = mysqli_fetch_assoc($result);
    if ($lastId) {
        $number = (int)substr($lastId['id_lowongan'], 3) + 1;
        $idLowongan = 'LOW' . str_pad($number, 3, '0', STR_PAD_LEFT);
    } else {
        $idLowongan = 'LOW001';
    }

    // Upload banner jika ada
    $bannerName = null;
    if (isset($_FILES['banner']) && $_FILES['banner']['error'] === UPLOAD_ERR_OK) {
        $tmp = $_FILES['banner']['tmp_name'];
        $filename = time() . '_' . basename($_FILES['banner']['name']);
        $dir = '../../uploads/banner/';
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
        move_uploaded_file($tmp, $dir . $filename);
        $bannerName = $filename;
    }

    // Simpan ke database
    $query = "INSERT INTO lowongan (
        id_lowongan, id_perusahaan, banner, judul, deskripsi, posisi, kuota, lokasi, gender,
        rentang_usia, mulai_magang, selesai_magang, deadline_apply, uang_saku,
        created_at, updated_at
    ) VALUES (
        '$idLowongan', '$idPerusahaan', '$bannerName', '$judul', '$deskripsi', '$posisi', '$kuota', '$lokasi', '$gender',
        '$rentang_usia', '$mulai', '$selesai', '$deadline', '$uang_saku',
        NOW(), NOW()
    )";

    $simpan = mysqli_query($connect, $query);

    if ($simpan) {
        header("Location: index.php" );
        exit;
    } else {
        echo "Gagal menyimpan ke database: " . mysqli_error($connect);
    }
}




?>