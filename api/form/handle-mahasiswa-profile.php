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

// hapus variable yang berisi sting kosong "" di dalam variable POST
foreach ($_POST as $key => $value) {
    if (is_string($value) && trim($value) === '') {
        unset($_POST[$key]);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Upload foto jika dikirim
    $foto_nama = null;
    if (isset($_FILES['profil']) && $_FILES['profil']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = realpath(__DIR__ . '/../../') . '/assets/img/mahasiswa/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }

        $file_tmp  = $_FILES['profil']['tmp_name'];

        // Hapus spasi dari nama file
        $original_name = basename($_FILES['profil']['name']);
        $clean_name = str_replace(' ', '_', $original_name); // Ganti spasi dengan underscore
        $file_name = uniqid() . '_' . $clean_name;

        $file_path = $upload_dir . $file_name;

        if (move_uploaded_file($file_tmp, $file_path)) {
            $foto_nama = $file_name;


            $path = "/assets/img/mahasiswa/$file_name";
            $sql = "UPDATE users SET profil = '$path', updated_at = CURRENT_TIMESTAMP WHERE id_user = '$idUser'";

            // Eksekusi query
            if (mysqli_query($connect, $sql)) {
                $_SESSION['profil'] = $path;
            } else {
                echo "Gagal update profil: " . mysqli_error($connect);
            }
        } else {
            http_response_code(500);
            echo json_encode(['error' => 'Gagal upload foto']);
            exit;
        }
    }


    // Field yang bisa diupdate
    $fields = [
        'nama',
        'npm',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'desa',
        'alamat',
        'status',
        "universitas"
    ];

    // Siapkan query update
    $updates = [];

    // looping apa saja yang mau di update
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            $value = mysqli_real_escape_string($connect, $_POST[$field]);
            $updates[] = "$field = '$value'";
        }
    }

    // Tambahkan profil jika ada file
    if ($foto_nama !== null) {
        $updates[] = "profil = '" . mysqli_real_escape_string($connect, $foto_nama) . "'";
    }

    // Tidak ada data yang dikirim
    if (empty($updates)) {
        echo json_encode(['status' => 'no_changes', 'message' => 'Tidak ada data dikirim']);
        exit;
    }

    // Tambahkan updated_at
    $updates[] = "updated_at = CURRENT_TIMESTAMP";

    // Jalankan update
    $sql = "UPDATE mahasiswa SET " . implode(', ', $updates) . " WHERE id_user = '" . mysqli_real_escape_string($connect, $idUser) . "'";

    if (mysqli_query($connect, $sql)) {

        header("Location: /dashboard/dashboard-mahasiswa?success");
        exit;
    } else {
        header("Location: /dashboard/dashboard-mahasiswa?error");
        exit;
    }
}
