-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Agu 2022 pada 08.58
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sadewa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(350) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Admin Ganti Nama', 'admin@sadewa.com', 'pimpinan.jpg', '$2y$10$YX3WwcYWfPW7w//PtiaaQ.tE/tibBIJNNCNCeMewAcyvT/TPN99KW', 1, 1, '2022-08-01'),
(2, 'Pegawai', 'pegawai@sadewa.com', 'default.jpg', '$2y$10$eiNhjVfKMhLeHTidlQfREOSFsVuEMezSu96zd8xxRusRCKzjG41su', 2, 1, '2022-08-13'),
(3, 'Pimpinan', 'pimpinan@sadewa.com', 'default.jpg', '$2y$10$qs9ihm1UKGuV6sEHvQcxM.RuHL/498Vq5A5nIIxryko/SnBIEK2.O', 3, 1, '2022-08-13'),
(4, 'User', 'user@sadewa.com', 'default.jpg', '$2y$10$nUnuppFbuRluscUmrTl.xuU2.m.SGbKkr4hoE3COpf.yg89myQLPa', 2, 0, '2022-08-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
