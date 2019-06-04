-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2019 at 05:27 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scm`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembelian`
--

CREATE TABLE `detail_pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_ikan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_beli` double NOT NULL,
  `total_harga` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pembelian`
--

INSERT INTO `detail_pembelian` (`id_pembelian`, `id_ikan`, `jumlah`, `harga_beli`, `total_harga`, `created_at`, `deleted_at`) VALUES
(1, 1, 10, 10000, 100000, '2019-04-19 05:39:51', NULL),
(1, 2, 20, 150000, 3000000, '2019-04-19 05:39:51', NULL),
(2, 3, 10, 100000, 1000000, '2019-04-21 11:29:07', NULL),
(3, 4, 1, 16000, 16000, '2019-04-21 14:05:12', NULL),
(3, 2, 4, 40000, 160000, '2019-04-21 14:05:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total_harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`id_penjualan`, `id_produk`, `jumlah`, `tanggal`, `total_harga`) VALUES
(2, 2, 1, '2019-04-25', 35000),
(2, 1, 1, '2019-04-25', 10000),
(3, 1, 1, '2019-04-28', 10000),
(3, 3, 4, '2019-04-28', 400000);

-- --------------------------------------------------------

--
-- Table structure for table `ikan`
--

CREATE TABLE `ikan` (
  `id_ikan` int(11) NOT NULL,
  `ikan` varchar(191) NOT NULL,
  `stok` int(11) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ikan`
--

INSERT INTO `ikan` (`id_ikan`, `ikan`, `stok`, `deleted_at`) VALUES
(1, 'Ikan Mujair', 20, NULL),
(2, 'Cumi Cumi', 24, NULL),
(3, 'Ikan Kakap', 5, NULL),
(4, 'Ikan Nila', 1, NULL),
(5, 'Lobster', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id_job` int(11) NOT NULL,
  `job` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id_job`, `job`) VALUES
(1, 'Abon'),
(2, 'Sarden'),
(3, 'Nugget'),
(4, 'Bakso'),
(5, 'Sosis'),
(6, 'Sambal');

-- --------------------------------------------------------

--
-- Table structure for table `mesin`
--

