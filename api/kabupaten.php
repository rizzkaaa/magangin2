<?php
require_once '../db.php';

// Set header agar hasil berupa JSON
header('Content-Type: application/json');

// Ambil provinsi_id dari query string
$provinsi_id = isset($_GET['provinsi_id']) ? $_GET['provinsi_id'] : null;

if (!$provinsi_id) {
    http_response_code(400);
    echo json_encode(['error' => 'Parameter provinsi_id wajib diisi']);
    exit;
}

// Siapkan statement aman (hindari SQL Injection)
$stmt = $connect->prepare("
    SELECT *
    FROM kabupatens
    WHERE provinsi_id = ?
");

$stmt->bind_param("i", $provinsi_id);
$stmt->execute();
$result = $stmt->get_result();

// Ambil data
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Kirim response JSON
echo json_encode($data, JSON_PRETTY_PRINT);
