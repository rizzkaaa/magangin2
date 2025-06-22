<?php
require_once '../db.php';

// Set header agar hasil berupa JSON
header('Content-Type: application/json');

// Query data provinsi
$sql = "SELECT* FROM provinsis";
$result = mysqli_query($connect, $sql);

// Cek jika query gagal
if (!$result) {
    http_response_code(500);
    echo json_encode(['error' => 'Query failed: ' . mysqli_error($connect)]);
    exit;
}

// Format hasil ke array
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Kirim response JSON
echo json_encode($data, JSON_PRETTY_PRINT);
