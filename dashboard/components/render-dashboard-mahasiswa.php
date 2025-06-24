<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
function dashboardMahasiswa($connect, $id_mhs)
{
    ob_start();
    $detailApply = mysqli_query($connect, "SELECT a.judul, a.banner FROM lowongan a INNER JOIN detail_apply b ON a.id_lowongan=b.id_lowongan WHERE b.id_mhs = '$id_mhs';");
    $magang = mysqli_query($connect, "SELECT b.posisi, b.mulai_magang, b.selesai_magang, c.nama_perusahaan FROM magang a INNER JOIN lowongan b ON a.id_lowongan=b.id_lowongan INNER JOIN perusahaan c ON b.id_perusahaan=c.id_perusahaan WHERE id_mhs = '$id_mhs' AND status = 'Berlangsung'");
    $cekDetail = mysqli_num_rows($detailApply);
    $cekMagang = mysqli_num_rows($magang);

    if ($cekDetail <= 0 && $cekMagang <= 0) { ?>
        <div class="flex flex-col items-center justify-center text-white w-full h-full">
            <p>Anda belum mengdaftar ke lowongan manapun. </p>
            <p>Daftar lowongan disini..</p>
            <a href=""
                class="px-5 py-2 rounded-md bg-[rgb(61,99,221)] text-white font-semibold  hover:bg-[rgb(27,61,173)] cursor-pointer">Daftar
                Lowongan</a>
        </div>
    <?php } else if ($cekDetail > 0 && $cekMagang <= 0) { ?>
        <div class="flex flex-wrap w-full h-full justify-center">
            <h2 style="color: white; font-size: 20px; margin: 20px;">Anda telah mendaftar ke lowongan berikut, silakan
                menunggu proses seleksi oleh perusahaan.</h2>
            <div class="flex flex-wrap h-fit w-full justify-evenly">
                <?php while ($rowDetail = mysqli_fetch_assoc($detailApply)) { ?>
                    <a href=""
                        style="background-color: white; margin: 20px; padding: 20px; border-radius: 20px; position: relative;">
                        <label
                            style="position: absolute; background-color: red; font-size: 15px; padding: 2px 8px; border-radius: 5px; right: 10px; top: 10px;">Menunggu</label>
                        <img src="<?= $rowDetail['judul'] ?>" style="border-radius: 12px; width: 300px; height: 200px" alt="">
                        <p style="text-align: center; margin: 5px; font-weight: bold;"><?= $rowDetail['judul'] ?></p>
                    </a>
                <?php } ?>
            </div>
        </div>
    <?php } else if ($cekMagang > 0) {
        $rowMagang = mysqli_fetch_assoc($magang);
    ?>

        <div>
            <div style="background-color: white; padding: 20px; margin: 20px; border-radius: 20px">
                <h2 style="font-weight: bold; font-size: 18px;">Anda telah terdaftar sebagai peserta magang di:</h2>
                <table style="margin: 15px">
                    <tr>
                        <th style="padding: 5px; text-align: start;">Nama Perusahaan</th>
                        <td style="padding: 5px; text-align: start;">: <?= $rowMagang['nama_perusahaan'] ?></td>
                    </tr>
                    <tr>
                        <th style="padding: 5px; text-align: start;">Posisi</th>
                        <td style="padding: 5px; text-align: start;">: <?= $rowMagang['posisi'] ?></td>
                    </tr>
                    <tr>
                        <th style="padding: 5px; text-align: start;">Mulai Magang</th>
                        <td style="padding: 5px; text-align: start;">: <?= $rowMagang['mulai_magang'] ?></td>
                    </tr>
                    <tr>
                        <th style="padding: 5px; text-align: start;">Selesai Magang</th>
                        <td style="padding: 5px; text-align: start;">: <?= $rowMagang['selesai_magang'] ?></td>
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
    }
    return ob_get_clean();
}

