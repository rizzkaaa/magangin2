<?php
header('Content-Type: application/json');
require_once '../db.php'; // Ganti dengan path koneksi Anda

$query = $_GET['query'] ?? null;
$params = [];

// Base SQL
$sql = "SELECT *
        FROM lowongan l
        JOIN perusahaan p ON l.id_perusahaan = p.id_perusahaan";

// Jika ada query pencarian
if ($query) {
    $escaped = mysqli_real_escape_string($connect, $query);
    $sql .= " WHERE 
        l.judul LIKE '%$escaped%' OR 
        l.posisi LIKE '%$escaped%' OR 
        p.nama_perusahaan LIKE '%$escaped%' OR 
        l.deskripsi LIKE '%$escaped%'";
}

// Urutkan
$sql .= " ORDER BY l.created_at DESC";

$result = mysqli_query($connect, $sql);

$data = [];

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Generate status dari tanggal deadline
        $status = "Open";
        if (!empty($row['deadline_apply']) && strtotime($row['deadline_apply']) < time()) {
            $status = "Closed";
        }

        $data[] = [
            "id" => $row['id_lowongan'],
            "position" => $row['posisi'],
            "company" => $row['nama_perusahaan'],
            "date" => $row['deadline_apply'],
            "status" => $status,
            "logo" => $row['banner'] ?? "",
            "notes" => $row['deskripsi'] ?? ""
        ];
    }

    echo json_encode($data, JSON_PRETTY_PRINT);
} else {
    http_response_code(500);
    echo json_encode([
        "error" => "Gagal mengambil data lowongan.",
        "detail" => mysqli_error($connect)
    ]);
}
