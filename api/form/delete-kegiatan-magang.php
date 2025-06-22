<?php
header("Content-Type: application/json");

// Koneksi ke database
require_once '../../db.php';

// Pastikan method-nya DELETE
if ($_SERVER['REQUEST_METHOD'] !== 'DELETE') {
    http_response_code(405); // Method Not Allowed
    echo json_encode(['error' => 'Metode tidak diizinkan']);
    exit;
}

// Ambil id_kegiatan dari URL
$id_kegiatan = isset($_GET['id_kegiatan']) ? $_GET['id_kegiatan'] : null;

if (!$id_kegiatan) {
    http_response_code(400); // Bad Request
    echo json_encode(['error' => 'id_kegiatan wajib diisi']);
    exit;
}

// Cek apakah ada data kegiatan dengan id_kegiatan ini
$check = mysqli_query($connect, "SELECT COUNT(*) as total FROM kegiatan_magang WHERE id_kegiatan = '$id_kegiatan'");
$row = mysqli_fetch_assoc($check);
if ($row['total'] == 0) {
    http_response_code(404); // Not Found
    echo json_encode(['error' => 'Data kegiatan tidak ditemukan']);
    exit;
}

// Hapus data
$delete = mysqli_query($connect, "DELETE FROM kegiatan_magang WHERE id_kegiatan = '$id_kegiatan'");

if ($delete) {
    echo json_encode(['status' => 'success', 'message' => 'Data kegiatan berhasil dihapus']);
} else {
    http_response_code(500);
    echo json_encode(['error' => 'Gagal menghapus data']);
}