CREATE TABLE `mesin` (
  `id_mesin` int(11) NOT NULL,
  `mesin` varchar(191) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mesin`
--

INSERT INTO `mesin` (`id_mesin`, `mesin`, `jumlah`) VALUES
(1, 'Mesin Pencuci', 1),
(2, 'Separator', 1),
(3, 'Oven', 1),
(4, 'Pengemasan', 1),
(5, 'Pengukus', 1),
(6, 'Penggorengan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `biaya_kirim` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_supplier`, `tanggal`, `biaya_kirim`, `total`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2019-04-19', 1000, 3101000, '2019-04-19 05:39:51', NULL, NULL),
(2, 1, '2019-04-21', 10000, 1010000, '2019-04-21 11:29:06', NULL, NULL),
(3, 5, '2019-04-21', 10000, 186000, '2019-04-21 14:05:12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total_harga` double NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `id_user`, `tanggal`, `total_harga`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 3, '2019-04-25', 45000, 1, '2019-04-25 00:43:03', NULL, NULL),
(3, 3, '2019-04-28', 410000, 1, '2019-04-28 16:30:24', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_ikan` int(11) NOT NULL,
  `nama_produk` varchar(191) NOT NULL,
  `stok` int(11) NOT NULL,
  `jumlah_ikan` int(11) NOT NULL,
  `harga_jual` double NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_ikan`, `nama_produk`, `stok`, `jumlah_ikan`, `harga_jual`, `gambar`, `tanggal`, `deskripsi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Kripik Ikan Mujair', 9, 0, 10000, '1555681593-200px-Perusahaan_Listrik_Negara.jpg', '2019-04-19', 'Kripik Ikan Mujair Lezat', '2019-04-19 13:46:33', NULL, NULL),
(2, 3, 'Sambal Ikan Kakap', 9, 5, 15000, '1556613249-download (1).jpg', '2019-04-30', 'Sambal Ikan kakap lezat', '2019-04-30 08:34:10', NULL, NULL),
(3, 5, 'Ikan Lobster', 6, 0, 100000, '1556165279-200px-Perusahaan_Listrik_Negara.jpg', '2019-04-25', 'ini teh ikan, ikan teh ini.', '2019-04-25 04:07:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id_supplier` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id_supplier`, `nama`, `alamat`, `no_hp`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Miko', 'Jember', '08273123', '2019-03-19 20:56:44', '2019-03-19 20:56:44', NULL),
(2, 'Miko', 'Jember', '08273', '2019-03-19 20:57:02', '2019-03-19 20:57:02', '2019-03-19 21:06:02'),
(3, 'Molly', 'Bandung', '0989809', '2019-03-20 08:26:29', NULL, NULL),
(4, 'Shinta', 'Lumajang', '21739811', '2019-04-08 15:44:39', NULL, NULL),
(5, 'Sarah', 'Jl. Maninjau E3 No 2 Tanjungsari Kecamatan Sukorejo Kota blitar', '085806123682', '2019-04-21 13:59:25', NULL, NULL),
(6, 'Danii', 'Jember', '019283092', '2019-05-07 06:11:20', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `urutan_proses`
--

CREATE TABLE `urutan_proses` (
  `id_urutan` int(11) NOT NULL,
  `id_job` int(11) NOT NULL,
  `total_proses` int(11) NOT NULL,
  `proses_1` int(11) NOT NULL,
  `proses_2` int(11) NOT NULL,
  `proses_3` int(11) NOT NULL,
  `proses_4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urutan_proses`
--

INSERT INTO `urutan_proses` (`id_urutan`, `id_job`, `total_proses`, `proses_1`, `proses_2`, `proses_3`, `proses_4`) VALUES
(1, 1, 4, 1, 2, 3, 4),
(2, 2, 4, 1, 2, 6, 4),
(3, 3, 4, 1, 2, 5, 4),
(4, 4, 4, 1, 2, 3, 4),
(5, 5, 4, 1, 2, 6, 4),
(6, 6, 4, 1, 2, 6, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `id_telegram` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `alamat`, `no_hp`, `level`, `id_telegram`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Admin', 'admin@onestep.id', NULL, '$2y$10$0cvdvD6YOBu.Jvwcsve1ju519FhSvHHsMBWnA.DcIhw8fhL0jGFPe', 'Jember', '085231193649', 1, NULL, 'm628gYWa4FgfmQQwedWaACP8E7fsi1eSoeFSpknvOqMcQVvgBS6ebwQcG4ZM', '2019-03-18 17:28:26', '2019-03-18 17:28:26', NULL),
(3, 'Brian Rizqi', 'ostep.id@gmail.com', NULL, '$2y$10$jryiVxt./Hx1C4ZqNPvKveN7hNnZ8qW4k27WZOf1wjgZ7qA9vu/o2', 'Pondok Bedadung Indah Q8', '085231193649', 3, '420240827', 'lFwrd5y5N13ASa8zYgJUhzLgSdeBAcmPLvfmCbJtNBQglUPJJVkTT76fmi3A', '2019-03-20 18:25:19', '2019-03-20 18:25:19', NULL),
(4, 'Miko', 'michaelmiko27@gmail.com', NULL, '$2y$10$jsPFgWjDHR316y8270rBcOnWaGspZ7UqW9OPZ7KV6qmno2qGH955O', 'Jember', '085231193649', 3, '527857037', 'uLuXBqREQqYzUxIbeVcO8nxRQlYwe7uMaN7FPdTBCBZBwL2BpqiJT2zT66uf', '2019-04-08 20:29:55', '2019-04-08 20:29:55', NULL),
(5, 'shinta', 'shintadanjojo@gmail.com', NULL, '$2y$10$GJWymgMzaqaC/XYoGLEuNO4JDLB/liaKvFRlDn23TsCVWCVGfyX8C', 'jember bedadung', '1234567890', 3, NULL, 'uSEWWGIFbDrW0gX1dM3SXSB7HOlvztriviAl42NTruHRdYl3YQ5UVG6QnoXU', '2019-04-24 21:10:39', '2019-04-24 21:10:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `waktu_proses`
--

CREATE TABLE `waktu_proses` (
  `id_waktu` int(11) NOT NULL,
  `id_job` int(11) NOT NULL,
  `total_waktu` int(11) NOT NULL,
  `waktu1` int(11) NOT NULL,
  `waktu2` int(11) NOT NULL,
  `waktu3` int(11) NOT NULL,
  `waktu4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu_proses`
--

INSERT INTO `waktu_proses` (`id_waktu`, `id_job`, `total_waktu`, `waktu1`, `waktu2`, `waktu3`, `waktu4`) VALUES
(1, 1, 36, 6, 3, 15, 12),
(2, 2, 23, 6, 3, 4, 10),
(3, 3, 63, 6, 3, 45, 9),
(4, 4, 35, 6, 3, 19, 7),
(5, 5, 69, 6, 3, 30, 30),
(6, 6, 39, 6, 3, 15, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD KEY `id_pembelian` (`id_pembelian`,`id_ikan`),
  ADD KEY `id_ikan` (`id_ikan`);

--
-- Indexes for table `ikan`
--
ALTER TABLE `ikan`
  ADD PRIMARY KEY (`id_ikan`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id_job`);

--
-- Indexes for table `mesin`
--
ALTER TABLE `mesin`
  ADD PRIMARY KEY (`id_mesin`);

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
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_ikan` (`id_ikan`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `urutan_proses`
--
ALTER TABLE `urutan_proses`
  ADD PRIMARY KEY (`id_urutan`),
  ADD KEY `proses_1` (`proses_1`,`proses_2`,`proses_3`,`proses_4`),
  ADD KEY `proses_2` (`proses_2`),
  ADD KEY `proses_3` (`proses_3`),
  ADD KEY `proses_4` (`proses_4`),
  ADD KEY `id_job` (`id_job`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `waktu_proses`
--
ALTER TABLE `waktu_proses`
  ADD PRIMARY KEY (`id_waktu`),
  ADD KEY `id_job` (`id_job`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ikan`
--
ALTER TABLE `ikan`
  MODIFY `id_ikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mesin`
--
ALTER TABLE `mesin`
  MODIFY `id_mesin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `urutan_proses`
--
ALTER TABLE `urutan_proses`
  MODIFY `id_urutan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `waktu_proses`
--
ALTER TABLE `waktu_proses`
  MODIFY `id_waktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD CONSTRAINT `detail_pembelian_ibfk_1` FOREIGN KEY (`id_ikan`) REFERENCES `ikan` (`id_ikan`),
  ADD CONSTRAINT `detail_pembelian_ibfk_2` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian` (`id_pembelian`);

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `suppliers` (`id_supplier`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_ikan`) REFERENCES `ikan` (`id_ikan`);

--
-- Constraints for table `urutan_proses`
--
ALTER TABLE `urutan_proses`
  ADD CONSTRAINT `urutan_proses_ibfk_1` FOREIGN KEY (`proses_1`) REFERENCES `mesin` (`id_mesin`),
  ADD CONSTRAINT `urutan_proses_ibfk_2` FOREIGN KEY (`proses_2`) REFERENCES `mesin` (`id_mesin`),
  ADD CONSTRAINT `urutan_proses_ibfk_3` FOREIGN KEY (`proses_3`) REFERENCES `mesin` (`id_mesin`),
  ADD CONSTRAINT `urutan_proses_ibfk_4` FOREIGN KEY (`proses_4`) REFERENCES `mesin` (`id_mesin`),
  ADD CONSTRAINT `urutan_proses_ibfk_5` FOREIGN KEY (`id_job`) REFERENCES `job` (`id_job`);

--
-- Constraints for table `waktu_proses`
--
ALTER TABLE `waktu_proses`
  ADD CONSTRAINT `waktu_proses_ibfk_1` FOREIGN KEY (`id_job`) REFERENCES `job` (`id_job`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
