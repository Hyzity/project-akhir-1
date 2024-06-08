-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 08:19 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdn1trt`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `tgl` varchar(255) DEFAULT NULL,
  `jam_mulai` varchar(255) DEFAULT NULL,
  `jam_selesai` varchar(255) DEFAULT NULL,
  `tgl_mulai` varchar(255) DEFAULT NULL,
  `tgl_selesai` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `kategori_artikel_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `btn_txt` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `nama_fasilitas` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `foto_fasilitas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `deskripsi`, `nama_fasilitas`, `user_id`, `foto_fasilitas`, `created_at`, `updated_at`) VALUES
(1, 'Perpustakaan SD Negeri 173100 Tarutung adalah pusat sumber belajar yang penting bagi siswa dan guru. Perpustakaan ini dirancang untuk menyediakan lingkungan yang kondusif bagi kegiatan membaca, penelitian, dan pengembangan keterampilan literasi. Fasilitas perpustakaan yang lengkap dan nyaman mendukung pembelajaran yang efektif dan menyenangkan.', 'PERPUSTAKAAN', 1, '1717592040_PERPUSTAKAAN.jpg', '2024-06-05 05:54:00', '2024-06-05 05:54:00'),
(2, 'Fasilitas Chromebook di SD Negeri 173100 Tarutung adalah bagian dari upaya sekolah untuk mengintegrasikan teknologi dalam proses belajar mengajar. Chromebook adalah perangkat komputer yang menggunakan sistem operasi Chrome OS dari Google, dirancang untuk memberikan akses cepat ke internet dan aplikasi berbasis web. Fasilitas ini bertujuan untuk meningkatkan keterampilan digital siswa dan mendukung pembelajaran interaktif.', 'CHROMEBOOK', 1, '1717592292_CHROMEBOOK2.jpg', '2024-06-05 05:58:12', '2024-06-05 05:58:12'),
(3, 'Fasilitas Closed-Circuit Television (CCTV) di SD Negeri 173100 Tarutung adalah bagian integral dari upaya sekolah untuk meningkatkan keamanan, pengawasan, dan perlindungan bagi siswa, staf, dan aset sekolah. CCTV memberikan pengawasan visual yang efektif terhadap berbagai area di sekolah, memungkinkan identifikasi cepat terhadap situasi yang memerlukan tindakan atau respons.', 'CCTV', 1, '1717594856_CCTV.jpg', '2024-06-05 06:40:56', '2024-06-05 06:40:56'),
(4, 'Fasilitas toilet siswa di SD Negeri 173100 Tarutung adalah bagian penting dari lingkungan sekolah yang mendukung kesehatan dan kenyamanan siswa. Fasilitas ini didesain untuk memenuhi kebutuhan dasar siswa akan sanitasi dan kebersihan, serta memberikan lingkungan yang aman dan nyaman bagi mereka.', 'TOILET SISWA', 1, '1717595041_KAMAR MANDI 2.jpg', '2024-06-05 06:44:01', '2024-06-05 06:44:01'),
(5, 'Fasilitas toilet guru di SD Negeri 173100 Tarutung merupakan bagian penting dari infrastruktur sekolah yang mendukung kenyamanan, kebersihan, dan kesehatan staf pengajar. Dengan menyediakan toilet yang nyaman, bersih, dan privasi, sekolah memberikan pesan positif tentang pentingnya kesejahteraan staf pengajar dan memperlihatkan apresiasi terhadap kontribusi mereka dalam proses pembelajaran. Fasilitas ini juga mencerminkan komitmen sekolah terhadap standar kebersihan yang tinggi dan menciptakan lingkungan yang kondusif untuk praktik sanitasi yang baik di antara staf pengajar.', 'TOILET GURU', 1, '1717595213_KAMAR MANDI GURU pg.jpg', '2024-06-05 06:46:53', '2024-06-05 06:46:53');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bidang_keahlian` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `foto`, `nama`, `bidang_keahlian`, `pendidikan`, `tgl_lahir`, `tempat_lahir`, `user_id`, `created_at`, `updated_at`) VALUES
(6, 'KhBSu5U25WhatsApp Image 2024-06-04 at 20.52.44_58f9a3f4.jpg', 'Lenni Nurcahaya Purba, S. Pd. SD', 'PGSD', 'S1 PGSD', '1976-01-11', 'Sosortapian', NULL, '2024-06-05 07:26:48', '2024-06-05 07:26:48'),
(7, 'aC6YUyevUWhatsApp Image 2024-06-04 at 20.50.33_e6bdf86c.jpg', 'Roselina Hutagalung, S.Pd', 'PPKn', 'S1 PPKn', '1970-12-11', 'Tarutung', NULL, '2024-06-05 07:27:59', '2024-06-05 07:27:59'),
(8, 'tdzf82HeGMINCEN SARAGIH.jpg', 'Mincen Saragih, S. Th.', 'OPERATOR SEKOLAH', 'S1 PAK', '1972-10-12', 'SIDAMANIK', 1, '2024-06-05 19:35:02', '2024-06-05 19:37:49'),
(9, 'qAA7a63rALUKAS EDIANTA TARIGAN.jpg', 'Lukas Edianta Tarigan', 'PJOK', '-', '1996-04-13', 'Tarutung', NULL, '2024-06-05 19:53:21', '2024-06-05 19:53:21');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_haris`
--

CREATE TABLE `jadwal_haris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_hari` varchar(255) NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_haris`
--

