<?php
function dashboardMahasiswa()
{
    ob_start(); ?>

    <!-- Jika lowongan kosong -->
    <!-- <div class="flex flex-col items-center justify-center text-white w-full h-full">
    <p>Anda belum mengdaftar ke lowongan manapun. </p>
    <p>Daftar lowongan disini..</p>
    <a href=""
        class="px-5 py-2 rounded-md bg-[rgb(61,99,221)] text-white font-semibold  hover:bg-[rgb(27,61,173)] cursor-pointer">Daftar
        Lowongan</a>
</div> -->

    <!-- <div class="flex flex-wrap w-full h-full justify-center">
    <h2 style="color: white; font-size: 20px; margin: 20px;">Anda telah mendaftar ke lowongan berikut, silakan
        menunggu proses seleksi oleh perusahaan.</h2>
    <div class="flex flex-wrap w-full justify-evenly">
        <a href=""
            style="background-color: white; margin: 20px; padding: 20px; border-radius: 20px; position: relative;">
            <label
                style="position: absolute; background-color: red; font-size: 15px; padding: 2px 8px; border-radius: 5px; right: 10px; top: 10px;">Menunggu</label>
            <img src="/img/default.jpeg" style="border-radius: 12px; width: 300px; height: 200px" alt="">
            <p style="text-align: center; margin: 5px; font-weight: bold;">[JUDUL LOWONGAN]</p>
        </a>
        <a href=""
            style="background-color: white; margin: 20px; padding: 20px; border-radius: 20px; position: relative;">
            <label
                style="position: absolute; background-color: red; font-size: 15px; padding: 2px 8px; border-radius: 5px; right: 10px; top: 10px;">Menunggu</label>
            <img src="/img/default.jpeg" style="border-radius: 12px; width: 300px; height: 200px" alt="">
            <p style="text-align: center; margin: 5px; font-weight: bold;">[JUDUL LOWONGAN]</p>
        </a>
        <a href=""
            style="background-color: white; margin: 20px; padding: 20px; border-radius: 20px; position: relative;">
            <label
                style="position: absolute; background-color: red; font-size: 15px; padding: 2px 8px; border-radius: 5px; right: 10px; top: 10px;">Menunggu</label>
            <img src="/img/default.jpeg" style="border-radius: 12px; width: 300px; height: 200px" alt="">
            <p style="text-align: center; margin: 5px; font-weight: bold;">[JUDUL LOWONGAN]</p>
        </a>
        <a href=""
            style="background-color: white; margin: 20px; padding: 20px; border-radius: 20px; position: relative;">
            <label
                style="position: absolute; background-color: red; font-size: 15px; padding: 2px 8px; border-radius: 5px; right: 10px; top: 10px;">Menunggu</label>
            <img src="/img/default.jpeg" style="border-radius: 12px; width: 300px; height: 200px" alt="">
            <p style="text-align: center; margin: 5px; font-weight: bold;">[JUDUL LOWONGAN]</p>
        </a>
    </div>
</div> -->

    <div>
        <div style="background-color: white; padding: 20px; margin: 20px; border-radius: 20px">
            <h2 style="font-weight: bold; font-size: 18px;">Anda telah terdaftar sebagai peserta magang di:</h2>
            <table style="margin: 15px">
                <tr>
                    <th style="padding: 5px; text-align: start;">Nama Perusahaan</th>
                    <td style="padding: 5px; text-align: start;">: PT ADD</td>
                </tr>
                <tr>
                    <th style="padding: 5px; text-align: start;">Posisi</th>
                    <td style="padding: 5px; text-align: start;">: abcd</td>
                </tr>
                <tr>
                    <th style="padding: 5px; text-align: start;">Mulai Magang</th>
                    <td style="padding: 5px; text-align: start;">: 10 Januari 2025</td>
                </tr>
                <tr>
                    <th style="padding: 5px; text-align: start;">Selesai Magang</th>
                    <td style="padding: 5px; text-align: start;">: 10 Juni 2025</td>
                </tr>
            </table>
        </div>

        <h2 style="font-weight: bold; font-size: 18px; margin: 20px; color: white;">Silakan melakukan laporan magang
            berkala di:</h2>
        <a href="#laporan-magang"
            class="px-5 py-2 m-5 rounded-md bg-[rgb(61,99,221)] text-white font-semibold  hover:bg-[rgb(27,61,173)] cursor-pointer">Laporan
            Magang</a>
    </div>
<?php
    return ob_get_clean();
}

