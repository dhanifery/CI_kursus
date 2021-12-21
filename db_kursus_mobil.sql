-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 21, 2021 at 03:29 PM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kursus_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `instruktur`
--

CREATE TABLE `instruktur` (
  `id_instr` int NOT NULL,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0800_ai_ci NOT NULL,
  `email_instr` varchar(50) NOT NULL,
  `alamat_instr` varchar(50) NOT NULL,
  `telp_instr` varchar(15) NOT NULL,
  `TTL_instr` date NOT NULL,
  `JK_instr` enum('Male','Female') NOT NULL,
  `honor_per_jam` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0800_ai_ci;

--
-- Dumping data for table `instruktur`
--

INSERT INTO `instruktur` (`id_instr`, `username`, `email_instr`, `alamat_instr`, `telp_instr`, `TTL_instr`, `JK_instr`, `honor_per_jam`) VALUES
(10, 'Chandra', 'chandra@gmail.com', 'Bekasi', '088888818', '2021-12-17', 'Male', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int NOT NULL,
  `kode_jadwal` varchar(5) NOT NULL,
  `id_peserta` int NOT NULL,
  `id_instr` int NOT NULL,
  `id` int NOT NULL,
  `jenis_mobil` enum('Manual','Matic') NOT NULL,
  `tgl_latihan` date NOT NULL,
  `jam_latihan` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0800_ai_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `kode_jadwal`, `id_peserta`, `id_instr`, `id`, `jenis_mobil`, `tgl_latihan`, `jam_latihan`) VALUES
(21, 'A001', 118, 10, 33, 'Manual', '2021-12-15', '22:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int NOT NULL,
  `byk_pertemuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0800_ai_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `nama`, `harga`, `byk_pertemuan`) VALUES
(31, 'Paket 1', 400000, '6'),
(33, 'Paket 2', 500000, '9'),
(34, 'Paket 3', 650000, '12'),
(35, 'Paket 4', 500000, '14');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0800_ai_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `nama`) VALUES
(1, 'BCA'),
(2, 'Mandiri'),
(3, 'Indomaret'),
(4, 'Alfamart');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email_peserta` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alamat_peserta` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TTL_peserta` date NOT NULL,
  `JK_peserta` enum('Male','Female') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `username`, `email_peserta`, `alamat_peserta`, `no_telp`, `TTL_peserta`, `JK_peserta`) VALUES
(118, 'Feri', 'feri@gmail.com', 'Bekasi', '0888888', '1999-02-02', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trans` int NOT NULL,
  `id_jadwal` int NOT NULL,
  `id_peserta` int NOT NULL,
  `id_pembayaran` int NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0800_ai_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_trans`, `id_jadwal`, `id_peserta`, `id_pembayaran`, `date_created`) VALUES
(10, 21, 118, 2, '2021-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role_id` int NOT NULL,
  `is_active` int NOT NULL,
  `date_created` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0800_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(2, 'lala', 'lala@gmail.com', 'default.jpg', '$2y$10$cGFepQgTEs6fxjiTt10m7OpRGY4MkktmjkTjl35BzoamK8x0vxA7G', 1, 1, 1639065658),
(7, 'shani', 'indira@gmail.com', 'default.jpg', '$2y$10$eGJWSraaXW5XroG.jwLNgOEX5tgG5gJUGCa8hdOnHSpn27aQreE3O', 2, 1, 1639139820),
(8, 'admin', 'admin@gmail.com', 'default.jpg', '$2y$10$b7JDn7vv0KJuh6AJBaazquY98FRKkYBiZDC68c.EIQvDm.TG9irhe', 1, 1, 1639144951),
(9, 'Fery', 'fery@gmail.com', 'default.jpg', '$2y$10$TaPutbK.c67ivU6cGvKLre34mpztd5XJF7pYz3C0vDF6AhR.0cjkO', 3, 1, 1639156736),
(10, 'Feri', 'fer1@gmail.com', 'default.jpg', '$2y$10$eJqDzkEbuIT6l7NTF3ibteUmgFpWNsUR7KnKaoekNu4HlFazH7oMG', 2, 1, 1639162622),
(11, 'dhani', 'dhani@gmail.com', 'default.jpg', '$2y$10$CDRnxNqL.TvzWl9GSqx.0Ovb08dmFV4wvNA4EFy8WS8sNbOHQVFgK', 2, 1, 1639291401),
(12, 'dini', 'dini@gmail.com', 'default.jpg', '$2y$10$PPgADyj252l7nmhqQjGYUe.7leIHTBn5DOSDqrBqRiTktCMxSkHEq', 2, 1, 1639315512),
(14, 'utha', 'utha@gmail.com', 'default.jpg', '$2y$10$5dwOkFumCIWUnl1cXSvIEe7MLJN/HpriRvtY/COhCIvWxqUaqxao.', 2, 1, 1639320371),
(15, 'halim', 'halim@gmail.com', 'default.jpg', '$2y$10$39vLI4a8/qWqa1yl0CtbDebAL4jEWEWhUVpx3smkkRkPu634lIktq', 2, 1, 1639418547),
(16, 'dede', 'dede@gmail.com', 'default.jpg', '$2y$10$nUb7LZrzAS3YqltUhyyf3ODtIjT41rGDKQ4SPmXIUjXNkqNbhPe8a', 2, 1, 1639474611);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int NOT NULL,
  `role_id` int NOT NULL,
  `menu_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0800_ai_ci;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int NOT NULL,
  `menu` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0800_ai_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Instruktur');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0800_ai_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role`) VALUES
(1, 'Admin'),
(2, 'Pengguna'),
(3, 'Instruktur');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int NOT NULL,
  `menu_id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `is_active` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0800_ai_ci;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'Admin', 'bx fa-fw bx-grid-alt', 1),
(2, 2, 'Course', 'User', 'bx fa-fw bxl-discourse', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instruktur`
--
ALTER TABLE `instruktur`
  ADD PRIMARY KEY (`id_instr`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD UNIQUE KEY `kode_jadwal` (`kode_jadwal`),
  ADD KEY `id_peserta` (`id_peserta`),
  ADD KEY `id` (`id`),
  ADD KEY `id_instr` (`id_instr`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trans`),
  ADD KEY `id_pembayaran` (`id_pembayaran`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `id_peserta` (`id_peserta`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instruktur`
--
ALTER TABLE `instruktur`
  MODIFY `id_instr` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_trans` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_5` FOREIGN KEY (`id_peserta`) REFERENCES `peserta` (`id_peserta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_6` FOREIGN KEY (`id`) REFERENCES `paket` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_7` FOREIGN KEY (`id_instr`) REFERENCES `instruktur` (`id_instr`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_peserta`) REFERENCES `peserta` (`id_peserta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id_pembayaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
