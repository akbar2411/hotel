-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 05:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel2`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitashotel`
--

CREATE TABLE `fasilitashotel` (
  `id_fasilitas_hotel` int(11) NOT NULL,
  `nama_fasilitas_hotel` varchar(50) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitashotel`
--

INSERT INTO `fasilitashotel` (`id_fasilitas_hotel`, `nama_fasilitas_hotel`, `gambar`, `keterangan`) VALUES
(70, 'Kolam Renang ', './assets/img/kolam1.jpg', 'kolam renang besar'),
(71, 'tempat makan', './assets/img/lounge1.jpg', 'tempat untuk makan ');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(11) DEFAULT NULL,
  `nama_hotel` varchar(50) DEFAULT NULL,
  `slogan` text DEFAULT NULL,
  `nama_perusahaan` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `faximile` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `nama_hotel`, `slogan`, `nama_perusahaan`, `alamat`, `telepon`, `faximile`, `email`, `website`) VALUES
(1, 'Hotel Hebat', 'Syar\'i. Modern. Accessible. Affordable.', NULL, 'Jalan Nitikan 48, Umbulharjo, Yogyakarta', '(0274) 370850', NULL, NULL, NULL),
(1, 'Hotel Hebat', 'Syar\'i. Modern. Accessible. Affordable.', NULL, 'Jalan Nitikan 48, Umbulharjo, Yogyakarta', '(0274) 370850', NULL, NULL, NULL),
(1, 'Hotel Hebat', 'Syar\'i. Modern. Accessible. Affordable.', NULL, 'Jalan Nitikan 48, Umbulharjo, Yogyakarta', '(0274) 370850', NULL, NULL, NULL),
(1, 'Hotel Hebat', 'Syar\'i. Modern. Accessible. Affordable.', NULL, 'Jalan Nitikan 48, Umbulharjo, Yogyakarta', '(0274) 370850', NULL, NULL, NULL),
(11, 'Hotel Merdeka', 'Nyaman Aman Murah', 'PT Hotel hebat Indonesia', 'Jalan Maguwo Banguntapan Bantul Yogyakarta ', '021 988271', '2', 'hotelmerdeka12@gmail.com', 'www.hotelmerdeka.com');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `id_kamar_tipe` int(11) DEFAULT NULL,
  `nomor_kamar` int(11) DEFAULT NULL,
  `max_dewasa` int(11) DEFAULT NULL,
  `max_anak` int(11) DEFAULT NULL,
  `status_kamar` enum('kosong','terisi') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `id_kamar_tipe`, `nomor_kamar`, `max_dewasa`, `max_anak`, `status_kamar`) VALUES
(1, 1, 101, 1, 2, 'terisi'),
(2, 1, 102, 1, 2, 'kosong'),
(3, 1, 103, 1, 2, 'kosong'),
(4, 2, 104, 2, 4, 'kosong'),
(5, 2, 105, 2, 4, 'kosong'),
(6, 3, 106, 2, 1, 'kosong'),
(7, 4, 107, 2, 2, 'kosong'),
(8, 3, 108, 2, 1, 'kosong'),
(9, 3, 109, 2, 1, 'kosong'),
(10, 4, 110, 2, 2, 'kosong'),
(11, 1, 201, 1, 2, 'kosong'),
(12, 1, 202, 1, 2, 'kosong'),
(13, 1, 203, 1, 2, 'kosong'),
(15, 11, 11, 11, 11, 'terisi');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `nik` int(30) DEFAULT NULL,
  `kode_booking` varchar(50) DEFAULT NULL,
  `tanggal_in` date DEFAULT NULL,
  `jam_in` time DEFAULT NULL,
  `tanggal_out` date DEFAULT NULL,
  `jam_out` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `nik`, `kode_booking`, `tanggal_in`, `jam_in`, `tanggal_out`, `jam_out`) VALUES
(11, 12, '12', '2022-02-12', '22:30:11', '2022-02-14', '22:31:11'),
(21, 2003, NULL, '2022-03-02', '22:00:00', '2022-03-03', '22:00:00'),
(23, 909, NULL, '2022-03-02', '12:00:00', '2022-03-03', '12:00:00'),
(24, 909, NULL, '2022-03-02', '12:00:00', '2022-03-03', '12:00:00'),
(27, 123132, '7X154CFY0F94LFXO', '2022-03-01', '13:01:00', NULL, '14:01:00'),
(28, 123132, '0PGMAFTMHAMTJ3AH', '2022-03-01', '13:01:00', NULL, '14:01:00'),
(29, 123132, '5K90D81KV844295K', '2022-03-01', '13:01:00', NULL, '20:01:00'),
(30, 567567, 'PJR6ZRFCCY99U575', '2022-03-01', '13:01:00', NULL, '20:01:00'),
(32, 789789, 'J7VQAJ4AM2T13Z2N', '2022-03-01', '13:01:00', '2022-03-16', '20:01:00'),
(33, 50000000, 'ZSN4QFWSSUIK604V', '2022-03-10', '13:25:00', '2022-03-17', '13:26:00'),
(34, 50000000, '32LATSD7T2SKH0TE', '2022-03-10', '13:21:00', '2022-03-16', '13:21:00'),
(35, 5555, 'WC6NSEH4M5ELHQ39', '2022-03-10', '04:26:00', '2022-03-18', '04:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(11) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama_depan` varchar(50) DEFAULT NULL,
  `nama_belakang` varchar(50) DEFAULT NULL,
  `tipe_identitas` enum('KTP','SIM','Passport') DEFAULT NULL,
  `nomor_identitas` varchar(20) DEFAULT NULL,
  `kewarganegaraan` enum('wni','wna') DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `nik`, `nama_depan`, `nama_belakang`, `tipe_identitas`, `nomor_identitas`, `kewarganegaraan`, `alamat`, `no_hp`, `email`) VALUES