function laporanMagang($connect, $id_mhs)
{
    ob_start();
    $magang = mysqli_query($connect, "SELECT * FROM magang WHERE id_mhs = '$id_mhs' AND status = 'Berlangsung'");
    if (mysqli_num_rows($magang) <= 0) { ?>
        <div class="flex flex-col items-center justify-center text-white w-full h-full">
            <p>Anda belum mengdaftar ke lowongan manapun. </p>
            <p>Daftar lowongan disini..</p>
            <a href=""
                class="px-5 py-2 rounded-md bg-[rgb(61,99,221)] text-white font-semibold  hover:bg-[rgb(27,61,173)] cursor-pointer">Daftar
                Lowongan</a>
        </div>

    <?php } else {
        $id_magang = mysqli_fetch_assoc($magang)['id_magang'];
    ?>
        <div class="w-[90%] mt-10 flex justify-between items-center mb-4 px-4">
            <!-- Kolom Pencarian -->
            <form method="GET"
                class="flex items-center border border-white bg-white/8 gap-2 backdrop-blur-md px-4 py-2 rounded-lg w-full max-w-md shadow">
                <i class="fas fa-search text-[#108bfd] text-lg"></i>
                <input type="search" name="cariJadwal" value="<?= isset($_GET['cariJadwal']) ? $_GET['cariJadwal'] : '' ?>" placeholder="Cari tanggal..."
                    class="w-full bg-transparent text-[#108bfd] placeholder-gray-500 focus:outline-none" />
            </form>

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
                <?php
                $cariJadwal = isset($_GET['cariJadwal']) ? mysqli_real_escape_string($connect, $_GET['cariJadwal']) : '';

                $querylaporan = "SELECT a.*, c.nama_dosen, e.nama_perusahaan FROM kegiatan_magang a 
                INNER JOIN magang b ON a.id_magang=b.id_magang 
                INNER JOIN dosen c ON b.id_dosen=c.id_dosen 
                INNER JOIN lowongan d ON b.id_lowongan=d.id_lowongan 
                INNER JOIN perusahaan e ON d.id_perusahaan=e.id_perusahaan 
                WHERE a.id_magang = '$id_magang'";

                if (!empty($cariJadwal)) {
                    $querylaporan .= " AND (c.nama_dosen LIKE '%$cariJadwal%' 
                        OR e.nama_perusahaan LIKE '%$cariJadwal%' 
                        OR a.tgl LIKE '%$cariJadwal%' 
                        OR a.hari LIKE '%$cariJadwal%')";
                }

                $dataLaporan = mysqli_query($connect, $querylaporan);

                if (mysqli_num_rows($dataLaporan) <= 0) { ?>
                    <tr class="text-center border-b border-gray-300 last:border-b-0">
                        <td colspan="7" class="p-4">Tidak ada data ditemukan</td>
                    </tr>
                    <?php } else {
                    $no = 1;
                    while ($rowLaporan = mysqli_fetch_assoc($dataLaporan)) { ?>
                        <tr class="text-center border-b border-gray-300 last:border-b-0">
                            <td class="p-4"><?= $no ?></td>
                            <td class="p-4"><?= $rowLaporan['nama_dosen'] ?></td>
                            <td class="p-4"><?= $rowLaporan['nama_perusahaan'] ?></td>
                            <td class="p-4"><?= $rowLaporan['tgl'] ?></td>
                            <td class="p-4"><?= $rowLaporan['hari'] ?></td>

                            <td class="p-4">
                                <a href="../../assets/laporan-magang/kegiatan/<?= $rowLaporan['kegiatan'] ?>" class="bg-[#00b894] text-white font-bold py-2 px-4 rounded-lg">Download</a>
                            </td>
                            <td class="p-4">
                                <a href="../../assets/laporan-magang/bukti-kegiatan/<?= $rowLaporan['bukti_kegiatan'] ?>" class="bg-[#00b894] text-white font-bold py-2 px-4 rounded-lg">Download</a>
                            </td>
                            <td class="py-4 px-3 flex justify-center items-center gap-3">
                                <a href="#edit-laporan<?= $no ?>" class="text-[#3498db] hover:opacity-70 text-[18px]">
                                    <i class="fa fa-pen"></i>
                                </a>
                                <a href="#hapus-laporan<?= $no ?>" class="text-[#e74c3c] hover:opacity-70 text-[18px]">
                                    <i class="fa fa-trash"></i>
                                </a>

                                <div id="edit-laporan<?= $no ?>" class="modal-parent absolute top-0 left-0 w-full h-full hidden flex justify-center items-center">
                                    <a href="#laporan-magang" class="overlay absolute w-full h-full bg-black/30 backdrop-blur-sm"></a>
                                    <?= formLaporanMagang('Edit', "edit-laporan.php?id_kegiatan=" . $rowLaporan['id_kegiatan'], $id_magang, $rowLaporan) ?>
                                </div>

                                <div id="hapus-laporan<?= $no ?>"
                                    class="modal-parent no absolute top-0 left-0 w-full h-full hidden flex justify-center items-center">
                                    <a href="#laporan-magang" class="overlay absolute w-full h-full bg-black/30 backdrop-blur-sm"></a>
                                    <?= alertHapus([
                                        ['label' => 'Dosen Pembimbing', 'isi' => $rowLaporan['nama_dosen']],
                                        ['label' => 'Perusahaan', 'isi' => $rowLaporan['nama_perusahaan']],
                                        ['label' => 'Tanggal', 'isi' => $rowLaporan['tgl']],
                                        ['label' => 'Hari', 'isi' => $rowLaporan['hari']]
                                    ],  $rowLaporan['id_kegiatan']) ?>
                                </div>
                            </td>
                        </tr>
                <?php $no++;
                    }
                } ?>
            </tbody>
        </table>



        <div id="tambah-laporan"
            class="modal-parent absolute top-0 left-0 w-full h-full hidden flex justify-center items-center">
            <a href="#laporan-magang" class="overlay absolute w-full h-full bg-black/30 backdrop-blur-sm"></a>
            <?= formLaporanMagang('Tambah', 'tambah-laporan.php', $id_magang, []) ?>
        </div>
    <?php
    }
    return ob_get_clean();
}

