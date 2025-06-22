<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../../db.php';
include '../../middleware/role.php';
include '../components/render-dashboard-mahasiswa.php';
include '../components/render-components.php';

only(['mahasiswa']);

$idUser = $_SESSION['id_user'];
$email = $_SESSION['email'];

$dataMahasiswa = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM mahasiswa WHERE id_user = '$idUser'"));
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Magangin | Dashboard Mahasiswa</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <link rel="stylesheet" href="../../assets/css/dashboard.css">
</head>

<body class="h-screen flex flex-col font-sans">
  <?php
  $nama = $dataMahasiswa['nama'];
  echo renderHeader($nama, $email, 'Jadilah');
  ?>

  <div class="flex flex-1 relative">
    <?= renderSidebar([
      ['icon' => 'home', 'label' => 'Dashboard', 'url' => '#dashboard'],
      ['icon' => 'user', 'label' => 'Profil', 'url' => '#profil'],
      ['icon' => 'file-contract', 'label' => 'Laporan Magang', 'url' => '#laporan-magang'],
      ['icon' => 'calendar-days', 'label' => 'Jadwal Bimbingan', 'url' => '#jadwal-bimbingan'],
      ['icon' => 'bell', 'label' => 'Notifikasi', 'url' => '#notifikasi'],
    ]);
    ?>

    <section class="bg-[#1d222efb] w-full h-full overflow-y-auto">
      <div id="dashboard" class="menu w-full  h-[572px] overflow-y-auto flex-col items-center justify-center">
        <?= dashboardMahasiswa($connect, $dataMahasiswa['id_mhs']) ?>
      </div>

      <form method="POST" action="{{ route('profil.submit') }}" id="profil" class="menu w-full  h-[572px] overflow-y-auto flex-col items-end justify-center">
        <?= profilMahasiswa() ?>

        <div class="mx-5 my-2">
          <button type="submit"
            class="bg-orange-500 text-white px-6 py-2 rounded-md cursor-pointer hover:bg-orange-600 transition-all duration-300">
            Simpan Profil
          </button>
        </div>
      </form>

      <div id="laporan-magang" class="menu w-full  h-[572px] overflow-y-auto flex-col items-center">
        <?= laporanMagang($connect, $dataMahasiswa['id_mhs']) ?>
      </div>

      <div id="jadwal-bimbingan" class="menu w-full  h-[572px] overflow-y-auto flex-col items-center">
        <?= jadwalBimbingan() ?>
      </div>

      <div id="notifikasi">
        
      </div>
    </section>

  </div>

  <script src="../../assets/js/dashboard.js"></script>

  <script>
    window.addEventListener("hashchange", () => {
      const no = document.querySelectorAll('.no');
      const isMatch = Array.from(no).some((n, i) => {
        return window.location.hash === `#edit-laporan${i + 1}` ||
          window.location.hash === `#hapus-laporan${i + 1}`;
      });

      if (isMatch || window.location.hash === "#laporan-magang" || window.location.hash === "#tambah-laporan") {
        document.getElementById("laporan-magang").style.display = "flex";
      } else {
        document.getElementById("laporan-magang").style.display = "none";
      }
    });
  </script>


  <script>
    // 🔽 Muat data provinsi
    async function loadProvinsis() {
      const response = await fetch('/api/provinsi.php');
      const data = await response.json();

      const provinsiSelect = document.querySelector('select[name="provinsi"]');
      provinsiSelect.innerHTML = '<option value="">Pilih Provinsi</option>';

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
      console.log(data);

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
</body>

</html>