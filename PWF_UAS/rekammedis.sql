-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 02:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekammedis`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kota_tinggal` varchar(50) DEFAULT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `alamat`, `kota_tinggal`, `no_tlp`, `spesialis`, `created_at`, `updated_at`) VALUES
(11, 'dr. Ade', 'Mulyosari', 'Surabaya', '081081081081', 'Umum', '2020-12-15 21:38:30', '2020-12-15 21:38:30'),
(12, 'dr. Oki', 'Bratang', 'Surabaya', '081082083084', 'Umum', '2021-01-01 01:28:39', '2021-01-01 01:29:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(4, '2020_10_28_030646_dokter', 2),
(5, '2020_10_28_030646_obat', 3),
(6, '2020_10_28_030646_pasien', 3),
(7, '2020_10_28_030646_petugas_admin', 4),
(8, '2020_10_28_030646_rekam_medis', 4),
(9, '2020_10_28_030646_resep_obat', 4),
(10, '2020_12_02_031804_resep_obat', 5),
(15, '2014_10_12_100000_create_password_resets_table', 6),
(16, '2019_08_19_000000_create_failed_jobs_table', 6),
(17, '2021_01_01_091433_petugas_admin', 6),
(18, '2021_01_01_091541_pasien', 6),
(19, '2021_01_01_091552_rekam_medis', 6),
(20, '2021_01_01_091619_resep_obat', 6);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `kategori_obat` char(3) NOT NULL,
  `nama_obat` varchar(100) DEFAULT NULL,
  `bentuk_obat` varchar(100) DEFAULT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `harga_obat` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `kategori_obat`, `nama_obat`, `bentuk_obat`, `tgl_kadaluarsa`, `harga_obat`, `created_at`, `updated_at`) VALUES
(7, 'B', 'Paracetamol', 'Tablet', '2022-12-16', '15000', '2020-12-15 21:39:49', '2021-01-01 01:29:43'),
(8, 'B', 'Vitamin C', 'Tablet', '2022-12-10', '7000', '2021-01-01 01:30:41', '2021-01-01 01:30:41'),
(9, 'K', 'Vitamin F', 'Kapsul', '2023-05-05', '90000', '2021-01-01 04:26:34', '2021-01-01 04:26:34');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kota_tinggal` varchar(50) DEFAULT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `id`, `nama_pasien`, `tgl_lahir`, `tempat_lahir`, `alamat`, `kota_tinggal`, `no_tlp`, `pekerjaan`, `created_at`, `updated_at`) VALUES
(1, 8, 'Abel', '2000-01-06', 'Surabaya', 'Margorejo', 'Surabaya', '089088087088', 'Pegawai', NULL, '2021-01-01 05:14:20'),
(4, NULL, 'And', '2000-01-01', 'Surabaya', 'Kertajaya', 'Surabaya', '088855558880', NULL, '2021-01-01 02:56:31', '2021-01-01 03:26:20'),
(5, 9, 'Mochammad', '2000-05-02', 'Gresik', 'Manyar', 'Surabaya', '089878767656', 'Wiraswasta', '2021-01-01 03:01:46', '2021-01-01 04:11:04'),
(6, 10, 'Anto', '2000-02-29', 'Malang', 'Embong', 'Surabaya', '081397248635', 'Pelajar', '2021-01-01 04:16:34', '2021-01-01 04:16:34');

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
-- Table structure for table `petugas_admin`
--

CREATE TABLE `petugas_admin` (
  `id_petugas` int(11) NOT NULL,
  `id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kota_tinggal` varchar(50) DEFAULT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas_admin`
--

