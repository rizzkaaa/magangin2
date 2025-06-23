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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama = $_POST['nama_perusahaan'];
  $email = $_POST['email_perusahaan'];
  $alamat = $_POST['alamat'];
  $provinsi = $_POST['provinsi'];
  $kabupaten = $_POST['kabupaten'];
  $kecamatan = $_POST['kecamatan'];
  $desa = $_POST['desa'];

  $logo = $dataPerusahaan['logo_perusahaan']; // default

  // Proses upload jika ada file baru
  if (isset($_FILES['logo']) && $_FILES['logo']['error'] === UPLOAD_ERR_OK) {
    $tmpName = $_FILES['logo']['tmp_name'];
    $fileName = time() . '_' . basename($_FILES['logo']['name']);
    $uploadDir = '../../uploads/logo/';
    if (!is_dir($uploadDir)) {
      mkdir($uploadDir, 0777, true);
    }
    move_uploaded_file($tmpName, $uploadDir . $fileName);
    $logo = $fileName;
  }

  // Simpan ke DB
  $query = "UPDATE perusahaan SET 
        nama_perusahaan='$nama',
        email_perusahaan='$email',
        alamat='$alamat',
        provinsi='$provinsi',
        kabupaten='$kabupaten',
        kecamatan='$kecamatan',
        desa='$desa',
        logo_perusahaan='$logo',
        updated_at=NOW()
        WHERE id_user = '$idUser'";

  mysqli_query($connect, $query);
  header("Location: " . $_SERVER['REQUEST_URI']); // refresh halaman
  exit;
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
  <link rel="stylesheet" href="../../assets/css/dashboard.css" />
</head>

