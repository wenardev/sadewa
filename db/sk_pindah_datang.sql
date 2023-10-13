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
-- Struktur dari tabel `sk_pindah_datang`
--

CREATE TABLE `sk_pindah_datang` (
  `id` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `kode_surat` varchar(100) NOT NULL,
  `no_kk` bigint(20) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki - laki','Perempuan') NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_kawin` enum('Belum Menikah','Menikah','Duda','Janda') NOT NULL,
  `warga_negara` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alasan_pindah_id` int(11) NOT NULL,
  `lainnya` varchar(50) NOT NULL,
  `alamat_pindah` text NOT NULL,
  `desa_pindah` char(50) NOT NULL,
  `kecamatan_pindah` char(50) NOT NULL,
  `kabupaten_pindah` char(50) NOT NULL,
  `provinsi_pindah` char(50) NOT NULL,
  `no_rt_pindah` varchar(10) NOT NULL,
  `no_rw_pindah` varchar(10) NOT NULL,
  `kodepos_pindah` int(5) NOT NULL,
  `telepon_pindah` varchar(20) NOT NULL,
  `klasifikasi_pindah_id` int(11) NOT NULL,
  `jenis_kepindahan_id` int(11) NOT NULL,
  `status_tidak_pindah_id` int(11) NOT NULL,
  `status_pindah_id` int(11) NOT NULL,
  `tanggal_pindah` date NOT NULL,
  `nik_pindah_satu` bigint(16) NOT NULL,
  `nama_pindah_satu` char(50) NOT NULL,
  `nik_pindah_dua` varchar(50) NOT NULL,
  `nama_pindah_dua` char(50) NOT NULL,
  `nik_pindah_tiga` varchar(50) NOT NULL,
  `nama_pindah_tiga` char(50) NOT NULL,
  `nik_pindah_empat` varchar(50) NOT NULL,
  `nama_pindah_empat` char(50) NOT NULL,
  `nik_pindah_lima` varchar(50) NOT NULL,
  `nama_pindah_lima` char(50) NOT NULL,
  `nik_pindah_enam` varchar(16) NOT NULL,
  `nama_pindah_enam` char(50) NOT NULL,
  `nik_pindah_tujuh` varchar(16) NOT NULL,
  `nama_pindah_tujuh` char(50) NOT NULL,
  `nik_pindah_delapan` varchar(16) NOT NULL,
  `nama_pindah_delapan` char(50) NOT NULL,
  `nik_pindah_sembilan` varchar(16) NOT NULL,
  `nama_pindah_sembilan` char(50) NOT NULL,
  `nik_pindah_sepuluh` varchar(16) NOT NULL,
  `nama_pindah_sepuluh` char(50) NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sk_pindah_datang`
--
ALTER TABLE `sk_pindah_datang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sk_pindah_datang`
--
ALTER TABLE `sk_pindah_datang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
