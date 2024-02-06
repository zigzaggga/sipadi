-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Agu 2022 pada 02.24
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cfd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `basis_pengetahuan`
--

CREATE TABLE `basis_pengetahuan` (
  `kd_bsp` int(11) NOT NULL,
  `gejala_id` varchar(11) NOT NULL,
  `penyakit_id` varchar(11) NOT NULL,
  `md` float NOT NULL,
  `mb` float NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `basis_pengetahuan`
--

INSERT INTO `basis_pengetahuan` (`kd_bsp`, `gejala_id`, `penyakit_id`, `md`, `mb`, `bobot`) VALUES
(1, '1', '1', 0, 0.8, 5),
(2, '2', '1', 0.1, 0.6, 3),
(3, '3', '1', 0, 0.9, 5),
(4, '4', '1', 0.1, 0.8, 3),
(5, '5', '1', 0.2, 0.4, 1),
(6, '6', '1', 0, 0.8, 5),
(7, '7', '1', 0.1, 0.5, 3),
(8, '8', '1', 0.2, 0.4, 1),
(9, '9', '1', 0, 0.9, 5),
(10, '10', '2', 0, 0.8, 5),
(11, '11', '2', 0, 0.6, 3),
(12, '12', '2', 0, 0.6, 3),
(13, '5', '2', 0.1, 0.2, 1),
(14, '8', '2', 0.1, 0.4, 1),
(15, '13', '2', 0, 0.9, 5),
(16, '14', '3', 0, 0.9, 5),
(17, '8', '3', 0.2, 0.6, 3),
(18, '15', '3', 0.1, 0.2, 1),
(19, '16', '3', 0.2, 0.5, 3),
(20, '5', '3', 0.1, 0.2, 1),
(21, '4', '3', 0.1, 0.2, 1),
(22, '17', '3', 0, 0.9, 5),
(23, '18', '4', 0, 0.6, 3),
(24, '19', '4', 0.2, 0.5, 3),
(25, '20', '4', 0, 0.8, 5),
(26, '21', '4', 0, 0.8, 5),
(27, '22', '5', 0, 0.9, 5),
(28, '23', '5', 0.2, 0.6, 3),
(29, '24', '5', 0, 0.9, 5),
(30, '25', '6', 0.1, 0.8, 5),
(31, '26', '6', 0, 0.6, 3),
(32, '27', '6', 0, 0.8, 5),
(46, '28', '7', 0, 0.6, 3),
(47, '5', '7', 0.1, 0.2, 1),
(48, '29', '7', 0.1, 0.4, 1),
(49, '30', '7', 0, 0.9, 5),
(50, '31', '7', 0, 0.9, 5),
(51, '32', '7', 0, 0.9, 5),
(52, '33', '8', 0, 0.8, 5),
(53, '34', '8', 0, 0.9, 5),
(54, '35', '8', 0, 0.9, 5),
(55, '5', '8', 0.2, 0.6, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_user`
--

CREATE TABLE `biodata_user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `tgl_konsultasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pekerjaan` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biodata_user`
--

INSERT INTO `biodata_user` (`id_user`, `nama`, `alamat`, `tgl_konsultasi`, `pekerjaan`) VALUES
(120, '', '', '2022-05-27 13:19:27', ''),
(121, '', '', '2022-05-27 14:39:21', ''),
(122, '', '', '2022-05-27 16:17:01', ''),
(123, 'dsa', 'sad', '2022-06-02 15:31:59', 'dsadsa'),
(124, '', '', '2022-06-02 15:36:24', ''),
(125, '', '', '2022-06-02 15:39:28', ''),
(126, '', '', '2022-06-02 17:42:48', ''),
(127, '', '', '2022-06-02 18:21:50', ''),
(128, '', '', '2022-06-03 04:53:39', ''),
(129, '', '', '2022-06-03 05:43:51', ''),
(130, '', '', '2022-06-03 09:32:27', ''),
(131, '', '', '2022-06-05 05:11:06', ''),
(132, '', '', '2022-06-05 11:58:34', ''),
(133, '', '', '2022-06-05 12:30:04', ''),
(134, '', '', '2022-06-05 14:13:38', ''),
(135, '', '', '2022-06-05 15:31:27', ''),
(136, '', '', '2022-06-06 01:40:12', ''),
(137, '', '', '2022-06-06 02:09:52', ''),
(138, '', '', '2022-06-06 02:47:52', ''),
(139, '', '', '2022-06-07 02:11:17', ''),
(140, '', '', '2022-06-07 06:21:14', ''),
(141, '', '', '2022-06-07 09:44:18', ''),
(142, '', '', '2022-06-07 10:43:52', ''),
(143, '', '', '2022-06-07 12:28:40', ''),
(144, '', '', '2022-06-08 02:34:40', ''),
(145, '', '', '2022-06-08 08:52:14', ''),
(146, '', '', '2022-06-08 09:16:35', ''),
(147, '', '', '2022-06-08 09:20:23', ''),
(148, '', '', '2022-06-08 09:57:39', ''),
(149, '', '', '2022-06-08 09:59:10', ''),
(150, '', '', '2022-06-08 10:02:11', ''),
(151, '', '', '2022-06-08 10:05:06', ''),
(152, '', '', '2022-06-08 13:35:32', ''),
(153, '', '', '2022-06-08 13:46:03', ''),
(154, '', '', '2022-06-08 15:25:38', ''),
(155, '', '', '2022-06-08 16:13:01', ''),
(156, '', '', '2022-06-09 01:08:57', ''),
(157, '', '', '2022-06-09 01:30:12', ''),
(158, '', '', '2022-06-09 01:31:29', ''),
(159, '', '', '2022-06-09 03:10:46', ''),
(160, '', '', '2022-06-09 04:26:44', ''),
(161, '', '', '2022-06-09 07:00:03', ''),
(162, 'sangkur', 'sangkur', '2022-06-09 08:02:08', 'riang'),
(163, '', '', '2022-06-09 08:38:36', ''),
(164, '', '', '2022-06-09 09:09:05', ''),
(165, '', '', '2022-06-09 11:02:53', ''),
(166, '', '', '2022-06-09 11:39:21', ''),
(167, 'Syofian', 'Bengkulu', '2022-06-09 11:40:12', 'Mahasiswa'),
(168, 'Syofian', 'Bengkulu', '2022-06-09 11:43:26', 'Mahasiswa'),
(169, '', '', '2022-06-09 11:45:40', ''),
(170, '', '', '2022-06-09 11:46:59', ''),
(171, '', '', '2022-06-09 11:48:00', ''),
(172, '', '', '2022-06-09 11:48:10', ''),
(173, 'Syofian', 'Bengkulu', '2022-06-09 11:50:40', 'Mahasiswa'),
(174, '', '', '2022-06-09 11:50:54', ''),
(175, '', '', '2022-06-09 11:57:15', ''),
(176, '', '', '2022-06-09 11:59:15', ''),
(177, '', '', '2022-06-09 12:29:35', 'sas'),
(178, '', '', '2022-06-09 12:30:38', ''),
(179, '', '', '2022-06-09 12:31:09', ''),
(180, '', '', '2022-06-09 12:35:51', ''),
(181, '', '', '2022-06-09 12:36:12', ''),
(182, '', '', '2022-06-09 12:36:38', ''),
(183, '', '', '2022-06-09 12:36:59', ''),
(184, '', '', '2022-06-09 12:40:56', ''),
(185, '', '', '2022-06-09 12:42:13', ''),
(186, 'syofian', 'mahasiswa', '2022-06-09 12:42:33', 'bengkulu'),
(187, 'Jarjit', 'Sing', '2022-06-09 12:55:06', 'Bengkulu'),
(188, '', '', '2022-06-09 14:34:13', ''),
(189, '', '', '2022-06-10 03:30:22', ''),
(190, '', '', '2022-06-11 04:00:09', ''),
(191, '', '', '2022-06-11 09:22:09', ''),
(192, '', '', '2022-06-11 09:29:01', ''),
(193, '', '', '2022-06-11 09:59:34', ''),
(194, 'Syofian', 'Mahasiswa', '2022-06-11 10:19:35', 'Bengkulu'),
(195, '', '', '2022-06-11 10:43:37', ''),
(196, 'ssas', '', '2022-06-11 10:47:26', ''),
(197, 'FDSFSF', 'FDSSDF', '2022-06-11 11:19:25', 'FDSFFDSF'),
(198, '', '', '2022-06-11 12:51:37', ''),
(199, '', '', '2022-06-11 13:00:37', ''),
(200, 'sdsad', 'sadsadsad', '2022-06-11 14:05:28', 'sadads'),
(201, '', '', '2022-06-12 04:16:11', ''),
(202, '', '', '2022-06-12 05:12:34', ''),
(203, '', '', '2022-06-12 05:49:33', ''),
(204, '', '', '2022-06-12 06:27:20', ''),
(205, '', '', '2022-06-12 07:27:14', ''),
(206, '', '', '2022-06-12 07:51:07', ''),
(207, 'admin', 'admin', '2022-06-12 08:22:33', 'admin'),
(208, 'admin', 'admin', '2022-06-12 08:42:35', 'admin'),
(209, 'admin', 'admin', '2022-06-12 08:43:35', 'admin'),
(210, '', '', '2022-06-12 17:22:49', ''),
(211, 'Syofian ', 'Bengkulu', '2022-06-13 02:15:07', 'Mahasiswa'),
(212, 'syofian', 'bengkulu', '2022-06-13 02:24:14', 'mahasiswa'),
(213, '', '', '2022-06-13 02:40:12', ''),
(214, '', '', '2022-06-14 11:16:23', ''),
(215, '', '', '2022-06-15 13:11:38', ''),
(216, '', '', '2022-06-18 12:13:06', ''),
(217, '', '', '2022-06-18 12:20:27', ''),
(218, '', '', '2022-06-18 13:35:51', ''),
(219, '', '', '2022-06-24 13:35:19', ''),
(220, '', '', '2022-06-24 16:18:47', ''),
(221, 'sa', '', '2022-06-24 23:18:27', ''),
(222, '', '', '2022-06-24 23:22:16', ''),
(223, 'xasx', 'xsax', '2022-06-24 23:36:28', 'ss'),
(224, '', '', '2022-06-24 23:43:37', ''),
(225, '', '', '2022-06-25 00:29:23', ''),
(226, '', '', '2022-06-25 01:00:36', ''),
(227, '', '', '2022-06-25 01:02:31', ''),
(228, '', '', '2022-06-25 01:11:45', ''),
(229, '', '', '2022-06-25 01:14:18', ''),
(230, 'DSADSA', 'DSADAD', '2022-06-25 01:38:47', 'SDADASD'),
(231, 'lisanudin', '', '2022-06-25 03:30:00', ''),
(232, '', '', '2022-06-26 15:19:05', ''),
(233, 'admin', '', '2022-06-26 17:48:17', ''),
(234, '', '', '2022-06-26 17:59:41', ''),
(235, '', '', '2022-06-27 01:11:58', ''),
(236, 'dwqd', 'wqdwqd', '2022-06-27 01:59:43', 'wdq'),
(237, '', '', '2022-06-27 11:52:56', ''),
(238, '', '', '2022-06-27 14:38:45', ''),
(239, '', '', '2022-06-28 08:15:12', ''),
(240, 'syofian', 'bengkulu', '2022-06-28 08:43:54', 'mahasiswa'),
(241, 'dsasadsa', 'dsadsad', '2022-06-29 01:45:35', 'dsadad'),
(242, 'ewer', 'ewrewr', '2022-06-29 01:52:58', 'rewrw'),
(243, 'syofian', 'bengkulu', '2022-06-29 02:33:13', 'mahasiswa'),
(244, '', '', '2022-06-29 02:58:48', ''),
(245, '', '', '2022-07-06 14:49:57', ''),
(246, '', '', '2022-07-11 13:39:14', ''),
(247, '', '', '2022-07-11 14:28:35', ''),
(248, '', '', '2022-07-11 16:38:09', ''),
(249, '', '', '2022-07-11 23:37:11', ''),
(250, '', '', '2022-07-12 00:02:06', ''),
(251, '', '', '2022-07-12 03:50:39', ''),
(252, '', '', '2022-07-13 08:07:14', ''),
(253, '', '', '2022-07-17 04:43:28', ''),
(254, '', '', '2022-07-17 05:03:11', ''),
(255, '', '', '2022-07-17 08:17:00', ''),
(256, '', '', '2022-07-17 08:54:24', ''),
(257, '', '', '2022-07-20 13:27:58', ''),
(258, '', '', '2022-07-20 13:56:31', ''),
(259, '', '', '2022-07-20 16:47:10', ''),
(260, '', '', '2022-07-20 17:46:39', ''),
(261, '', '', '2022-07-20 18:08:00', ''),
(262, '', '', '2022-07-24 12:38:22', ''),
(263, '', '', '2022-07-24 14:15:48', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id` int(11) NOT NULL,
  `kd_gejala` varchar(5) NOT NULL,
  `nama_gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id`, `kd_gejala`, `nama_gejala`) VALUES
(1, 'G01', 'Daun Menguning hingga orange'),
(2, 'G02', 'Daun Terlihat Melintir'),
(3, 'G03', 'Tanaman Kerdil'),
(4, 'G04', 'Tepi daun bergelombang'),
(5, 'G05', 'Gabah Hampa'),
(6, 'G06', 'Padi dewasa terdapat bercak coklat pada daun'),
(7, 'G07', 'Anakan berkurang'),
(8, 'G08', 'Daun mengering'),
(9, 'G09', 'Tunas berkurang'),
(10, 'G10', 'Bercak kuning pada daun'),
(11, 'G11', 'Malai berwarna coklat'),
(12, 'G12', 'Bulir berwarna coklat'),
(13, 'G13', 'Padi dewasa Bercak coklat berbentuk belah ketupat'),
(14, 'G14', 'Tepi daun bergaris'),
(15, 'G15', 'daun layu seperti tersiram air panas'),
(16, 'G16', 'Tepi daun keabu-abuan '),
(17, 'G17', 'Membentuk hawar'),
(18, 'G18', 'Bercak hijau gelap pada daun'),
(19, 'G19', 'Butir embun pada permukaan daun'),
(20, 'G20', 'Tembus cahaya pada pembuluh daun'),
(21, 'G21', 'Padi dewasa bercak berwarna kuning \nhingga coklat dan menyamping'),
(22, 'G22', 'Terdapat bekas potongan dan gigitan'),
(23, 'G23', 'kerusakan  dari pesemaian hingga \ndalam penyimpanan'),
(24, 'G24', 'Terdapat jejak kaki dan jalur tikus'),
(25, 'G25', 'Tanaman rebah dan hancur saat muda'),
(26, 'G26', 'Banyak potongan daun dan \nbatang terlihat mengambang'),
(27, 'G27', 'Daun dan batang hilang dari \npertanaman'),
(28, 'G28', 'Serangan pada tanaman berbunga'),
(29, 'G29', 'Bulir berbintik hitam'),
(30, 'G30', 'Terdapat telur pada bagian daun atas'),
(31, 'G31', 'Terdapat Nimfa'),
(32, 'G32', 'Terdapat bekas isapan pada daun'),
(33, 'G33', 'Tunas layu dan mudah tercabut'),
(34, 'G34', 'Malai kering dan berwarna putih'),
(35, 'G35', 'Tunas berwarna kemerah kemerahan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hama_penyakit`
--

CREATE TABLE `hama_penyakit` (
  `id` int(11) NOT NULL,
  `kd_hmp` varchar(20) NOT NULL,
  `nama_hmp` varchar(30) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `jenis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hama_penyakit`
--

INSERT INTO `hama_penyakit` (`id`, `kd_hmp`, `nama_hmp`, `deskripsi`, `gambar`, `jenis`) VALUES
(5, 'H01', 'Tikus', 'Tikus merupakan hama yang merusak tanaman padi pada semua fase tumbuh dari semai hingga panen, bahkan sampai penyimpanan', '16549455981536.jpg', 'Hama'),
(6, 'H02', 'Keong', 'Keong mas merupakan hama yang merusak tanaman dengan cara memarut jaringan tanaman dan memakannya', '16529211958776.jpg', 'Hama'),
(7, 'H03', 'Walang sangit', 'Walang sangit  merupakan hama yang umum merusak bulir padi pada fase pemasakan', '16529212221623.jpg', 'Hama'),
(8, 'H04', 'Penggerek batang', 'Penggerek batang merupakan hama paling sering menimbulkan kerusakan berat dan kehilangan hasil', '16529212753988.jpg', 'Hamaw'),
(1, 'P01', 'Tungro', 'Tungro merupakan penyakit yang disebabkan oleh virus Rice tungro bacilliform virus (RTBV) dan Rice tungro spherical virus (RTSV)', '16549457710816.jpg', 'Penyakit'),
(2, 'P02', 'Blast', 'Blast merupakan penyakit yang menginfeksi tanaman padi pada semua stadia pertumbuhan', '16529209669556.jpg', 'Penyakit'),
(3, 'P03', 'Hawar daun bakteri', 'Hawar daun bakteri merupakan penyakit yang disebabkan oleh bakteri X.oryzae pv. oryzae atau X. Compestris pv.oryzae', '16529210699550.jpg', 'Penyakit'),
(4, 'P04', 'Bakteri daun Bergaris', 'Hawar daun bakteri  merupakan penyakit yang biasanya terjadi hanya pada helaian daun saja', '16529211249985.jpg', 'Penyakit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_diagnosa`
--

CREATE TABLE `hasil_diagnosa` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kode_cf` varchar(10) DEFAULT NULL,
  `kode_cbr` varchar(100) NOT NULL,
  `cf` float DEFAULT NULL,
  `cbr` varchar(100) DEFAULT NULL,
  `gejala_input` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_diagnosa`
--

INSERT INTO `hasil_diagnosa` (`id`, `id_user`, `kode_cf`, `kode_cbr`, `cf`, `cbr`, `gejala_input`) VALUES
(51, 262, 'H02', 'H02', 0.82, '1', '23,25,26'),
(52, 262, 'H01', 'H01', 0.796, '1', '22,23,24'),
(53, 262, 'P02', 'P02', 0.984, '1', '1,11,12,13'),
(54, 262, 'P04', 'P04', 0.7, '1', '19,20,23'),
(55, 262, 'H01', 'H01', 0.796, '1', '22,23,24,26'),
(56, 262, 'P01', 'P04', 0.9, '1', '3,18,19,21'),
(57, 262, 'H03', 'H03', 0.8976, '1', '28,29,30,32'),
(58, 262, 'P02', 'P02', 0.968, '1', '10,11,12'),
(59, 262, 'P01', 'P01', 0.808, '1', '1,4,7,9'),
(60, 262, 'P04', 'P04', 0.92, '0.72727272727273', '16,17,18,21'),
(61, 262, 'P03', 'P03', 0.716, '1', '14,15,16,17'),
(62, 262, 'P01', 'P01', 0.6456, '1', '1,4,5,6,7'),
(63, 262, 'P02', 'P02', 0.984, '1', '11,12,13,26'),
(64, 262, 'H03', 'H03', 0.99, '0.83333333333333', '30,31,34,35'),
(65, 262, 'H03', 'H02', 0.9, '1', '25,26,27,30'),
(66, 263, 'H04', 'H04', 0.99, '0.625', '16,21,34,35'),
(67, 262, 'P01', 'H04', 0.9, '0.5', '9,18,26,33'),
(68, 262, 'H04', 'H04', 0.76, '1', '3,4,5,35'),
(69, 262, 'H04', 'H04', 0.796, '1', '1,5,34,35'),
(70, 262, 'H04', 'H04', 0.98, '1', '12,13,32,33,34'),
(71, 262, 'H04', 'H04', 0.98, '1', '28,33,34'),
(72, 262, 'P03', 'P02', 0.82, '1', '5,11,12,14'),
(73, 262, 'P01', 'P03', 0.7, '0.33333333333333', '4,16,17'),
(74, 262, 'P03', 'P04', 0.416, '0.375', '8,15,16,19'),
(75, 262, 'P03', 'H03', 0.5056, '1', '4,5,8,16,17'),
(76, 262, 'P03', 'P03', 0.82, '0.33333333333333', '15,17,18'),
(77, 262, 'P02', 'P02', 0.8952, '1', '8,10,11,13'),
(78, 262, 'P02', 'P02', 0.9, '1', '4,13,14,15'),
(79, 262, 'P02', 'P02', 0.96, '1', '11,13,14,15'),
(80, 262, 'P04', 'P04', 0.78, '1', '19,20,21,23'),
(81, 262, 'P04', 'P04', 0.78, '1', '3,5,19,20,21'),
(82, 262, 'P03', 'P04', 0.9, '1', '17,18,19,20'),
(83, 262, 'H03', 'H03', 0.876, '1', '27,28,29,30'),
(84, 262, 'H03', 'P02', 0.96, '1', '12,27,28,31'),
(86, 263, 'H03', 'H03', 0.876, '0.83333333333333', '4,27,28,29,32'),
(87, 262, 'H03', 'H03', 0.876, '0.9', '27,28,29,31'),
(88, 262, 'P01', 'H03', 0.69, '1', '3,5,7,16'),
(90, 262, 'P01', 'P01', 0.69, '0.4', '7,8,9,16'),
(91, 262, 'H03', 'P01', 0.9, '0.6', '1,8,10,31'),
(92, 262, 'P01', 'P01', 0.714, '0.64285714285714', '6,7,8,9'),
(93, 263, 'H02', 'H01', 0.82, '1', '22,23,24,25,26'),
(94, 262, 'H01', 'H01', 0.76, '1', '5,9,22,23'),
(95, 263, 'H01', 'H01', 0.99, '1', '22,24,25'),
(96, 262, 'H01', 'H01', 0.99, '1', '22,24,25,27'),
(97, 262, 'H02', 'H02', 0.92, '1', '22,23,26,27'),
(98, 262, 'H02', 'H02', 0.82, '1', '4,8,23,25,26'),
(99, 262, 'H02', 'H02', 0.82, '1', '4,5,25,26'),
(100, 262, 'H03', 'H02', 0.99, '1', '26,27,30,32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus`
--

CREATE TABLE `kasus` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `gejala_kasus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kasus`
--

INSERT INTO `kasus` (`id`, `kode`, `gejala_kasus`) VALUES
(1, 'H01', '23,24'),
(2, 'P01', '1,3,5,9'),
(3, 'H02', '23,25,26,30'),
(4, 'P04', '1,10,12,13'),
(5, 'P01', '1,4,7,10'),
(6, 'H01', '5,22,23,24'),
(7, 'P04', '8,20,21,23'),
(8, 'H01', '20,21,22,24'),
(9, 'P02', '8,10,11,12'),
(10, 'H01', '22,23,24,25,26'),
(11, 'P01', '1,5,7,8'),
(12, 'P01', '3,5,6,7'),
(13, 'P01', '2,3,5,6'),
(14, 'H01', '3,7,22,23,24'),
(15, 'H04', '31,32,33,34'),
(16, 'P01', '1,2,3,4,5,6'),
(17, 'P01', '2,3,7,10'),
(18, 'P03', '12,13,14,15'),
(19, 'H01', '23,24,25,27'),
(20, 'H04', '5,28,29,35'),
(21, 'H03', '5,28,29,31'),
(22, 'P01', '3,6,7,8'),
(23, 'H01', '22,24,25'),
(24, 'H03', '11,28,29,30'),
(25, 'P02', '12,15,25,27'),
(26, 'P04', '2,18,19,21'),
(27, 'H03', '5,27,29,30'),
(28, 'H01', '5,7,23,24'),
(29, 'H04', '5,30,32,34'),
(30, 'H02', '5,26,27,28'),
(31, 'H04', '30,32,33,34'),
(32, 'P02', '4,13,14,17,18'),
(33, 'H01', '22,24'),
(34, 'H03', '5,19,20,21'),
(35, 'H03', '5,28,30,31'),
(36, 'H02', '25,26,27,33'),
(37, 'H03', '28,29,31,32'),
(38, 'P01', '1,3,7,11'),
(39, 'H04', '25,26,27,28'),
(40, 'H04', '5,32,33,34'),
(41, 'H03', '5,30,32'),
(42, 'H03', '5,29,30,31'),
(43, 'H03', '27,28,31,32'),
(44, 'H03', '5,9,32,33'),
(45, 'P04', '5,17,19,20'),
(46, 'P02', '1,5,8,11,12'),
(47, 'H01', '21,22,23,25'),
(48, 'P03', '4,5,13,15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `solusi`
--

CREATE TABLE `solusi` (
  `id` int(11) NOT NULL,
  `kd_solusi` varchar(4) NOT NULL,
  `solusi` varchar(200) NOT NULL,
  `kd_hmp` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `solusi`
--

INSERT INTO `solusi` (`id`, `kd_solusi`, `solusi`, `kd_hmp`) VALUES
(1, 'S01', 'Membuang tanaman yang sakit', 'P01'),
(2, 'S02', 'Pengaturan waktu tanam', 'P01'),
(3, 'S03', 'Tanam jajar legowo.', 'P01'),
(4, 'S04', 'Sawah jangan dikeringkan, biarkan kondisi air pada kapasitas lapang ', 'P01'),
(5, 'S05', 'Gunakan beberapa varietas tahan ', 'P02'),
(6, 'S06', 'Gunakan pupuk nitrogen sesuai anjuran.', 'P02'),
(7, 'S07', ' Upayakan waktu tanam yang tepat', 'P02'),
(8, 'S08', 'Gunakan fungisida bila diperlukan yang berbahan aktif tiofanat atau fosdifen dan kasugamisin.', 'P02'),
(9, 'S01', 'Membuang tanaman yang sakit', 'P03'),
(10, 'S09', 'Gunakan benih atau bibit yang bebas dari penyakit ', 'P03'),
(11, 'S06', 'Gunakan pupuk nitrogen sesuai anjuran.', 'P03'),
(12, 'S10', 'Gunakan beberapa varietas tahan seperti code dan angke', 'P04'),
(13, 'S11', 'Menggunakan varietas unggul', 'P04'),
(14, 'S12', ' Pemupukan yang lengkap dan tepat', 'P04'),
(15, 'S13', 'Atur kerapatan jarak tanam', 'P04'),
(16, 'S14', 'Sanitasi Lingkungan dan manipulasi habitat', 'H01'),
(17, 'S15', 'Memompa air atau lumpur ke dalam\n sarang tikus', 'H01'),
(18, 'S02', 'Pengaturan waktu tanam', 'H01'),
(19, 'S13', 'Atur kerapatan jarak tanam', 'H01'),
(20, 'S16', 'Gunakan perangkap', 'H01'),
(21, 'S17', 'Mengusir tikus dengan suara ultrasonic', 'H01'),
(22, 'S18', 'Pemasangan saringan di saluran irigasi dan pagar plastik dipesemaian', 'H02'),
(23, 'S19', 'Pengumpulan kelp. Telur', 'H02'),
(24, 'S20', 'Penggunaan Kapur 50 – 100 kg/ha', 'H02'),
(25, 'S16', 'Gunakan perangkap', 'H02'),
(26, 'S21', ' Menanam secara serempak  ', 'H03'),
(27, 'S16', 'Gunakan perangkap', 'H03'),
(28, 'S22', 'Gunakan tanaman Lycopodium sp  dan Ceratophylum sp untuk menarik perhatian walang sangit.', 'H03'),
(29, 'S21', ' Menanam secara serempak  ', 'H04'),
(30, 'S23', 'Rotasi tanaman dengan tanaman lain selain padi.', 'H04'),
(31, 'S24', 'Pengelompokan persemaian', 'H04'),
(32, 'S02', 'Pengaturan waktu tanam', 'H04'),
(33, 'S25', 'Penyabitan tanaman serendah mungkin', 'H04'),
(34, 'S19', 'Pengumpulan kelp. Telur', 'H04'),
(35, 'S26', 'Penggunaan insektisida dapat dilakukan pada saat ditemukan kelompok telur', 'H04'),
(36, 'S27', 'Penggunaan Seks Feromon', 'H04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  ADD PRIMARY KEY (`kd_bsp`);

--
-- Indeks untuk tabel `biodata_user`
--
ALTER TABLE `biodata_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hama_penyakit`
--
ALTER TABLE `hama_penyakit`
  ADD PRIMARY KEY (`kd_hmp`);

--
-- Indeks untuk tabel `hasil_diagnosa`
--
ALTER TABLE `hasil_diagnosa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kasus`
--
ALTER TABLE `kasus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  MODIFY `kd_bsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `biodata_user`
--
ALTER TABLE `biodata_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `hasil_diagnosa`
--
ALTER TABLE `hasil_diagnosa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `kasus`
--
ALTER TABLE `kasus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
