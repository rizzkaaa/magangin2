<?php
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$server = isset($_ENV['DB_HOST']) ?  $_ENV['DB_HOST'] : "localhost";
$dbname  =  isset($_ENV['DB_NAME']) ? $_ENV['DB_NAME'] : "db_magang_new";
$user = isset($_ENV['DB_USER']) ?  $_ENV['DB_USER'] : "root";
$pw = isset($_ENV['DB_PASS']) ?  $_ENV['DB_PASS'] : "";

// phpinfo();
$connect = mysqli_connect($server, $user, $pw, $dbname);
if (!$connect) {
    die("Koneksi gagal: ") . mysqli_error($connect);
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
