-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2020 pada 08.17
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kerja_praktek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rt`
--

CREATE TABLE `rt` (
  `id` int(11) NOT NULL,
  `nama_rt` varchar(100) NOT NULL,
  `no_rt` int(11) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `pendidikan_id` int(11) NOT NULL,
  `no_telephone` bigint(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_rw_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rt`
--

INSERT INTO `rt` (`id`, `nama_rt`, `no_rt`, `jenis_kelamin`, `pendidikan_id`, `no_telephone`, `alamat`, `no_rw_id`) VALUES
(10, 'Andy', 11, 'Laki-laki', 8, 123456789012, 'Jl.A Kelurahan Munjul Jaya', 1),
(11, 'Bimbim', 12, 'Laki-laki', 5, 123456789012, 'Jl.Ab Kelurahan Munjul Jaya', 1),
(12, 'Cecep', 12, 'Laki-laki', 5, 123456789012, 'Jl.ABC Kelurahan Munjul Jaya', 1),
(14, 'Dodi', 15, 'Laki-laki', 5, 123456789012, 'Jl.ABCD Kelurahan Munjul Jaya', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rw`
--

CREATE TABLE `rw` (
  `id` int(11) NOT NULL,
  `nama_rw` varchar(100) NOT NULL,
  `no_rw` int(11) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `pendidikan_id` int(11) NOT NULL,
  `no_telephone` bigint(11) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rw`
--

INSERT INTO `rw` (`id`, `nama_rw`, `no_rw`, `jenis_kelamin`, `pendidikan_id`, `no_telephone`, `alamat`) VALUES
(1, 'Aang', 21, 'Laki-laki', 1, 123456789012, 'Jl.A Blok A Kelurahan Munjul Jaya'),
(3, 'Bahrul', 23, 'Laki-laki', 5, 123456789012, 'Jl.AB Kelurahan Munjul Jaya'),
(6, 'Efendi', 22, 'Laki-laki', 3, 123456789012, 'aad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelurahan`
--

CREATE TABLE `tb_kelurahan` (
  `id` int(11) NOT NULL,
  `image_instansi` varchar(100) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `jenis_instansi` varchar(100) NOT NULL,
  `email_instansi` varchar(100) NOT NULL,
  `no_telephone` bigint(20) NOT NULL,
  `alamat` text NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `image_pimpinan` varchar(350) NOT NULL,
  `nama_pimpinan` varchar(100) NOT NULL,
  `nip_pimpinan` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kelurahan`
--

INSERT INTO `tb_kelurahan` (`id`, `image_instansi`, `nama_instansi`, `jenis_instansi`, `email_instansi`, `no_telephone`, `alamat`, `kecamatan`, `kabupaten`, `kode_pos`, `image_pimpinan`, `nama_pimpinan`, `nip_pimpinan`) VALUES
(1, 'logo_purwakarta.jpg', 'Sukamulya', 'Kelurahan', 'munjuljayapermai@gmail.go.id', 123456789015, 'Jl.Abc Munjul Jaya', 'Purwakarta', 'Purwakarta', 41117, 'pimpinan.jpg', 'ABCDEF', 123456789012345678);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kk`
--

CREATE TABLE `tb_kk` (
  `id` int(11) NOT NULL,
  `no_kk` bigint(20) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama_kepala` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendidikan`
--

CREATE TABLE `tb_pendidikan` (
  `id` int(11) NOT NULL,
  `pendidikan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pendidikan`
--

INSERT INTO `tb_pendidikan` (`id`, `pendidikan`) VALUES
(1, 'Tidak Sekolah'),
(2, 'TK'),
(3, 'SD'),
(4, 'SMP'),
(5, 'SMA/SMK'),
(6, 'S1'),
(7, 'S2'),
(8, 'S3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `id` int(11) NOT NULL,
  `id_nokk` int(11) NOT NULL,
  `nik_kepala` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `umur` int(11) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `id_rt` int(11) NOT NULL,
  `id_rw` int(11) NOT NULL,
  `Kecamatan` int(11) NOT NULL,
  `Kabupaten` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(350) NOT NULL,
  `background` varchar(350) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `background`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Wendi Abdul Rohim', 'admin@sadewa.com', 'adminsamplephoto.jpg', 'gunung.jpg', '$2y$10$egB.QfADHxHqWFTRfEPbuei5us5bXN5Pv1FGA3o8RnaeWijJ/xr7O', 1, 1, 1600867589),
(2, 'Latihan 1', 'latihan1@sadewa.com', 'pngtree1.jpg', 'gunung.jpg', '$2y$10$Lf4CcoklBGeb0u02wO904eNcSMA9w0QNqHjazR0az8PYnXWnfOcBm', 2, 1, 1600872770),
(7, 'Latihan 2', 'latihan2@sadewa.com', 'default.jpg', 'background.jpg', '$2y$10$U7GEpHwZJJ7yRCEAlNgT0uyX22377.QQ7/Bo9S7IVLHo70wI4gOva', 2, 1, 1601560201),
(9, 'Latihan 3', 'latihan3@gmail.com', 'default.jpg', 'background.jpg', '$2y$10$GdlG6x8YzofvclyfhvhSfOHPlCmJTMU4LdcusoXhsulntY9JqaIpe', 2, 1, 1601779296);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(6, 2, 2),
(7, 2, 3),
(8, 2, 5),
(10, 1, 2),
(12, 1, 3),
(13, 1, 4),
(20, 1, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_active`
--

CREATE TABLE `user_active` (
  `id` int(11) NOT NULL,
  `active` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_active`
--

INSERT INTO `user_active` (`id`, `active`) VALUES
(0, 'off'),
(1, 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Info'),
(3, 'User'),
(4, 'Menu'),
(5, 'Layanan'),
(6, 'Master'),
(12, 'Menu1'),
(13, 'Menu2'),
(14, 'Menu3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Pegawai'),
(26, 'Orang');

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
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt\r\n', 1),
(2, 1, 'User Level', 'admin/role', 'fas fa-fw fa-user-shield\r\n', 1),
(3, 3, 'Master Menu', 'admin/master', 'fas fa-fw fa-folder-plus\r\n', 0),
(4, 2, 'Kelurahan', 'info', 'far fa-fw fa-id-badge\r\n', 1),
(5, 2, 'Struktur Kelurahan', 'info/struktur', 'fas fa-fw fa-sitemap\r\n', 1),
(6, 2, 'Rt/Rw', 'info/rtrw', 'fas fa-fw fa-users\r\n', 1),
(7, 3, 'My Profile', 'user', 'fas fa-fw fa-user-tie\r\n', 1),
(8, 4, 'Menu Management', 'menu', 'fas fa-fw fa-tasks\r\n', 1),
(9, 4, 'SubMenu Management', 'menu/submenu', 'fas fa-fw fa-list-ul\r\n', 1),
(10, 5, 'Daftar KK', 'layanan', 'fas fa-fw fa-address-card\r\n', 1),
(11, 5, 'Data Penduduk', 'layanan/penduduk', 'fas fa-fw fa-user-plus\r\n', 1),
(12, 5, 'SP E-KTP', 'layanan/ektp', 'fas fa-fw fa-envelope\r\n', 1),
(13, 5, 'Surat Domisili', 'layanan/domisili', 'fas fa-fw fa-envelope\r\n', 1),
(14, 1, 'User Active', 'admin/useractive', 'fas fa-fw fa-user-lock', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rt`
--
ALTER TABLE `rt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rw`
--
ALTER TABLE `rw`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kelurahan`
--
ALTER TABLE `tb_kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kk`
--
ALTER TABLE `tb_kk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_active`
--
ALTER TABLE `user_active`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `rt`
--
ALTER TABLE `rt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `rw`
--
ALTER TABLE `rw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_kelurahan`
--
ALTER TABLE `tb_kelurahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_kk`
--
ALTER TABLE `tb_kk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user_active`
--
ALTER TABLE `user_active`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
