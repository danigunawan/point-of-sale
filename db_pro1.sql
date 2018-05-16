-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 19, 2018 at 08:31 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pro1`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `idbarang_unit` bigint(11) UNSIGNED DEFAULT NULL,
  `idbarang_kategori` bigint(11) UNSIGNED DEFAULT NULL,
  `kode_barang` varchar(100) DEFAULT NULL,
  `nama_barang` varchar(300) DEFAULT NULL,
  `harga_beli` bigint(11) UNSIGNED DEFAULT NULL,
  `harga_jual` bigint(11) UNSIGNED DEFAULT NULL,
  `stok` bigint(11) DEFAULT '0',
  `diskon` varchar(100) DEFAULT '0',
  `harga_jual_akhir` int(20) DEFAULT '0',
  `description` varchar(300) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdby` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedby` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `idbarang_unit`, `idbarang_kategori`, `kode_barang`, `nama_barang`, `harga_beli`, `harga_jual`, `stok`, `diskon`, `harga_jual_akhir`, `description`, `created_at`, `createdby`, `updated_at`, `updatedby`) VALUES
(22, 3, 11, 'BRG-0001', 'Mie Sedaap Rasa Kare', 1200, 1500, 0, '0', 1500, '', '2018-03-16 16:14:58', 'penjaga', '2018-03-16 16:14:58', 'Penjaga'),
(23, 3, 11, 'BRG-0002', 'Indomie Rasa Soto', 1200, 1500, 20, '0', 1500, '', '2018-03-18 09:22:25', 'penjaga', '2018-03-18 09:22:25', 'Penjaga'),
(24, 3, 11, 'BRG-0003', 'Mie Sedaap Rasa Ayam Bawang', 1200, 1500, 5, '0', 1500, '', '2018-03-18 09:22:26', 'penjaga', '2018-03-18 09:22:26', 'Penjaga'),
(25, 3, 27, 'BRG-0004', 'Aqua Botol 1500 ML', 4500, 5000, -1, '5', 4750, '', '2018-03-19 03:33:57', 'penjaga', '2018-03-19 03:33:57', 'Penjaga'),
(26, 2, 14, 'BRG-0005', 'Kapal Api Special Mix', 800, 1000, 0, '0', 0, '', '2018-03-16 15:44:58', 'penjaga', '2016-05-20 05:25:25', 'penjaga'),
(31, 5, 7, 'BRG-0006', 'Kispray', 4700, 5000, 0, '0', 5000, NULL, '2018-03-16 16:17:44', 'penjaga', '2018-03-16 16:17:44', 'Penjaga'),
(32, 5, 36, 'BRG-0007', 'Sepeda MX 250', 450000, 500000, -7, '0', 500000, NULL, '2018-03-19 03:33:57', NULL, '2018-03-19 03:33:57', 'Penjaga'),
(33, 5, 36, 'BRG-0008', 'Boneka Barbie XL', 450000, 600000, 0, '0', 600000, NULL, '2018-03-16 16:16:33', 'Penjaga', '2018-03-16 16:16:33', 'Penjaga');

-- --------------------------------------------------------

--
-- Table structure for table `barang_kategori`
--

CREATE TABLE `barang_kategori` (
  `idbarang_kategori` bigint(11) UNSIGNED NOT NULL,
  `kategori` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdby` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedby` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_kategori`
--

