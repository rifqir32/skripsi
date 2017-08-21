-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2017 at 06:43 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ttm_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `balas_feedback`
--

CREATE TABLE `balas_feedback` (
  `id_balas_feedback` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_feedback_kegiatan` int(10) UNSIGNED NOT NULL,
  `komentar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balas_feedback`
--

INSERT INTO `balas_feedback` (`id_balas_feedback`, `email`, `id_feedback_kegiatan`, `komentar`) VALUES
(1, 'kuthu@gmail.com', 1, 'oyi sam'),
(2, 'kuthu@gmail.com', 1, '<p>coba</p>\r\n'),
(3, 'kuthu@gmail.com', 1, '<p>coba</p>\r\n'),
(4, 'kuthu@gmail.com', 1, '<p>sdfghj</p>\r\n'),
(5, 'kuthu@gmail.com', 1, '<p>kamvhing</p>\r\n'),
(6, 'ocin@gmail.com', 1, 'kungkingkang'),
(7, 'ocin@gmail.com', 1, 'mantab djiwa'),
(8, 'ocin@gmail.com', 1, 'cucok'),
(9, 'ocin@gmail.com', 2, 'gas yooo');

-- --------------------------------------------------------

--
-- Table structure for table `barang_garage_sale`
--

CREATE TABLE `barang_garage_sale` (
  `id_barang_garage_sale` int(10) UNSIGNED NOT NULL,
  `nama_barang` varchar(45) DEFAULT NULL,
  `deskripsi` text,
  `harga` int(10) UNSIGNED DEFAULT NULL,
  `stok_available` int(10) UNSIGNED DEFAULT NULL,
  `stok_terpesan` int(10) UNSIGNED DEFAULT NULL,
  `gambar_barang` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_garage_sale`
--

INSERT INTO `barang_garage_sale` (`id_barang_garage_sale`, `nama_barang`, `deskripsi`, `harga`, `stok_available`, `stok_terpesan`, `gambar_barang`) VALUES
(1, 'baju rsch', '<p>ini baju vroh</p>\r\n', 15000, 3, 1, 'Untitled1.png'),
(2, 'klambi 3 detik', 'ini klambi', 10000, 2, 1, 'Untitled1.png'),
(3, 'baju wdzg', 'ini baju mahal', 15000, 2, 1, 'Untitled1.png'),
(5, 'klambi larang', 'larang wes pokok e jos', 10000, 3, 3, 'Untitled3.png'),
(6, 'baju inspirasi', '<p>happy aeea coeg</p>\r\n', 10000, 5, 2, 'Untitled4.png');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(10) UNSIGNED NOT NULL,
  `divisi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `divisi`) VALUES
(1, 'Non-Divisi'),
(2, 'Hubungan Masyarakat'),
(3, 'Relawan'),
(4, 'Penelitian Pengembangan dan Gerakan'),
(5, 'Media dan Publikasi'),
(6, 'Kewirausahaan');

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int(10) UNSIGNED NOT NULL,
  `id_kegiatan` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_status_donasi` int(10) UNSIGNED NOT NULL,
  `nominal_donasi` int(10) UNSIGNED DEFAULT NULL,
  `struk_donasi` text,
  `tanggal_donasi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id_donasi`, `id_kegiatan`, `email`, `id_status_donasi`, `nominal_donasi`, `struk_donasi`, `tanggal_donasi`) VALUES
