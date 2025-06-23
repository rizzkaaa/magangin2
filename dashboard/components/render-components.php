<?php

function renderHeader($nama, $email, $quote)
{
  ob_start(); ?>

  <header class="flex justify-between items-center bg-[#455bd4] text-white px-8 py-3">
    <div class="flex flex-col  w-[40px] relative group" id="toggle-menu">
      <input type="checkbox" class="peer cursor-pointer absolute z-10 opacity-0 w-[33px] h-[33px]">
      <span
        class="block w-[30px] h-[3px] my-[3px] bg-white rounded transition-transform duration-500 peer-checked:rotate-45 peer-checked:translate-x-[1px] peer-checked:translate-y-[8px]"></span>
      <span
        class="block w-[30px] h-[3px] my-[3px] bg-white rounded transition-transform duration-500 peer-checked:scale-0 peer-checked:opacity-0"></span>
      <span
        class="block w-[30px] h-[3px] my-[3px] bg-white rounded transition-transform duration-500 peer-checked:-rotate-45 peer-checked:translate-x-[1px] peer-checked:-translate-y-[10px]"></span>
    </div>

    <div class="w-[60%]">
      <h2 class="font-semibold text-[25px]">Selamat Datang, <span id="nama-perusahaan"><?php echo $nama ?></span>
      </h2>
      <p class="text-sm"><?php echo $quote ?> generasi genius selanjutnya.</p>
    </div>

    <div class="flex items-center gap-3">
      <div>
        <h4 class="font-semibold text-[18px]"><?php echo $nama ?></h4>
        <p class="text-sm"><?php echo $email ?></p>
      </div>
      <img src="../../assets/img/default.jpeg" alt="Foto Profil" class="w-[50px] h-[50px] rounded-full object-cover">
    </div>
  </header>
<?php
  return ob_get_clean();
}