INSERT INTO `jadwal_haris` (`id`, `nama_hari`, `id_kelas`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'senin', 1, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(2, 'selasa', 1, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(3, 'rabu', 1, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(4, 'kamis', 1, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(5, 'jumat', 1, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(6, 'senin', 2, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(7, 'selasa', 2, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(8, 'rabu', 2, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(9, 'kamis', 2, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(10, 'jumat', 2, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(11, 'senin', 3, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(12, 'selasa', 3, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(13, 'rabu', 3, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(14, 'kamis', 3, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(15, 'jumat', 3, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(16, 'senin', 4, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(17, 'selasa', 4, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(18, 'rabu', 4, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(19, 'kamis', 4, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(20, 'jumat', 4, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(21, 'senin', 5, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(22, 'selasa', 5, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(23, 'rabu', 5, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(24, 'kamis', 5, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(25, 'jumat', 5, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(26, 'senin', 6, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(27, 'selasa', 6, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(28, 'rabu', 6, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(29, 'kamis', 6, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(30, 'jumat', 6, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(31, 'senin', 7, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(32, 'selasa', 7, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(33, 'rabu', 7, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(34, 'kamis', 7, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(35, 'jumat', 7, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(36, 'senin', 8, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(37, 'selasa', 8, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(38, 'rabu', 8, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(39, 'kamis', 8, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(40, 'jumat', 8, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(41, 'senin', 9, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(42, 'selasa', 9, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(43, 'rabu', 9, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(44, 'kamis', 9, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(45, 'jumat', 9, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(46, 'senin', 10, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(47, 'selasa', 10, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(48, 'rabu', 10, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(49, 'kamis', 10, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(50, 'jumat', 10, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(51, 'senin', 11, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(52, 'selasa', 11, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(53, 'rabu', 11, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(54, 'kamis', 11, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(55, 'jumat', 11, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(56, 'senin', 12, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(57, 'selasa', 12, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(58, 'rabu', 12, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(59, 'kamis', 12, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(60, 'jumat', 12, 1, '2024-06-04 21:22:50', '2024-06-04 21:22:50'),
(61, 'sabtu', 1, 1, '2024-06-04 21:26:19', '2024-06-06 20:09:35'),
(64, 'sabtu', 2, 1, '2024-06-06 20:27:12', '2024-06-06 20:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_artikel`
--

CREATE TABLE `kategori_artikel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kritikdan_sarans`
--

CREATE TABLE `kritikdan_sarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kritikdan_sarans`
--

INSERT INTO `kritikdan_sarans` (`id`, `nama`, `email`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'Anisetus', 'anisetusm@gmail.com', 'jgfgjjg', '2024-06-05 00:09:08', '2024-06-05 00:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajarans`
--

CREATE TABLE `mata_pelajarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mata_pelajaran` varchar(255) NOT NULL,
  `id_hari` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mata_pelajarans`
--

INSERT INTO `mata_pelajarans` (`id`, `mata_pelajaran`, `id_hari`, `user_id`, `jam_mulai`, `jam_selesai`, `created_at`, `updated_at`) VALUES
(1, 'PAK/PAI', 1, 1, NULL, NULL, '2024-06-04 21:23:17', '2024-06-04 21:23:17'),
(2, 'PAK/PAI', 1, 1, NULL, NULL, '2024-06-04 21:23:28', '2024-06-04 21:23:28'),
(3, 'TEMATIK', 1, 1, NULL, NULL, '2024-06-04 21:29:36', '2024-06-06 20:07:53'),
(7, 'ISTIRAHAT', 1, 1, NULL, NULL, '2024-06-06 20:08:32', '2024-06-06 20:08:32'),
(8, 'TEMATIK', 1, 1, NULL, NULL, '2024-06-06 20:08:44', '2024-06-06 20:08:44'),
(9, 'TEMATIK', 1, 1, NULL, NULL, '2024-06-06 20:08:50', '2024-06-06 20:08:50'),
(10, '-', 1, 1, NULL, NULL, '2024-06-06 20:08:57', '2024-06-06 20:08:57'),
(11, '-', 1, 1, NULL, NULL, '2024-06-06 20:09:04', '2024-06-06 20:09:04'),
(12, '-', 1, 1, NULL, NULL, '2024-06-06 20:09:14', '2024-06-06 20:09:14'),
(13, 'TEMATIK', 2, 1, NULL, NULL, '2024-06-06 20:10:02', '2024-06-06 20:10:02'),
(14, 'TEMATIK', 2, 1, NULL, NULL, '2024-06-06 20:10:12', '2024-06-06 20:10:12'),
(15, 'TEMATIK', 2, 1, NULL, NULL, '2024-06-06 20:10:19', '2024-06-06 20:10:19'),
(16, 'ISTIRAHAT', 2, 1, NULL, NULL, '2024-06-06 20:10:26', '2024-06-06 20:10:26'),
(17, 'TEMATIK', 2, 1, NULL, NULL, '2024-06-06 20:10:41', '2024-06-06 20:10:41'),
(18, 'TEMATIK', 2, 1, NULL, NULL, '2024-06-06 20:10:50', '2024-06-06 20:10:50'),
(19, '-', 2, 1, NULL, NULL, '2024-06-06 20:11:02', '2024-06-06 20:11:02'),
(20, '-', 2, 1, NULL, NULL, '2024-06-06 20:11:10', '2024-06-06 20:11:10'),
(21, '-', 2, 1, NULL, NULL, '2024-06-06 20:11:16', '2024-06-06 20:11:16'),
(22, 'TEMATIK', 3, 1, NULL, NULL, '2024-06-06 20:11:47', '2024-06-06 20:11:47'),
(23, 'TEMATIK', 3, 1, NULL, NULL, '2024-06-06 20:11:54', '2024-06-06 20:11:54'),
(24, 'TEMATIK', 3, 1, NULL, NULL, '2024-06-06 20:12:02', '2024-06-06 20:12:02'),
(25, 'ISTIRAHAT', 3, 1, NULL, NULL, '2024-06-06 20:12:09', '2024-06-06 20:12:09'),
(26, 'TEMATIK', 3, 1, NULL, NULL, '2024-06-06 20:12:27', '2024-06-06 20:12:27'),
(27, 'TEMATIK', 3, 1, NULL, NULL, '2024-06-06 20:12:45', '2024-06-06 20:12:45'),
(28, '-', 3, 1, NULL, NULL, '2024-06-06 20:12:53', '2024-06-06 20:12:53'),
(29, '-', 3, 1, NULL, NULL, '2024-06-06 20:13:01', '2024-06-06 20:13:01'),
(30, '-', 3, 1, NULL, NULL, '2024-06-06 20:13:09', '2024-06-06 20:13:09'),
(31, 'TEMATIK', 4, 1, NULL, NULL, '2024-06-06 20:13:27', '2024-06-06 20:13:27'),
(32, 'TEMATIK', 4, 1, NULL, NULL, '2024-06-06 20:13:36', '2024-06-06 20:13:36'),
(33, 'TEMATIK', 4, 1, NULL, NULL, '2024-06-06 20:13:43', '2024-06-06 20:13:43'),
(34, 'ISTIRAHAT', 4, 1, NULL, NULL, '2024-06-06 20:13:52', '2024-06-06 20:13:52'),
(35, 'PAK/PAI', 4, 1, NULL, NULL, '2024-06-06 20:14:02', '2024-06-06 20:14:02'),
(36, 'PAK/PAI', 4, 1, NULL, NULL, '2024-06-06 20:14:12', '2024-06-06 20:14:12'),
(37, '-', 4, 1, NULL, NULL, '2024-06-06 20:14:22', '2024-06-06 20:14:22'),
(38, '-', 4, 1, NULL, NULL, '2024-06-06 20:15:02', '2024-06-06 20:15:02'),
(39, '-', 4, 1, NULL, NULL, '2024-06-06 20:15:09', '2024-06-06 20:15:09'),
(40, 'TEMATIK', 5, 1, NULL, NULL, '2024-06-06 20:15:28', '2024-06-06 20:15:28'),
(41, 'TEMATIK', 5, 1, NULL, NULL, '2024-06-06 20:15:35', '2024-06-06 20:15:35'),
(42, 'TEMATIK', 5, 1, NULL, NULL, '2024-06-06 20:15:41', '2024-06-06 20:15:41'),
(43, 'ISTIRAHAT', 5, 1, NULL, NULL, '2024-06-06 20:15:50', '2024-06-06 20:15:50'),
(44, 'TEMATIK', 5, 1, NULL, NULL, '2024-06-06 20:15:59', '2024-06-06 20:15:59'),
(45, 'TEMATIK', 5, 1, NULL, NULL, '2024-06-06 20:16:09', '2024-06-06 20:16:09'),
(46, 'JUMAT BERSIH', 5, 1, NULL, NULL, '2024-06-06 20:16:27', '2024-06-06 20:16:27'),
(47, 'TEMATIK', 61, 1, NULL, NULL, '2024-06-06 20:17:47', '2024-06-06 20:17:47'),
(48, 'TEMATIK', 61, 1, NULL, NULL, '2024-06-06 20:17:56', '2024-06-06 20:17:56'),
(49, 'TEMATIK', 61, 1, NULL, NULL, '2024-06-06 20:18:04', '2024-06-06 20:18:04'),
(50, 'ISTIRAHAT', 61, 1, NULL, NULL, '2024-06-06 20:18:18', '2024-06-06 20:18:18'),
(51, 'TEMATIK', 61, 1, NULL, NULL, '2024-06-06 20:18:32', '2024-06-06 20:18:32'),
(52, 'BAHASA DAERAH', 61, 1, NULL, NULL, '2024-06-06 20:18:54', '2024-06-06 20:18:54'),
(53, 'TEMATIK', 6, 1, NULL, NULL, '2024-06-06 20:31:25', '2024-06-06 20:31:25'),
(54, 'TEMATIK', 6, 1, NULL, NULL, '2024-06-06 20:31:31', '2024-06-06 20:31:31'),
(55, 'TEMATIK', 6, 1, NULL, NULL, '2024-06-06 20:31:38', '2024-06-06 20:31:38'),
(56, 'ISTIRAHAT', 6, 1, NULL, NULL, '2024-06-06 20:31:45', '2024-06-06 20:31:45'),
(57, 'TEMATIK', 6, 1, NULL, NULL, '2024-06-06 20:31:55', '2024-06-06 20:31:55'),
(58, 'TEMATIK', 6, 1, NULL, NULL, '2024-06-06 20:32:03', '2024-06-06 20:32:03'),
(59, '-', 6, 1, NULL, NULL, '2024-06-06 20:32:31', '2024-06-06 20:32:31'),
(60, '-', 6, 1, NULL, NULL, '2024-06-06 20:32:38', '2024-06-06 20:32:38'),
(61, '-', 6, 1, NULL, NULL, '2024-06-06 20:32:47', '2024-06-06 20:32:47'),
(62, 'PAK/PAI', 7, 1, NULL, NULL, '2024-06-06 20:33:04', '2024-06-06 20:33:04'),
(63, 'PAK/PAI', 7, 1, NULL, NULL, '2024-06-06 20:33:18', '2024-06-06 20:33:18'),
(64, 'TEMATIK', 7, 1, NULL, NULL, '2024-06-06 20:33:27', '2024-06-06 20:33:27'),
(66, 'ISTIRAHAT', 7, 1, NULL, NULL, '2024-06-06 20:33:51', '2024-06-06 20:33:51'),
(67, 'TEMATIK', 7, 1, NULL, NULL, '2024-06-06 20:33:58', '2024-06-06 20:33:58'),
(68, 'TEMATIK', 7, 1, NULL, NULL, '2024-06-06 20:34:08', '2024-06-06 20:34:08'),
(69, '-', 7, 1, NULL, NULL, '2024-06-06 20:34:29', '2024-06-06 20:34:29'),
(70, '-', 7, 1, NULL, NULL, '2024-06-06 20:34:36', '2024-06-06 20:34:36'),
(71, '-', 7, 1, NULL, NULL, '2024-06-06 20:34:46', '2024-06-06 20:34:46'),
(72, 'TEMATIK', 8, 1, NULL, NULL, '2024-06-06 20:35:26', '2024-06-06 20:35:26'),
(73, 'TEMATIK', 8, 1, NULL, NULL, '2024-06-06 20:35:36', '2024-06-06 20:35:36'),
(74, 'TEMATIK', 8, 1, NULL, NULL, '2024-06-06 20:35:43', '2024-06-06 20:35:43'),
(75, 'ISTIRAHAT', 8, 1, NULL, NULL, '2024-06-06 20:35:50', '2024-06-06 20:35:50'),
(76, 'TEMATIK', 8, 1, NULL, NULL, '2024-06-06 20:35:57', '2024-06-06 20:35:57'),
(77, 'TEMATIK', 8, 1, NULL, NULL, '2024-06-06 20:36:09', '2024-06-06 20:36:40'),
(78, '-', 8, 1, NULL, NULL, '2024-06-06 20:36:15', '2024-06-06 20:36:15'),
(79, '-', 8, 1, NULL, NULL, '2024-06-06 20:36:24', '2024-06-06 20:36:24'),
(80, '-', 8, 1, NULL, NULL, '2024-06-06 20:36:52', '2024-06-06 20:37:02'),
(81, 'TEMATIK', 9, 1, NULL, NULL, '2024-06-06 20:38:19', '2024-06-06 20:38:19'),
(82, 'TEMATIK', 9, 1, NULL, NULL, '2024-06-06 20:38:25', '2024-06-06 20:38:25'),
(83, 'TEMATIK', 9, 1, NULL, NULL, '2024-06-06 20:38:39', '2024-06-06 20:38:39'),
(84, 'ISTIRAHAT', 9, 1, NULL, NULL, '2024-06-06 20:38:56', '2024-06-06 20:38:56'),
(85, 'TEMATIK', 9, 1, NULL, NULL, '2024-06-06 20:39:03', '2024-06-06 20:39:03'),
(86, 'BAHASA DAERAH', 9, 1, NULL, NULL, '2024-06-06 20:39:14', '2024-06-06 20:39:14'),
(87, '-', 9, 1, NULL, NULL, '2024-06-06 20:39:31', '2024-06-06 20:39:31'),
(88, '-', 9, 1, NULL, NULL, '2024-06-06 20:39:39', '2024-06-06 20:39:39'),
(89, '-', 9, 1, NULL, NULL, '2024-06-06 20:39:48', '2024-06-06 20:39:48'),
(90, 'TEMATIK', 10, 1, NULL, NULL, '2024-06-06 20:40:03', '2024-06-06 20:40:03'),
(91, 'TEMATIK', 10, 1, NULL, NULL, '2024-06-06 20:40:11', '2024-06-06 20:40:11'),
(92, 'TEMATIK', 10, 1, NULL, NULL, '2024-06-06 20:40:20', '2024-06-06 20:40:20'),
(93, 'ISTIRAHAT', 10, 1, NULL, NULL, '2024-06-06 20:45:31', '2024-06-06 20:45:31'),
(94, 'PAK/PAI', 10, 1, NULL, NULL, '2024-06-06 20:47:46', '2024-06-06 20:47:46'),
(95, 'PAK/PAI', 10, 1, NULL, NULL, '2024-06-06 20:47:54', '2024-06-06 20:47:54'),
(96, 'JUMAT BERSIH', 10, 1, NULL, NULL, '2024-06-06 20:48:08', '2024-06-06 20:48:08'),
(97, 'TEMATIK', 64, 1, NULL, NULL, '2024-06-06 20:48:55', '2024-06-06 20:48:55'),
(98, 'TEMATIK', 64, 1, NULL, NULL, '2024-06-06 20:49:02', '2024-06-06 20:49:02'),
(99, 'TEMATIK', 64, 1, NULL, NULL, '2024-06-06 20:49:09', '2024-06-06 20:49:09'),
(100, 'ISTIRAHAT', 64, 1, NULL, NULL, '2024-06-06 20:49:17', '2024-06-06 20:49:17'),
(101, 'TEMATIK', 64, 1, NULL, NULL, '2024-06-06 20:49:23', '2024-06-06 20:49:23'),
(102, 'TEMATIK', 64, 1, NULL, NULL, '2024-06-06 20:49:31', '2024-06-06 20:49:31'),
(103, 'TEMATIK', 11, 1, NULL, NULL, '2024-06-06 20:52:35', '2024-06-06 20:52:35'),
(104, 'TEMATIK', 11, 1, NULL, NULL, '2024-06-06 20:52:40', '2024-06-06 20:52:40'),
(105, 'TEMATIK', 11, 1, NULL, NULL, '2024-06-06 20:52:45', '2024-06-06 20:52:45'),
(106, 'ISTIRAHAT', 11, 1, NULL, NULL, '2024-06-06 20:52:51', '2024-06-06 20:52:51'),
(107, 'PAK/PAI', 11, 1, NULL, NULL, '2024-06-06 20:52:59', '2024-06-06 20:52:59'),
(108, 'PAK/PAI', 11, 1, NULL, NULL, '2024-06-06 20:53:05', '2024-06-06 20:53:05'),
(109, '-', 11, 1, NULL, NULL, '2024-06-06 20:59:41', '2024-06-06 20:59:41'),
(110, 'TEMATIK', 11, 1, NULL, NULL, '2024-06-06 20:59:47', '2024-06-06 20:59:47'),
(111, '-', 11, 1, NULL, NULL, '2024-06-06 20:59:53', '2024-06-06 20:59:53'),
(112, 'TEMATIK', 12, 1, NULL, NULL, '2024-06-06 21:01:25', '2024-06-06 21:01:25'),
(113, 'TEMATIK', 12, 1, NULL, NULL, '2024-06-06 21:01:31', '2024-06-06 21:01:31'),
(114, 'TEMATIK', 12, 1, NULL, NULL, '2024-06-06 21:01:42', '2024-06-06 21:01:42'),
(115, 'TEMATIK', 12, 1, NULL, NULL, '2024-06-06 21:01:43', '2024-06-06 21:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_03_11_230713_create_pengumuman_table', 1),
(6, '2021_03_11_230723_create_agenda_table', 1),
(7, '2021_03_12_170942_create_artikel_table', 1),
(8, '2021_03_12_170959_create_kategori_artikel_table', 1),
(9, '2021_03_12_171751_create_banners_table', 1),
(10, '2021_03_12_172043_create_navbars_table', 1),
(11, '2024_05_13_073150_create_guru_table', 1),
(12, '2024_05_13_142916_create_fasilitas_table', 1),
(13, '2024_05_13_142939_create_prestasi_table', 1),
(14, '2024_05_29_013940_create_nama_kelas_table', 1),
(15, '2024_05_29_014059_create_jadwal_haris_table', 1),
(16, '2024_05_29_014121_create_mata_pelajarans_table', 1),
(17, '2024_06_04_033312_create_kritikdan_sarans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nama_kelas`
--

CREATE TABLE `nama_kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nama_kelas`
--

INSERT INTO `nama_kelas` (`id`, `nama_kelas`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '1A', 1, '2024-06-04 21:22:45', '2024-06-04 21:22:45'),
(2, '1B', 1, '2024-06-04 21:22:45', '2024-06-04 21:22:45'),
(3, '2A', 1, '2024-06-04 21:22:45', '2024-06-04 21:22:45'),
(4, '2B', 1, '2024-06-04 21:22:45', '2024-06-04 21:22:45'),
(5, '3A', 1, '2024-06-04 21:22:45', '2024-06-04 21:22:45'),
(6, '3B', 1, '2024-06-04 21:22:45', '2024-06-04 21:22:45'),
(7, '4A', 1, '2024-06-04 21:22:45', '2024-06-04 21:22:45'),
(8, '4B', 1, '2024-06-04 21:22:45', '2024-06-04 21:22:45'),
(9, '5A', 1, '2024-06-04 21:22:45', '2024-06-04 21:22:45'),
(10, '5B', 1, '2024-06-04 21:22:45', '2024-06-04 21:22:45'),
(11, '6A', 1, '2024-06-04 21:22:45', '2024-06-04 21:22:45'),
(12, '6B', 1, '2024-06-04 21:22:45', '2024-06-04 21:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `navbars`
--

CREATE TABLE `navbars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$P9lGBG/xvDNKR7RMSDbYdemlQY424ExRcyuhJEwcCt/lZjZYsICkG', NULL, NULL, NULL, '2024-06-04 21:22:42', '2024-06-04 21:22:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fasilitas_user_id_foreign` (`user_id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guru_user_id_foreign` (`user_id`);

--
-- Indexes for table `jadwal_haris`
--
ALTER TABLE `jadwal_haris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal_haris_id_kelas_foreign` (`id_kelas`),
  ADD KEY `jadwal_haris_user_id_foreign` (`user_id`);

--
-- Indexes for table `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kritikdan_sarans`
--
ALTER TABLE `kritikdan_sarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mata_pelajarans`
--
ALTER TABLE `mata_pelajarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mata_pelajarans_user_id_foreign` (`user_id`),
  ADD KEY `mata_pelajarans_id_hari_foreign` (`id_hari`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nama_kelas`
--
ALTER TABLE `nama_kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_kelas_user_id_foreign` (`user_id`);

--
-- Indexes for table `navbars`
--
ALTER TABLE `navbars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengumuman_user_id_foreign` (`user_id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prestasi_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jadwal_haris`
--
ALTER TABLE `jadwal_haris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kritikdan_sarans`
--
ALTER TABLE `kritikdan_sarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mata_pelajarans`
--
ALTER TABLE `mata_pelajarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `nama_kelas`
--
ALTER TABLE `nama_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `navbars`
--
ALTER TABLE `navbars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `fasilitas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jadwal_haris`
--
ALTER TABLE `jadwal_haris`
  ADD CONSTRAINT `jadwal_haris_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `nama_kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jadwal_haris_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mata_pelajarans`
--
ALTER TABLE `mata_pelajarans`
  ADD CONSTRAINT `mata_pelajarans_id_hari_foreign` FOREIGN KEY (`id_hari`) REFERENCES `jadwal_haris` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mata_pelajarans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nama_kelas`
--
ALTER TABLE `nama_kelas`
  ADD CONSTRAINT `nama_kelas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD CONSTRAINT `pengumuman_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `prestasi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
