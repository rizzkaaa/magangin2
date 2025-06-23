<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
include '../../db.php';
include '../../middleware/role.php';
include '../components/render-components.php';

only(['perusahaan']);

$idUser = $_SESSION['id_user'];
$email = $_SESSION['email'];

$dataPerusahaan = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM perusahaan WHERE id_user = '$idUser'"));
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
  <link rel="stylesheet" href="../../assets/css/dashboard.css">
</head>

<body class="h-screen flex flex-col overflow-hidden ">
  <?php
  $nama = $dataPerusahaan['nama_perusahaan'];
  echo renderHeader($nama, $email, 'Temukan');
  ?>

  <div class="flex flex-1 relative">
    <?= renderSidebar([
      ['icon' => 'home', 'label' => 'Dashboard', 'url' => '#dashboard'],
      ['icon' => 'user', 'label' => 'Profil', 'url' => '#profil'],
      ['icon' => 'file-contract', 'label' => 'Input Lowongan', 'url' => '#input-lowongan'],
      ['icon' => 'envelope', 'label' => 'Lihat Pelamar', 'url' => '#lihat-pelamar'],

    ]);
    ?>

    <section class="bg-[#1d222efb] w-full flex flex-col items-center">
      <div id="dashboard" class="menu w-full  h-[572px] overflow-y-auto flex-col items-center justify-center">
        <!-- Jika lowongan kosong -->
        <!-- <div class="flex flex-col items-center justify-center text-white w-full h-full">
          <p>Anda belum mengupload lowongan apapun. </p>
          <p>Upload lowongan anda disini..</p>
          <a href="#input-lowongan"
            class="px-5 py-2 rounded-md bg-[rgb(61,99,221)] text-white font-semibold  hover:bg-[rgb(27,61,173)] cursor-pointer">Input
            Lowongan</a>
        </div> -->

        <div class="flex flex-wrap w-full h-full" style="justify-content: space-evenly;">
          <?= cardLowongan2() ?>
          <?= cardLowongan2() ?>
          <?= cardLowongan2() ?>
          <?= cardLowongan2() ?>
          <?= cardLowongan2() ?>
          <?= cardLowongan2() ?>
          <?= cardLowongan2() ?>
          <?= cardLowongan2() ?>
          <?= cardLowongan2() ?>
          <?= cardLowongan2() ?>
          <?= cardLowongan2() ?>
          <?= cardLowongan2() ?>
        </div>
      </div>

      <form class="menu w-full flex-col items-end max-h-[572px] overflow-y-auto" id="profil">
        <div class="flex w-full p-5">
          <!-- Form kiri -->
          <div class="flex-2 w-2/3">
            <div class="flex flex-col px-5 py-2">
              <label class="text-white font-bold">Nama Perusahaan</label>
              <input type="text" name="nama_perusahaan" class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
            </div>

            <div class="flex flex-col px-5 py-2">
              <label class="text-white font-bold">Email</label>
              <input type="email" name="email_perusahaan" class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
            </div>

            <div class="flex flex-col px-5 py-2">
              <label class="text-white font-bold">Alamat</label>
              <textarea name="alamat" class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none"></textarea>
            </div>

            <div class="flex">
              <div class="flex-1">
                <div class="flex flex-col px-5 py-2">
                  <label class="text-white font-bold">Provinsi</label>
                  <select name="provinsi" class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
                    <option>Pilih Provinsi</option>
                  </select>
                </div>
                <div class="flex flex-col px-5 py-2">
                  <label class="text-white font-bold">Kabupaten</label>
                  <select name="kabupaten" class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
                    <option>Pilih Kabupaten</option>
                  </select>
                </div>
              </div>

              <div class="flex-1">
                <div class="flex flex-col px-5 py-2">
                  <label class="text-white font-bold">Kecamatan</label>
                  <select name="kecamatan" class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
                    <option>Pilih Kecamatan</option>
                  </select>
                </div>
                <div class="flex flex-col px-5 py-2">
                  <label class="text-white font-bold">Desa</label>
                  <input type="text" name="desa" class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
                </div>
              </div>
            </div>
          </div>

          <!-- Form kanan -->
          <div class="flex-1 mx-5 my-2">
            <label class="text-white font-bold">Logo Perusahaan</label>
            <div
              class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none border-2 border-dashed border-gray-400 h-[400px] shadow-sm flex justify-center items-center overflow-hidden relative">
              <input type="file" name="logo" class="absolute scale-[13] translate-x-[100px] opacity-0 cursor-pointer" />
              <i class="fa-solid fa-image text-[36px] text-gray-600"></i>
            </div>
          </div>
        </div>

        <!-- Tombol -->
        <div class="mx-5 my-2">
          <button type="submit"
            class="bg-orange-500 text-white px-6 py-2 rounded-md cursor-pointer hover:bg-orange-600 transition-all duration-300">
            Simpan Profil
          </button>
        </div>
      </form>

      <form action="" id="input-lowongan" class="menu w-full max-h-[572px] overflow-y-auto flex-col items-end">
        <div class="flex flex-col w-full p-5">
          <input type="hidden" name="perusahaan_id" value="">


          <div class="flex w-full">
            <div class="flex-1 px-5 py-2" style="">
              <label class="text-white font-bold">Upload Banner</label>
              <div
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none border-2 border-dashed border-gray-400 h-[200px] shadow-sm flex justify-center items-center overflow-hidden relative">
                <input type="file" name="banner"
                  class="absolute scale-[13] translate-x-[100px] opacity-0 cursor-pointer" />
                <i class="fa-solid fa-image text-[36px] text-gray-600"></i>
              </div>
            </div>
            <div class="flex-1">
              <div class="flex flex-col px-5 py-2">
                <label class="text-white font-bold">Judul Lowongan</label>
                <input type="text" name="judul" class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
              </div>
              <div class="flex flex-col px-5 py-2">
                <label class="text-white font-bold">Deskripsi</label>
                <textarea name="deskripsi" rows="5"
                  class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none"></textarea>
              </div>
            </div>
          </div>


          <div class="flex w-full">
            <div class="flex flex-col px-5 py-2">
              <label class="text-white font-bold">Lokasi</label>
              <textarea name="lokasi" rows="4" cols="40"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none"></textarea>
            </div>

            <div class="flex-1">
              <div class="flex flex-col px-5 py-2">
                <label class="text-white font-bold">Posisi</label>
                <input type="text" name="posisi" class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
              </div>
              <div class="flex flex-col px-5 py-2">
                <label class="text-white font-bold">Kuota</label>
                <input type="text" name="kuota" placeholder="100 Orang"
                  class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
              </div>
            </div>


            <div class="flex-1">
              <div class="flex flex-col px-5 py-2">
                <label class="text-white font-bold">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
                  <option></option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="flex flex-col px-5 py-2">
                <label class="text-white font-bold">Rentang Usia</label>
                <input type="text" name="rentang_usia" class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
              </div>
            </div>
          </div>

          <div class="flex w-full">
            <div class="flex flex-1 flex-col px-5 py-2">
              <label class="text-white font-bold">Mulai Magang</label>
              <input type="date" name="mulai_magang" class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
            </div>
            <div class="flex flex-1 flex-col px-5 py-2">
              <label class="text-white font-bold">Selesai Magang</label>
              <input type="date" name="selesai_magang" class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
            </div>
            <div class="flex flex-1 flex-col px-5 py-2">
              <label class="text-white font-bold">Deadline Apply</label>
              <input type="date" name="deadline_apply" class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
            </div>

            <div class="flex flex-1 flex-col px-5 py-2">
              <label class="text-white font-bold">Uang Saku</label>
              <input type="text" name="uang_saku" placeholder="Rp 100.000"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
            </div>
          </div>

          <div class="bg-white m-5 rounded-[20px] p-5">
            <h2 class="mb-5 text-[20px] text-[#1e3a8a] font-bold">
              Tambah Dokumen Persyaratan
            </h2>

            <table class="w-full">
              <thead>
                <tr>
                  <th></th>
                  <th class="text-start px-[15px] py-[10px]">Nama Dokumen</th>
                  <th class="text-start px-[15px] py-[10px]">Jenis File</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td class="w-[35px]">
                    <button class="border w-[30px] h-[30px] rounded-full flex items-center justify-center">
                      <i class="fa-solid fa-minus"></i>
                    </button>
                  </td>
                  <td class="px-[15px] py-[10px]">
                    <input type="text" id="nama-dokumen" placeholder="Contoh: CV"
                      class="w-full p-[10px] border border-[#ccc] rounded-[10px] text-sm focus:outline-none" />
                  </td>
                  <td class="px-[15px] py-[10px]">
                    <select id="jenis-file"
                      class="w-full p-[10px] border border-[#ccc] rounded-[10px] text-sm focus:outline-none">
                      <option>PDF</option>
                      <option>PNG/JPG</option>
                      <option>DOCX</option>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td class="w-[35px]">
                    <button class="border w-[30px] h-[30px] rounded-full flex items-center justify-center">
                      <i class="fa-solid fa-plus"></i>
                    </button>
                  </td>
                  <td class="px-[15px] py-[10px]">
                    <input type="text" id="nama-dokumen" placeholder="Contoh: CV"
                      class="w-full p-[10px] mb-4 border border-[#ccc] rounded-[10px] text-sm focus:outline-none" />
                  </td>
                  <td class="px-[15px] py-[10px]">
                    <select id="jenis-file"
                      class="w-full p-[10px] mb-4 border border-[#ccc] rounded-[10px] text-sm focus:outline-none">
                      <option>PDF</option>
                      <option>PNG/JPG</option>
                      <option>DOCX</option>
                    </select>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>


        </div>

        <!-- Tombol -->
        <div class="mx-5 my-2">
          <button type="submit"
            class="bg-orange-500 text-white px-6 py-2 rounded-md cursor-pointer hover:bg-orange-600 transition-all duration-300">
            Upload Lowongan
          </button>
        </div>
      </form>

      <div id="lihat-pelamar" class="menu w-full max-h-[572px] overflow-y-auto flex-col p-5">
        <h3 class="text-white text-[25px] font-bold">Daftar Lamaran</h3>

        <table class="bg-white my-5 rounded-[20px] w-full shadow-sm overflow-hidden">
          <thead class="bg-[#d3cfcf]">
            <tr class="text-center">
              <th class="p-[10px]">ID Lowongan</th>
              <th class="p-[10px]">ID Peserta</th>
              <th class="p-[10px]">Tanggal</th>
              <th class="p-[10px]">Jam</th>
              <th class="p-[10px]">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr class="text-center border-y border-gray-400">
              <td class="p-[10px]">1</td>
              <td class="p-[10px]">1</td>
              <td class="p-[10px]">12/06/2025</td>
              <td class="p-[10px]">09.24</td>
              <td class="p-[10px]">
                <a href="./data-pelamar/"
                  class="px-[14px] py-[6px] text-white text-[13px] font-bold rounded-[20px] bg-red-400 inline-block">
                  Menunggu
                </a>
              </td>
            </tr>
            <tr class="text-center border-y border-gray-400">
              <td class="p-[10px]">2</td>
              <td class="p-[10px]">2</td>
              <td class="p-[10px]">23/01/2024</td>
              <td class="p-[10px]">21.09</td>
              <td class="p-[10px]">
                <span
                  class="px-[14px] py-[6px] text-white text-[13px] font-bold rounded-[20px] bg-emerald-400 inline-block">
                  Disetujui
                </span>
              </td>
            </tr>
            <tr class="text-center border-y border-gray-400">
              <td class="p-[10px]">1</td>
              <td class="p-[10px]">3</td>
              <td class="p-[10px]">02/11/2024</td>
              <td class="p-[10px]">13.10</td>
              <td class="p-[10px]">
                <span
                  class="px-[14px] py-[6px] text-white text-[13px] font-bold rounded-[20px] bg-emerald-400 inline-block">
                  Disetujui
                </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>


    </section>

  </div>

  <script src="../../assets/js/dashboard.js"></script>
</body>

</html>