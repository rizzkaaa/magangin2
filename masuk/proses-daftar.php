<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include '../db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['role'], $_POST['nama'], $_POST['email'], $_POST['password'])){
        $nama = mysqli_real_escape_string($connect, $_POST['nama']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $password =md5( $_POST['password']);
        $role = mysqli_real_escape_string($connect, $_POST['role']);

        $id_role = generateID();
        $id_user = generateID();
        $now = date('Y-m-d H:i:s');

        $insertUsers = mysqli_query($connect, "INSERT INTO users (id_user, email, password, role, created_at, updated_at) VALUES ('$id_user', '$email', '$password', '$role', '$now', '$now')");

        if($role == "mahasiswa"){
            $insertPeran = mysqli_query($connect, "INSERT INTO mahasiswa (id_mhs, id_user, nama, created_at, updated_at) VALUES ('$id_role', '$id_user', '$nama', '$now', '$now')");
        } else if($role == "dosen"){
            $insertPeran = mysqli_query($connect, "INSERT INTO dosen (id_dosen, id_user, nama_dosen, created_at, updated_at) VALUES ('$id_role', '$id_user', '$nama', '$now', '$now')");
        } else {
            $insertPeran = mysqli_query($connect, "INSERT INTO perusahaan (id_perusahaan, id_user, nama_perusahaan, created_at, updated_at) VALUES ('$id_role', '$id_user', '$nama', '$now', '$now')");
        }

        if($insertUsers && $insertPeran){
            header("Location: ./?success");
            exit;
        } else {
            header("Location: ./?error");
            exit;
        }
    }
}
?>