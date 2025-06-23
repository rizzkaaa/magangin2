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

if ($dataPerusahaan["provinsi"]) {
  $idProvinsi =  $dataPerusahaan["provinsi"];
  $provinsi = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `provinsis` WHERE id = '$idProvinsi'"));
  $idkabupaten =  $dataPerusahaan["kabupaten"];
  $kabupaten = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `kabupatens` WHERE id = '$idkabupaten'"));

  $idkecamatan =  $dataPerusahaan["kecamatan"];
  $kecamatan = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `kecamatans` WHERE id = '$idkecamatan'"));
}

$id_perusahaan = $dataPerusahaan['id_perusahaan'];
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
      ['icon' => 'user', 'label' => 'Profil', 'url' => '#formProfil'],
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

      <form action="/api/form/handle-perusahaan-profile.php" method="POST" class="menu w-full flex-col items-end max-h-[572px] overflow-y-auto" id="formProfil" enctype="multipart/form-data">
        <div class="flex w-full p-5">
          <!-- Form kiri -->
          <div class="flex-2 w-2/3">
            <div class="flex flex-col px-5 py-2">
              <label class="text-white font-bold">Nama Perusahaan</label>
              <input type="text" name="nama_perusahaan"
                value="<?= isset($dataPerusahaan['nama_perusahaan']) ? $dataPerusahaan['nama_perusahaan'] : '' ?>"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
            </div>

            <div class="flex flex-col px-5 py-2">
              <label class="text-white font-bold">Email</label>
              <input
                value="<?= $email ?>"
                disabled
                type="email"
                name="email_perusahaan"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
            </div>

            <div class="flex flex-col px-5 py-2">
              <label class="text-white font-bold">Alamat</label>
              <textarea name="alamat"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none"><?= isset($dataPerusahaan['alamat']) ? $dataPerusahaan['alamat'] : '' ?></textarea>
            </div>

            <div class="flex">
              <div class="flex-1">
                <div class="flex flex-col px-5 py-2">
                  <label class="text-white font-bold">Provinsi</label>
                  <select name="provinsi" class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
                    <?php
                    $name = $provinsi["name"];
                    $id = $provinsi["id"];
                    if ($provinsi) {
                      echo "<option value='$id' selected>$name $id</option>";
                    } else {
                      echo "<option>Pilih Provinsi</option>";
                    }
                    ?>
                  </select>
                </div>
                <div class="flex flex-col px-5 py-2">
                  <label class="text-white font-bold">Kabupaten</label>
                  <select name="kabupaten" class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
                    <option>Pilih Kabupaten</option>
                    <?php
                    $name = $kabupaten["name"];
                    $id = $kabupaten["id"];
                    if ($kabupaten) {
                      echo "<option value='$id' selected>$name</option>";
                    } else {
                      echo "<option>Pilih Kabupaten</option>";
                    }
                    ?>
                  </select>
                </div>
              </div>

              <div class="flex-1">
                <div class="flex flex-col px-5 py-2">
                  <label class="text-white font-bold">Kecamatan</label>
                  <select name="kecamatan" class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
                    <?php
                    $name = $kecamatan["name"];
                    $id = $kecamatan["id"];
                    if ($kecamatan) {
                      echo "<option value='$id' selected>$name</option>";
                    } else {
                      echo "<option>Pilih Kecamatan</option>";
                    }
                    ?>
                  </select>
                </div>
                <div class="flex flex-col px-5 py-2">
                  <label class="text-white font-bold">Desa</label>
                  <input type="text" name="desa"
                    value="<?= isset($dataPerusahaan['desa']) ? $dataPerusahaan['desa'] : '' ?>"
                    class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
                </div>
              </div>
            </div>
          </div>

          <!-- Form kanan -->
          <div class="flex-1 mx-5 my-2">
            <label class="text-white font-bold">Logo Perusahaan</label>
            <div id="preview-box"
              class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none border-2 border-dashed border-gray-400 h-[400px] shadow-sm flex justify-center items-center overflow-hidden relative">
              <input
                type="file"
                id="upload-profil"
                name="logo"
                class="absolute scale-[13] translate-x-[100px] opacity-0 cursor-pointer" />
              <i class="fa-solid fa-image text-[36px] text-gray-600" id="icon-preview"></i>
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

        <script>
          const input = document.getElementById('upload-profil');
          const previewBox = document.getElementById('preview-box');
          const icon = document.getElementById('icon-preview');

          function loadImage(logo) {
            previewBox.style.backgroundImage = `url('/assets/img/perusahaan/${logo}')`;
            icon.style.display = 'none'; // sembunyikan ikon jika ada gambar
          }
          <?php
          if (isset($dataPerusahaan['logo'])) {
            $logo = $dataPerusahaan["logo"];

            echo "loadImage('$logo')";
          }
          ?>

          input.addEventListener('change', function(event) {
            const file = event.target.files[0];

            if (file && file.type.startsWith('image/')) {
              const reader = new FileReader();
              reader.onload = function(e) {
                previewBox.style.backgroundImage = `url('${e.target.result}')`;
                icon.style.display = 'none'; // sembunyikan ikon jika ada gambar
              };
              reader.readAsDataURL(file);
            } else {
              previewBox.style.backgroundImage = '';
              icon.style.display = 'block';
            }
          });


          document.getElementById('formProfil').addEventListener('submit', async function(e) {
            e.preventDefault();

            const form = e.target;
            const formData = new FormData(form);

            try {
              console.log("helooo");

              const response = await fetch('/api/form/handle-perusahaan-profile.php', {
                method: 'POST',
                body: formData,
              });


              if (response.redirected) {
                window.location.href = response.url; // Handle redirect jika sukses/error
                return;
              }

              console.log(response);
              const result = await response.json();
              console.log(result);

              if (result.status === 'no_changes') {
                alert(result.message);
              } else if (result.error) {
                alert('Error: ' + result.error);
              } else {
                alert('Profil berhasil diperbarui.');
              }

            } catch (error) {
              console.error('Gagal mengirim data:', error);
              alert('Terjadi kesalahan saat mengirim data.');
            }
          });

          // 🔽 Muat data provinsi
          async function loadProvinsis(provinsiId) {
            const response = await fetch('/api/provinsi.php');
            const data = await response.json();

            const provinsiSelect = document.querySelector('select[name="provinsi"]');
            if (provinsiSelect.innerHTML == '') {
              provinsiSelect.innerHTML = '<option value="">Pilih Provinsi</option>';
            }

            data.forEach(provinsi => {
              const option = document.createElement('option');
              option.value = provinsi.id;
              option.textContent = provinsi.name;
              provinsiSelect.appendChild(option);
            });
          }

          // 🔽 Muat kabupaten berdasarkan provinsi_id
          async function loadKabupatens(provinsiId) {
            const kabupatenSelect = document.querySelector('select[name="kabupaten"]');
            kabupatenSelect.innerHTML = '<option value="">Memuat kabupaten...</option>';
            document.querySelector('select[name="kecamatan"]').innerHTML = '<option value="">Pilih Kecamatan</option>';

            if (!provinsiId) {
              kabupatenSelect.innerHTML = '<option value="">Pilih Kabupaten</option>';
              return;
            }

            const response = await fetch(`/api/kabupaten.php?provinsi_id=${provinsiId}`);
            const data = await response.json();

            kabupatenSelect.innerHTML = '<option value="">Pilih Kabupaten</option>';
            data.forEach(kabupaten => {
              const option = document.createElement('option');
              option.value = kabupaten.id;
              option.textContent = kabupaten.name;
              kabupatenSelect.appendChild(option);
            });
          }

          // 🔽 Muat kecamatan berdasarkan kabupaten_id
          async function loadKecamatans(kabupatenId) {
            const kecamatanSelect = document.querySelector('select[name="kecamatan"]');
            kecamatanSelect.innerHTML = '<option value="">Memuat kecamatan...</option>';

            if (!kabupatenId) {
              kecamatanSelect.innerHTML = '<option value="">Pilih Kecamatan</option>';
              return;
            }

            const response = await fetch(`/api/kecamatan.php?kabupaten_id=${kabupatenId}`);
            const data = await response.json();

            kecamatanSelect.innerHTML = '<option value="">Pilih Kecamatan</option>';
            data.forEach(kecamatan => {
              const option = document.createElement('option');
              option.value = kecamatan.id;
              option.textContent = kecamatan.name;
              kecamatanSelect.appendChild(option);
            });
          }

          document.addEventListener('DOMContentLoaded', () => {
            loadProvinsis();

            const provinsiSelect = document.querySelector('select[name="provinsi"]');
            const kabupatenSelect = document.querySelector('select[name="kabupaten"]');

            provinsiSelect.addEventListener('change', (e) => {
              loadKabupatens(e.target.value);
            });

            kabupatenSelect.addEventListener('change', (e) => {
              loadKecamatans(e.target.value);
            });
          });
        </script>

      </form>

      <form action="tambah-lowongan.php" method="POST" id="input-lowongan" enctype="multipart/form-data" class="menu w-full max-h-[572px] overflow-y-auto flex-col items-end">
        <div class="flex flex-col w-full p-5">
          <input type="hidden" name="id_perusahaan" value="<?= $id_perusahaan ?>">

          <div class="flex w-full">
            <div class="flex-1 px-5 py-2">
              <label class="text-white font-bold">Upload Banner</label>
              <div id="preview-banner" style="background-size: cover;"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none border-2 border-dashed border-gray-400 h-[200px] shadow-sm flex justify-center items-center overflow-hidden relative">
                <input type="file" name="banner"
                  class="absolute scale-[13] translate-x-[100px] opacity-0 cursor-pointer" id="upload-banner"/>
                <i class="fa-solid fa-image text-[36px] text-gray-600" id="icon-banner"></i>
              </div>

              <script>
                const inputBanner = document.getElementById('upload-banner');
                const previewBoxBanner = document.getElementById('preview-banner');
                const iconBanner = document.getElementById('icon-bannner');

                function loadImage(logo) {
                  previewBoxBanner.style.backgroundImage = `url('/assets/img/perusahaan/${logo}')`;
                  iconBanner.style.display = 'none'; // sembunyikan ikon jika ada gambar
                }
                <?php
                if (isset($dataPerusahaan['logo'])) {
                  $logo = $dataPerusahaan["logo"];

                  echo "loadImage('$logo')";
                }
                ?>

                inputBanner.addEventListener('change', function(event) {
                  const file = event.target.files[0];

                  if (file && file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                      previewBoxBanner.style.backgroundImage = `url('${e.target.result}')`;
                      iconBanner.style.display = 'none'; // sembunyikan ikon jika ada gambar
                    };
                    reader.readAsDataURL(file);
                  } else {
                    previewBoxBanner.style.backgroundImage = '';
                    iconBanner.style.display = 'block';
                  }
                });
              </script>
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

              <tbody id="document-container">
                <tr class="row-document">
                  <td class="w-[35px]">
                    <button type="button" class="button-document border w-[30px] h-[30px] rounded-full flex items-center justify-center">
                      <i class="fa-solid fa-minus"></i>
                    </button>
                  </td>
                  <td class="px-[15px] py-[10px]">
                    <input type="text" id="nama-dokumen0" name="dokumen0" placeholder="Contoh: CV" required
                      class="w-full p-[10px] border border-[#ccc] rounded-[10px] text-sm focus:outline-none" />
                  </td>
                  <td class="px-[15px] py-[10px]">
                    <select id="jenis-file0" required name="type0"
                      class="w-full p-[10px] border border-[#ccc] rounded-[10px] text-sm focus:outline-none">
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

        <input type="hidden" name="rows" id="rows">
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
              <th class="p-[10px]">Lowongan</th>
              <th class="p-[10px]">Mahasiswa</th>
              <th class="p-[10px]">Waktu Apply</th>
              <th class="p-[10px]">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $dataPelamar = mysqli_query($connect, "SELECT a.*, b.nama, c.judul FROM `detail_apply` a INNER JOIN mahasiswa b ON a.id_mhs=b.id_mhs INNER JOIN lowongan c ON a.id_lowongan=c.id_lowongan WHERE c.id_perusahaan='$id_perusahaan';");
            if (mysqli_num_rows($dataPelamar) > 0) {
              while ($rowPelamar = mysqli_fetch_assoc($dataPelamar)) {
            ?>
                <tr class="text-center border-y border-gray-400">
                  <td class="p-[10px]"><?= $rowPelamar['judul'] ?></td>
                  <td class="p-[10px]"><?= $rowPelamar['nama'] ?></td>
                  <td class="p-[10px]"><?= $rowPelamar['waktu_apply'] ?></td>
                  <td class="p-[10px]">
                    <?php
                    if ($rowPelamar['status']  == 'Menunggu') {
                    ?>
                      <a href="./data-pelamar/?id_mhs=<?= $rowPelamar['id_mhs'] ?>&&?id_lowongan=<?= $rowPelamar['id_lowongan'] ?>"
                        class="px-[14px] py-[6px] text-white text-[13px] font-bold rounded-[20px] bg-red-400 inline-block">
                        Menunggu
                      </a>
                    <?php } else { ?>
                      <span class="px-[14px] py-[6px] text-white text-[13px] font-bold rounded-[20px] bg-emerald-400 inline-block">
                        Disetujui
                      </span>
                    <?php } ?>
                  </td>
                </tr>
              <?php }
            } else { ?>
              <tr class="text-center border-y border-gray-400">
                <td colspan="5" class="p-[10px]">Tidak ada data</td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>


    </section>

  </div>

  <script>
    function updateEventListeners() {
      const rowDocument = document.querySelectorAll('.row-document');
      rowDocument.forEach((row, i) => {
        if (i == rowDocument.length - 1) {
          row.querySelector('.button-document').innerHTML = `<i class="fa-solid fa-plus"> </i>`;
        } else {
          row.querySelector('.button-document').innerHTML = `<i class="fa-solid fa-minus"> </i>`;
        }
      })

      const buttons = document.querySelectorAll('.button-document');

      buttons.forEach((btn, i) => {
        btn.onclick = () => {
          const rows = document.querySelectorAll('.row-document');

          if (i === rows.length - 1) {
            document.querySelector('#document-container').innerHTML += `
        <tr class="row-document">
                  <td class="w-[35px]">
                    <button type="button" class="button-document border w-[30px] h-[30px] rounded-full flex items-center justify-center">
                      <i class="fa-solid fa-minus"></i>
                    </button>
                  </td>
                  <td class="px-[15px] py-[10px]">
                    <input type="text" id="nama-dokumen${i+1}"  name="dokumen${i+1}" placeholder="Contoh: CV"
                      class="w-full p-[10px] border border-[#ccc] rounded-[10px] text-sm focus:outline-none" required/>
                  </td>
                  <td class="px-[15px] py-[10px]">
                    <select id="jenis-file${i+1}" name="type${i+1}" required
                      class="w-full p-[10px] border border-[#ccc] rounded-[10px] text-sm focus:outline-none">
                      <option>PDF</option>
                      <option>PNG/JPG</option>
                      <option>DOCX</option>
                    </select>
                  </td>
                </tr>`;

            updateEventListeners();
          } else {
            const row = btn.closest('.row-document');
            row.remove();
            updateEventListeners();
          }
        };
      });

    }

    updateEventListeners();

    document.getElementById('input-lowongan').addEventListener('submit', function(e) {
      document.getElementById('rows').value = document.querySelectorAll('.row-document').length;
    });
  </script>
  </script>
  <script src="../../assets/js/dashboard.js"></script>
</body>

</html>