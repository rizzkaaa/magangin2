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
        <h2 class="font-semibold text-[25px]">Jadwal Bimbingan</h2>
    </header>

    <section class="bg-[#1d222efb] w-full h-full flex flex-col items-center">
        <div class="flex gap-8 justify-between m-6 w-[90%]">
            <div class="flex-1 text-center bg-[#f0f4ff] p-6 rounded-[15px] font-bold shadow-md border border-[#cdd9ff]">
                <h2 class="text-[22px] text-[#003c9e]">[Nama Mahasiswa]</h2>
            </div>
            <div class="flex-1 text-center bg-[#f0f4ff] p-6 rounded-[15px] font-bold shadow-md border border-[#cdd9ff]">
                <h2 class="text-[22px] text-[#003c9e]">[Nim Mahasiswa]</h2>
            </div>
        </div>

        <main class="w-[90%] mt-10 p-8 rounded-[20px] shadow-lg bg-white">
            <h2 class="text-[24px] font-bold text-[#003c9e] mb-6">Jadwal Bimbingan Mahasiswa Magang</h2>

            <table class="w-full border-collapse bg-[#c3cbe2] rounded-[12px] shadow-md overflow-hidden">
                <thead class="bg-[#003c9e] text-white text-center">
                    <tr>
                        <th class="py-4 px-3">Perusahaan</th>
                        <th class="py-4 px-3">Topik Bimbingan</th>
                        <th class="py-4 px-3">Tanggal</th>
                        <th class="py-4 px-3">Jam</th>
                        <th class="py-4 px-3">Tempat</th>
                        <th class="py-4 px-3">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr class="border-b border-gray-300">
                        <td class="py-4 px-3">PT Telekomunikasi Indonesia</td>
                        <td class="py-4 px-3">Laporan Mingguan</td>
                        <td class="py-4 px-3">19/06/2025</td>
                        <td class="py-4 px-3">14:00</td>
                        <td class="py-4 px-3">Zoom</td>
                        <td class="py-4 px-3 flex justify-center items-center gap-3">
                            <a href="#form-edit" class="text-[#3498db] hover:opacity-70 text-[18px]">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a href="#hapus-jadwal" class="text-[#e74c3c] hover:opacity-70 text-[18px]">
                                <i class="fa fa-trash"></i>
                            </a>
                            <a href="#form-tambah" class="text-[#27ae60] hover:opacity-70 text-[18px]">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>

        <div id="form-edit"
            class="modal-parent absolute top-0 left-0 w-full h-full hidden flex justify-center items-center">
            <a href="#" class="overlay absolute w-full h-full bg-black/30 backdrop-blur-sm"></a>
            <?= formJadwalBimbingan('Edit') ?>
        </div>
        <div id="hapus-jadwal"
            class="modal-parent absolute top-0 left-0 w-full h-full hidden flex justify-center items-center">
            <a href="#" class="overlay absolute w-full h-full bg-black/30 backdrop-blur-sm"></a>
            <?= alertHapus([
                ['label' => 'Perusahaan', 'isi' => 'PT Telekomunikasi Indonesia'],
                ['label' => 'Topik Bimbingan', 'isi' => 'Laporan Mingguan'],
                ['label' => 'Tanggal', 'isi' => '01/06/2025'],
                ['label' => 'Jam', 'isi' => '14:00'],
                ['label' => 'Tempat', 'isi' => 'Zoom']
            ]) ?>
        </div>

        <div id="form-tambah"
            class="modal-parent absolute top-0 left-0 w-full h-full hidden flex justify-center items-center">
            <a href="#" class="overlay absolute w-full h-full bg-black/30 backdrop-blur-sm"></a>
            <?= formJadwalBimbingan('Tambah') ?>
        </div>

    </section>

    <script>
        function batalHapus() {
            alert("Penghapusan dibatalkan.");
            window.location.href = "#";
        }

        function konfirmasiHapus() {
            alert("Data berhasil dihapus!");
            window.location.href = "#";
        }
    </script>
</body>

</html>