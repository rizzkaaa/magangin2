<?php
include '../../../db.php';
include '../../../middleware/role.php';
include '../../components/render-components.php';

only(['perusahaan']);
$id_detail = $_GET['id_detail'];
$dataDetail = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `detail_apply` WHERE id_detail='$id_detail'"));
$id_mhs = $dataDetail['id_mhs'];
$id_lowongan = $dataDetail['id_lowongan'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $updateStatus = mysqli_query($connect, "UPDATE detail_apply SET status='Disetujui' WHERE id_detail='$id_detail'");
    $id_magang = generateID();
    $insertMagang = mysqli_query($connect, "INSERT INTO magang (`id_magang`, `id_mhs`, `id_lowongan`) VALUES ( '$id_magang', '$id_mhs', '$id_lowongan')");
    $deleteApply = mysqli_query($connect, "DELETE FROM detail_apply WHERE id_mhs='$id_mhs' AND id_detail!='$id_detail'");
    if ($updateStatus && $insertMagang && $deleteApply) {
        header("Location: ../#lihat-pelamar");
        exit;
    } else {
        echo "gagal";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Magangin | Dashboard Perusahaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="/css/dashboard.css">
</head>

<body class="h-screen flex flex-col font-sans">
    <header class="flex justify-between items-center bg-[#455bd4] text-white px-8 py-3">
        <a href="../#lihat-pelamar" style="width: 10%; font-size: 20px; font-weight: bold; cursor: pointer;">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h2 class="font-semibold text-[25px]">Data Pelamar, <span id="nama-pelamar">[nama pelamar]</span>
        </h2>
        <p class="text-sm">Mungkin pelamar ini generasi genius selanjutnya.</p>
    </header>

    <section class="bg-[#1d222efb] w-full flex flex-col items-center">
        <?= profilMahasiswa($connect, $id_mhs) ?>

        <div class="w-[95%] bg-white m-5 rounded-[20px] p-5">
            <h2 class="mb-5 text-[20px] text-[#1e3a8a] font-bold">
                Dokumen Persyaratan
            </h2>

            <table class="w-full">
                <thead>
                    <tr>
                        <th></th>
                        <th class="text-start px-[15px] py-[10px]">Nama Dokumen</th>
                        <th class="text-start px-[15px] py-[10px]">File</th>
                    </tr>
                </thead>

                <tbody id="document-container">
                    <?php
                    $dataDokumen = mysqli_query($connect, "SELECT * FROM dokumen_upload WHERE id_detail= '$id_detail'");
                    while ($rowDokumen = mysqli_fetch_assoc($dataDokumen)) {
                    ?>
                        <tr class="row-document">
                            <td class="px-[15px] py-[10px]">
                                <input type="text" id="nama-dokumen0" name="dokumen0" readonly
                                    class="w-full p-[10px] border border-[#ccc] rounded-[10px] text-sm focus:outline-none" />
                            </td>
                            <td class="px-[15px] py-[10px]H">
                                <a href="" class="bg-[#00b894] text-white font-bold py-2 px-4 rounded-lg">Download</a>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Tombol -->
        <div class="mx-5 my-2 w-full flex flex-col items-center">
            <!-- Tombol Kembali -->
            <button onclick="window.history.back()"
                class="w-[95%] m-[10px] px-4 py-2 bg-white/40 rounded-[20px] border border-white text-white font-bold">
                Kembali
            </button>

            <!-- Tombol Setujui -->
            <form method="POST" class="w-[95%]">
                <button class="w-full m-[10px] px-4 py-2 bg-[#4aee0a] rounded-[20px] text-white font-bold">
                    Setujui
                </button>
            </form>

        </div>
    </section>


</body>

</html>