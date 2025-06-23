<?php
session_start();
include '../../db.php';

$idUser = $_SESSION['id_user'];
$nama = $_POST['nama_dosen'] ?? '';
$nip = $_POST['nip'] ?? '';
$universitas = $_POST['universitas'] ?? '';

$fotoName = '';
if ($_FILES['profil']['error'] == 0) {
    // $fotoName = time() . '_' . basename($_FILES['profil']['name']);
    // $targetDir = "../../uploads/";
    $targetDir = realpath(__DIR__ . '/../../') . '/assets/img/mahasiswa/';
    $file_tmp  = $_FILES['profil']['tmp_name'];

    // move_uploaded_file($file_tmp, $targetDir . $fotoName);

    $original_name = basename($_FILES['profil']['name']);
    $clean_name = str_replace(' ', '_', $original_name); // Ganti spasi dengan underscore
    $file_name = uniqid() . '_' . $clean_name;

    $file_path = $targetDir . $file_name;

    if (move_uploaded_file($file_tmp, $file_path)) {
        $fotoName = $file_name;
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Gagal upload foto']);
        exit;
    }
}

$queryCheck = mysqli_query($connect, "SELECT * FROM dosen WHERE id_user = '$idUser' LIMIT 1");
$data = mysqli_fetch_assoc($queryCheck);

if ($data) {
    $query = "UPDATE dosen SET 
        nama_dosen = '$nama',
        nip = '$nip',
        universitas = '$universitas'";

    if ($fotoName) {
        $query .= ", foto_dosen = '$fotoName'";
    }

    $query .= " WHERE id_user = '$idUser'";
    mysqli_query($connect, $query);
}

header("Location: index.php#profil");
exit;
