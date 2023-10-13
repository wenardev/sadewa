-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Agu 2022 pada 09.15
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
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fa fa-tachometer', 1),
(2, 1, 'User Level', 'admin/role', 'fa fa-shield', 1),
(3, 1, 'Daftar User', 'admin/daftar_user', 'fa fa-address-book', 0),
(4, 2, 'Instansi', 'info', 'fa fa-id-badge', 1),
(5, 2, 'Struktur', 'info/struktur', 'fa fa-sitemap', 1),
(6, 2, 'RT/RW', 'info/rtrw', 'fa fa-users', 0),
(7, 3, 'Profile', 'user', 'fa fa-user-o', 1),
(8, 4, 'Judul Menu', 'menu', 'fa fa-tasks', 1),
(9, 4, 'Judul SubMenu', 'menu/submenu', 'fa fa-list-alt', 1),
(10, 5, 'Daftar PerKK', 'penduduk', 'fa fa-address-card', 0),
(11, 5, 'Daftar PerKTP', 'penduduk/ktp', 'fa fa-vcard-o', 0),
(12, 6, 'SP E-KTP', 'layanan', 'fa fa-envelope', 0),
(13, 6, 'Surat Domisili', 'layanan/domisili', 'fa fa-envelope', 0),
(14, 1, 'User Active', 'admin/useractive', 'dw dw dw-user-13', 1),
(17, 3, 'Pengguna', 'user/pengguna', 'dw dw-group', 1),
(18, 6, 'Surat Kelahiran', 'layanan/kelahiran', 'fa fa-envelope', 0),
(19, 6, 'Surat Kematian', 'layanan/kematian', 'fa fa-envelope', 0),
(20, 15, 'Keluarga', 'data', 'fa fa-address-card', 0),
(21, 15, 'Penduduk', 'data/penduduk', 'fa fa-vcard-o', 0),
(22, 16, 'SP EKTP', 'pelayanan', 'fa fa-envelope', 0),
(23, 16, 'SK Domisili', 'pelayanan/domisili', 'fa fa-envelope', 1),
(24, 16, 'SK Melahirkan', 'pelayanan/melahirkan', 'fa fa-envelope', 0),
(25, 16, 'SK Kematian', 'pelayanan/sk_kematian', 'fa fa-envelope', 1),
(26, 17, 'Laporan', 'report', 'fa fa-address-book-o', 1),
(27, 16, 'SK Izin Orang Tua', 'pelayanan/sk_izin_orang_tua', 'fa fa-envelope', 1),
(28, 16, 'SK Kelahiran', 'pelayanan/sk_kelahiran', 'fa fa-envelope', 1),
(29, 16, 'SK Pindah', 'pelayanan/sk_pindah', 'fa fa-envelope', 1),
(30, 16, 'SK Sudah Menikah', 'pelayanan/sk_sudah_menikah', 'fa fa-envelope', 1),
(31, 16, 'SK Belum Menikah', 'pelayanan/sk_belum_menikah', 'fa fa-envelope', 1),
(32, 16, 'SK Tidak Mampu', 'pelayanan/sk_tidak_mampu', 'fa fa-envelope', 1),
(33, 16, 'SK Usaha', 'pelayanan/sk_usaha', 'fa fa-envelope', 1),
(34, 16, 'SK (N1)', 'pelayanan/sk_nsatu', 'fa fa-envelope', 1),
(35, 16, 'SK (N2)', 'pelayanan/sk_ndua', 'fa fa-envelope', 1),
(36, 16, 'SK (N3)', 'pelayanan/sk_ntiga', 'fa fa-envelope', 1),
(37, 16, 'SK (N4)', 'pelayanan/sk_nempat', 'fa fa-envelope', 1),
(38, 16, 'SK (N5)', 'pelayanan/sk_nlima', 'fa fa-envelope', 1),
(39, 17, 'Laporan V2', 'report/laporan', 'fa fa-address-book-o', 0),
(40, 16, 'Pengajuan KK', 'pelayanan/pengajuan_kk', 'fa fa-envelope', 1),
(41, 16, 'SK Pindah Datang', 'pelayanan/sk_pindah_datang', 'fa fa-envelope', 1),
(42, 18, 'Keluarga', 'data', 'fa fa-vcard-o', 1),
(43, 18, 'Penduduk', 'data/penduduk', 'fa fa-vcard-o', 1),
(44, 19, 'contoh submenu', 'contohmenu/contoh_submenu', 'fa fa-address-book', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
