<?php
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);
include '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset(
        $_POST['email'],
        $_POST['password']
    )) {
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $password = md5($_POST['password']);

        $dataUser = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM users WHERE email='$email' AND password='$password'"));

        if ($dataUser) {
            $_SESSION = [
                'id_user' => $dataUser['id_user'],
                'email' => $dataUser['email'],
                'role' => $dataUser['role'],
            ];

            switch ($dataUser['role']) {
                case 'mahasiswa':
                    header("Location: ../dashboard/dashboard-mahasiswa/");
                    break;
                case 'dosen':
                    header("Location: ../dashboard/dashboard-dosen/");
                    break;
                case 'perusahaan':
                    header("Location: ../dashboard/dashboard-perusahaan/");
                    break;
                default:
                    echo "Role tidak dikenali.";
            }
            exit;
        } else {
            header("Location: ./?error");
        }
    }
}
