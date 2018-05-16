-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 14, 2017 at 09:04 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u6757355_pro1`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `harga_beli` int(30) DEFAULT NULL,
  `harga_jual` int(30) DEFAULT NULL,
  `satuan_barang` varchar(30) DEFAULT NULL,
  `stok_barang` int(10) DEFAULT NULL,
  `diskon_barang` varchar(10) DEFAULT NULL,
  `kategori_barang` varchar(50) DEFAULT NULL,
  `tanggal` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `nama_barang`, `harga_beli`, `harga_jual`, `satuan_barang`, `stok_barang`, `diskon_barang`, `kategori_barang`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 'KI1717', 'Tango', 1000, 2000, '4', 5, '15', 'Makanan', '2222-02-22', NULL, '2017-10-27 02:36:33'),
(6, 'adasd', 'asdasd', 2, 22, '1', 2, '2', 'scsccasda', '2222-02-22', '2017-10-27 00:22:29', '2017-10-27 00:22:29');

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
(3, '2017_10_25_085702_laratrust_setup_tables', 2);

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
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `kode_struk` varchar(15) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_supplier` varchar(50) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `harga_beli` int(15) DEFAULT NULL,
  `jumlah` int(15) DEFAULT NULL,
  `total` int(15) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `kode_struk`, `tanggal`, `nama_supplier`, `nama_barang`, `harga_beli`, `jumlah`, `total`, `updated_at`, `created_at`) VALUES
(3, 'TA20171105PFDNH', '2017-11-05', 'Wahyu Ramadhan', 'Jagung Manis', 2000, 45, 90000, '2017-11-05 01:08:49', '2017-11-05 01:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `kode_penjualan` varchar(20) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `nama_penjaga` varchar(50) DEFAULT NULL,
  `tanggal` varchar(20) DEFAULT NULL,
  `harga_jual` int(15) DEFAULT NULL,
  `jumlah` int(15) DEFAULT NULL,
  `total` int(15) DEFAULT NULL,
  `diskon` int(15) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `kode_penjualan`, `nama_barang`, `nama_penjaga`, `tanggal`, `harga_jual`, `jumlah`, `total`, `diskon`, `updated_at`, `created_at`) VALUES
(2, '20171104sznju', 'Tango', 'Member Aisyah', '2017-11-04', 2000, 10, 17000, 15, '2017-11-04 12:16:39', '2017-11-04 12:16:39'),
(3, '20171104AVPML', 'Tango', 'Member Aisyah', '2017-11-04', 2000, 8, 13600, 15, '2017-11-04 13:04:13', '2017-11-04 13:04:13'),
(4, '20171105GZJMI', 'Tango', 'Member Aisyah', '2017-11-05', 2000, 100, 170000, 15, '2017-11-05 01:06:36', '2017-11-05 01:06:36'),
(5, '20171105WFCYT', 'Tango', 'Member Aisyah', '2017-11-05', 2000, 5, 8500, 15, '2017-11-05 04:02:27', '2017-11-05 04:02:27'),
(6, '20171112BAOGZ', 'Tango', 'Member Aisyah', '2017-11-12', 2000, 5, 8500, 15, '2017-11-11 23:31:16', '2017-11-11 23:31:16'),
(7, '20171112MPGAW', 'asdasd', 'Member Aisyah', '2017-11-12', 22, 100, 2156, 2, '2017-11-11 23:31:39', '2017-11-11 23:31:39'),
(8, '20171112NBMGR', 'Tango', 'Member Aisyah', '2017-11-12', 2000, 222, 377400, 15, '2017-11-11 23:31:59', '2017-11-11 23:31:59'),
(9, '20171112SAHLW', 'Tango', 'Member Aisyah', '2017-11-13', 2000, 8, 13600, 15, '2017-11-11 23:32:16', '2017-11-11 23:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `returpembelian`
--

CREATE TABLE `returpembelian` (
  `id` int(11) NOT NULL,
  `no_retur` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_supplier` varchar(30) DEFAULT NULL,
  `kode_barang` varchar(15) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `jumlah` varchar(15) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `returpenjualan`
--

CREATE TABLE `returpenjualan` (
  `id` int(11) NOT NULL,
  `no_retur` varchar(15) DEFAULT NULL,
  `tanggal` varchar(10) DEFAULT NULL,
  `nama_penjaga` varchar(50) DEFAULT NULL,
  `kode_barang` varchar(10) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `returpenjualan`
--

INSERT INTO `returpenjualan` (`id`, `no_retur`, `tanggal`, `nama_penjaga`, `kode_barang`, `nama_barang`, `jumlah`, `keterangan`, `updated_at`, `created_at`) VALUES
(3, 'RP20171105WMVDO', '2017-11-05', 'Member Aisyah', 'adasd', 'asdasd', 100, 'Cacat', '2017-11-05 13:12:50', '2017-11-05 13:12:50'),
(4, 'RP20171105FUBGC', '2017-11-05', 'Member Aisyah', 'KI1717', 'Tango', 2, 'Rusak dan Cacat', '2017-11-05 01:07:16', '2017-11-05 01:07:16');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'pemilik', 'Pemilik Toko', NULL, '2017-10-25 02:03:36', '2017-10-25 02:03:36'),
(2, 'penjaga', 'Penjaga Toko', NULL, '2017-10-25 02:03:36', '2017-10-25 02:03:36');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User'),
(2, 2, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `kode_supplier` varchar(10) DEFAULT NULL,
  `nama_supplier` varchar(50) DEFAULT NULL,
  `alamat_supplier` varchar(100) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `kode_supplier`, `nama_supplier`, `alamat_supplier`, `no_hp`, `keterangan`, `created_at`, `updated_at`) VALUES
(4, 'KI1997', 'Wahyu Ramadhan', 'Jl. Ikan Lumba Lumba no.09 Teluk Betung Selatan Bandar Lampung', '62895610005419', 'Supplier dari PT. Indofood Indonesia.', '2017-10-28 05:16:56', '2017-10-28 05:16:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', 'admin@aisyah.com', '$2y$10$cCkm7m4AnSDMT0nUUoakR.EcuhKYe4bXDikoi9Wd0TVecsj6y.T6i', 'sg7U2Uwv31WgieJ9mLILU9bc6MOie1OmSiueEukA4HaM49VQk6PcVbwiFbOK', '2017-10-25 02:03:37', '2017-10-25 02:03:37'),
(2, 'Member Aisyah', 'member17', 'member@aisyah.com', '$2y$10$JlUJkb6PrH4tg8L2jaLQTeDJXcNkBdb4Vw6V16vSE7ofVG1VPbeM.', 'TNXAJDnjTnAy60Oooh1UDNMa4nXloy2B00sL84jeYbWWeTRdFsQKvQdMbHp4', '2017-10-25 02:03:37', '2017-10-25 02:03:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`,`kode_barang`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `returpembelian`
--
ALTER TABLE `returpembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `returpenjualan`
--
ALTER TABLE `returpenjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `returpembelian`
--
ALTER TABLE `returpembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `returpenjualan`
--
ALTER TABLE `returpenjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