function jadwalBimbingan($connect, $id_mhs)
{
    ob_start();

    $magang = mysqli_query($connect, "SELECT * FROM magang WHERE id_mhs = '$id_mhs' AND status = 'Berlangsung'");
    if (mysqli_num_rows($magang) <= 0) { ?>
        <div class="flex flex-col items-center justify-center text-white w-full h-full">
            <p>Anda belum mengdaftar ke lowongan manapun. </p>
            <p>Daftar lowongan disini..</p>
            <a href=""
                class="px-5 py-2 rounded-md bg-[rgb(61,99,221)] text-white font-semibold  hover:bg-[rgb(27,61,173)] cursor-pointer">Daftar
                Lowongan</a>
        </div>
    <?php return ob_get_clean();
    }

    $id_magang = mysqli_fetch_assoc($magang)['id_magang'];
    ?>

    <div class="w-[90%] mt-10 flex justify-between items-center mb-4 px-4">
        <!-- Kolom Pencarian -->
        <form method="GET" class="flex items-center border border-white bg-white/8 gap-2 backdrop-blur-md px-4 py-2 rounded-lg w-full max-w-md shadow">
            <i class="fas fa-search text-[#108bfd] text-lg"></i>
            <input type="search" name="cariBimbingan" value="<?= isset($_GET['cariBimbingan']) ? $_GET['cariBimbingan'] : '' ?>" placeholder="Cari tanggal..."
                class="w-full bg-transparent text-[#108bfd] placeholder-gray-500 focus:outline-none" />
        </form>
        <?php
        // Ambil data bimbingan

        $query = "SELECT bimbingan.*, dosen.nama_dosen, perusahaan.nama_perusahaan
        FROM bimbingan
        JOIN magang ON bimbingan.id_magang = magang.id_magang
        JOIN dosen ON magang.id_dosen = dosen.id_dosen
        JOIN lowongan ON magang.id_lowongan = lowongan.id_lowongan
        JOIN perusahaan ON lowongan.id_perusahaan = perusahaan.id_perusahaan
        WHERE bimbingan.id_magang = '$id_magang'";

        $cariBimbingan = isset($_GET['cariBimbingan']) ? mysqli_real_escape_string($connect, $_GET['cariBimbingan']) : '';

        if (!empty($cariBimbingan)) {
            $query .= " AND (dosen.nama_dosen LIKE '%$cariBimbingan%' 
                        OR perusahaan.nama_perusahaan LIKE '%$cariBimbingan%' 
                        OR bimbingan.topik_bimbingan LIKE '%$cariBimbingan%' 
                        OR bimbingan.tanggal LIKE '%$cariBimbingan%')";
        }

        $result = mysqli_query($connect, $query);
        ?>
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
            <?php
            if (mysqli_num_rows($result) == 0) { ?>
                <tr>
                    <td colspan="7" class="py-4 px-3">Tidak ada data bimbingan</td>
                </tr>
                <?php
            } else {
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr class="border-b border-gray-300">
                        <td class="py-4 px-3"><?= $no++ ?></td>
                        <td class="py-4 px-3"><?= $row['nama_dosen'] ?></td>
                        <td class="py-4 px-3"><?= $row['nama_perusahaan'] ?></td>
                        <td class="py-4 px-3"><?= $row['topik_bimbingan'] ?></td>
                        <td class="py-4 px-3"><?= $row['tanggal'] ?></td>
                        <td class="py-4 px-3"><?= $row['jam'] ?></td>
                        <td class="py-4 px-3"><?= $row['tempat'] ?></td>
                    </tr>
            <?php }
            } ?>
        </tbody>
    </table>
<?php
    return ob_get_clean();
}
