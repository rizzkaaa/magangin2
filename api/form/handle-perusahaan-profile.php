<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once '../../db.php';

$idUser = $_SESSION['id_user'] ?? null;

if (!$idUser) {
    http_response_code(401);
    echo json_encode(['error' => 'Belum login']);
    exit;
}

// Hapus field POST yang kosong string
foreach ($_POST as $key => $value) {
    if (is_string($value) && trim($value) === '') {
        unset($_POST[$key]);
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Upload logo jika dikirim
    $logo_nama = null;
    if (isset($_FILES['logo']) && $_FILES['logo']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = realpath(__DIR__ . '/../../') . '/assets/img/perusahaan/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }

        $file_tmp  = $_FILES['logo']['tmp_name'];
        $original_name = basename($_FILES['logo']['name']);
        $clean_name = str_replace(' ', '_', $original_name);
        $file_name = uniqid() . '_' . $clean_name;
        $file_path = $upload_dir . $file_name;

        if (move_uploaded_file($file_tmp, $file_path)) {
            $logo_nama = $file_name;

            $path = "/assets/img/perusahaan/$file_name";
            $sql = "UPDATE users SET profil = '$path', updated_at = CURRENT_TIMESTAMP WHERE id_user = '$idUser'";

            // Eksekusi query
            if (mysqli_query($connect, $sql)) {
                $_SESSION['profil'] = $path;
            } else {
                echo "Gagal update profil: " . mysqli_error($connect);
            }
        } else {
            http_response_code(500);
            echo json_encode(['error' => 'Gagal upload logo']);
            exit;
        }
    }

    // Field yang bisa diupdate
    $fields = [
        'nama_perusahaan',
        'alamat',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'desa'
    ];

    $updates = [];

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            $value = mysqli_real_escape_string($connect, $_POST[$field]);
            $updates[] = "$field = '$value'";
        }
    }

    // Tambahkan logo jika ada
    if ($logo_nama !== null) {
        $updates[] = "logo = '" . mysqli_real_escape_string($connect, $logo_nama) . "'";
    }

    // Tidak ada perubahan
    if (empty($updates)) {
        echo json_encode(['status' => 'no_changes', 'message' => 'Tidak ada data yang dikirim']);
        exit;
    }

    $updates[] = "updated_at = CURRENT_TIMESTAMP";

    // Jalankan query update
    $sql = "UPDATE perusahaan SET " . implode(', ', $updates) . " WHERE id_user = '" . mysqli_real_escape_string($connect, $idUser) . "'";

    if (mysqli_query($connect, $sql)) {
        header("Location: /dashboard/dashboard-perusahaan1?success");
        exit;
    } else {
        header("Location: /dashboard/dashboard-perusahaan1?error");
        exit;
    }
}