INSERT INTO `barang_kategori` (`idbarang_kategori`, `kategori`, `created_at`, `createdby`, `updated_at`, `updatedby`) VALUES
(3, 'DETERGEN', '2018-03-13 02:29:32', NULL, '2016-04-13 13:38:38', NULL),
(4, 'MINYAK GORENG', '2018-03-13 02:29:32', NULL, '2016-03-04 08:41:12', NULL),
(5, 'SABUN CUCI PIRING', '2018-03-13 02:29:32', NULL, '2016-03-04 08:41:35', NULL),
(6, 'PEMBERSIH LANTAI', '2018-03-13 02:29:32', NULL, '2016-03-04 08:41:55', NULL),
(7, 'PELEMBUT DAN PEWANGI PAKAIAN', '2018-03-13 02:29:32', NULL, '2016-03-04 08:42:24', NULL),
(8, 'PASTA GIGI', '2018-03-13 02:29:32', NULL, '2016-03-04 08:42:45', NULL),
(9, 'SABUN MANDI', '2018-03-13 02:29:32', NULL, '2016-03-04 08:42:52', NULL),
(10, 'PELICIN PAKAIAN', '2018-03-13 02:29:32', NULL, '2016-03-04 08:42:59', NULL),
(11, 'MIE INSTANT', '2018-03-13 02:29:32', NULL, '2016-03-04 08:43:13', NULL),
(12, 'MARGARIN', '2018-03-13 02:29:32', NULL, '2016-03-04 08:43:23', NULL),
(13, 'TEH', '2018-03-13 02:29:32', NULL, '2016-03-04 08:43:29', NULL),
(14, 'KOPI', '2018-03-13 02:29:32', NULL, '2016-03-04 08:43:34', NULL),
(15, 'SUSU', '2018-03-13 02:29:32', NULL, '2016-03-04 08:43:39', NULL),
(16, 'KECAP, SAUS, SAMBAL', '2018-03-13 02:29:32', NULL, '2016-03-04 08:43:48', NULL),
(17, 'GULA', '2018-03-13 02:29:32', NULL, '2016-03-04 08:43:54', NULL),
(18, 'PEMBALUT WANITA', '2018-03-13 02:29:32', NULL, '2016-03-04 08:44:02', NULL),
(19, 'SAMPO', '2018-03-13 02:29:32', NULL, '2016-03-04 08:44:08', NULL),
(20, 'ROKOK', '2018-03-13 02:29:32', NULL, '2016-03-04 08:44:17', NULL),
(21, 'OBAT NYAMUK', '2018-03-13 02:29:32', NULL, '2016-03-04 08:44:21', NULL),
(22, 'ALAT TULIS', '2018-03-13 02:29:32', NULL, '2016-03-04 08:44:26', NULL),
(23, 'SEMBAKO', '2018-03-13 02:29:32', NULL, '2016-03-04 08:44:30', NULL),
(24, 'KEPERLUAN DAPUR', '2018-03-13 02:29:32', NULL, '2016-03-04 08:44:39', NULL),
(25, 'PLASTIK', '2018-03-13 02:29:32', NULL, '2016-03-04 08:44:44', NULL),
(26, 'MAKANAN RINGAN / SNACK', '2018-03-13 02:29:32', NULL, '2016-03-04 08:44:56', NULL),
(27, 'MINUMAN', '2018-03-13 02:29:32', NULL, '2016-03-04 08:45:00', NULL),
(28, 'OBAT-OBATAN', '2018-03-13 02:29:32', NULL, '2016-03-04 08:45:06', NULL),
(29, 'LAIN-LAIN', '2018-03-13 02:29:32', NULL, '2016-03-04 08:45:12', NULL),
(36, 'MAINAN ANAK', '2018-03-14 15:02:34', NULL, '2018-03-14 15:02:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `barang_persediaans`
--

CREATE TABLE `barang_persediaans` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_barang` bigint(11) UNSIGNED DEFAULT NULL,
  `id_supplier` int(11) UNSIGNED DEFAULT NULL,
  `detail` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_beli` date DEFAULT NULL,
  `tanggal_jual` date DEFAULT NULL,
  `stok_beli` bigint(11) DEFAULT NULL,
  `stok_jual` bigint(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `createdby` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatedby` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang_persediaans`
--

INSERT INTO `barang_persediaans` (`id`, `id_barang`, `id_supplier`, `detail`, `tanggal_beli`, `tanggal_jual`, `stok_beli`, `stok_jual`, `updated_at`, `created_at`, `createdby`, `updatedby`) VALUES
(1, 32, 4, NULL, '2018-03-18', '2018-03-19', 3, 2, '2018-03-19 03:33:57', '2018-03-18 09:22:25', 'Penjaga', NULL),
(2, 23, 4, NULL, '2018-03-18', NULL, 20, NULL, '2018-03-18 09:22:25', '2018-03-18 09:22:25', 'Penjaga', NULL),
(3, 24, 4, NULL, '2018-03-18', NULL, 5, NULL, '2018-03-18 09:22:26', '2018-03-18 09:22:26', 'Penjaga', NULL),
(4, 25, 4, NULL, NULL, '2018-03-19', NULL, 1, '2018-03-19 03:33:57', '2018-03-19 03:33:57', 'Penjaga', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `barang_unit`
--

CREATE TABLE `barang_unit` (
  `idbarang_unit` bigint(11) UNSIGNED NOT NULL,
  `unit` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdby` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedby` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_unit`
--

INSERT INTO `barang_unit` (`idbarang_unit`, `unit`, `created_at`, `createdby`, `updated_at`, `updatedby`) VALUES
(1, 'BIJI', '2018-03-13 02:37:28', NULL, '2016-03-03 07:56:07', NULL),
(2, 'SACHET', '2018-03-13 02:37:28', NULL, '2016-03-03 07:55:16', NULL),
(3, 'PCS', '2018-03-13 02:37:28', NULL, '2016-03-03 07:54:45', NULL),
(4, 'BOX', '2018-03-13 02:37:28', NULL, '2016-03-03 08:00:23', NULL),
(5, 'UNIT', '2018-03-13 02:37:28', NULL, '2016-03-03 08:00:29', NULL),
(6, 'GRAM', '2018-03-13 02:37:28', NULL, '2016-03-03 08:01:02', NULL),
(7, 'ONS', '2018-03-13 02:37:28', NULL, '2016-03-03 08:01:11', NULL),
(8, 'KILOGRAM', '2018-03-13 02:37:28', NULL, '2016-03-03 08:01:25', NULL),
(9, 'TON', '2018-03-13 02:37:28', NULL, '2016-03-03 08:03:38', NULL),
(10, 'MILILITER', '2018-03-13 02:37:28', NULL, '2016-03-03 08:03:48', NULL),
(11, 'LITER', '2018-03-13 02:37:28', NULL, '2016-03-03 08:03:54', NULL),
(14, 'PACKET', '2018-03-14 15:03:20', NULL, '2018-03-14 15:03:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `idconfig` int(11) NOT NULL,
  `key` varchar(100) DEFAULT NULL,
  `value` text,
  `created` datetime DEFAULT NULL,
  `createdby` varchar(100) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updatedby` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`idconfig`, `key`, `value`, `created`, `createdby`, `updated`, `updatedby`) VALUES
(1, 'prefix_barcode', 'BRG', '2016-03-14 00:00:00', 'system', NULL, NULL),
(2, 'prefix_kode_penjualan', 'PJ/TA/', '2016-04-19 00:00:00', 'system', NULL, NULL),
(3, 'store_name', 'Toko POS Aisyah', '2016-05-03 00:00:00', 'System', NULL, NULL),
(4, 'store_description', 'Jl. Raya Indonesia Raya Merdeka', '2016-05-03 00:00:00', 'System', NULL, NULL),
(5, 'prefix_kode_pembelian', 'PB/TA/', NULL, NULL, NULL, NULL),
(6, 'prefix_kode_kas', 'KAS/TA/', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kas`
--

CREATE TABLE `kas` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_kas` varchar(100) DEFAULT NULL,
  `id_penjualan` int(11) UNSIGNED DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `ref` varchar(100) DEFAULT NULL,
  `debit` int(15) DEFAULT NULL,
  `kredit` int(15) DEFAULT NULL,
  `saldo` int(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `createdby` varchar(100) DEFAULT NULL,
  `updatedby` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kas`
--

INSERT INTO `kas` (`id`, `kode_kas`, `id_penjualan`, `tanggal`, `keterangan`, `ref`, `debit`, `kredit`, `saldo`, `updated_at`, `created_at`, `createdby`, `updatedby`) VALUES
(1, 'KAS/TA/0001', 1, '2018-03-19', 'Penjualan Tunai', NULL, 1004750, 1004750, 1004750, '2018-03-18 21:46:48', '2018-03-18 21:46:48', 'Penjaga', NULL);

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
-- Table structure for table `pembelians`
--

CREATE TABLE `pembelians` (
  `id` int(11) UNSIGNED NOT NULL,
  `kode_pembelian` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_supplier` int(11) UNSIGNED DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `total_harga_beli` bigint(15) DEFAULT NULL,
  `total_bayar` int(20) DEFAULT NULL,
  `total_kembalian` int(20) DEFAULT NULL,
  `tipe_pembayaran` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'PROCESS, PENDING, OK',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `createdby` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatedby` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembelians`
--

INSERT INTO `pembelians` (`id`, `kode_pembelian`, `id_supplier`, `tanggal`, `total_harga_beli`, `total_bayar`, `total_kembalian`, `tipe_pembayaran`, `status`, `updated_at`, `created_at`, `createdby`, `updatedby`) VALUES
(1, 'PB/TA/0001', 4, '2018-03-18', 1380000, 1400000, 20000, 'cash', 'OK', '2018-03-18 09:22:25', '2018-03-18 09:22:25', 'Penjaga', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_details`
--

CREATE TABLE `pembelian_details` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_pembelian` int(11) UNSIGNED DEFAULT NULL,
  `id_barang` bigint(11) UNSIGNED DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah_beli` int(15) DEFAULT NULL,
  `sub_total_harga` int(20) DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `createdby` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatedby` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembelian_details`
--

INSERT INTO `pembelian_details` (`id`, `id_pembelian`, `id_barang`, `tanggal`, `jumlah_beli`, `sub_total_harga`, `status`, `updated_at`, `created_at`, `createdby`, `updatedby`) VALUES
(1, 1, 32, '2018-03-18', 3, 1350000, NULL, '2018-03-18 09:22:25', '2018-03-18 09:22:25', 'Penjaga', NULL),
(2, 1, 23, '2018-03-18', 20, 24000, NULL, '2018-03-18 09:22:25', '2018-03-18 09:22:25', 'Penjaga', NULL),
(3, 1, 24, '2018-03-18', 5, 6000, NULL, '2018-03-18 09:22:26', '2018-03-18 09:22:26', 'Penjaga', NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `penjualans`
--

CREATE TABLE `penjualans` (
  `id` int(11) UNSIGNED NOT NULL,
  `kode_penjualan` varchar(20) DEFAULT NULL,
  `pelanggan` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `total_harga_jual` int(15) DEFAULT NULL,
  `total_bayar` int(20) DEFAULT NULL,
  `total_kembalian` int(20) DEFAULT NULL,
  `tipe_pembayaran` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `createdby` varchar(100) DEFAULT NULL,
  `updatedby` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualans`
--

INSERT INTO `penjualans` (`id`, `kode_penjualan`, `pelanggan`, `tanggal`, `total_harga_jual`, `total_bayar`, `total_kembalian`, `tipe_pembayaran`, `status`, `updated_at`, `created_at`, `createdby`, `updatedby`) VALUES
(1, 'PJ/TA/0001', 'Pelanggan Umum', '2018-03-19', 1004750, 1005000, 250, 'Penjualan Tunai', 'OK', '2018-03-19 03:33:56', '2018-03-19 03:33:56', 'Penjaga', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_details`
--

CREATE TABLE `penjualan_details` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_penjualan` int(11) UNSIGNED DEFAULT NULL,
  `id_barang` bigint(11) UNSIGNED DEFAULT NULL,
  `jumlah_jual` int(15) DEFAULT NULL,
  `harga_jual_akhir` int(20) DEFAULT NULL,
  `sub_total_harga` int(20) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `createdby` varchar(100) DEFAULT NULL,
  `updatedby` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan_details`
--

INSERT INTO `penjualan_details` (`id`, `id_penjualan`, `id_barang`, `jumlah_jual`, `harga_jual_akhir`, `sub_total_harga`, `status`, `updated_at`, `created_at`, `createdby`, `updatedby`) VALUES
(1, 1, 32, 2, 500000, 1000000, NULL, '2018-03-19 03:33:56', '2018-03-19 03:33:56', 'Penjaga', NULL),
(2, 1, 25, 1, 4750, 4750, NULL, '2018-03-19 03:33:57', '2018-03-19 03:33:57', 'Penjaga', NULL);

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
(2, 2, 'App\\User'),
(2, 8, 'App\\User'),
(2, 9, 'App\\User'),
(2, 10, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `stok_pembelians`
--

CREATE TABLE `stok_pembelians` (
  `id` int(11) NOT NULL,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `id_barang` bigint(11) UNSIGNED DEFAULT NULL,
  `id_penjualans` int(11) UNSIGNED DEFAULT NULL,
  `id_supplier` int(11) UNSIGNED DEFAULT NULL,
  `tipe` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_pembelian` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `stok_beli` bigint(11) DEFAULT NULL,
  `stok_jual` bigint(11) DEFAULT NULL,
  `total_harga_beli` bigint(15) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `createdby` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatedby` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) UNSIGNED NOT NULL,
  `kode_supplier` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_supplier` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_supplier` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `kode_supplier`, `nama_supplier`, `alamat_supplier`, `no_hp`, `keterangan`, `created_at`, `updated_at`) VALUES
(4, 'KI1997', 'Wahyu Ramadhan', 'Jl. Ikan Lumba Lumba no.09 Teluk Betung Selatan Bandar Lampung', '62895610005419', 'Supplier dari PT. Indofood Indonesia.', '2017-10-27 22:16:56', '2017-10-27 22:16:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbs_pembelian_details`
--

CREATE TABLE `tbs_pembelian_details` (
  `id` int(11) UNSIGNED NOT NULL,
  `kode_pembelian` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_barang` bigint(11) UNSIGNED DEFAULT NULL,
  `jumlah_beli` int(15) DEFAULT NULL,
  `sub_total_harga` int(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `createdby` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatedby` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbs_penjualan_details`
--

CREATE TABLE `tbs_penjualan_details` (
  `id` int(11) UNSIGNED NOT NULL,
  `kode_penjualan` varchar(20) DEFAULT NULL,
  `id_barang` bigint(11) UNSIGNED DEFAULT NULL,
  `jumlah_jual` int(15) DEFAULT NULL,
  `harga_jual_akhir` int(20) DEFAULT NULL,
  `sub_total_harga` int(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `createdby` varchar(100) DEFAULT NULL,
  `updatedby` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Administrator', 'pemilik', 'admin@aisyah.com', '$2y$10$qeQ4aXTQV5ceTo7gFSgtSebHhTgShT90uettXrc.rO5B42MEOg8di', 'svzbWLrgd1luxXbsbmzNRahTpkFSWkT8dBhNiEBQSJcz3cDUkXSATqneVJtz', '2017-10-25 02:03:37', '2017-10-25 02:03:37'),
(2, 'Penjaga', 'penjaga', 'member@aisyah.com', '$2y$10$IuFd7nZOEy8Xc4ts98oiEu4kPyxBG8dwdrTZENc3lTSfif4L1/7oi', '5GlAS1NVRftvgTVHFd7SMwuUPYPkSfojCC0PRVWuEGJrTRWEpx3omDWKMm3v', '2017-10-25 02:03:37', '2017-10-25 02:03:37'),
(8, 'Shaf Pro', '1234', '123@gmail.com', '$2y$10$fhS.iBzIwPAjhOFV14PAPeIbGEprTxhbK73eOMXin1vObhgb81Bju', NULL, '2017-11-26 15:28:34', '2017-11-26 15:28:34'),
(9, 'Agal', 'penjaga_agal', 'agal@gmail.com', '$2y$10$5JXGkCCdEiSulR7219mhxONX9nxkkWuk7kJSgdovEGLRxxr8fbIKq', NULL, '2018-03-10 08:13:07', '2018-03-10 08:13:07'),
(10, 'penjaga_lamo', 'penjaga_lamo', 'penjagalamo@gmail.com', '$2y$10$LvwfdqKJdGAs6U1niddqIe/VJ9Q1spWQlLUmHmi3zCo/m2GnCbGiq', NULL, '2018-03-11 10:13:07', '2018-03-11 10:13:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_barang` (`kode_barang`),
  ADD KEY `idbarang_unit` (`idbarang_unit`),
  ADD KEY `idbarang_kategori` (`idbarang_kategori`);

--
-- Indexes for table `barang_kategori`
--
ALTER TABLE `barang_kategori`
  ADD PRIMARY KEY (`idbarang_kategori`);

--
-- Indexes for table `barang_persediaans`
--
ALTER TABLE `barang_persediaans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `barang_unit`
--
ALTER TABLE `barang_unit`
  ADD PRIMARY KEY (`idbarang_unit`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`idconfig`);

--
-- Indexes for table `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_kas` (`kode_kas`),
  ADD KEY `id_penjualan` (`id_penjualan`);

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
-- Indexes for table `pembelians`
--
ALTER TABLE `pembelians`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_pembelian` (`kode_pembelian`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `pembelian_details`
--
ALTER TABLE `pembelian_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penjualan` (`id_pembelian`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualans`
--
ALTER TABLE `penjualans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_penjualan` (`kode_penjualan`);

--
-- Indexes for table `penjualan_details`
--
ALTER TABLE `penjualan_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penjualan_details_ibfk_1` (`id_penjualan`),
  ADD KEY `id_barang` (`id_barang`);

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
-- Indexes for table `stok_pembelians`
--
ALTER TABLE `stok_pembelians`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_pembelian` (`kode_pembelian`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `id_penjualans` (`id_penjualans`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_supplier` (`kode_supplier`);

--
-- Indexes for table `tbs_pembelian_details`
--
ALTER TABLE `tbs_pembelian_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `tbs_penjualan_details`
--
ALTER TABLE `tbs_penjualan_details`
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
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `barang_kategori`
--
ALTER TABLE `barang_kategori`
  MODIFY `idbarang_kategori` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `barang_persediaans`
--
ALTER TABLE `barang_persediaans`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `barang_unit`
--
ALTER TABLE `barang_unit`
  MODIFY `idbarang_unit` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `idconfig` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kas`
--
ALTER TABLE `kas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pembelians`
--
ALTER TABLE `pembelians`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembelian_details`
--
ALTER TABLE `pembelian_details`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penjualans`
--
ALTER TABLE `penjualans`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penjualan_details`
--
ALTER TABLE `penjualan_details`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `returpembelian`
--
ALTER TABLE `returpembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `returpenjualan`
--
ALTER TABLE `returpenjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stok_pembelians`
--
ALTER TABLE `stok_pembelians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbs_pembelian_details`
--
ALTER TABLE `tbs_pembelian_details`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbs_penjualan_details`
--
ALTER TABLE `tbs_penjualan_details`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`idbarang_kategori`) REFERENCES `barang_kategori` (`idbarang_kategori`),
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`idbarang_unit`) REFERENCES `barang_unit` (`idbarang_unit`);

--
-- Constraints for table `barang_persediaans`
--
ALTER TABLE `barang_persediaans`
  ADD CONSTRAINT `barang_persediaans_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`),
  ADD CONSTRAINT `barang_persediaans_ibfk_2` FOREIGN KEY (`id_supplier`) REFERENCES `suppliers` (`id`);

--
-- Constraints for table `kas`
--
ALTER TABLE `kas`
  ADD CONSTRAINT `kas_ibfk_1` FOREIGN KEY (`id_penjualan`) REFERENCES `penjualans` (`id`);

--
-- Constraints for table `pembelians`
--
ALTER TABLE `pembelians`
  ADD CONSTRAINT `pembelians_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `suppliers` (`id`);

--
-- Constraints for table `pembelian_details`
--
ALTER TABLE `pembelian_details`
  ADD CONSTRAINT `pembelian_details_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`),
  ADD CONSTRAINT `pembelian_details_ibfk_2` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelians` (`id`);

--
-- Constraints for table `penjualan_details`
--
ALTER TABLE `penjualan_details`
  ADD CONSTRAINT `penjualan_details_ibfk_1` FOREIGN KEY (`id_penjualan`) REFERENCES `penjualans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `penjualan_details_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stok_pembelians`
--
ALTER TABLE `stok_pembelians`
  ADD CONSTRAINT `stok_pembelians_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stok_pembelians_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stok_pembelians_ibfk_3` FOREIGN KEY (`id_supplier`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stok_pembelians_ibfk_4` FOREIGN KEY (`id_penjualans`) REFERENCES `penjualans` (`id`);

--
-- Constraints for table `tbs_pembelian_details`
--
ALTER TABLE `tbs_pembelian_details`
  ADD CONSTRAINT `tbs_pembelian_details_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
