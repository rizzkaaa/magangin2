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
$id_mhs = $dataMahasiswa['id_mhs'];
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
        <?= dashboardMahasiswa($connect, $id_mhs) ?>
      </div>

      <form method="POST" enctype="multipart/form-data" action="/api/form/handle-mahasiswa-profile.php" id="profil" class="menu w-full  h-[572px] overflow-y-auto flex-col items-end justify-center">
        <?= profilMahasiswa() ?>

        <div class="mx-5 my-2">
          <button type="submit"
            class="bg-orange-500 text-white px-6 py-2 rounded-md cursor-pointer hover:bg-orange-600 transition-all duration-300">
            Simpan Profil
          </button>
        </div>
      </form>

      <div id="laporan-magang" class="menu w-full  h-[572px] overflow-y-auto flex-col items-center">
        <?= laporanMagang($connect, $id_mhs) ?>
      </div>

      <div id="jadwal-bimbingan" class="menu w-full  h-[572px] overflow-y-auto flex-col items-center">
        <?= jadwalBimbingan($connect, $dataMahasiswa['id_mhs']) ?>
      </div>

      <div id="notifikasi" class="menu flex-1 h-[572px] overflow-y-auto flex-col">
        <!-- Notification Content -->
        <div class="flex-1 p-6">
          <?php
          $queryNotif = mysqli_query($connect, "SELECT a.*, b.nama_dosen FROM notifikasi a LEFT JOIN dosen b ON a.id_dosen=b.id_dosen WHERE id_mhs= '$id_mhs'");
          while($rowNotif = mysqli_fetch_assoc($queryNotif)){
          ?>
          <div class="space-y-4" id="notificationsList">
            <div class="bg-white bg-opacity-10 notification-item read text-white p-6 rounded-xl shadow-lg">
              <div class="flex items-start justify-between">
                <div class="flex items-start space-x-4">
                  <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                    <i class="fas fa-bell text-white text-lg"></i>
                  </div>
                  <div class="flex-1">
                    <div class="flex items-center space-x-2 mb-2">
                      <h3 class="font-semibold text-lg"><?= $rowNotif['judul']?></h3>
                    </div>
                    <p class="text-white/90 mb-3"><?= $rowNotif['pesan']?></p>
                    <div class="flex items-center space-x-4 text-sm text-white/80">
                      <span><i class="fas fa-clock mr-1"></i><?= $rowNotif['created_at']?></span>
                      <span><i class="fas fa-user mr-1"></i><?= isset($rowNotif['nama_dosen']) ? $rowNotif['nama_dosen'] : 'Sistem'?></span>
                    </div>
                  </div>
                </div>
                <button class="text-white/60 hover:text-white">
                  <i class="fas fa-eye"></i>
                </button>
              </div>
            </div>
          </div>
          <?php }?>
        </div>
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