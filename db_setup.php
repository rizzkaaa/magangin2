<?php
// -- Database: `db_magang_new`
// --

// -- --------------------------------------------------------

// --
// -- Table structure for table `detail_apply`
// --

mysqli_query($connect, "CREATE TABLE IF NOT EXISTS `detail_apply` (
  `id_detail` varchar(20) NOT NULL,
  `id_lowongan` varchar(20) NOT NULL,
  `id_mhs` varchar(20) NOT NULL,
  `waktu_apply` time NOT NULL,
  `status` enum('Menunggu','Disetujui') DEFAULT 'Menunggu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

// -- --------------------------------------------------------

// --
// -- Table structure for table `dokumen`
// --

mysqli_query($connect, "CREATE TABLE IF NOT EXISTS `dokumen` (
  `id_dokumen` varchar(20) NOT NULL,
  `id_lowongan` varchar(20) NOT NULL,
  `nama_dokumen` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

// -- --------------------------------------------------------

// --
// -- Table structure for table `dokumen_upload`
// --

mysqli_query($connect, "CREATE TABLE IF NOT EXISTS `dokumen_upload` (
  `id_upload` varchar(20) NOT NULL,
  `id_detail` varchar(20) NOT NULL,
  `id_dokumen` varchar(20) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

// -- --------------------------------------------------------

// --
// -- Table structure for table `dosen`
// --

mysqli_query($connect, "CREATE TABLE IF NOT EXISTS `dosen` (
  `id_dosen` varchar(20) NOT NULL,
  `id_user` varchar(20) DEFAULT NULL,
  `profil` varchar(255) DEFAULT NULL,
  `nama_dosen` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `universitas` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

// -- --------------------------------------------------------

// --
// -- Table structure for table `kabupatens`
// --

mysqli_query($connect, "CREATE TABLE IF NOT EXISTS `kabupatens` (
  `id` varchar(255) NOT NULL,
  `provinsi_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `alt_name` varchar(255) DEFAULT NULL,
  `latitude` decimal(10,6) DEFAULT NULL,
  `longitude` decimal(10,6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

// -- --------------------------------------------------------

// --
// -- Table structure for table `kecamatans`
// --

mysqli_query($connect, "CREATE TABLE IF NOT EXISTS `kecamatans` (
  `id` varchar(255) NOT NULL,
  `kabupaten_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alt_name` varchar(255) DEFAULT NULL,
  `latitude` decimal(10,6) DEFAULT NULL,
  `longitude` decimal(10,6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

// -- --------------------------------------------------------

// --
// -- Table structure for table `kegiatan_magang`
// --

mysqli_query($connect, "CREATE TABLE IF NOT EXISTS `kegiatan_magang` (
  `id_kegiatan` varchar(20) NOT NULL,
  `id_magang` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') DEFAULT NULL,
  `kegiatan` text DEFAULT NULL,
  `bukti_kegiatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

// -- --------------------------------------------------------

// --
// -- Table structure for table `lowongan`
// --

mysqli_query($connect, "CREATE TABLE IF NOT EXISTS `lowongan` (
  `id_lowongan` varchar(20) NOT NULL,
  `id_perusahaan` varchar(20) NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `posisi` varchar(255) DEFAULT NULL,
  `kuota` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `gender` enum('Perempuan','Laki-laki') DEFAULT NULL,
  `rentang_usia` varchar(255) DEFAULT NULL,
  `mulai_magang` date DEFAULT NULL,
  `selesai_magang` date DEFAULT NULL,
  `deadline_apply` date DEFAULT NULL,
  `uang_saku` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

// -- --------------------------------------------------------

// --
// -- Table structure for table `magang`
// --

mysqli_query($connect, "CREATE TABLE IF NOT EXISTS `magang` (
  `id_magang` varchar(20) NOT NULL,
  `id_mhs` varchar(20) NOT NULL,
  `id_lowongan` varchar(20) NOT NULL,
  `id_dosen` varchar(20) NOT NULL,
  `nilai` int(11) DEFAULT NULL,
  `status` enum('Berlangsung','Selesai','Gagal') DEFAULT 'Berlangsung',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

// -- --------------------------------------------------------

// --
// -- Table structure for table `mahasiswa`
// --

mysqli_query($connect, "CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id_mhs` varchar(20) NOT NULL,
  `id_user` varchar(20) DEFAULT NULL,
  `profil` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `npm` varchar(255) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` enum('Islam','Kristen','Katolik','Buddha','Hindu','Konghucu') DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `desa` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `status` enum('Sedang Magang','Tidak Magang') DEFAULT 'Tidak Magang',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

// -- --------------------------------------------------------

// --
// -- Table structure for table `notifikasi`
// --

mysqli_query($connect, "CREATE TABLE IF NOT EXISTS `notifikasi` (
  `id_notifikasi` int(11) NOT NULL,
  `id_dosen` varchar(20) NOT NULL,
  `id_peserta` varchar(20) NOT NULL,
  `pesan` text NOT NULL,
  `status` enum('Belum Dibaca','Dibaca') DEFAULT 'Belum Dibaca',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

// -- --------------------------------------------------------

// --
// -- Table structure for table `perusahaan`
// --

mysqli_query($connect, "CREATE TABLE IF NOT EXISTS `perusahaan` (
  `id_perusahaan` varchar(20) NOT NULL,
  `id_user` varchar(20) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `nama_perusahaan` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `email_perusahaan` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `desa` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

// -- --------------------------------------------------------

// --
// -- Table structure for table `provinsis`
// --

mysqli_query($connect, "CREATE TABLE IF NOT EXISTS `provinsis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `alt_name` varchar(255) DEFAULT NULL,
  `latitude` decimal(10,6) DEFAULT NULL,
  `longitude` decimal(10,6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

// -- --------------------------------------------------------

// --
// -- Table structure for table `users`
// --

mysqli_query($connect, "CREATE TABLE IF NOT EXISTS `users` (
  `id_user` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('mahasiswa','dosen','perusahaan') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

?>