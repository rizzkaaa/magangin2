<?php
$server = "localhost";
$user = "root";
$pw = "";
$dbname = "db_magang_new";

$connect = mysqli_connect($server, $user, $pw, $dbname);
if(!$connect){
    die ("Koneksi gagal: ") . mysqli_error($connect);
}

function generateID()
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $idGenerate = '';

    for ($i = 0; $i < 8; $i++) {
        $index = random_int(0, strlen($characters) - 1);
        $idGenerate .= $characters[$index];
    }

    return $idGenerate;
}
?>