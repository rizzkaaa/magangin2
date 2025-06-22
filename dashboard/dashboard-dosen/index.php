<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
include '../../db.php';
include '../../middleware/role.php';
include '../components/render-components.php';

only(['dosen']);

$idUser = $_SESSION['id_user'];
$email = $_SESSION['email'];

$dataDosen = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM dosen WHERE id_user = '$idUser'"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Magangin | Dashboard Dosen</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <link rel="stylesheet" href="../../assets/css/dashboard.css">
</head>

<body class="h-screen flex flex-col">
  <?php
  $nama = $dataDosen['nama_dosen'];
  echo renderHeader($nama, $email, 'Bimbing');
  ?>

  <div class="flex flex-1 relative">
    <?= renderSidebar([
      ['icon' => 'home', 'label' => 'Dashboard', 'url' => '#dashboard'],
      ['icon' => 'user', 'label' => 'Profil', 'url' => '#profil'],
      ['icon' => 'users', 'label' => 'Lihat Mahasiswa', 'url' => '#lihat_mahasiswa'],
      ['icon' => 'calendar-days', 'label' => 'Jadwal Bimbingan', 'url' => '#jadwal-bimbingan'],
      ['icon' => 'bell', 'label' => 'Kirim Notifikasi', 'url' => '#kirim-notifikasi'],
    ]);
    ?>

    <section class="bg-[#1d222efb] w-full overflow-hidden flex flex-col items-center">
      <div id="dashboard" class="menu w-full overflow-hidden flex-col items-center">
        <!-- Header -->
        <div class="w-[90%] flex justify-between">
          <!-- Box Kiri -->
          <div
            class="flex-1 bg-[#f0f4ff] mx-5 my-5 p-8 rounded-[15px] text-center font-bold shadow-md border border-[#cdd9ff]">
            <p class="text-[#003c9e]">Penilaian Mahasiswa</p>
            <p class="text-[32px] mt-2 text-[#000]">15</p>
          </div>

          <!-- Box Kanan -->
          <div
            class="flex-1 bg-[#f0f4ff] mx-5 my-5 p-8 rounded-[15px] text-center font-bold shadow-md border border-[#cdd9ff]">
            <p class="text-[#003c9e]">Terakhir Bimbingan</p>
            <p class="text-[32px] mt-2 text-[#000]">11 November 2025</p>
          </div>
        </div>

        <!-- Tabel -->
        <table class="w-[90%] rounded-[20px] overflow-hidden">
          <thead class="bg-[#003c9e] text-white">
            <tr>
              <th class="p-[15px] text-center">Nama Mahasiswa</th>
              <th class="p-[15px] text-center">NPM</th>
              <th class="p-[15px] text-center">Total Nilai</th>
              <th class="p-[15px] text-center">Status</th>
            </tr>
          </thead>
          <tbody class="bg-[#c3cbe2] text-center">
            <tr>
              <td class="p-[15px]">Maudy Apriliani</td>
              <td class="p-[15px]">1062446</td>
              <td class="p-[15px]">80</td>
              <td class="p-[15px]">
                <span
                  class="inline-block px-[12px] py-[6px] text-[13px] font-bold rounded-[20px] bg-[#a8d5ff] text-[#004080]">
                  Selesai
                </span>
              </td>
            </tr>
            <tr>
              <td class="p-[15px]">Maudy Apriliani</td>
              <td class="p-[15px]">1062446</td>
              <td class="p-[15px]">80</td>
              <td class="p-[15px]">
                <span
                  class="inline-block px-[12px] py-[6px] text-[13px] font-bold rounded-[20px] bg-[#a8d5ff] text-[#004080]">
                  Selesai
                </span>
              </td>
            </tr>
            <tr>
              <td class="p-[15px]">Maudy Apriliani</td>
              <td class="p-[15px]">1062446</td>
              <td class="p-[15px]">80</td>
              <td class="p-[15px]">
                <span
                  class="inline-block px-[12px] py-[6px] text-[13px] font-bold rounded-[20px] bg-[#d9e3ff] text-[#1a237e]">
                  Sedang Magang
                </span>
              </td>
            </tr>

          </tbody>
        </table>

      </div>

      <form id="profil" class=" menu w-full h-[560px] overflow-y-auto flex-col items-end">
        <div class="flex w-full p-5">
          <div class="mx-5 my-2">
            <label class="text-white font-bold">Profil</label>
            <div
              class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none border-2 border-dashed border-gray-400 h-[250px] w-[250px] shadow-sm flex justify-center items-center overflow-hidden relative">
              <input type="file" name="profil"
                class="absolute scale-[13] translate-x-[100px] opacity-0 cursor-pointer" />
              <i class="fa-solid fa-image text-[36px] text-gray-600"></i>
            </div>
          </div>

          <div class="flex-1 w-2/3">
            <div class="flex flex-col px-5 py-2">
              <label class="text-white font-bold">Nama</label>
              <input type="text" name="nama_dosen"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
            </div>

            <div class="flex flex-col px-5 py-2">
              <label class="text-white font-bold">Email</label>
              <input type="email" name="email_dosen"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
            </div>

            <div class="flex flex-col px-5 py-2">
              <label class="text-white font-bold">NIP</label>
              <input type="text" name="nip"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
            </div>

            <div class="flex flex-col px-5 py-2">
              <label class="text-white font-bold">Universitas</label>
              <input type="text" name="universitas"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
            </div>
          </div>
        </div>
        <div class="mx-5 my-2">
          <button type="submit"
            class="bg-orange-500 text-white px-6 py-2 rounded-md cursor-pointer hover:bg-orange-600 transition-all duration-300">
            Simpan Profil
          </button>
        </div>
      </form>

      <div id="lihat_mahasiswa" class="menu w-full h-[560px] overflow-y-auto flex-col items-center">
        <div class="w-[90%] flex justify-between">
          <!-- Box Kiri -->
          <div
            class="flex-1 bg-[#f0f4ff] mx-5 my-5 p-8 rounded-[15px] text-center font-bold shadow-md border border-[#cdd9ff]">
            <p class="text-[#003c9e]">Jumlah Mahasiswa</p>
            <p class="text-[#000] text-[32px] font-bold">15</p>
          </div>

          <!-- Box Kanan -->
          <div
            class="flex-1 bg-[#f0f4ff] mx-5 my-5 p-8 rounded-[15px] text-center font-bold shadow-md border border-[#cdd9ff]">
            <p class="text-[#003c9e]">Terakhir Bimbingan</p>
            <p class="text-[#000] text-[32px] font-bold">11 November 2025</p>
          </div>
        </div>

        <div class="w-[90%] flex flex-wrap justify-center">
          <a href="./mahasiswa-page/"
            class="bg-[#a5bfff] m-[10px] p-[15px] rounded-[12px] shadow-[0_5px_0_#003c9e] transition-transform duration-200 ease-in-out transform hover:-translate-y-[3px] cursor-pointer text-center">
            <p class="font-bold mb-[5px] text-black">Maudy Apriliyani</p>
            <p class="text-[14px] text-[#333]">NIM 1062446</p>
          </a>
          <a href="./mahasiswa-page/"
            class="bg-[#a5bfff] m-[10px] p-[15px] rounded-[12px] shadow-[0_5px_0_#003c9e] transition-transform duration-200 ease-in-out transform hover:-translate-y-[3px] cursor-pointer text-center">
            <p class="font-bold mb-[5px] text-black">Maudy Apriliyani</p>
            <p class="text-[14px] text-[#333]">NIM 1062446</p>
          </a>
          <a href="./mahasiswa-page/"
            class="bg-[#a5bfff] m-[10px] p-[15px] rounded-[12px] shadow-[0_5px_0_#003c9e] transition-transform duration-200 ease-in-out transform hover:-translate-y-[3px] cursor-pointer text-center">
            <p class="font-bold mb-[5px] text-black">Maudy Apriliyani</p>
            <p class="text-[14px] text-[#333]">NIM 1062446</p>
          </a>
          <a href="./mahasiswa-page/"
            class="bg-[#a5bfff] m-[10px] p-[15px] rounded-[12px] shadow-[0_5px_0_#003c9e] transition-transform duration-200 ease-in-out transform hover:-translate-y-[3px] cursor-pointer text-center">
            <p class="font-bold mb-[5px] text-black">Maudy Apriliyani</p>
            <p class="text-[14px] text-[#333]">NIM 1062446</p>
          </a>
          <a href="./mahasiswa-page/"
            class="bg-[#a5bfff] m-[10px] p-[15px] rounded-[12px] shadow-[0_5px_0_#003c9e] transition-transform duration-200 ease-in-out transform hover:-translate-y-[3px] cursor-pointer text-center">
            <p class="font-bold mb-[5px] text-black">Maudy Apriliyani</p>
            <p class="text-[14px] text-[#333]">NIM 1062446</p>
          </a>
          <a href="./mahasiswa-page/"
            class="bg-[#a5bfff] m-[10px] p-[15px] rounded-[12px] shadow-[0_5px_0_#003c9e] transition-transform duration-200 ease-in-out transform hover:-translate-y-[3px] cursor-pointer text-center">
            <p class="font-bold mb-[5px] text-black">Maudy Apriliyani</p>
            <p class="text-[14px] text-[#333]">NIM 1062446</p>
          </a>
          <a href="./mahasiswa-page/"
            class="bg-[#a5bfff] m-[10px] p-[15px] rounded-[12px] shadow-[0_5px_0_#003c9e] transition-transform duration-200 ease-in-out transform hover:-translate-y-[3px] cursor-pointer text-center">
            <p class="font-bold mb-[5px] text-black">Maudy Apriliyani</p>
            <p class="text-[14px] text-[#333]">NIM 1062446</p>
          </a>
          <a href="./mahasiswa-page/"
            class="bg-[#a5bfff] m-[10px] p-[15px] rounded-[12px] shadow-[0_5px_0_#003c9e] transition-transform duration-200 ease-in-out transform hover:-translate-y-[3px] cursor-pointer text-center">
            <p class="font-bold mb-[5px] text-black">Maudy Apriliyani</p>
            <p class="text-[14px] text-[#333]">NIM 1062446</p>
          </a>
          <a href="./mahasiswa-page/"
            class="bg-[#a5bfff] m-[10px] p-[15px] rounded-[12px] shadow-[0_5px_0_#003c9e] transition-transform duration-200 ease-in-out transform hover:-translate-y-[3px] cursor-pointer text-center">
            <p class="font-bold mb-[5px] text-black">Maudy Apriliyani</p>
            <p class="text-[14px] text-[#333]">NIM 1062446</p>
          </a>
          <a href="./mahasiswa-page/"
            class="bg-[#a5bfff] m-[10px] p-[15px] rounded-[12px] shadow-[0_5px_0_#003c9e] transition-transform duration-200 ease-in-out transform hover:-translate-y-[3px] cursor-pointer text-center">
            <p class="font-bold mb-[5px] text-black">Maudy Apriliyani</p>
            <p class="text-[14px] text-[#333]">NIM 1062446</p>
          </a>
          <a href="./mahasiswa-page/"
            class="bg-[#a5bfff] m-[10px] p-[15px] rounded-[12px] shadow-[0_5px_0_#003c9e] transition-transform duration-200 ease-in-out transform hover:-translate-y-[3px] cursor-pointer text-center">
            <p class="font-bold mb-[5px] text-black">Maudy Apriliyani</p>
            <p class="text-[14px] text-[#333]">NIM 1062446</p>
          </a>
          <a href="./mahasiswa-page/"
            class="bg-[#a5bfff] m-[10px] p-[15px] rounded-[12px] shadow-[0_5px_0_#003c9e] transition-transform duration-200 ease-in-out transform hover:-translate-y-[3px] cursor-pointer text-center">
            <p class="font-bold mb-[5px] text-black">Maudy Apriliyani</p>
            <p class="text-[14px] text-[#333]">NIM 1062446</p>
          </a>
        </div>

      </div>

      <div id="jadwal-bimbingan" class="menu w-full h-[560px] overflow-y-auto flex-col items-center">
        <div class="flex  mb-8 justify-between w-[90%]">
          <div
            class="flex-1 bg-[#f0f4ff] mx-5 my-5 p-8 rounded-[15px] text-center font-bold shadow-md border border-[#cdd9ff]">
            <p class="text-[#003c9e]">Jadwal Terakhir Bimbingan</p>
            <h2 class="text-[32px] mt-2 text-[#000]">11 Juni 2025</h2>
          </div>
          <div
            class="flex-1 bg-[#f0f4ff] mx-5 my-5 p-8 rounded-[15px] text-center font-bold shadow-md border border-[#cdd9ff]">
            <p class="text-[#003c9e]">Jadwal Terakhir Bimbingan</p>
            <h2 class="text-[32px] mt-2 text-[#000]">11 Desember 2025</h2>
          </div>
        </div>

        <div class="bg-[#99a6d7] p-5 rounded-[10px] w-[90%]">
          <h3 class="mb-5 text-[20px] font-bold text-[#000]">Pembimbingan Terjadwal</h3>

          <div class="bg-[#f7f7f7] p-4 rounded-[10px] mb-4 flex justify-between items-center">
            <div>
              <strong class="text-[16px] text-[#000] block">Maudy Apriliyani</strong>
              <span class="text-[#333] text-[14px]">5 Juni 2025</span>
            </div>
            <div class="text-[14px] text-[#333]">
              10:00 - 11:00
              <span class="ml-2"><a href="./jadwal-bimbingan">&gt;</a></span>
            </div>
          </div>

          <div class="bg-[#f7f7f7] p-4 rounded-[10px] mb-4 flex justify-between items-center">
            <div>
              <strong class="text-[16px] text-[#000] block">Maudy Apriliyani</strong>
              <span class="text-[#333] text-[14px]">5 Juni 2025</span>
            </div>
            <div class="text-[14px] text-[#333]">
              10:00 - 11:00
              <span class="ml-2"><a href="./jadwal-bimbingan">&gt;</a></span>
            </div>
          </div>

          <div class="bg-[#f7f7f7] p-4 rounded-[10px] mb-4 flex justify-between items-center">
            <div>
              <strong class="text-[16px] text-[#000] block">Maudy Apriliyani</strong>
              <span class="text-[#333] text-[14px]">5 Juni 2025</span>
            </div>
            <div class="text-[14px] text-[#333]">
              10:00 - 11:00
              <span class="ml-2"><a href="./jadwal-bimbingan">&gt;</a></span>
            </div>
          </div>
        </div>

      </div>

      <div id="kirim-notifikasi" class="menu p-6 bg-[#1d222e] w-[40%] rounded-b-[10px]">
        <form class="flex flex-wrap gap-6 bg-[#f7f9ff] p-6 rounded-[10px]">
          <div class="flex-1 min-w-[300px]">
            <label for="id_mahasiswa" class="block font-bold mb-2 text-black">Pilih Mahasiswa :</label>
            <div class="flex items-center gap-2">
              <button type="button" class="rounded-tl-none rounded-tr-[20px] rounded-bl-[20px] rounded-br-[20px] px-3 py-2 bg-[#003c9e] text-white hover:opacity-90">
                <i class="fas fa-search"></i>
              </button>
              <select name="id_mahasiswa" id="id_mahasiswa"
                class="rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option></option>
                <option value="1062455">1062455 - Rizka Layla Ramadhani</option>
              </select>
            </div>

            <label for="judul" class="block font-bold mt-4 mb-2 text-black">Judul Notifikasi :</label>
            <input type="text" id="judul" name="judul"
              class="rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full px-3 py-2 border border-gray-300 bg-gray-200 text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">

            <label for="pesan" class="block font-bold mt-4 mb-2 text-black">Isi Pesan :</label>
            <input type="text" id="pesan" name="pesan"
              class="rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full px-3 py-2 border border-gray-300 bg-gray-200 text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">

            <div class="flex justify-end mt-6">
              <button type="submit"
                class="px-5 py-2 bg-[#003c9e] text-white font-bold rounded-[8px] hover:opacity-90 transition">
                Kirim Notifikasi
              </button>
            </div>
          </div>
        </form>
      </div>

    </section>

  </div>

  <script src="../../assets/js/dashboard.js"></script>
</body>

</html>