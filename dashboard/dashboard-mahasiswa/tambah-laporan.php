<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include '../../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['tgl'], $_POST['hari'], $_POST['id_magang'])) {
        $tgl = mysqli_real_escape_string($connect, $_POST['tgl']);
        $hari = mysqli_real_escape_string($connect, $_POST['hari']);
        $id_magang = mysqli_real_escape_string($connect, $_POST['id_magang']);
        $id_kegiatan = generateID();

        $insertKegiatan = mysqli_query($connect, "INSERT INTO kegiatan_magang (id_kegiatan, id_magang, tgl, hari) VALUES ('$id_kegiatan', '$id_magang', '$tgl', '$hari')");

        if (isset($_FILES['kegiatan']) && $_FILES['kegiatan']['error'] === UPLOAD_ERR_OK) {
            $kegiatan = $_FILES['kegiatan'];
            $angka = rand(10, 99);
            $extention = array('docx', 'doc', 'pdf', 'xls', 'xlsx', 'pptx', 'ppt');
            $filename = $_FILES['kegiatan']['name'];
            $ukuran = $_FILES['kegiatan']['size'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);

            if (!in_array($ext, $extention)) {
                header('Location: ./#laporan-magang');
            } else {
                if ($ukuran < 1044070) {
                    $savekegiatan = $angka . "_" . $filename;
                    move_uploaded_file($_FILES['kegiatan']['tmp_name'], '../../assets/laporan-magang/kegiatan/' . $savekegiatan);

                    $updateBuktiKegiatan = mysqli_query($connect, "UPDATE kegiatan_magang SET kegiatan='$savekegiatan' WHERE id_kegiatan='$id_kegiatan'");

                    if (!$updateBuktiKegiatan) {
                        header("Location: ./#laporan-magang");
                        exit;
                    }
                } else {
                    header('Location: ./#laporan-magang');
                }
            }
        }

       if (isset($_FILES['bukti_kegiatan']) && $_FILES['bukti_kegiatan']['error'] === UPLOAD_ERR_OK) {
            $bukti_kegiatan = $_FILES['bukti_kegiatan'];
            $angka = rand(10, 99);
            $extention = array('png', 'jpg', 'jpeg', 'svg');
            $filename = $_FILES['bukti_kegiatan']['name'];
            $ukuran = $_FILES['bukti_kegiatan']['size'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);

            if (!in_array($ext, $extention)) {
                header('Location: ./#laporan-magang');
            } else {
                if ($ukuran < 1044070) {
                    $savebukti_kegiatan = $angka . "_" . $filename;
                    move_uploaded_file($_FILES['bukti_kegiatan']['tmp_name'], '../../assets/laporan-magang/bukti-kegiatan/' . $savebukti_kegiatan);

                    $updateBuktiKegiatan = mysqli_query($connect, "UPDATE kegiatan_magang SET bukti_kegiatan='$savebukti_kegiatan' WHERE id_kegiatan='$id_kegiatan'");

                    if (!$updateBuktiKegiatan) {
                        header("Location: ./#laporan-magang");
                        exit;
                    }
                } else {
                    header('Location: ./#laporan-magang');
                }
            }
        }


        if ($insertKegiatan) {
            header("Location: ./#laporan-magang");
            exit;
        } else {
            header("Location: ./#laporan-magang");
            exit;
        }
    }
}
