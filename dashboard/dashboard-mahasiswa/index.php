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
        <?= dashboardMahasiswa() ?>
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
        <?= laporanMagang() ?>
      </div>

      <div id="jadwal-bimbingan" class="menu w-full  h-[572px] overflow-y-auto flex-col items-center">
        <?= jadwalBimbingan() ?>
      </div>
    </section>

  </div>

  <script src="../../assets/js/dashboard.js"></script>

  <script>
    window.addEventListener("hashchange", () => {
      if (window.location.hash == "#edit-laporan" || window.location.hash == "#tambah-laporan" || window.location.hash == "#hapus-laporan" || window.location.hash == "#laporan-magang") {
        document.getElementById("laporan-magang").style.display = "flex"
      } else {
        document.getElementById("laporan-magang").style.display = "none"
      }
    });
  </script>
</body>

</html>