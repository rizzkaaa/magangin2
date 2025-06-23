<?php
session_start();
include '../../db.php';

$idUser = $_SESSION['id_user'];
$nama = $_POST['nama_dosen'] ?? '';
$nip = $_POST['nip'] ?? '';
$universitas = $_POST['universitas'] ?? '';

$fotoName = '';
if ($_FILES['profil']['error'] == 0) {
    $fotoName = time() . '_' . basename($_FILES['profil']['name']);
    $targetDir = "../../uploads/";
    move_uploaded_file($_FILES['profil']['tmp_name'], $targetDir . $fotoName);
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