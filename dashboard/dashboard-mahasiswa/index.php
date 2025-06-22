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

      <form method="POST" action="/api/form/handle-mahasiswa-profile.php" id="profil" class="menu w-full  h-[572px] overflow-y-auto flex-col items-end justify-center">
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

      <div id="notifikasi" class="flex-1 flex flex-col">
        <!-- Top Bar -->
        <div class="bg-white shadow-sm border-b px-6 py-4">
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
              <h2 class="text-2xl font-bold text-gray-800">Notifikasi</h2>
              <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full">3 Baru</span>
            </div>
            <div class="flex items-center space-x-4">
              <div class="relative">
                <button class="flex items-center space-x-2 bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-lg transition-colors">
                  <i class="fas fa-filter text-gray-600"></i>
                  <span class="text-gray-700">Filter</span>
                </button>
              </div>
              <div class="flex items-center space-x-3">
                <span class="text-gray-600">Yopa Pitra Ramadhani</span>
                <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                  <i class="fas fa-user text-gray-600"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Notification Content -->
        <div class="flex-1 p-6">
          <!-- Filter Tabs -->
          <div class="mb-6">
            <div class="flex space-x-1 bg-gray-100 p-1 rounded-lg w-fit">
              <button id="allTab" class="px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-md transition-colors">
                Semua
              </button>
              <button id="unreadTab" class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-gray-800 rounded-md transition-colors">
                Belum Dibaca
              </button>
              <button id="readTab" class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-gray-800 rounded-md transition-colors">
                Sudah Dibaca
              </button>
            </div>
          </div>

          <!-- Notifications List -->
          <div class="space-y-4" id="notificationsList">
            <!-- Unread Notification -->
            <div class="notification-item unread text-white p-6 rounded-xl shadow-lg">
              <div class="flex items-start justify-between">
                <div class="flex items-start space-x-4">
                  <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                    <i class="fas fa-graduation-cap text-white text-lg"></i>
                  </div>
                  <div class="flex-1">
                    <div class="flex items-center space-x-2 mb-2">
                      <h3 class="font-semibold text-lg">Laporan Magang Disetujui</h3>
                      <span class="bg-white/20 text-xs px-2 py-1 rounded-full">Baru</span>
                    </div>
                    <p class="text-white/90 mb-3">Selamat! Laporan magang Anda telah disetujui oleh pembimbing. Anda dapat melanjutkan ke tahap presentasi.</p>
                    <div class="flex items-center space-x-4 text-sm text-white/80">
                      <span><i class="fas fa-clock mr-1"></i>2 jam yang lalu</span>
                      <span><i class="fas fa-user mr-1"></i>Dr. Ahmad Subhi</span>
                    </div>
                  </div>
                </div>
                <button class="text-white/60 hover:text-white">
                  <i class="fas fa-ellipsis-v"></i>
                </button>
              </div>
            </div>

            <!-- Unread Notification -->
            <div class="notification-item unread text-white p-6 rounded-xl shadow-lg">
              <div class="flex items-start justify-between">
                <div class="flex items-start space-x-4">
                  <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                    <i class="fas fa-calendar-alt text-white text-lg"></i>
                  </div>
                  <div class="flex-1">
                    <div class="flex items-center space-x-2 mb-2">
                      <h3 class="font-semibold text-lg">Jadwal Bimbingan Baru</h3>
                      <span class="bg-white/20 text-xs px-2 py-1 rounded-full">Baru</span>
                    </div>
                    <p class="text-white/90 mb-3">Jadwal bimbingan telah ditambahkan untuk hari Jumat, 28 Juni 2025 pukul 10:00 WIB. Mohon hadir tepat waktu.</p>
                    <div class="flex items-center space-x-4 text-sm text-white/80">
                      <span><i class="fas fa-clock mr-1"></i>5 jam yang lalu</span>
                      <span><i class="fas fa-user mr-1"></i>Sistem</span>
                    </div>
                  </div>
                </div>
                <button class="text-white/60 hover:text-white">
                  <i class="fas fa-ellipsis-v"></i>
                </button>
              </div>
            </div>

            <!-- Unread Notification -->
            <div class="notification-item unread text-white p-6 rounded-xl shadow-lg">
              <div class="flex items-start justify-between">
                <div class="flex items-start space-x-4">
                  <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                    <i class="fas fa-exclamation-triangle text-white text-lg"></i>
                  </div>
                  <div class="flex-1">
                    <div class="flex items-center space-x-2 mb-2">
                      <h3 class="font-semibold text-lg">Deadline Laporan Mendekati</h3>
                      <span class="bg-red-500 text-xs px-2 py-1 rounded-full">Urgent</span>
                    </div>
                    <p class="text-white/90 mb-3">Pengingat: Deadline pengumpulan laporan magang adalah 3 hari lagi (25 Juni 2025). Pastikan Anda sudah menyelesaikan semua bagian.</p>
                    <div class="flex items-center space-x-4 text-sm text-white/80">
                      <span><i class="fas fa-clock mr-1"></i>1 hari yang lalu</span>
                      <span><i class="fas fa-user mr-1"></i>Sistem</span>
                    </div>
                  </div>
                </div>
                <button class="text-white/60 hover:text-white">
                  <i class="fas fa-ellipsis-v"></i>
                </button>
              </div>
            </div>

            <!-- Read Notification -->
            <div class="notification-item read text-white p-6 rounded-xl shadow-lg">
              <div class="flex items-start justify-between">
                <div class="flex items-start space-x-4">
                  <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                    <i class="fas fa-check-circle text-white text-lg"></i>
                  </div>
                  <div class="flex-1">
                    <div class="flex items-center space-x-2 mb-2">
                      <h3 class="font-semibold text-lg">Profil Berhasil Diperbarui</h3>
                    </div>
                    <p class="text-white/90 mb-3">Profil Anda telah berhasil diperbarui. Perubahan data akan diterapkan dalam 24 jam.</p>
                    <div class="flex items-center space-x-4 text-sm text-white/80">
                      <span><i class="fas fa-clock mr-1"></i>3 hari yang lalu</span>
                      <span><i class="fas fa-user mr-1"></i>Sistem</span>
                    </div>
                  </div>
                </div>
                <button class="text-white/60 hover:text-white">
                  <i class="fas fa-ellipsis-v"></i>
                </button>
              </div>
            </div>

            <!-- Read Notification -->
            <div class="notification-item read text-white p-6 rounded-xl shadow-lg">
              <div class="flex items-start justify-between">
                <div class="flex items-start space-x-4">
                  <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                    <i class="fas fa-info-circle text-white text-lg"></i>
                  </div>
                  <div class="flex-1">
                    <div class="flex items-center space-x-2 mb-2">
                      <h3 class="font-semibold text-lg">Selamat Datang di Dashboard</h3>
                    </div>
                    <p class="text-white/90 mb-3">Selamat datang di dashboard mahasiswa! Gunakan menu di sebelah kiri untuk navigasi.</p>
                    <div class="flex items-center space-x-4 text-sm text-white/80">
                      <span><i class="fas fa-clock mr-1"></i>1 minggu yang lalu</span>
                      <span><i class="fas fa-user mr-1"></i>Sistem</span>
                    </div>
                  </div>
                </div>
                <button class="text-white/60 hover:text-white">
                  <i class="fas fa-ellipsis-v"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Load More Button -->
          <div class="text-center mt-8">
            <button class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg transition-colors">
              <i class="fas fa-arrow-down mr-2"></i>
              Muat Lebih Banyak
            </button>
          </div>
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