(1, 1, 'tuankreb@gmail.com', 3, 100000, NULL, '2017-05-26'),
(2, 1, 'tuankreb@gmail.com', 1, 50000, NULL, '2017-05-27'),
(3, 2, 'tuankreb@gmail.com', 3, 30000, NULL, '2017-05-27'),
(4, 3, 'gober@gmail.com', 2, 100000, 'Untitled.png', '2017-05-27'),
(5, 6, 'donatur@gmail.com', 3, 50000, 'ZomboMeme_18032017141605.jpg', '2017-06-10'),
(6, 1, 'donatur@gmail.com', 2, 100000, 'Screenshot_2017-06-05-17-26-54-632_com_android_chrome.png', '2017-06-11'),
(7, 5, 'donatur@gmail.com', 1, 200000, NULL, '2017-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `fcm_token` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donatur`
--

INSERT INTO `donatur` (`email`, `nama`, `pass`, `fcm_token`) VALUES
('donatur@gmail.com', 'donatur', 'donatur', ''),
('gober@gmail.com', 'uncle gober', 'gober', ''),
('tuankreb@gmail.com', 'mr kreb', 'tuankreb', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_kegiatan`
--

CREATE TABLE `feedback_kegiatan` (
  `id_feedback_kegiatan` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_kegiatan` int(10) UNSIGNED NOT NULL,
  `komentar` text,
  `rating` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_kegiatan`
--

INSERT INTO `feedback_kegiatan` (`id_feedback_kegiatan`, `email`, `id_kegiatan`, `komentar`, `rating`) VALUES
(1, 'ocin@gmail.com', 2, 'mantab djiwa', 5),
(2, 'ocin@gmail.com', 6, 'coba komentar', 5),
(3, 'ocin@gmail.com', 2, 'cobak sek sam', 5),
(4, 'ocin@gmail.com', 2, 'sek jo', 5),
(5, 'ocin@gmail.com', 2, 'ntap soul', 5),
(9, 'ocin@gmail.com', 2, 'kampret', 5);

-- --------------------------------------------------------

--
-- Table structure for table `gabung_kegiatan`
--

CREATE TABLE `gabung_kegiatan` (
  `id_gabung_kegiatan` int(10) UNSIGNED NOT NULL,
  `id_kegiatan` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_status_absensi_relawan` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gabung_kegiatan`
--

INSERT INTO `gabung_kegiatan` (`id_gabung_kegiatan`, `id_kegiatan`, `email`, `id_status_absensi_relawan`) VALUES
(1, 1, 'ocin@gmail.com', 1),
(2, 1, 'oncom@gmail.com', 1),
(3, 2, 'ocin@gmail.com', 1),
(4, 3, 'ocin@gmail.com', 2),
(5, 2, 'oncom@gmail.com', 1),
(6, 3, 'oncom@gmail.com', 2),
(7, 6, 'ocin@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gambar_kegiatan`
--

CREATE TABLE `gambar_kegiatan` (
  `id_gambar_kegiatan` int(10) UNSIGNED NOT NULL,
  `id_kegiatan` int(10) UNSIGNED NOT NULL,
  `gambar_kegiatan` text,
  `deskripsi` text,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar_kegiatan`
--

INSERT INTO `gambar_kegiatan` (`id_gambar_kegiatan`, `id_kegiatan`, `gambar_kegiatan`, `deskripsi`, `tanggal`) VALUES
(4, 3, 'Untitled.png', '<p>si coeg coeg</p>\r\n', '2017-05-29'),
(5, 3, 'Untitled3.png', 'asss', '2017-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(10) UNSIGNED NOT NULL,
  `id_status_kegiatan` int(10) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(45) DEFAULT NULL,
  `pesan_ajakan` varchar(100) DEFAULT NULL,
  `deskripsi_kegiatan` text,
  `minimal_relawan` int(10) UNSIGNED DEFAULT NULL,
  `minimal_donasi` int(10) UNSIGNED DEFAULT NULL,
  `tanggal_kegiatan` date DEFAULT NULL,
  `batas_akhir_pendaftaran` date DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `banner` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `id_status_kegiatan`, `nama_kegiatan`, `pesan_ajakan`, `deskripsi_kegiatan`, `minimal_relawan`, `minimal_donasi`, `tanggal_kegiatan`, `batas_akhir_pendaftaran`, `alamat`, `lat`, `lng`, `banner`) VALUES
(1, 2, 'kegiatan 1', 'ini pesan ajakan 1', 'mr. kung king kang', 100, 10000000, '2017-05-31', '2017-05-28', 'jl. kung king kang', -7.953708, 112.614849, 'Untitled.png'),
(2, 3, 'kegiatan 2', 'ini pesan ajakan 2', 'situ sentolop?', 60, 1000000, '2017-05-31', '2017-05-28', 'jl. sentolop', -7.953708, 112.614849, 'Untitled.png'),
(3, 2, 'kegiatan 3', 'ini pesan ajakan 3', '<p>pegel bos</p>\r\n', 100, 10000000, '2017-05-31', '2017-05-29', 'jl. pegel linu', -7.953708, 112.614849, 'Untitled.png'),
(5, 1, 'coba kegiatan 2', 'kung king kang', '<p>kung king king</p>\r\n', 100, 1000000, '2017-05-31', '2017-05-30', 'jl. sentolop', -7.953708, 112.614849, 'Untitled1.png'),
(6, 3, 'kegiatan coeg', 'yo ayo', '<p>uvuvwevwe <strong>ubwemubwem <em>osas</em></strong></p>\r\n\r\n<p><strong><em>uyeah~~~</em></strong></p>\r\n', 100, 999994, '2017-05-31', '2017-05-30', 'jl. sentolop', -7.953708, 112.614849, 'Untitled.png');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang_belanja`
--

CREATE TABLE `keranjang_belanja` (
  `id_keranjang_belanja` int(10) UNSIGNED NOT NULL,
  `id_barang_garage_sale` int(10) UNSIGNED NOT NULL,
  `id_invoice` varchar(45) NOT NULL,
  `qty` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang_belanja`
--

INSERT INTO `keranjang_belanja` (`id_keranjang_belanja`, `id_barang_garage_sale`, `id_invoice`, `qty`) VALUES
(1, 1, 'inv', 1),
(2, 2, 'inv', 1),
(3, 1, 'inv', 1),
(4, 1, 'gober@gmail.com2017-05-27', 1),
(5, 3, 'gober@gmail.com2017-05-27', 1),
(17, 6, 'tuankreb@gmail.com2017-06-12', 1),
(18, 6, 'donatur@gmail.com2017-06-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `monitor_dana_kegiatan`
--

CREATE TABLE `monitor_dana_kegiatan` (
  `id_monitor_dana_kegiatan` int(10) UNSIGNED NOT NULL,
  `id_kegiatan` int(10) UNSIGNED NOT NULL,
  `nama_dana_keluar` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `nominal_dana_keluar` int(10) UNSIGNED DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monitor_dana_kegiatan`
--

INSERT INTO `monitor_dana_kegiatan` (`id_monitor_dana_kegiatan`, `id_kegiatan`, `nama_dana_keluar`, `tanggal`, `nominal_dana_keluar`, `keterangan`) VALUES
(2, 1, 'oncom12', '2017-05-29', 10000, '<p>kamving</p>\r\n'),
(5, 1, 'oncoms', '2017-05-29', 10000, '<p>kamvhing congegs</p>\r\n'),
(6, 1, 'kamvhing', '2017-05-29', 10000, '<p>udin coegs</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pangkat_divisi`
--

CREATE TABLE `pangkat_divisi` (
  `id_pangkat_divisi` int(10) UNSIGNED NOT NULL,
  `pangkat_divisi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pangkat_divisi`
--

INSERT INTO `pangkat_divisi` (`id_pangkat_divisi`, `pangkat_divisi`) VALUES
(1, 'Koordinator Umum'),
(2, 'Wakil Koordinator Umum'),
(3, 'Sekertaris'),
(4, 'Bendahara'),
(5, 'Ketua Divisi'),
(6, 'Volunteer'),
(7, 'Anggota Divisi');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_invoice` varchar(45) NOT NULL,
  `id_status_pembelian` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal_pembelian` date DEFAULT NULL,
  `struk_pembelian` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_invoice`, `id_status_pembelian`, `email`, `tanggal_pembelian`, `struk_pembelian`) VALUES
('donatur@gmail.com2017-06-12', 2, 'donatur@gmail.com', '2017-06-12', 'Screenshot_2017-06-11-15-22-41-600_com_instagram_android.png'),
('gober@gmail.com2017-05-27', 2, 'gober@gmail.com', '2017-05-27', 'Untitled.png'),
('inv', 1, 'tuankreb@gmail.com', '2017-05-27', NULL),
('tuankreb@gmail.com2017-06-12', 5, 'tuankreb@gmail.com', '2017-06-12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `relawan`
--

CREATE TABLE `relawan` (
  `email` varchar(100) NOT NULL,
  `id_pangkat_divisi` int(10) UNSIGNED NOT NULL,
  `id_divisi` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `fcm_token` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relawan`
--

INSERT INTO `relawan` (`email`, `id_pangkat_divisi`, `id_divisi`, `nama`, `pass`, `fcm_token`) VALUES
('kuthu@gmail.com', 5, 6, 'si kuthu', 'kuthu', NULL),
('ocin@gmail.com', 7, 3, 'ocin', 'ocin', NULL),
('oncom@gmail.com', 7, 3, 'oncom', 'oncom', NULL),
('oyii@gmail.com', 5, 4, 'oyii', 'oyii', NULL),
('ozing@gmail.com', 5, 3, 'ozing', 'ozing', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status_absensi_relawan`
--

CREATE TABLE `status_absensi_relawan` (
  `id_status_absensi_relawan` int(10) UNSIGNED NOT NULL,
  `status_absensi_relawan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_absensi_relawan`
--

INSERT INTO `status_absensi_relawan` (`id_status_absensi_relawan`, `status_absensi_relawan`) VALUES
(1, 'Belum Dilakukan Absen'),
(2, 'Hadir'),
(3, 'Tidak Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `status_donasi`
--

CREATE TABLE `status_donasi` (
  `id_status_donasi` int(10) UNSIGNED NOT NULL,
  `status_donasi` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_donasi`
--

INSERT INTO `status_donasi` (`id_status_donasi`, `status_donasi`) VALUES
(1, 'Proses Transfer'),
(2, 'Konfirmasi Transfer'),
(3, 'Transfer Valid'),
(4, 'Lewat Batas Waktu');

-- --------------------------------------------------------

--
-- Table structure for table `status_kegiatan`
--

CREATE TABLE `status_kegiatan` (
  `id_status_kegiatan` int(10) UNSIGNED NOT NULL,
  `status_kegiatan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_kegiatan`
--

INSERT INTO `status_kegiatan` (`id_status_kegiatan`, `status_kegiatan`) VALUES
(1, 'Promosi Kegiatan'),
(2, 'Kegiatan Sedang Berjalan'),
(3, 'Kegiatan Selesai Berjalan');

-- --------------------------------------------------------

--
-- Table structure for table `status_pembelian`
--

CREATE TABLE `status_pembelian` (
  `id_status_pembelian` int(10) UNSIGNED NOT NULL,
  `status_pembelian` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_pembelian`
--

INSERT INTO `status_pembelian` (`id_status_pembelian`, `status_pembelian`) VALUES
(1, 'Proses Transfer'),
(2, 'Konfirmasi Transfer'),
(3, 'Transfer Valid'),
(4, 'Lewat Batas Waktu'),
(5, 'Belum Beli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balas_feedback`
--
ALTER TABLE `balas_feedback`
  ADD PRIMARY KEY (`id_balas_feedback`),
  ADD KEY `balas_feedback_FKIndex1` (`id_feedback_kegiatan`),
  ADD KEY `balas_feedback_FKIndex2` (`email`);

--
-- Indexes for table `barang_garage_sale`
--
ALTER TABLE `barang_garage_sale`
  ADD PRIMARY KEY (`id_barang_garage_sale`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`),
  ADD KEY `donasi_FKIndex1` (`id_status_donasi`),
  ADD KEY `donasi_FKIndex2` (`email`),
  ADD KEY `donasi_FKIndex3` (`id_kegiatan`);

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `feedback_kegiatan`
--
ALTER TABLE `feedback_kegiatan`
  ADD PRIMARY KEY (`id_feedback_kegiatan`),
  ADD KEY `feedback_kegiatan_FKIndex1` (`id_kegiatan`),
  ADD KEY `feedback_kegiatan_FKIndex2` (`email`),
  ADD KEY `feedback_kegiatan_FKIndex3` (`email`);

--
-- Indexes for table `gabung_kegiatan`
--
ALTER TABLE `gabung_kegiatan`
  ADD PRIMARY KEY (`id_gabung_kegiatan`),
  ADD KEY `absensi_relawan_FKIndex1` (`id_status_absensi_relawan`),
  ADD KEY `absensi_relawan_FKIndex2` (`email`),
  ADD KEY `absensi_relawan_FKIndex3` (`id_kegiatan`);

--
-- Indexes for table `gambar_kegiatan`
--
ALTER TABLE `gambar_kegiatan`
  ADD PRIMARY KEY (`id_gambar_kegiatan`),
  ADD KEY `gambar_kegiatan_FKIndex1` (`id_kegiatan`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `kegiatan_FKIndex1` (`id_status_kegiatan`);

--
-- Indexes for table `keranjang_belanja`
--
ALTER TABLE `keranjang_belanja`
  ADD PRIMARY KEY (`id_keranjang_belanja`),
  ADD KEY `keranjang_belanja_FKIndex1` (`id_invoice`),
  ADD KEY `keranjang_belanja_FKIndex2` (`id_barang_garage_sale`);

--
-- Indexes for table `monitor_dana_kegiatan`
--
ALTER TABLE `monitor_dana_kegiatan`
  ADD PRIMARY KEY (`id_monitor_dana_kegiatan`),
  ADD KEY `monitor_dana_kegiatan_FKIndex1` (`id_kegiatan`);

--
-- Indexes for table `pangkat_divisi`
--
ALTER TABLE `pangkat_divisi`
  ADD PRIMARY KEY (`id_pangkat_divisi`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_invoice`),
  ADD KEY `pembelian_FKIndex1` (`email`),
  ADD KEY `pembelian_FKIndex2` (`id_status_pembelian`);

--
-- Indexes for table `relawan`
--
ALTER TABLE `relawan`
  ADD PRIMARY KEY (`email`),
  ADD KEY `relawan_FKIndex1` (`id_divisi`),
  ADD KEY `relawan_FKIndex2` (`id_pangkat_divisi`);

--
-- Indexes for table `status_absensi_relawan`
--
ALTER TABLE `status_absensi_relawan`
  ADD PRIMARY KEY (`id_status_absensi_relawan`);

--
-- Indexes for table `status_donasi`
--
ALTER TABLE `status_donasi`
  ADD PRIMARY KEY (`id_status_donasi`);

--
-- Indexes for table `status_kegiatan`
--
ALTER TABLE `status_kegiatan`
  ADD PRIMARY KEY (`id_status_kegiatan`);

--
-- Indexes for table `status_pembelian`
--
ALTER TABLE `status_pembelian`
  ADD PRIMARY KEY (`id_status_pembelian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balas_feedback`
--
ALTER TABLE `balas_feedback`
  MODIFY `id_balas_feedback` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `barang_garage_sale`
--
ALTER TABLE `barang_garage_sale`
  MODIFY `id_barang_garage_sale` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `feedback_kegiatan`
--
ALTER TABLE `feedback_kegiatan`
  MODIFY `id_feedback_kegiatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `gabung_kegiatan`
--
ALTER TABLE `gabung_kegiatan`
  MODIFY `id_gabung_kegiatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `gambar_kegiatan`
--
ALTER TABLE `gambar_kegiatan`
  MODIFY `id_gambar_kegiatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `keranjang_belanja`
--
ALTER TABLE `keranjang_belanja`
  MODIFY `id_keranjang_belanja` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `monitor_dana_kegiatan`
--
ALTER TABLE `monitor_dana_kegiatan`
  MODIFY `id_monitor_dana_kegiatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pangkat_divisi`
--
ALTER TABLE `pangkat_divisi`
  MODIFY `id_pangkat_divisi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `status_absensi_relawan`
--
ALTER TABLE `status_absensi_relawan`
  MODIFY `id_status_absensi_relawan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `status_donasi`
--
ALTER TABLE `status_donasi`
  MODIFY `id_status_donasi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `status_kegiatan`
--
ALTER TABLE `status_kegiatan`
  MODIFY `id_status_kegiatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `status_pembelian`
--
ALTER TABLE `status_pembelian`
  MODIFY `id_status_pembelian` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `balas_feedback`
--
ALTER TABLE `balas_feedback`
  ADD CONSTRAINT `balas_feedback_ibfk_1` FOREIGN KEY (`id_feedback_kegiatan`) REFERENCES `feedback_kegiatan` (`id_feedback_kegiatan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `balas_feedback_ibfk_2` FOREIGN KEY (`email`) REFERENCES `relawan` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `donasi`
--
ALTER TABLE `donasi`
  ADD CONSTRAINT `donasi_ibfk_1` FOREIGN KEY (`id_status_donasi`) REFERENCES `status_donasi` (`id_status_donasi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `donasi_ibfk_2` FOREIGN KEY (`email`) REFERENCES `donatur` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `donasi_ibfk_3` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `feedback_kegiatan`
--
ALTER TABLE `feedback_kegiatan`
  ADD CONSTRAINT `feedback_kegiatan_ibfk_1` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `feedback_kegiatan_ibfk_2` FOREIGN KEY (`email`) REFERENCES `relawan` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `gabung_kegiatan`
--
ALTER TABLE `gabung_kegiatan`
  ADD CONSTRAINT `gabung_kegiatan_ibfk_1` FOREIGN KEY (`id_status_absensi_relawan`) REFERENCES `status_absensi_relawan` (`id_status_absensi_relawan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `gabung_kegiatan_ibfk_2` FOREIGN KEY (`email`) REFERENCES `relawan` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `gabung_kegiatan_ibfk_3` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `gambar_kegiatan`
--
ALTER TABLE `gambar_kegiatan`
  ADD CONSTRAINT `gambar_kegiatan_ibfk_1` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`id_status_kegiatan`) REFERENCES `status_kegiatan` (`id_status_kegiatan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `keranjang_belanja`
--
ALTER TABLE `keranjang_belanja`
  ADD CONSTRAINT `keranjang_belanja_ibfk_1` FOREIGN KEY (`id_invoice`) REFERENCES `pembelian` (`id_invoice`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `keranjang_belanja_ibfk_2` FOREIGN KEY (`id_barang_garage_sale`) REFERENCES `barang_garage_sale` (`id_barang_garage_sale`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `monitor_dana_kegiatan`
--
ALTER TABLE `monitor_dana_kegiatan`
  ADD CONSTRAINT `monitor_dana_kegiatan_ibfk_1` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`email`) REFERENCES `donatur` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`id_status_pembelian`) REFERENCES `status_pembelian` (`id_status_pembelian`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `relawan`
--
ALTER TABLE `relawan`
  ADD CONSTRAINT `relawan_ibfk_1` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `relawan_ibfk_2` FOREIGN KEY (`id_pangkat_divisi`) REFERENCES `pangkat_divisi` (`id_pangkat_divisi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
