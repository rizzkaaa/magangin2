<?php
header('Content-Type: application/json');
require_once '../db.php'; // Sesuaikan path koneksi

// Ambil parameter ID dari URL
$id = $_GET['id'] ?? null;

if (!$id) {
    http_response_code(400);
    echo json_encode(['error' => 'Parameter id_lowongan wajib disediakan']);
    exit;
}

// Escape agar aman dari SQL Injection
$id = mysqli_real_escape_string($connect, $id);

// Query utama: data lowongan + perusahaan
$sql = "SELECT l.*, p.nama_perusahaan
        FROM lowongan l
        JOIN perusahaan p ON l.id_perusahaan = p.id_perusahaan
        WHERE l.id_lowongan = '$id'
        LIMIT 1";

$result = mysqli_query($connect, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Query dokumen berdasarkan id_lowongan
    $dokumenQuery = "SELECT id_dokumen, id_lowongan, nama_dokumen, type, created_at, updated_at
                     FROM dokumen
                     WHERE id_lowongan = '$id'";
    $dokumenResult = mysqli_query($connect, $dokumenQuery);

    $dokumenList = [];
    if ($dokumenResult) {
        while ($doc = mysqli_fetch_assoc($dokumenResult)) {
            $dokumenList[] = $doc;
        }
    }

    // Tambahkan ke data response
    $row['dokumen'] = $dokumenList;

    echo json_encode($row, JSON_PRETTY_PRINT);
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Lowongan tidak ditemukan']);
}
