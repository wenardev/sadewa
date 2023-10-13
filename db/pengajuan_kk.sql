-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Agu 2022 pada 09.43
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
-- Struktur dari tabel `pengajuan_kk`
--

CREATE TABLE `pengajuan_kk` (
  `warga_negara_anak_lima` varchar(20) NOT NULL,
  `pendidikan_terakhir_anak_lima` varchar(20) NOT NULL,
  `pekerjaan_anak_lima` varchar(20) NOT NULL,
  `status_keluarga_anak_lima` varchar(20) NOT NULL,
  `no_paspor_anak_lima` varchar(20) NOT NULL,
  `no_kitab_anak_lima` varchar(20) NOT NULL,
  `nama_ayah_anak_lima` varchar(20) NOT NULL,
  `nama_ibu_anak_lima` varchar(20) NOT NULL,
  `nik_anak_enam` varchar(20) NOT NULL,
  `nama_anak_enam` varchar(20) NOT NULL,
  `tempat_lahir_anak_enam` varchar(20) NOT NULL,
  `tanggal_lahir_anak_enam` varchar(20) NOT NULL,
  `jenis_kelamin_anak_enam` varchar(20) NOT NULL,
  `agama_anak_enam` varchar(20) NOT NULL,
  `status_kawin_anak_enam` varchar(20) NOT NULL,
  `warga_negara_anak_enam` varchar(20) NOT NULL,
  `pendidikan_terakhir_anak_enam` varchar(20) NOT NULL,
  `pekerjaan_anak_enam` varchar(20) NOT NULL,
  `status_keluarga_anak_enam` varchar(20) NOT NULL,
  `no_paspor_anak_enam` varchar(20) NOT NULL,
  `no_kitab_anak_enam` varchar(20) NOT NULL,
  `nama_ayah_anak_enam` varchar(20) NOT NULL,
  `nama_ibu_anak_enam` varchar(20) NOT NULL,
  `nik_anak_tujuh` varchar(20) NOT NULL,
  `nama_anak_tujuh` varchar(20) NOT NULL,
  `tempat_lahir_anak_tujuh` varchar(20) NOT NULL,
  `tanggal_lahir_anak_tujuh` varchar(20) NOT NULL,
  `jenis_kelamin_anak_tujuh` varchar(20) NOT NULL,
  `agama_anak_tujuh` varchar(20) NOT NULL,
  `status_kawin_anak_tujuh` varchar(20) NOT NULL,
  `warga_negara_anak_tujuh` varchar(20) NOT NULL,
  `pendidikan_terakhir_anak_tujuh` varchar(20) NOT NULL,
  `pekerjaan_anak_tujuh` varchar(20) NOT NULL,
  `status_keluarga_anak_tujuh` varchar(20) NOT NULL,
  `no_paspor_anak_tujuh` varchar(20) NOT NULL,
  `no_kitab_anak_tujuh` varchar(20) NOT NULL,
  `nama_ayah_anak_tujuh` varchar(20) NOT NULL,
  `nama_ibu_anak_tujuh` varchar(20) NOT NULL,
  `nik_anak_delapan` varchar(20) NOT NULL,
  `nama_anak_delapan` varchar(20) NOT NULL,
  `tempat_lahir_anak_delapan` varchar(20) NOT NULL,
  `tanggal_lahir_anak_delapan` varchar(20) NOT NULL,
  `jenis_kelamin_anak_delapan` varchar(20) NOT NULL,
  `agama_anak_delapan` varchar(20) NOT NULL,
  `status_kawin_anak_delapan` varchar(20) NOT NULL,
  `warga_negara_anak_delapan` varchar(20) NOT NULL,
  `pendidikan_terakhir_anak_delapan` varchar(20) NOT NULL,
  `pekerjaan_anak_delapan` varchar(20) NOT NULL,
  `status_keluarga_anak_delapan` varchar(20) NOT NULL,
  `no_paspor_anak_delapan` varchar(20) NOT NULL,
  `no_kitab_anak_delapan` varchar(20) NOT NULL,
  `nama_ayah_anak_delapan` varchar(20) NOT NULL,
  `nama_ibu_anak_delapan` varchar(20) NOT NULL,
  `nik_anak_sembilan` varchar(20) NOT NULL,
  `nama_anak_sembilan` varchar(20) NOT NULL,
  `tempat_lahir_anak_sembilan` varchar(20) NOT NULL,
  `tanggal_lahir_anak_sembilan` varchar(20) NOT NULL,
  `jenis_kelamin_anak_sembilan` varchar(20) NOT NULL,
  `agama_anak_sembilan` varchar(20) NOT NULL,
  `status_kawin_anak_sembilan` varchar(20) NOT NULL,
  `warga_negara_anak_sembilan` varchar(20) NOT NULL,
  `pendidikan_terakhir_anak_sembilan` varchar(20) NOT NULL,
  `pekerjaan_anak_sembilan` varchar(20) NOT NULL,
  `status_keluarga_anak_sembilan` varchar(20) NOT NULL,
  `no_paspor_anak_sembilan` varchar(20) NOT NULL,
  `no_kitab_anak_sembilan` varchar(20) NOT NULL,
  `nama_ayah_anak_sembilan` varchar(20) NOT NULL,
  `nama_ibu_anak_sembilan` varchar(20) NOT NULL,
  `nik_anak_sepuluh` varchar(20) NOT NULL,
  `nama_anak_sepuluh` varchar(20) NOT NULL,
  `tempat_lahir_anak_sepuluh` varchar(20) NOT NULL,
  `tanggal_lahir_anak_sepuluh` varchar(20) NOT NULL,
  `jenis_kelamin_anak_sepuluh` varchar(20) NOT NULL,
  `agama_anak_sepuluh` varchar(20) NOT NULL,
  `status_kawin_anak_sepuluh` varchar(20) NOT NULL,
  `warga_negara_anak_sepuluh` varchar(20) NOT NULL,
  `pendidikan_terakhir_anak_sepuluh` varchar(20) NOT NULL,
  `pekerjaan_anak_sepuluh` varchar(20) NOT NULL,
  `status_keluarga_anak_sepuluh` varchar(20) NOT NULL,
  `no_paspor_anak_sepuluh` varchar(20) NOT NULL,
  `no_kitab_anak_sepuluh` varchar(20) NOT NULL,
  `nama_ayah_anak_sepuluh` varchar(20) NOT NULL,
  `nama_ibu_anak_sepuluh` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `nama_surat` varchar(20) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengajuan_kk`
--
ALTER TABLE `pengajuan_kk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengajuan_kk`
--
ALTER TABLE `pengajuan_kk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
