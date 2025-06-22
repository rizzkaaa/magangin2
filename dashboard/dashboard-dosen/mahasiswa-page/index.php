<?php
include '../../components/render-components.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Magangin | Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="../../../assets/css/dashboard.css">

</head>

<body class="h-screen flex flex-col font-sans">
    <header class="flex items-center bg-[#455bd4] text-white px-8 py-3">
        <a href="../" style="width: 10%; font-size: 20px; font-weight: bold; cursor: pointer;">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h2 class="font-semibold text-[25px]">Data Mahasiswa</h2>
    </header>

    <section class="bg-[#1d222efb] w-full h-full flex flex-col items-center">
        <div class="flex justify-between m-8 w-[90%]">
            <div class="bg-[#c3cbe2] p-5 rounded-[15px] text-center flex-1 mx-2 shadow-md">
                <h1 class="text-[22px] text-[#003c9e] mb-1 font-bold">Maudy Apriliyani</h1>
            </div>
            <div class="bg-[#c3cbe2] p-5 rounded-[15px] text-center flex-1 mx-2 shadow-md">
                <h1 class="text-[22px] text-[#003c9e] mb-1 font-bold">NIM 1062446</h1>
                <p class="text-[16px] text-gray-600">Informatika</p>
            </div>
        </div>

        <table class="w-[90%] border-collapse mt-5 bg-[#c3cbe2] rounded-[12px] shadow-md overflow-hidden">
            <thead class="bg-[#003c9e] text-white">
                <tr>
                    <th class="p-4 text-center">Tanggal</th>
                    <th class="p-4 text-center">Laporan Harian</th>
                    <th class="p-4 text-center" colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center border-b border-gray-300 last:border-b-0">
                    <td class="p-4">01/06/2025</td>
                    <td class="p-4">
                        <button class="bg-[#00b894] text-white font-bold py-2 px-4 rounded-lg">Download</button>
                    </td>
                    <td class="p-4">
                        <a href="#input-nilai" class="bg-[#0066ff] text-white font-bold py-2 px-4 rounded-lg">Input Nilai</a>
                    </td>
                    <td class="p-4">
                        <a href="#input-bimbingan" class="bg-[#0066ff] text-white font-bold py-2 px-4 rounded-lg">Buat Jadwal
                            Bimbingan</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <div id="input-nilai" class="modal-parent absolute top-0 left-0 w-full h-full hidden flex justify-center items-center">
            <a href="#" class="overlay absolute w-full h-full bg-black/30 backdrop-blur-sm"></a>
            <?= inputNilai() ?>
        </div>

        <div id="input-bimbingan" class="modal-parent absolute top-0 left-0 w-full h-full hidden flex justify-center items-center">
            <a href="#" class="overlay absolute w-full h-full bg-black/30 backdrop-blur-sm">
            </a>
            <?= formJadwalBimbingan('Tambah') ?>
        </div>

    </section>

</body>

</html>