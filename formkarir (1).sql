-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 06, 2022 at 07:43 AM
-- Server version: 5.7.33
-- PHP Version: 8.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formkarir`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_12_06_012256_create_pendaftaran_perawats_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_perawats`
--

CREATE TABLE `pendaftaran_perawats` (
  `id_pendaftaran_perawat` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_ktp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bb_tb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persetujuan_atribut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp_pribadi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp_ayah_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domisili` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keahlian_bahasa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_lamaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ijazah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skck` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_tanda_registrasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kartu_keluarga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kartu_tanda_penduduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paklaring` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pas_foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penjelasan_singkat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `referensi_perusahaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pernyataan_penyakit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bekerja_lembur` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bekerja_shift` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rekomendasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_baca` text COLLATE utf8mb4_unicode_ci,
  `status_aktif` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftaran_perawats`
--

INSERT INTO `pendaftaran_perawats` (`id_pendaftaran_perawat`, `nama`, `posisi`, `tempat_lahir`, `alamat_ktp`, `jenis_kelamin`, `bb_tb`, `persetujuan_atribut`, `email`, `hp_pribadi`, `hp_ayah_ibu`, `agama`, `domisili`, `keahlian_bahasa`, `surat_lamaran`, `ijazah`, `skck`, `surat_tanda_registrasi`, `kartu_keluarga`, `kartu_tanda_penduduk`, `paklaring`, `pas_foto`, `penjelasan_singkat`, `referensi_perusahaan`, `pernyataan_penyakit`, `bekerja_lembur`, `bekerja_shift`, `rekomendasi`, `status_baca`, `status_aktif`, `created_at`, `updated_at`) VALUES
(1, 'asdasd', 'perawat pelaksana', '2022-12-29', 'asdasd', 'laki-laki', '23', 'ya', 'asdad@gmail.com', '0867854665', 'asdasd', 'budha', 'asdas', 'adasda', '1670302104.cFKGobDLQ96ShqGwy0PeOA_08f9cf7bcc22479880d319ecd92856f1_DAC5M3L4R1-ATTACHMENT_IND.docx', '1670302104.0a5H-XciQgeuR_l3InIHIg_321be4a74d124da39961dca28e51b1f1_DAC2M1L5R1ATTACHMENT_IND.docx', '1670302104.01SwORm2TWuUsDkZtv1rfA_5365d5408caf47999d5df7b49ee08df1_DAC2M3L7R1ATTACHMENT_IND.docx', '1670302104.01SwORm2TWuUsDkZtv1rfA_5365d5408caf47999d5df7b49ee08df1_DAC2M3L7R1ATTACHMENT_IND.docx', '1670302104.BLVBkrH_Rda1QZKx_7XWoQ_b81e7d52271249c181d2001883837ef1_C4M3---Attachment_IND.docx', '1670302104.0a5H-XciQgeuR_l3InIHIg_321be4a74d124da39961dca28e51b1f1_DAC2M1L5R1ATTACHMENT_IND.docx', '1670302104.0a5H-XciQgeuR_l3InIHIg_321be4a74d124da39961dca28e51b1f1_DAC2M1L5R1ATTACHMENT_IND.docx', '1670302104.01SwORm2TWuUsDkZtv1rfA_5365d5408caf47999d5df7b49ee08df1_DAC2M3L7R1ATTACHMENT_IND.docx', 'asda', 'asdasd', 'sdfsdf', 'dfgdf', 'ghjg', 'ghjgh', NULL, NULL, '2022-12-05 21:48:24', '2022-12-05 21:48:24'),
(2, 'Heri Fredianto', 'dokter umum', '2022-12-02', 'fhgdfsd', 'laki-laki', '34', 'ya', 'asdad@gmail.com', '987654', 'Heri Fredianto', 'islam', 'ygfmjhdngff', 'Mandarin', '1670310769.0a5H-XciQgeuR_l3InIHIg_321be4a74d124da39961dca28e51b1f1_DAC2M1L5R1ATTACHMENT_IND.docx', '1670310769.01SwORm2TWuUsDkZtv1rfA_5365d5408caf47999d5df7b49ee08df1_DAC2M3L7R1ATTACHMENT_IND.docx', '1670310769.2v6uL3jtSZq-ri947RmaOw_829573b15a23436783cb34c3a27fc9f1_DAC5M1L1R2-ATTACHMENT_IND.docx', '1670310769.3zWL2wRSRIW1i9sEUhSFiQ_e66254919fc34828b0a3c3d2f7db03f1_C3M6---Attachment_IND (1).docx', '1670310769.3zWL2wRSRIW1i9sEUhSFiQ_e66254919fc34828b0a3c3d2f7db03f1_C3M6---Attachment_IND.docx', '1670310769.4VSuj92oS6-Uro_dqJuv4A_b02ae7d7ae024854b0ce40ad26b9b3f1_DAC5M2L4R1_ATTACHMENT_IND.docx', '1670310769.ajJtCIIZTKqybQiCGYyqbw_596ffa7097da45bdb7b90f4d8f0eb1f1_Hands-On-Activity-Adding-experience-to-a-resume_Resume-Template-Example-with-Experience_IND.docx', '1670310769.Hilih.png', 'qefrws', 'qwFEzds', 'qafd', 'qefawg', 'qWREFGRDXFN', 'WEFSGRFDB', NULL, NULL, '2022-12-06 00:12:49', '2022-12-06 00:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pendaftaran_perawats`
--
ALTER TABLE `pendaftaran_perawats`
  ADD PRIMARY KEY (`id_pendaftaran_perawat`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pendaftaran_perawats`
--
ALTER TABLE `pendaftaran_perawats`
  MODIFY `id_pendaftaran_perawat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