function laporanMagang()
{
    ob_start(); ?>
    <div class="w-[90%] mt-10 flex justify-between items-center mb-4 px-4">
        <!-- Kolom Pencarian -->
        <div
            class="flex items-center border border-white bg-white/8 gap-2 backdrop-blur-md px-4 py-2 rounded-lg w-full max-w-md shadow">
            <i class="fas fa-search text-[#108bfd] text-lg"></i>
            <input type="text" placeholder="Cari tanggal..."
                class="w-full bg-transparent text-[#108bfd] placeholder-gray-500 focus:outline-none" />
        </div>

        <!-- Tombol Tambah -->
        <a href="#tambah-laporan"
            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-md shadow">
            + Tambah Laporan
        </a>
    </div>

    <table class="w-[90%] border-collapse mt-5 bg-[#c3cbe2] rounded-[12px] shadow-md overflow-hidden">
        <thead class="bg-[#003c9e] text-white">
            <tr>
                <th class="p-4 text-center">No</th>
                <th class="p-4 text-center">Dosen Pembimbing</th>
                <th class="p-4 text-center">Perusahaan</th>
                <th class="p-4 text-center">Tanggal</th>
                <th class="p-4 text-center">Hari</th>
                <th class="p-4 text-center">Kegiatan</th>
                <th class="p-4 text-center">Bukti Kegiatan</th>
                <th class="p-4 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center border-b border-gray-300 last:border-b-0">
                <td class="p-4">1</td>
                <td class="p-4">Rizka Layla Ramadhani</td>
                <td class="p-4">PT ABC</td>
                <td class="p-4">01/06/2025</td>
                <td class="p-4">Senin</td>

                <td class="p-4">
                    <button class="bg-[#00b894] text-white font-bold py-2 px-4 rounded-lg">Download</button>
                </td>
                <td class="p-4">
                    <button class="bg-[#00b894] text-white font-bold py-2 px-4 rounded-lg">Download</button>
                </td>
                <td class="py-4 px-3 flex justify-center items-center gap-3">
                    <a href="#edit-laporan" class="text-[#3498db] hover:opacity-70 text-[18px]">
                        <i class="fa fa-pen"></i>
                    </a>
                    <a href="#hapus-laporan" class="text-[#e74c3c] hover:opacity-70 text-[18px]">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>

    <div id="edit-laporan" class="modal-parent absolute top-0 left-0 w-full h-full hidden flex justify-center items-center">
        <a href="#laporan-magang" class="overlay absolute w-full h-full bg-black/30 backdrop-blur-sm"></a>
        <?= formLaporanMagang('Edit') ?>
    </div>

    <div id="hapus-laporan"
        class="modal-parent absolute top-0 left-0 w-full h-full hidden flex justify-center items-center">
        <a href="#laporan-magang" class="overlay absolute w-full h-full bg-black/30 backdrop-blur-sm"></a>
        <?= alertHapus([
            ['label' => 'Dosen Pembimbing', 'isi' => 'Rizka Layla Ramadhani'],
            ['label' => 'Perusahaan', 'isi' => 'PT ABC'],
            ['label' => 'Tanggal', 'isi' => '01/06/2025'],
            ['label' => 'Hari', 'isi' => 'Senin']
        ]) ?>
    </div>

    <div id="tambah-laporan"
        class="modal-parent absolute top-0 left-0 w-full h-full hidden flex justify-center items-center">
        <a href="#laporan-magang" class="overlay absolute w-full h-full bg-black/30 backdrop-blur-sm"></a>
        <?= formLaporanMagang('Tambah') ?>
    </div>
<?php
    return ob_get_clean();
}

function jadwalBimbingan()
{
    ob_start(); ?>
    <div class="w-[90%] mt-10 flex justify-between items-center mb-4 px-4">
        <!-- Kolom Pencarian -->
        <div
            class="flex items-center border border-white bg-white/8 gap-2 backdrop-blur-md px-4 py-2 rounded-lg w-full max-w-md shadow">
            <i class="fas fa-search text-[#108bfd] text-lg"></i>
            <input type="text" placeholder="Cari tanggal..."
                class="w-full bg-transparent text-[#108bfd] placeholder-gray-500 focus:outline-none" />
        </div>
    </div>

    <table class="w-[90%] m-5 border-collapse bg-[#c3cbe2] rounded-[12px] shadow-md overflow-hidden">
        <thead class="bg-[#003c9e] text-white text-center">
            <tr>
                <th class="p-4 text-center">No</th>
                <th class="p-4 text-center">Dosen Pembimbing</th>
                <th class="py-4 px-3">Perusahaan</th>
                <th class="py-4 px-3">Topik Bimbingan</th>
                <th class="py-4 px-3">Tanggal</th>
                <th class="py-4 px-3">Jam</th>
                <th class="py-4 px-3">Tempat</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr class="border-b border-gray-300">
                <td class="py-4 px-3">No</td>
                <td class="py-4 px-3">Yopa Pitra Ramadhani</td>
                <td class="py-4 px-3">PT Telekomunikasi Indonesia</td>
                <td class="py-4 px-3">Laporan Mingguan</td>
                <td class="py-4 px-3">19/06/2025</td>
                <td class="py-4 px-3">14:00</td>
                <td class="py-4 px-3">Zoom</td>
            </tr>
        </tbody>
    </table>
<?php
    return ob_get_clean();
}