<body class="h-screen flex flex-col overflow-hidden">
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
    ]); ?>

    <section class="bg-[#1d222efb] w-full flex flex-col items-center">
      <div id="dashboard" class="menu w-full h-[572px] overflow-y-auto flex-col items-center justify-center">
        <?php
        $idPerusahaan = $dataPerusahaan['id_perusahaan'];
        $lowongans = mysqli_query($connect, "SELECT * FROM lowongan WHERE id_perusahaan = '$idPerusahaan'");
        ?>

        <div class="w-full h-full flex flex-wrap justify-evenly items-start">
          <?php if (mysqli_num_rows($lowongans) === 0) : ?>
            <div class="flex flex-col items-center justify-center text-white w-full h-full">
              <p>Anda belum mengupload lowongan apapun.</p>
              <p>Upload lowongan anda disini..</p>
              <a href="#input-lowongan"
                class="px-5 py-2 rounded-md bg-[rgb(61,99,221)] text-white font-semibold hover:bg-[rgb(27,61,173)] cursor-pointer">
                Input Lowongan
              </a>
            </div>
          <?php else : ?>
            <?php while ($l = mysqli_fetch_assoc($lowongans)) : ?>
              <?= cardLowongan($connect, $l) ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>

      <form class="menu w-full flex-col items-end max-h-[572px] overflow-y-auto" id="profil" method="POST" enctype="multipart/form-data">
        <div class="flex w-full p-5">
          <!-- Form kiri -->
          <div class="flex-2 w-2/3">
            <div class="flex flex-col px-5 py-2">
              <label class="text-white font-bold">Nama Perusahaan</label>
              <input type="text" name="nama_perusahaan" value="<?= $dataPerusahaan['nama_perusahaan'] ?>" class="bg-[#e8f0fe] rounded-[10px] shadow-sm focus:outline-none" />
            </div>

            <div class="flex flex-col px-5 py-2">
              <label class="text-white font-bold">Email</label>
              <input type="email" name="email_perusahaan" value="<?= $dataPerusahaan['email_perusahaan'] ?>" class="bg-[#e8f0fe] rounded-[10px] shadow-sm focus:outline-none" />
            </div>

            <div class="flex flex-col px-5 py-2">
              <label class="text-white font-bold">Alamat</label>
              <textarea name="alamat"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none"><?= isset($dataPerusahaan['alamat']) ? $dataPerusahaan['alamat'] : '' ?>
              </textarea>
            </div>

            <div class="flex">
              <div class="flex-1">
                <div class="flex flex-col px-5 py-2">
                  <label class="text-white font-bold">Provinsi</label>
                  <select name="provinsi" class="bg-[#e8f0fe] rounded-[10px] shadow-sm focus:outline-none">
                    <option disabled <?= $dataPerusahaan['provinsi'] == '' ? 'selected' : '' ?>>Pilih Provinsi</option>
                    <option <?= $dataPerusahaan['provinsi'] == 'Bangka Belitung' ? 'selected' : '' ?>>Bangka Belitung</option>
                    <option <?= $dataPerusahaan['provinsi'] == 'DKI Jakarta' ? 'selected' : '' ?>>DKI Jakarta</option>
                    <option <?= $dataPerusahaan['provinsi'] == 'Jawa Barat' ? 'selected' : '' ?>>Jawa Barat</option>
                    <option <?= $dataPerusahaan['provinsi'] == 'Jawa Tengah' ? 'selected' : '' ?>>Jawa Tengah</option>
                    <option <?= $dataPerusahaan['provinsi'] == 'Jawa Timur' ? 'selected' : '' ?>>Jawa Timur</option>
                  </select>
                </div>

                <div class="flex flex-col px-5 py-2">
                  <label class="text-white font-bold">Kabupaten</label>
                  <select name="kabupaten" class="bg-[#e8f0fe] rounded-[10px] shadow-sm focus:outline-none">
                    <option disabled <?= $dataPerusahaan['kabupaten'] == '' ? 'selected' : '' ?>>Pilih Kabupaten</option>
                    <option <?= $dataPerusahaan['kabupaten'] == 'Pangkal Pinang' ? 'selected' : '' ?>>Pangkal Pinang</option>
                    <option <?= $dataPerusahaan['kabupaten'] == 'Bangka' ? 'selected' : '' ?>>Bangka</option>
                    <option <?= $dataPerusahaan['kabupaten'] == 'Belitung' ? 'selected' : '' ?>>Belitung</option>
                    <option <?= $dataPerusahaan['kabupaten'] == 'Bandung' ? 'selected' : '' ?>>Bandung</option>
                    <option <?= $dataPerusahaan['kabupaten'] == 'Semarang' ? 'selected' : '' ?>>Semarang</option>
                    <option <?= $dataPerusahaan['kabupaten'] == 'Surabaya' ? 'selected' : '' ?>>Surabaya</option>
                  </select>
                </div>
              </div>

              <div class="flex-1">
                <div class="flex flex-col px-5 py-2">
                  <label class="text-white font-bold">Kecamatan</label>
                  <select name="kecamatan" class="bg-[#e8f0fe] rounded-[10px] shadow-sm focus:outline-none">
                    <option disabled <?= $dataPerusahaan['kecamatan'] == '' ? 'selected' : '' ?>>Pilih Kecamatan</option>
                    <option <?= $dataPerusahaan['kecamatan'] == 'Gerunggang' ? 'selected' : '' ?>>Gerunggang</option>
                    <option <?= $dataPerusahaan['kecamatan'] == 'Taman Sari' ? 'selected' : '' ?>>Taman Sari</option>
                    <option <?= $dataPerusahaan['kecamatan'] == 'Bukit Intan' ? 'selected' : '' ?>>Bukit Intan</option>
                    <option <?= $dataPerusahaan['kecamatan'] == 'Cibiru' ? 'selected' : '' ?>>Cibiru</option>
                    <option <?= $dataPerusahaan['kecamatan'] == 'Tegalsari' ? 'selected' : '' ?>>Tegalsari</option>
                  </select>
                </div>

                <div class="flex flex-col px-5 py-2">
                  <label class="text-white font-bold">Desa</label>
                  <input type="text" name="desa" value="<?= $dataPerusahaan['desa'] ?>" class="bg-[#e8f0fe] rounded-[10px] shadow-sm focus:outline-none" />
                </div>
              </div>
            </div>
          </div>


          <!-- Form kanan -->
          <div class="flex-1 mx-5 my-2">
            <label class="text-white font-bold">Logo Perusahaan</label>
            <div class="bg-[#e8f0fe] rounded-[20px] border-2 border-dashed border-gray-400 h-[400px] shadow-sm flex justify-center items-center overflow-hidden relative">
              <input type="file" name="logo" class="absolute scale-[13] translate-x-[100px] opacity-0 cursor-pointer" />
              <?php if (!empty($dataPerusahaan['logo_perusahaan'])): ?>
                <img src="../../uploads/logo/<?= $dataPerusahaan['logo_perusahaan'] ?>" alt="Logo" class="object-contain h-full" />
              <?php else: ?>
                <i class="fa-solid fa-image text-[36px] text-gray-600"></i>
              <?php endif; ?>
            </div>
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
          </script>

        </div>

        <!-- Tombol -->
        <div class="mx-5 my-2">
          <button type="submit"
            class="bg-orange-500 text-white px-6 py-2 rounded-md cursor-pointer hover:bg-orange-600 transition-all duration-300">
            Simpan Profil
          </button>
        </div>

        <script>
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


      <form action="input_lowongan.php" method="POST" enctype="multipart/form-data" id="input-lowongan" class="menu w-full max-h-[572px] overflow-y-auto flex-col items-end">

        <div class="flex flex-col w-full p-5">
          <input type="hidden" name="id_perusahaan" value="<?= $dataPerusahaan['id_perusahaan'] ?>">

          <div class="flex w-full">
            <div class="flex-1 px-5 py-2">
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

            <table id="dokumen-table" class="w-full">
              <thead>
                <tr>
                  <th></th>
                  <th class="text-start px-[15px] py-[10px]">Nama Dokumen</th>
                  <th class="text-start px-[15px] py-[10px]">Jenis File</th>
                </tr>
              </thead>
              <tbody>
                <tr class="dokumen-row">
                  <td class="w-[35px]">
                    <button type="button" class="btn-toggle border w-[30px] h-[30px] rounded-full flex items-center justify-center bg-white text-black">
                      <i class="fa-solid fa-plus"></i>
                    </button>
                  </td>
                  <td class="px-[15px] py-[10px]">
                    <input type="text" id="nama-dokumen" name="dokumen0" placeholder="Contoh: CV"
                      class="w-full p-[10px] border border-[#ccc] rounded-[10px] text-sm focus:outline-none" required />
                  </td>
                  <td class="px-[15px] py-[10px]">
                    <select id="jenis-file" name="type0" required
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

        <input type="hidden" name="rows" id="rows" value="1">
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
              <th class="p-[10px]">ID Pelamar</th>
              <th class="p-[10px]">Tanggal</th>
              <th class="p-[10px]">Jam</th>
              <th class="p-[10px]">Status</th>
              <th class="p-[10px]">detail pelamar</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "SELECT * FROM lamaran ORDER BY tanggal DESC";
            $result = mysqli_query($connect, $query);

            while ($row = mysqli_fetch_assoc($result)) :
            ?>
              <tr class="text-center border-y border-gray-400">
                <td class="p-[10px]"><?= $row['id_lowongan'] ?></td>
                <td class="p-[10px]"><?= $row['id_peserta'] ?></td>
                <td class="p-[10px]"><?= date('d/m/Y', strtotime($row['tanggal'])) ?></td>
                <td class="p-[10px]"><?= date('H.i', strtotime($row['jam'])) ?></td>
                <td class="p-[10px]">
                  <form method="POST" action="function/get_lamaran.php">
                    <input type="hidden" name="id_lamaran" value="<?= $row['id_lamaran'] ?>">
                    <select name="status" onchange="this.form.submit()">
                      <option value="Menunggu" <?= $row['status'] == 'Menunggu' ? 'selected' : '' ?>>Menunggu</option>
                      <option value="Disetujui" <?= $row['status'] == 'Disetujui' ? 'selected' : '' ?>>Disetujui</option>
                      <option value="Ditolak" <?= $row['status'] == 'Ditolak' ? 'selected' : '' ?>>Ditolak</option>
                    </select>
                  </form>

                <td class="p-[10px]"><a href="data-pelamar/index.php?id_lamaran=<?= $row['id_lamaran'] ?>">detail</a></td>


                </td>
              </tr>
            <?php endwhile; ?>
          </tbody>


        </table>
      </div>


    </section>

  </div>
  <script src="../../assets/js/dashboard.js"></script>
  <script>
    function updateEventListeners() {
      const rowDocument = document.querySelectorAll('.row-document');
      rowDocument.forEach((row, i) => {
        if (i == rowDocument.length - 1) {
          row.querySelector('.button-document').innerHTML = `<i class="fa-solid fa-plus"></i>`;
        } else {
          row.querySelector('.button-document').innerHTML = `<i class="fa-solid fa-minus"></i>`;
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
                    <input type="text" id="nama-dokumen"  name="dokumen${i}" placeholder="Contoh: CV"
                      class="w-full p-[10px] border border-[#ccc] rounded-[10px] text-sm focus:outline-none" required/>
                  </td>
                  <td class="px-[15px] py-[10px]">
                    <select id="jenis-file" name="type${i}" required
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

    document.querySelector('form').addEventListener('submit', function(e) {
      document.getElementById('rows').value = document.querySelectorAll('.row-document').length;
    });
  </script>


</body>

</html>