function renderSidebar($menus = [])
{
  ob_start(); ?>
  <aside id="sidebar" class="justify-between w-0 overflow-hidden
 transition-all duration-1000 ease-in-out bg-[#b7c1ff] flex flex-col">
    <ul class="flex-">
      <?php foreach ($menus as $menu): ?>
        <li>
          <a href="<?= $menu['url'] ?>"
            class="block my-[15px] border-y border-gray-400 py-3 px-4 rounded-xl hover:bg-[#1b3dad] hover:text-white">
            <i class="fa-solid fa-<?= $menu['icon'] ?> mr-2"></i> <?= $menu['label'] ?>
          </a>
        </li>
      <?php endforeach; ?>

    </ul>

    <a href="" onclick="confirm('Anda yakin ingin keluar? ') ? window.location.href = '../../logout.php' : ''"
      class="group text-center text-black font-bold text-lg mt-8 no-underline">
      <i class="fa-solid fa-right-from-bracket mr-2 transition-transform group-hover:rotate-y-[360deg] duration-1000"></i>
      Logout
    </a>
  </aside>
<?php
  return ob_get_clean();
}

function cardLowongan($connect, $lowongan)
{

  $totalSemua = mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT('id_lowongan') AS total FROM lamaran WHERE id_lowongan = '" . $lowongan['id_lowongan'] . "' AND status = 'Menunggu'"));
  $totalTerima = mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT('id_lowongan') AS total FROM lamaran WHERE id_lowongan = '" . $lowongan['id_lowongan'] . "' AND status = 'Disetujui'"));
  $totalTolak = mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT('id_lowongan') AS total FROM lamaran WHERE id_lowongan = '" . $lowongan['id_lowongan'] . "' AND status = 'Ditolak'"));
  ob_start(); ?>
  <div class="h-fit bg-white p-[15px] my-[30px] rounded-[20px] shadow-sm shadow-white">
    <a class="block text-[20px] font-bold border-b  pb-[5px] mb-[10px]">
      <?= htmlspecialchars($lowongan['judul']) ?>
    </a>

    <div class="flex flex-wrap w-[320px]">
      <div class="w-[150px] m-[5px] bg-[#e0edff] p-[10px] rounded-[12px] flex items-center justify-between">
        <div class="text-[18px]">📅</div>
        <div class="text-[12px] text-[#111827] flex-1 text-center">
          <?= date("d M Y", strtotime($lowongan['mulai_magang'])) ?> -
          <br />
          <?= date("d M Y", strtotime($lowongan['selesai_magang'])) ?>
        </div>
      </div>

      <div class="w-[150px] m-[5px] bg-[#e0edff] p-[10px] rounded-[12px] flex items-center justify-between">
        <div class="text-[18px]">👥</div>
        <div class="text-[12px] text-[#111827] flex-1 text-center">Total Pelamar</div>
        <div class="font-bold text-[14px] text-[#1e3a8a]"><?= $totalSemua['total'] ?></div>
      </div>

      <div class="w-[150px] m-[5px] bg-[#e0edff] p-[10px] rounded-[12px] flex items-center justify-between">
        <div class="text-[18px]">✅</div>
        <div class="text-[12px] text-[#111827] flex-1 text-center">Peserta Diterima</div>
        <div class="font-bold text-[14px] text-[#1e3a8a]"><?= $totalTerima['total'] ?></div>
      </div>

      <div class="w-[150px] m-[5px] bg-[#e0edff] p-[10px] rounded-[12px] flex items-center justify-between">
        <div class="text-[18px]">❌</div>
        <div class="text-[12px] text-[#111827] flex-1 text-center">Peserta Tidak Diterima</div>
        <div class="font-bold text-[14px] text-[#1e3a8a]"><?= $totalTolak['total'] ?></div>
      </div>
    </div>
  </div>
<?php
  return ob_get_clean();
}

function cardLowongan2()
{
  ob_start(); ?>

  <div class="h-fit bg-white p-[15px] my-[30px] rounded-[20px] shadow-sm shadow-white">
    <a class="block text-[20px] font-bold border-b  pb-[5px] mb-[10px]">
      Judul lowongan
    </a>

    <div class="flex flex-wrap w-[320px]">
      <!-- Tanggal -->
      <div class="w-[150px] m-[5px] bg-[#e0edff] p-[10px] rounded-[12px] flex items-center justify-between">
        <div class="text-[18px]">📅</div>
        <div class="text-[12px] text-[#111827] flex-1 text-center">
          12 Juni 2025 -<br />20 Juli 2025
        </div>
      </div>

      <!-- Total Pelamar -->
      <a href="" class="w-[150px] m-[5px] bg-[#e0edff] p-[10px] rounded-[12px] flex items-center justify-between">
        <div class="text-[18px]">👥</div>
        <div class="text-[12px] text-[#111827] flex-1 text-center">
          Total Pelamar
        </div>
        <div class="font-bold text-[14px] text-[#1e3a8a]">123</div>
      </a>

      <!-- Peserta Diterima -->
      <a href="" class="w-[150px] m-[5px] bg-[#e0edff] p-[10px] rounded-[12px] flex items-center justify-between">
        <div class="text-[18px]">✅</div>
        <div class="text-[12px] text-[#111827] flex-1 text-center">
          Peserta Diterima
        </div>
        <div class="font-bold text-[14px] text-[#1e3a8a]">123</div>
      </a>

      <!-- Peserta Tidak Diterima -->
      <a href="" class="w-[150px] m-[5px] bg-[#e0edff] p-[10px] rounded-[12px] flex items-center justify-between">
        <div class="text-[18px]">❌</div>
        <div class="text-[12px] text-[#111827] flex-1 text-center">
          Peserta Tidak diterima
        </div>
        <div class="font-bold text-[14px] text-[#1e3a8a]">123</div>
      </a>
    </div>
  </div>
<?php
  return ob_get_clean();
}

function profilMahasiswa($connect, $id_mhs)
{
  ob_start();
  $dataMhs = mysqli_fetch_assoc(mysqli_query($connect, "SELECT a.*, b.email FROM mahasiswa a INNER JOIN users b ON a.id_user=b.id_user WHERE id_mhs='$id_mhs'"));

  if ($dataMhs["provinsi"]) {
    $idProvinsi =  $dataMhs["provinsi"];
    $provinsi = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `provinsis` WHERE id = '$idProvinsi'"));
    $idkabupaten =  $dataMhs["kabupaten"];
    $kabupaten = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `kabupatens` WHERE id = '$idkabupaten'"));

    $idkecamatan =  $dataMhs["kecamatan"];
    $kecamatan = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `kecamatans` WHERE id = '$idkecamatan'"));
  }
?>
  <div class="flex w-full p-5">
    <div class="mx-5 my-2">
      <label class="text-white font-bold">Profil</label>
      <div id="preview-box"
        style=" background-size: cover; background-position: center;"
        class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none border-2 border-dashed border-gray-400 h-[250px] w-[250px] shadow-sm flex justify-center items-center overflow-hidden relative bg-cover bg-center">
        <input type="file" name="profil" id="upload-profil" value="<?= isset($dataMhs['profil']) ? $dataMhs['profil'] : '' ?>"
          class="absolute scale-[13] translate-x-[100px] opacity-0 cursor-pointer" />
        <i class="fa-solid fa-image text-[36px] text-gray-600" id="icon-preview"></i>
      </div>

      <script>
        const input = document.getElementById('upload-profil');
        const previewBox = document.getElementById('preview-box');
        const icon = document.getElementById('icon-preview');

        function loadImage(profil) {
          previewBox.style.backgroundImage = `url('/assets/img/mahasiswa/${profil}')`;
          icon.style.display = 'none'; // sembunyikan ikon jika ada gambar
        }
        <?php
        if (isset($dataMhs['profil'])) {
          $profil = $dataMhs["profil"];

          echo "loadImage('$profil')";
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

    <div class="flex-1 w-2/3">
      <div class="flex flex-col px-5 py-2">
        <label class="text-white font-bold">Nama</label>
        <input type="text" name="nama" value="<?= isset($dataMhs['nama']) ? $dataMhs['nama'] : '' ?>"
          class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
      </div>

      <div class="flex flex-col px-5 py-2">
        <label class="text-white font-bold">Email</label>
        <input type="email" name="email" value="<?= isset($dataMhs['email']) ? $dataMhs['email'] : '' ?>"
          class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
      </div>

      <div class="flex flex-col px-5 py-2">
        <label class="text-white font-bold">NPM</label>
        <input type="text" name="npm" value="<?= isset($dataMhs['npm']) ? $dataMhs['npm'] : '' ?>"
          class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
      </div>

      <div class="flex flex-col px-5 py-2">

        <label class="text-white font-bold">Universitas</label>
        <input type="text" name="universitas" value="<?= isset($dataMhs['universitas']) ? $dataMhs['universitas'] : '' ?>"
          class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
      </div>
    </div>

    <div class="flex-1 w-2/3">
      <div class="flex flex-col px-5 py-2">
        <label class="text-white font-bold">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" value="<?= isset($dataMhs['tempat_lahir']) ? $dataMhs['tempat_lahir'] : '' ?>"
          class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
      </div>
      <div class="flex flex-col px-5 py-2">
        <label class="text-white font-bold">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" value="<?= isset($dataMhs['tanggal_lahir']) ? $dataMhs['tanggal_lahir'] : '' ?>"
          class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
      </div>
      <div class="flex flex-col px-5 py-2">
        <label class="text-white font-bold">Agama</label>
        <select name="agama"
          class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
          <option></option>
          <?php
          $agama = [
            'Islam',
            'Kristen',
            'Katolik',
            'Hindu',
            'Buddha',
            'Konghucu'
          ];

          foreach ($agama as $a) {
          ?>
            <option value="<?= $a ?>" <?= (isset($dataMhs['agama'])) && $a == $dataMhs['agama'] ? 'selected' : '' ?>><?= $a ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="flex flex-col px-5 py-2">
        <label class="text-white font-bold">Jenis Kelamin</label>
        <select name="jenis_kelamin"
          class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
          <!-- <option></option> -->
          <option value="Laki-laki" <?= (isset($dataMhs['jenis_kelamis'])) && $dataMhs['jenis_kelamis'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
          <option value="Perempuan" <?= (isset($dataMhs['jenis_kelamis'])) && $dataMhs['jenis_kelamis'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
        </select>
      </div>
    </div>
  </div>
  <div class="flex w-full p-5">
    <div class="flex flex-1 flex-col px-5 py-2">
      <label class="text-white font-bold">Alamat</label>
      <textarea name="alamat" rows="4"
        class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none"><?= isset($dataMhs['alamat']) ? $dataMhs['alamat'] : '' ?></textarea>
    </div>

    <div class="flex-1">
      <div class="flex flex-col px-5 py-2">
        <label class="text-white font-bold">Provinsi</label>
        <select name="provinsi" required
          class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
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
        <select name="kabupaten" required
          class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
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
        <select name="kecamatan" required
          class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
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
        <input type="text" name="desa" required value="<?= isset($dataMhs['desa']) ? $dataMhs['desa'] : '' ?>"
          class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
      </div>
    </div>
  </div>
<?php
  return ob_get_clean();
}

function inputNilai()
{
  ob_start(); ?>
  <div class="z-[1] bg-white p-6 rounded-[20px] shadow-md max-w-md w-full">
    <h2 class="text-xl font-bold mb-6 text-[#003c9e]">Input Penilaian</h2>

    <form id="editnama" class="flex flex-col gap-4">
      <!-- Nama -->
      <div>
        <label for="nama" class="font-semibold text-black mb-1 block">Nama Mahasiswa</label>
        <input type="text" id="nama" name="nama" value="otomatis" disabled
          class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-2 border border-gray-300 bg-gray-100 text-gray-600" />
      </div>

      <!-- NPM -->
      <div>
        <label for="npm" class="font-semibold text-black mb-1 block">NPM</label>
        <input type="text" id="npm" name="npm" value="otomatis" disabled
          class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-2 border border-gray-300 bg-gray-100 text-gray-600" />
      </div>

      <!-- Tanggal -->
      <div>
        <label for="tgl" class="font-semibold text-black mb-1 block">Tanggal Laporan</label>
        <input type="text" id="tgl" name="tanggal_laporan" value="otomatis" disabled
          class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-2 border border-gray-300 bg-gray-100 text-gray-600" />
      </div>

      <!-- Nilai -->
      <div>
        <label for="text" class="font-semibold text-black mb-1 block">Nilai</label>
        <input type="text" id="text" name="text" required
          class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]" />
      </div>

      <!-- Submit -->
      <button type="submit"
        class="bg-[#003c9e] text-white font-bold py-2 px-4 rounded-lg hover:opacity-90 transition">
        Simpan Nilai
      </button>
    </form>
  </div>
<?php
  return ob_get_clean();
}

function formJadwalBimbingan($action)
{
  ob_start(); ?>
  <div class="z-[1] bg-white p-6 rounded-[20px] shadow-md max-w-xl w-full">
    <h2 class="text-xl font-bold mb-6 text-[#003c9e]">Form <?= $action ?> Jadwal Bimbingan</h2>
    <form action="" method="POST" class="flex flex-col gap-4">

      <div class="relative">
        <label for="perusahaan" class="font-semibold text-[#000] mb-1 block">Perusahaan</label>
        <input type="text" id="perusahaan" name="perusahaan" required
          class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]" />
        <i
          class="fa fa-building absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
      </div>

      <div class="relative">
        <label for="topik" class="font-semibold text-[#000] mb-1 block">Topik Bimbingan</label>
        <input type="text" id="topik" name="topik" required
          class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]" />
        <i
          class="fa fa-file-alt absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
      </div>

      <div class="relative">
        <label for="tanggal" class="font-semibold text-[#000] mb-1 block">Tanggal</label>
        <input type="date" id="tanggal" name="tanggal" required
          class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]" />
        <i
          class="fa fa-calendar absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
      </div>

      <div class="relative">
        <label for="jam" class="font-semibold text-[#000] mb-1 block">Jam</label>
        <input type="time" id="jam" name="jam" required
          class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]" />
        <i
          class="fa fa-clock absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
      </div>

      <div class="relative">
        <label for="tempat" class="font-semibold text-[#000] mb-1 block">Tempat</label>
        <select id="tempat" name="tempat" required
          class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]">
          <option value="">-- Pilih Tempat --</option>
          <option value="Kampus">Kampus</option>
          <option value="Zoom">Zoom</option>
          <option value="Google Meet">Google Meet</option>
          <option value="Perusahaan">Perusahaan</option>
        </select>
        <i
          class="fa fa-map-marker-alt absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
      </div>

      <button type="submit"
        class="bg-[#003c9e] text-white font-bold py-2 px-4 rounded-lg hover:opacity-90 transition">Simpan
        Jadwal</button>
    </form>
  </div>
