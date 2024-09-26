-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2024 at 05:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forecasting_penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataproduk`
--

CREATE TABLE `dataproduk` (
  `idproduk` int(11) NOT NULL,
  `namabarang` varchar(25) NOT NULL,
  `stok` int(11) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataproduk`
--

INSERT INTO `dataproduk` (`idproduk`, `namabarang`, `stok`, `iduser`) VALUES
(1, 'Tahu', -2324, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dataproduksi`
--

CREATE TABLE `dataproduksi` (
  `idproduksi` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `idproduk` int(11) NOT NULL,
  `deskripsi` varchar(25) NOT NULL,
  `quantity` int(11) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataproduksi`
--

INSERT INTO `dataproduksi` (`idproduksi`, `tanggal`, `idproduk`, `deskripsi`, `quantity`, `iduser`) VALUES
(46, '2023-12-21', 1, 'Tahu Baru Hari Ini', 1711, 0),
(47, '2023-12-22', 1, '-', 1748, 0),
(48, '2023-12-23', 1, '-', 1646, 0),
(49, '2023-12-24', 1, '-', 1458, 0),
(50, '2023-12-25', 1, '-', 1381, 0),
(51, '2023-12-26', 1, '-', 1245, 0),
(52, '2023-12-27', 1, '-', 1967, 0),
(53, '2023-12-28', 1, '-', 1505, 0),
(54, '2023-12-29', 1, '-', 1411, 0),
(55, '2023-12-30', 1, '-', 1366, 0),
(56, '2023-12-31', 1, '-', 1500, 0),
(67, '2024-01-01', 1, '-', 1390, 0);

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keluar`
--

CREATE TABLE `keluar` (
  `idkeluar` int(11) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `penerima` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keluar`
--

INSERT INTO `keluar` (`idkeluar`, `idproduk`, `tanggal`, `penerima`, `quantity`) VALUES
(26, 1, '2023-12-21', 'Pabrik Tahu Melati', 1213),
(27, 1, '2023-12-22', 'Depot Makan Surabaya', 1355),
(28, 1, '2023-12-23', 'Flamboyan', 1188),
(29, 1, '2023-12-24', 'WOW Batu', 1327),
(30, 1, '2023-12-25', 'Depot Ijo', 1136),
(32, 1, '2023-12-26', 'Sati', 1028),
(33, 1, '2023-12-27', 'Depot HTS', 1967),
(34, 1, '2023-12-28', 'Pasar Genteng Baru Surabaya', 1344),
(35, 1, '2023-12-29', 'Pasar Citraland', 1295),
(36, 1, '2023-12-30', 'Pasar Modern Puncak Permai', 1366),
(37, 1, '2023-12-31', 'Perumahan', 1500),
(48, 1, '2024-01-01', 'WOW Batu', 1390),
(49, 1, '2024-01-02', 'Sati', 1398),
(50, 1, '2024-01-03', 'WOW Batu', 1405);

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `idmasuk` int(11) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `penerima` varchar(25) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`idmasuk`, `idproduk`, `tanggal`, `penerima`, `quantity`) VALUES
(37, 1, '2023-12-21', 'Pabrik Tahu Melati', 498),
(38, 1, '2023-12-22', 'Pabrik Tahu Melati', 393),
(39, 1, '2023-12-23', 'Pabrik Tahu Melati', 458),
(40, 1, '2023-12-24', 'Pabrik Tahu Melati', 131),
(41, 1, '2023-12-25', 'Pabrik Tahu Melati', 245),
(42, 1, '2023-12-26', 'Pabrik Tahu Melati', 217),
(43, 1, '2023-12-27', 'Pabrik Tahu Melati', 0),
(44, 1, '2023-12-28', 'Pabrik Tahu Melati', 161),
(45, 1, '2023-12-29', 'Pabrik Tahu Melati', 116),
(46, 1, '2023-12-30', 'Pabrik Tahu Melati', 0),
(47, 1, '2023-12-31', 'Pabrik Tahu Melati', 0);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `peramalan`
--

CREATE TABLE `peramalan` (
  `id` int(11) NOT NULL,
  `hari` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `alpha` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peramalan`
--

INSERT INTO `peramalan` (`id`, `hari`, `jumlah`, `alpha`) VALUES
(10, 15, 1413, 0.1),
(11, 15, 1438, 0.2),
(12, 15, 1424, 0.3),
(13, 15, 1410, 0.4),
(14, 15, 1403, 0.5),
(15, 15, 1401, 0.6),
(16, 15, 1402, 0.7),
(17, 15, 1405, 0.8),
(18, 15, 1410, 0.9);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admintahu@gmail.com', NULL, '$2y$10$3O/Bha.XWV6NXBSNVLjl/u/6Zf7y89rw1S39eSOwGxYAca9Pr4lq6', 'admin', NULL, '2024-04-30 08:44:03', '2024-04-30 08:44:03'),
(2, 'Karyawan', 'karyawan@gmail.com', NULL, '$2y$10$3O/Bha.XWV6NXBSNVLjl/u/6Zf7y89rw1S39eSOwGxYAca9Pr4lq6', 'karyawan', NULL, '2024-04-30 08:44:03', '2024-04-30 08:44:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataproduk`
--
ALTER TABLE `dataproduk`
  ADD PRIMARY KEY (`idproduk`),
  ADD KEY `idx_user` (`iduser`);

--
-- Indexes for table `dataproduksi`
--
ALTER TABLE `dataproduksi`
  ADD PRIMARY KEY (`idproduksi`),
  ADD KEY `idx_user` (`iduser`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `keluar`
--
ALTER TABLE `keluar`
  ADD PRIMARY KEY (`idkeluar`),
  ADD KEY `idproduk` (`idproduk`);

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`idmasuk`),
  ADD KEY `idproduk` (`idproduk`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `peramalan`
--
ALTER TABLE `peramalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `dataproduk`
--
ALTER TABLE `dataproduk`
  MODIFY `idproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `dataproduksi`
--
ALTER TABLE `dataproduksi`
  MODIFY `idproduksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keluar`
--
ALTER TABLE `keluar`
  MODIFY `idkeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `masuk`
--
ALTER TABLE `masuk`
  MODIFY `idmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peramalan`
--
ALTER TABLE `peramalan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keluar`
--
ALTER TABLE `keluar`
  ADD CONSTRAINT `keluar_ibfk_1` FOREIGN KEY (`idproduk`) REFERENCES `dataproduk` (`idproduk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
