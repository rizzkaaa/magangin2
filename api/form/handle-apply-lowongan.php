<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include '../../middleware/role.php';
require_once '../../db.php';

only(['mahasiswa']);

$idUser = $_SESSION['id_user'] ?? null;
if (!$idUser) {
    http_response_code(401);
    echo json_encode(['error' => 'Belum login']);
    exit;
}

$sqlMhs = "SELECT id_mhs FROM mahasiswa WHERE id_user = '$idUser' LIMIT 1";
$resMhs = mysqli_query($connect, $sqlMhs);
$dataMhs = mysqli_fetch_assoc($resMhs);

if (!$dataMhs) {
    http_response_code(404);
    echo json_encode(['error' => 'Data mahasiswa tidak ditemukan']);
    exit;
}

$idMhs = $dataMhs['id_mhs'];


$idLowongan = $_POST['id_lowongan'] ?? null;
if (!$idLowongan) {
    http_response_code(400);
    echo json_encode(['error' => 'id_lowongan wajib diisi']);
    exit;
}

// Generate ID detail_apply

$idDetail = generateId();

// Simpan ke tabel detail_apply
$sqlInsert = "INSERT INTO detail_apply (id_detail, id_lowongan, id_mhs) VALUES ('$idDetail', '$idLowongan', '$idMhs')";
if (!mysqli_query($connect, $sqlInsert)) {
    http_response_code(500);
    echo json_encode(['error' => 'Gagal menyimpan data apply', 'detail' => mysqli_error($connect)]);
    exit;
}

// Pastikan folder upload tersedia
$uploadDir = realpath(__DIR__ . '/../../') . '/assets/img/dokumen/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

// Loop dokumen dan simpan
$documentNames = $_POST['documents'] ?? [];
$fileGroup = $_FILES['documents'] ?? [];

foreach ($documentNames as $index => $doc) {
    $namaDokumen = $doc['nama_dokumen'] ?? null;
    if (!$namaDokumen || !isset($fileGroup['name'][$index]['file'])) continue;

    // Ambil file info
    $originalName = $fileGroup['name'][$index]['file'];
    $tmpName = $fileGroup['tmp_name'][$index]['file'];
    $error = $fileGroup['error'][$index]['file'];

    if ($error === UPLOAD_ERR_OK && is_uploaded_file($tmpName)) {
        // Simpan file
        $cleanName = str_replace(' ', '_', basename($originalName));
        $fileName = uniqid() . '_' . $cleanName;
        $filePath = $uploadDir . $fileName;
        $dbPath = '/assets/img/dokumen/' . $fileName;

        if (move_uploaded_file($tmpName, $filePath)) {
            // Ambil id_dokumen dari tabel dokumen
            $res = mysqli_query($connect, "SELECT id_dokumen FROM dokumen WHERE nama_dokumen = '" . mysqli_real_escape_string($connect, $namaDokumen) . "' AND id_lowongan = '" . mysqli_real_escape_string($connect, $idLowongan) . "' LIMIT 1");
            $dok = mysqli_fetch_assoc($res);
            $idDokumen = $dok['id_dokumen'] ?? null;

            if ($idDokumen) {
                // Insert ke dokumen_upload
                $idUpload = generateId("UPL");
                $uploadSql = "INSERT INTO dokumen_upload (id_upload, id_detail, id_dokumen, file_path) 
                              VALUES ('$idUpload', '$idDetail', '$idDokumen', '$dbPath')";
                mysqli_query($connect, $uploadSql);
            }
        }
    }
}

// echo json_encode(['success' => true, 'message' => 'Lamaran berhasil dikirim.']);
    header('Location: /lowongan');