<?php
  return ob_get_clean();
}

// function alertHapus($action, $datas = [])
function alertHapus($datas = [], $id = "")
{
  ob_start(); ?>
  <div class="z-[1] bg-white max-w-md mx-auto p-6 rounded-2xl shadow-lg mt-10 text-center">
    <h2 class="text-xl font-bold text-red-600 mb-4 flex items-center justify-center gap-2">
      <i class="fa-solid fa-triangle-exclamation"></i> Hapus Data Ini?
    </h2>

    <div class="bg-[#f0f4ff] text-left p-4 rounded-lg mb-6 shadow-inner space-y-2 text-gray-800">
      <?php foreach ($datas as $data): ?>
        <p><strong><?= $data['label'] ?>:</strong> <?= $data['isi'] ?></p>
      <?php endforeach; ?>
    </div>

    <div class="flex justify-center gap-4">
      <!-- <a href="#laporan-magang" class="bg-gray-300 text-gray-800 font-semibold px-4 py-2 rounded-lg hover:bg-gray-400 transition">
        Batal
      </a>
      <a href="<// $action >" class="bg-red-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-red-700 transition">
        Hapus
      </a> -->

      <button onclick="batalHapus()" class="bg-gray-300 text-gray-800 font-semibold px-4 py-2 rounded-lg hover:bg-gray-400 transition">
        Batal
      </button>
      <button onclick="konfirmasiHapus()" class="bg-red-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-red-700 transition">
        Hapus
      </button>
      <script>
        function batalHapus() {
          window.location.href = "#laporan-magang"; // kembalikan ke halaman laporan biasa jika batal
        }

        function konfirmasiHapus() { // fungsi yang akan mengapus laporan berdasarkan id
          const path = "/api/form/delete-kegiatan-magang.php?id_kegiatan=<?= $id ?>"
          console.log(path);

          fetch(path, { // akan mengkases ...../delete-kegiatan-magang.php?id_kegiatan=.. dengan method elete
              method: 'DELETE'
            })
            .then(response => response.json())
            .then(data => {
              if (data.status === 'success') {
                alert("Data berhasil dihapus!");
                window.location.href = "#laporan-magang";
              } else {
                alert("Gagal menghapus: " + (data.message || data.error));
              }
            })
            .catch(error => {
              console.error('Error:', error);
              alert("Terjadi kesalahan saat menghapus data.");
            });
        }
      </script>

    </div>
  </div>
<?php
  return ob_get_clean();
}