INSERT INTO `petugas_admin` (`id_petugas`, `id`, `nama_petugas`, `alamat`, `kota_tinggal`, `no_tlp`, `created_at`, `updated_at`) VALUES
(3, 6, 'Rafif', 'Bratang', 'Surabaya', '089089089089', NULL, '2021-01-01 04:04:38'),
(6, 7, 'Andy', 'Mulyorejo', 'Sidoarjo', '081081081081', NULL, '2021-01-01 04:05:31'),
(7, 5, 'Wahyu', 'Mulyosari', 'Lamongan', '081081082082', NULL, NULL),
(9, NULL, 'Asd', 'Ngagel', 'Gresik', '089089089089', NULL, '2021-01-01 03:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id_rekam_medis` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `diagnosa` text DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `biaya_jasa` decimal(10,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`id_rekam_medis`, `id_pasien`, `id_petugas`, `id_dokter`, `tgl_periksa`, `diagnosa`, `keterangan`, `biaya_jasa`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 12, '2021-01-01', 'Flu', NULL, '25000', NULL, NULL),
(2, 1, 7, 11, '2021-01-01', 'Batuk', 'Terserah', '20000', NULL, NULL),
(3, 5, 6, 11, '2021-01-01', 'Diabetes', 'Terserah', '100000', NULL, NULL),
(4, 6, 3, 11, '2021-01-01', 'Asam urat', NULL, '120000', NULL, NULL),
(5, 1, 7, 12, '2021-01-01', 'Flu', 'Terserah', '20000', NULL, NULL),
(6, 6, 7, 12, '2021-01-01', 'Tidak tahu', NULL, '100000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resep_obat`
--

CREATE TABLE `resep_obat` (
  `id_resep` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `id_rekam_medis` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resep_obat`
--

INSERT INTO `resep_obat` (`id_resep`, `id_obat`, `id_rekam_medis`, `jumlah`) VALUES
(1, 7, 1, 5),
(2, 9, 1, 2);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(5, 'Wahyu', 'wahyu@gmail.com', '2021-01-01 00:21:12', '$2y$10$VbtFMjadjrutPuHCQQMAAeVSbkBiSoe5xvsX0kidoE9lZ2VsGIxIC', NULL, '2021-01-01 00:21:12', '2021-01-01 00:21:12', '1'),
(6, 'Rafif', 'rafif@gmail.com', '2021-01-01 04:04:19', '$2y$10$rOJe4DMfTLEWa1JVLXqfVO7DnmOXe26mXci/DSFHCWp7AeMSgOAj6', NULL, '2021-01-01 04:04:19', '2021-01-01 04:04:19', '1'),
(7, 'Andy', 'andy2@gmail.com', '2021-01-01 04:05:13', '$2y$10$dVf4WbdqTxWZMefiBxC4fum.AE4v90B/Q2ZdldRqAq3zqKa7hWaFG', NULL, '2021-01-01 04:05:13', '2021-01-01 04:05:13', '1'),
(8, 'Abel', 'abel@gmail.com', '2021-01-01 04:07:28', '$2y$10$b2HiXgYVUzFNMIUwOtpr7O0OKSCIi8cWZpcyjoqy25g6WaVmpN/IS', NULL, '2021-01-01 04:07:28', '2021-01-01 04:07:28', '2'),
(9, 'Mochammad', 'mochammad@gmail.com', '2021-01-01 04:09:13', '$2y$10$bstlHd.vTCQfWDUgpUEHCeFxkEst7SFZmL6FjLMnSK6UG7wyxn9o2', NULL, '2021-01-01 04:09:13', '2021-01-01 04:09:13', '2'),
(10, 'Anto', 'anto@yahoo.com', '2021-01-01 04:15:02', '$2y$10$G2QVEOo56ut8jzRQMy3AP.oLsoWD/EIHXhzwXwSXrnahPBGU/GU66', NULL, '2021-01-01 04:15:02', '2021-01-01 04:15:02', '2'),
(11, 'Toni', 'toni@yahoo.com', '2021-01-01 05:06:23', '$2y$10$GOd26IMEKPzC0KhPHRqogO4LjTXO52ThqiF6vgCDp9FlI8mVyCc7i', NULL, '2021-01-01 05:06:23', '2021-01-01 05:06:23', '2'),
(12, 'Soni', 'soni@yahoo.com', '2021-01-01 06:46:45', '$2y$10$hJiS2VTTDsvFEoAUYTnnluB38gux8RLk3/MGni6ra.eU5pquFUCBq', NULL, '2021-01-01 06:46:45', '2021-01-01 06:46:45', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD UNIQUE KEY `uk_id_user` (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `petugas_admin`
--
ALTER TABLE `petugas_admin`
  ADD PRIMARY KEY (`id_petugas`),
  ADD UNIQUE KEY `uk_id_user` (`id`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id_rekam_medis`),
  ADD KEY `fk_id_pasien` (`id_pasien`),
  ADD KEY `fk_id_petugas` (`id_petugas`),
  ADD KEY `fk_id_dokter` (`id_dokter`);

--
-- Indexes for table `resep_obat`
--
ALTER TABLE `resep_obat`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `fk_id_obat` (`id_obat`),
  ADD KEY `fk_id_rekam_medis` (`id_rekam_medis`);

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
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `petugas_admin`
--
ALTER TABLE `petugas_admin`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id_rekam_medis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resep_obat`
--
ALTER TABLE `resep_obat`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `fk_pasien_user` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `petugas_admin`
--
ALTER TABLE `petugas_admin`
  ADD CONSTRAINT `fk_admin_user` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `fk_id_dokter` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
  ADD CONSTRAINT `fk_id_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`),
  ADD CONSTRAINT `fk_id_petugas` FOREIGN KEY (`id_petugas`) REFERENCES `petugas_admin` (`id_petugas`);

--
-- Constraints for table `resep_obat`
--
ALTER TABLE `resep_obat`
  ADD CONSTRAINT `fk_id_obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`),
  ADD CONSTRAINT `fk_id_rekam_medis` FOREIGN KEY (`id_rekam_medis`) REFERENCES `rekam_medis` (`id_rekam_medis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
