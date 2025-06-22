<?php
require_once '../db.php';

header('Content-Type: application/json');

// Ambil parameter kabupaten_id dari query string
$kabupaten_id = isset($_GET['kabupaten_id']) ? $_GET['kabupaten_id'] : null;

if (!$kabupaten_id) {
    http_response_code(400);
    echo json_encode(['error' => 'Parameter kabupaten_id wajib diisi']);
    exit;
}

// Siapkan prepared statement
$stmt = $connect->prepare("
    SELECT id, kabupaten_id, name, alt_name, latitude, longitude
    FROM kecamatans
    WHERE kabupaten_id = ?
");

$stmt->bind_param("s", $kabupaten_id); // varchar → pakai "s"
$stmt->execute();
$result = $stmt->get_result();

// Ambil semua data
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Kirim response JSON
echo json_encode($data, JSON_PRETTY_PRINT);