function formLaporanMagang($quote, $action, $id_magang, $rowLaporan = [])
{
  ob_start();
  $hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
?>
  <div class="z-[1] bg-white p-6 rounded-[20px] shadow-md max-w-xl w-full">
    <h2 class="text-xl font-bold mb-6 text-[#003c9e]">Form <?= $quote ?> Laporan Magang</h2>
    <form action="<?= $action ?>" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">

      <div class="flex">
        <input type="hidden" name="id_magang" value="<?= $id_magang ?>">

        <div class="relative mx-1 flex-1">
          <label for="tanggal" class="font-semibold text-[#000] mb-1 block">Tanggal</label>
          <input type="date" id="tanggal" value="<?= isset($rowLaporan['tgl']) ? $rowLaporan['tgl'] : '' ?>" name="tgl" required
            class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]" />
          <i
            class="fa fa-calendar absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
        </div>

        <div class="relative mx-1 flex-1">
          <label for="jam" class="font-semibold text-[#000] mb-1 block">Hari</label>
          <select id="hari" name="hari" required
            class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]">
            <option value="">-- Pilih Hari --</option>
            <?php foreach ($hari as $h) { ?>
              <option value="<?= $h ?>" <?= (isset($rowLaporan['hari']) && $h == $rowLaporan['hari']) ? 'selected' : '' ?>><?= $h ?></option>
            <?php } ?>
          </select>
          <i
            class="fa fa-clock absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
        </div>
      </div>

      <div class="flex">
        <div class="relative mx-1">
          <label for="kegiatan" class="font-semibold text-[#000] mb-1 block">Kegiatan</label>
          <input type="file" id="kegiatan" name="kegiatan"
            class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]" />
          <i
            class="fa fa-folder-open absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
        </div>

        <div class="relative mx-1">
          <label for="bukti_kegiatan" class="font-semibold text-[#000] mb-1 block">Bukti Kegiatan</label>
          <input type="file" id="bukti_kegiatan" name="bukti_kegiatan"
            class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]" />
          <i
            class="fa fa-folder-open absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
        </div>
      </div>

      <button type="submit"
        class="bg-[#003c9e] text-white font-bold py-2 px-4 rounded-lg hover:opacity-90 transition">Simpan
        Laporan</button>
    </form>
  </div>
<?php
  return ob_get_clean();
}
?>