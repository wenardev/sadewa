-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Agu 2022 pada 08.55
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
-- Struktur dari tabel `sk_pindah`
--

CREATE TABLE `sk_pindah` (
  `id` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `kode_surat` varchar(100) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `warga_negara` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `alamat_baru` text NOT NULL,
  `no_rt_baru` int(11) NOT NULL,
  `no_rw_baru` int(11) NOT NULL,
  `kode_pos_baru` int(5) NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `pengikut` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sk_pindah`
--
ALTER TABLE `sk_pindah`
  ADD PRIMARY KEY (`id`,`no_surat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sk_pindah`
--
ALTER TABLE `sk_pindah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