(13, '12', 'Fahdli', 'Gita', 'KTP', '1', 'wni', 'Maguwo Banguntapan Bantul', '0895422390822', 'fahdlifirman123@gmail.com'),
(18, '367711122112121', 'Tsukasa', 'Yuzaki', 'KTP', '12233', 'wna', 'Di Jepang', '0895422390822', 'yuzakitsukasa@gmail.com'),
(19, '132', 'Didin ', 'Mahmud', 'KTP', '8877768', 'wni', 'Condongcatur Yogyakarta ', '08765664332', 'DidinMah12@gmail.com'),
(20, '2212', 'Budi', 'Darmawan', 'SIM', '09997355', 'wni', 'Jalan Sumarno Cepor Wetan Yogyakarta no 90', '08954322122', 'BudiDarma123@gmail.com'),
(23, '2003', 'Tini', 'Marsilah', 'KTP', '33321331', 'wni', 'Pojok deso', '0897676534', 'Tinimar321@gmail.com'),
(25, '0909', 'test\'', 'test', 'KTP', '33234', 'wni', 'Maguwo Banguntapan Bantul', '234343', 'admin@gmail.com'),
(26, '0909', 'test\'', 'test\'', 'KTP', '33234', 'wni', 'Maguwo Banguntapan Bantul', '234343', 'admin@gmail.com'),
(29, '123132', 'deden', 'adi', 'KTP', '123123', 'wni', 'Menteng,jakarta selatan', '08124423534', 'dadang@gmail.com'),
(30, '123132', 'deden', 'adi', 'KTP', '123123', 'wni', 'Menteng,jakarta selatan', '08124423534', 'dadang@gmail.com'),
(31, '123132', 'deden', 'adi', 'KTP', '123123', 'wni', 'Menteng,jakarta selatan', '08124423534', 'dadang@gmail.com'),
(32, '567567', 'deden', 'adi', 'KTP', '123123', 'wni', 'Menteng,jakarta selatan', '08124423534', 'dadang@gmail.com'),
(33, '890890', 'deden', 'adi', 'KTP', '123123', 'wni', 'Menteng,jakarta selatan', '08124423534', 'dadang@gmail.com'),
(34, '789789', 'deden', 'adi', 'KTP', '123123', 'wni', 'Menteng,jakarta selatan', '08124423534', 'dadang@gmail.com'),
(35, '50000000', 'dadang', 'andani', 'KTP', '123123', 'wni', 'Jakarta', '081924141353', 'tawesgemuk@gmail.com'),
(36, '50000000', 'jambu biji', 'air', 'KTP', '21212', 'wni', 'Jakarta', '01981921281', 'anjay@gmail.com'),
(37, '5555', 'ade', 'bambang', 'KTP', '879879', 'wni', 'Jakarta', '01981921281', 'ade@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tipekamar`
--

CREATE TABLE `tipekamar` (
  `id_kamar_tipe` int(11) NOT NULL,
  `nama_kamar_tipe` varchar(50) DEFAULT NULL,
  `fasilitas` text DEFAULT NULL,
  `daftar_fasilitas` varchar(500) NOT NULL,
  `gambar` text DEFAULT NULL,
  `harga` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipekamar`
--

INSERT INTO `tipekamar` (`id_kamar_tipe`, `nama_kamar_tipe`, `fasilitas`, `daftar_fasilitas`, `gambar`, `harga`) VALUES
(22, 'kamar lavender', 'fasilitas ada banyak', '', './assets/img/kamar-3.jpg', 200000),
(204, 'kamar mawar', 'fasilitas AC', '', './assets/img/kamar-4.jpg', 1000000),
(205, 'kamar bunga', 'fasilitas kolam renang indor', '', './assets/img/kamar-1.jpg', 200000),
(65344, 'kamar anggrek', 'fasilitas banyak', '', './assets/img/kamar6.jpg', 600000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `level` enum('administrator','resepsionis') NOT NULL,
  `akses_terakhir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`, `akses_terakhir`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'administrator', '2022-01-29'),
(2, 'cs1', '21232f297a57a5a743894a0e4a801fc3', 'Customer Service 1', 'resepsionis', '2022-01-29'),
(7, 'fahdligita', '263d6b79b9f96c18e5802213bb9584c8', 'Fahdli Gita Firmansyah', 'administrator', '2022-02-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitashotel`
--
ALTER TABLE `fasilitashotel`
  ADD PRIMARY KEY (`id_fasilitas_hotel`) USING BTREE;

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`) USING BTREE;

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`) USING BTREE;

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`) USING BTREE;

--
-- Indexes for table `tipekamar`
--
ALTER TABLE `tipekamar`
  ADD PRIMARY KEY (`id_kamar_tipe`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitashotel`
--
ALTER TABLE `fasilitashotel`
  MODIFY `id_fasilitas_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tipekamar`
--
ALTER TABLE `tipekamar`
  MODIFY `id_kamar_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65345;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
