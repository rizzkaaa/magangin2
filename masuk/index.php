<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Magangin | Magang tanpa ribet, MAGANGIN aja</title>
  <link rel="stylesheet" href="../assets/css/masuk.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>
  <div class="container">
    <div id="masuk"></div>
    <div id="daftar"></div>
    <div class="bigLabel">
      <div class="greating">
        <a href="#masuk" class="swipe-btn"><i class="fa-solid fa-angle-left"></i></a>
        <div class="wrap-greating">
          <h1>Halo, Selamat Bergabung!</h1>
          <p>Telah memiliki akun?</p>
          <a href="#masuk"><button>Masuk</button></a>
        </div>
      </div>
      <div class="greating">
        <div class="wrap-greating">
          <h1>Selamat Datang Kembali!</h1>
          <p>Belum memiliki akun?</p>
          <a href="#daftar"><button>Daftar</button></a>
        </div>
        <a href="#daftar" class="swipe-btn"><i class="fa-solid fa-angle-right"></i></a>
      </div>
    </div>
    <div class="form-input">
      <?php
      if(isset($_GET['success'])){
      ?>
      <div class="alert">Registrasi berhasil, silakan login.</div>
      <?php }
      if(isset($_GET['error'])){
      ?>
      <div class="alert">Coba lagi.</div>
      <?php } ?>
 
      <form action="proses-daftar.php" method="POST">
        <div class="wrapper">
          <div class="container-input-peran">
            <h2>Anda ingin mendaftar sebagai apa?</h2>

            <div class="wrap-input-peran">
              <div class="input-peran">
                <input type="radio" name="role" value="mahasiswa" class="peran" id="mahasiswa" required/>
                <label for="mahasiswa">Mahasiswa <i class="fa-solid fa-graduation-cap"></i>
                </label>
                <p>
                  Mendaftar ke lowongan pekerjaan yang tersedia, mengikuti
                  seleksi, menjalani magang dan melakukan pelaporan kegiatan
                  magang.
                </p>
              </div>
              <div class="input-peran">
                <input type="radio" name="role" value="dosen" class="peran" id="dosen" required/>
                <label for="dosen">Dosen <i class="fa-solid fa-school"></i>
                </label>
                <p>
                  Melakukan audit terhadap laporan magang mahasiswa,
                  menjadwalkan bimbingan dan memberikan penilaian.
                </p>
              </div>
              <div class="input-peran">
                <input type="radio" name="role" value="perusahaan" class="peran" id="perusahaan" required/>
                <label for="perusahaan">Perusahaan <i class="fa-solid fa-building"></i>
                </label>
                <p>
                  Memberi kesempatan magang diperusahaannya, melakukan
                  seleksi, dan memberikan pelatihan selama magang.
                </p>
              </div>
            </div>
          </div>

          <div class="container-input-password">
            <i class="fa-solid fa-users"></i>
            <div class="wrap-input-password">
              <div class="input-password">
                <i class="fa-solid fa-user"></i>
                <div>
                  <input type="text" id="nama" name="nama" required />
                  <label for="nama">Nama: </label>
                </div>
              </div>
              <div class="input-password">
                <i class="fa-solid fa-at"></i>
                <div>
                  <input type="email" id="emailDaftar" name="email" required />
                  <label for="emailDaftar">Email: </label>
                </div>
              </div>
              <div class="input-password">
                <i class="fa-solid fa-key"></i>
                <div>
                  <input
                    type="password"
                    id="passwordDaftar"
                    name="password"
                    required />
                  <label for="passwordDaftar">Password: </label>
                </div>
              </div>
            </div>
          </div>
          <button type="submit">DAFTAR</button>
        </div>
      </form>

      <form action="proses-masuk.php" id="masuk" method="POST">
        <div class="container-input-password">
          <i class="fa-solid fa-users"></i>
          <div class="wrap-input-password">
            <div class="input-password">
              <i class="fa-solid fa-at"></i>
              <div>
                <input type="email" id="emailMasuk" name="email" required />
                <label for="emailMasuk">Email: </label>
              </div>
            </div>
            <div class="input-password">
              <i class="fa-solid fa-key"></i>
              <div>
                <input
                  type="password"
                  id="passwordMasuk"
                  name="password"
                  required />
                <label for="passwordMasuk">Password: </label>
              </div>
            </div>
          </div>
        </div>
        <button type="submit">MASUK</button>
      </form>
    </div>
  </div>

  <script src="../assets/js/masuk.js"></script>
</body>

</html>