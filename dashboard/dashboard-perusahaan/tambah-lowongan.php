<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include '../../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // if (isset($_POST['judul'], $_POST['deskripsi'], $_POST['id_perusahaan'], $_POST['lokasi'], $_POST['posisi'], $_POST['kuota'], $_POST['jenis_kelamin'], $_POST['rentang_usia'], $_POST['mulai_magang'], $_POST['selesai_magang'], $_POST['deadline_apply'], $_POST['uang_saku'])) {
    //     $judul = mysqli_real_escape_string($connect, $_POST['judul']);
    //     $deskripsi = mysqli_real_escape_string($connect, $_POST['deskripsi']);
    //     $id_perusahaan = mysqli_real_escape_string($connect, $_POST['id_perusahaan']);
    //     $lokasi = mysqli_real_escape_string($connect, $_POST['lokasi']);
    //     $posisi = mysqli_real_escape_string($connect, $_POST['posisi']);
    //     $kuota = mysqli_real_escape_string($connect, $_POST['kuota']);
    //     $jenis_kelamin = mysqli_real_escape_string($connect, $_POST['jenis_kelamin']);
    //     $rentang_usia = mysqli_real_escape_string($connect, $_POST['rentang_usia']);
    //     $mulai_magang = mysqli_real_escape_string($connect, $_POST['mulai_magang']);
    //     $selesai_magang = mysqli_real_escape_string($connect, $_POST['selesai_magang']);
    //     $deadline_apply = mysqli_real_escape_string($connect, $_POST['deadline_apply']);
    //     $uang_saku = mysqli_real_escape_string($connect, $_POST['uang_saku']);

    //     $id_lowongan = generateID();

    //     $insertLowongan = mysqli_query($connect, "INSERT INTO `lowongan`(`id_lowongan`, `id_perusahaan`, `judul`, `deskripsi`, `posisi`, `kuota`, `lokasi`, `jenis_kelamin`, `rentang_usia`, `mulai_magang`, `selesai_magang`, `deadline_apply`, `uang_saku`) VALUES ( '$id_lowongan', '$id_perusahaan', '$judul', '$deskripsi', '$posisi', '$kuota', '$lokasi', '$jenis_kelamin', '$rentang_usia', '$mulai_magang', '$selesai_magang', '$deadline_apply', '$uang_saku')");
    // }
    // if (isset($_FILES['banner']) && $_FILES['banner']['error'] === UPLOAD_ERR_OK) {
    //     // echo 'oke';
    //     $banner = $_FILES['banner'];
    //     $angka = rand(10, 99);
    //     $extention = array('png', 'jpg', 'jpeg', 'svg');
    //     $filename = $_FILES['banner']['name'];
    //     $ukuran = $_FILES['banner']['size'];
    //     $ext = pathinfo($filename, PATHINFO_EXTENSION);

    //     if (!in_array($ext, $extention)) {
    //         header('Location: ./#input-lowongan');
    //     } else {
    //         if ($ukuran < 1044070) {
    //             $savebanner = $angka . "_" . $filename;
    //             move_uploaded_file($_FILES['banner']['tmp_name'], '../../assets/img/banner_lowongan/' . $savebanner);

    //             $updateBuktibanner = mysqli_query($connect, "UPDATE lowongan SET banner='$savebanner' WHERE id_lowongan='$id_lowongan'");

    //             if (!$updateBuktibanner) {
    //                 header("Location: ./#input-lowongan");
    //                 exit;
    //             }
    //         } else {
    //             header('Location: ./#input-lowongan');
    //         }
    //     }
    // }

    if (isset($_POST['rows'])) {
        $jumlah = $_POST['rows'];

        for ($i = 1; $i <= $jumlah; $i++) {
            $nama_dokumen = $_POST["dokumen" . $i];
            $type = $_POST["type" . $i];
            $id_dokumen = generateID();

            // $query = "INSERT INTO dokumen (id_dokumen, id_lowongan, nama_dokumen, type) VALUES ('$id_dokumen', '$id_lowongan','$nama_dokumen', '$type')";
            // mysqli_query($connect, $query) or die(mysqli_error($connect));
        }
        var_dump( $jumlah);
        echo "Berhasil disimpan.";
    }



    // if ($insertLowongan) {
    //     header("Location: ./#input-lowongan");
    //     exit;
    // } else {
    //     header("Location: ./#input-lowongan");
    //     exit;
    // }
}
