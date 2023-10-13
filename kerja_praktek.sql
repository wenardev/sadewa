-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2022 at 03:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
-- Table structure for table `data_perektp`
--

CREATE TABLE `data_perektp` (
  `id` int(11) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` int(11) NOT NULL,
  `no_rw` int(11) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status` enum('Belum Kawin','Kawin') NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `warga_negara` enum('WNI','WNA') NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_perektp`
--

INSERT INTO `data_perektp` (`id`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `no_rt`, `no_rw`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `agama`, `status`, `pekerjaan`, `warga_negara`, `date_created`) VALUES
(1, 3210000000000001, 'Aang', 'Purwakarta', '2020-11-01', 'Laki-laki', 'Jl.Abc', 11, 21, 'Tegal Munjul', 'Purwakarta', 'Purwakarta', 'Jawa Barat', 'Islam', 'Belum Kawin', 'Wiraswasta', 'WNA', 1605842223),
(4, 3210000000000010, 'Bayu', 'Purwakarta', '2020-11-01', 'Laki-laki', 'Jl.Abc', 11, 21, 'Munjul Jaya', 'Purwakarta', 'Purwakarta', 'Jawa Barat', 'Islam', 'Kawin', 'Pelajar', 'WNI', 1605645777);

-- --------------------------------------------------------

--
-- Table structure for table `data_perkk`
--

CREATE TABLE `data_perkk` (
  `id` int(11) NOT NULL,
  `no_kk` bigint(20) NOT NULL,
  `nik_kepala_keluarga` bigint(20) NOT NULL,
  `nama_kepala_keluarga` varchar(100) NOT NULL,
  `nama_istri` varchar(100) NOT NULL,
  `nama_anak` varchar(100) NOT NULL,
  `tempat_lahir_anak` varchar(100) NOT NULL,
  `tanggal_lahir_anak` date NOT NULL,
  `jenis_kelamin_anak` enum('Laki-laki','Perempuan') NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_rt` varchar(5) NOT NULL,
  `no_rw` varchar(5) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_perkk`
--

INSERT INTO `data_perkk` (`id`, `no_kk`, `nik_kepala_keluarga`, `nama_kepala_keluarga`, `nama_istri`, `nama_anak`, `tempat_lahir_anak`, `tanggal_lahir_anak`, `jenis_kelamin_anak`, `anak_ke`, `alamat`, `no_rt`, `no_rw`, `kode_pos`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`) VALUES
(1, 3211000000000001, 3210000000000001, 'Aang', 'Beti', 'Cecep', 'Purwakarta', '2020-11-01', 'Laki-laki', 1, 'Jl.Abc', '11', '21', 41117, 'Tegal Munjul', 'Purwakarta', 'Purwakarta', 'Jawa Barat'),
(2, 3212000000000001, 3210000000000010, 'Fery', 'Gigi', 'Hery', 'Purwakarta', '2020-11-01', 'Laki-laki', 1, 'Jl.Abc', '11', '21', 41117, 'MunjulJaya', 'Purwakarta', 'Purwakarta', 'Jawa Barat'),
(3, 3211000000000020, 3211000000000020, 'Doni', 'Dina', 'Desta', 'Purwakarta', '2020-11-01', 'Laki-laki', 1, 'Jl.Abc', '11', '21', 41117, 'Tegal Munjul', 'Purwakarta', 'Purwakarta', 'Jawa Barat'),
(9, 3211000000000001, 3210000000000002, 'Aang', '', '', '', '0000-00-00', 'Laki-laki', 0, 'dadsa', '11', '21', 32112, 'MunjulJaya', 'Purwakarta', 'Purwakarta', 'Jawa Barat');

-- --------------------------------------------------------

--
-- Table structure for table `domisili`
--

CREATE TABLE `domisili` (
  `id` int(11) NOT NULL,
  `no_domisili` int(11) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_kawin` enum('BELUM KAWIN','KAWIN') NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` int(11) NOT NULL,
  `no_rw` int(11) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `domisili`
--

INSERT INTO `domisili` (`id`, `no_domisili`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `status_kawin`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `kode_pos`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `date_created`) VALUES
(1, 101, 3210000000000002, 'BI', 'PURWAKARTA', '2020-12-01', 'LAKI-LAKI', 'ISLAM', 'KAWIN', 'PNS', 'JL.ABC', 1, 10, 41117, 'MUNJUL JAYA', 'PURWAKARTA', 'PURWAKARTA', 'JAWA BARAT', 1611050478);

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id` int(11) NOT NULL,
  `image_instansi` varchar(350) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `jenis_instansi` varchar(100) NOT NULL,
  `email_instansi` varchar(100) NOT NULL,
  `telephone_instansi` bigint(20) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `image_pimpinan` varchar(350) NOT NULL,
  `nama_pimpinan` varchar(100) NOT NULL,
  `nip_pimpinan` bigint(20) NOT NULL,
  `email_pimpinan` varchar(100) NOT NULL,
  `telephone_pimpinan` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id`, `image_instansi`, `nama_instansi`, `jenis_instansi`, `email_instansi`, `telephone_instansi`, `alamat`, `kode_pos`, `kelurahan`, `kecamatan`, `kabupaten`, `image_pimpinan`, `nama_pimpinan`, `nip_pimpinan`, `email_pimpinan`, `telephone_pimpinan`) VALUES
(1, 'pwk.jpg', 'Munjul Jaya', 'Kelurahan', 'munjuljaya@pwk.com', 123456789014, 'Jl.ABCD', 41117, 'MunjulJaya', 'Purwakarta', 'Purwakarta', 'adminsamplephoto.jpg', 'SUMARNA,SH', 1234567890123456, 'abc@pwk.mjl.com', 123456789012);

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `id` int(11) NOT NULL,
  `no_kk` bigint(16) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` int(5) NOT NULL,
  `no_rw` int(5) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `jumlah_keluarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`id`, `no_kk`, `alamat`, `no_rt`, `no_rw`, `kode_pos`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `jumlah_keluarga`) VALUES
(1, 3211000000000001, 'jl.abc', 1, 10, 41117, 'MUNJUL JAYA', 'PURWAKARTA', 'PURWAKARTA', 'JAWA BARAT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `melahirkan`
--

CREATE TABLE `melahirkan` (
  `id` int(11) NOT NULL,
  `no_melahirkan` int(11) NOT NULL,
  `no_kk` bigint(20) NOT NULL,
  `nama_anak` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tempat_lahir_anak` varchar(100) NOT NULL,
  `tanggal_lahir_anak` date NOT NULL,
  `jenis_kelamin_anak` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` int(5) NOT NULL,
  `no_rw` int(5) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `melahirkan`
--

INSERT INTO `melahirkan` (`id`, `no_melahirkan`, `no_kk`, `nama_anak`, `nama_ayah`, `nama_ibu`, `tempat_lahir_anak`, `tanggal_lahir_anak`, `jenis_kelamin_anak`, `alamat`, `no_rt`, `no_rw`, `kode_pos`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `date_created`) VALUES
(10, 100, 3211000000000001, 'Abcde', 'Abc', 'Cba', 'Purwakarta', '2021-01-01', 'LAKI-LAKI', 'JL.ABC', 1, 10, 41117, 'MUNJUL JAYA', 'PURWAKARTA', 'PURWAKARTA', 'JAWA BARAT', 1611050684);

-- --------------------------------------------------------

--
-- Table structure for table `meninggal`
--

CREATE TABLE `meninggal` (
  `id` int(11) NOT NULL,
  `no_meninggal` int(11) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_kawin` enum('BELUM KAWIN','KAWIN') NOT NULL,
  `status_keluarga` enum('KEPALA KELUARGA','ISTRI','ANAK') NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` int(5) NOT NULL,
  `no_rw` int(5) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meninggal`
--

INSERT INTO `meninggal` (`id`, `no_meninggal`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `status_kawin`, `status_keluarga`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `kode_pos`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `status`, `date_created`) VALUES
(5, 100, 3210000000000001, 'ANDY', 'PURWAKARTA', '2020-12-01', 'LAKI-LAKI', 'ISLAM', 'KAWIN', 'KEPALA KELUARGA', 'WIRASWASTA', 'JL.ABC', 1, 10, 41117, 'MUNJUL JAYA', 'PURWAKARTA', 'PURWAKARTA', 'JAWA BARAT', 1, 1611050316);

--
-- Triggers `meninggal`
--
DELIMITER $$
CREATE TRIGGER `meninggal_penduduk_delete` AFTER DELETE ON `meninggal` FOR EACH ROW UPDATE penduduk set penduduk.status_penduduk_id = penduduk.status_penduduk_id+old.status WHERE penduduk.nik = old.nik
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `meninggal_penduduk_insert` AFTER INSERT ON `meninggal` FOR EACH ROW UPDATE penduduk set penduduk.status_penduduk_id = penduduk.status_penduduk_id-new.status WHERE penduduk.nik = new.nik
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `meninggal_penduduk_update1` AFTER UPDATE ON `meninggal` FOR EACH ROW UPDATE penduduk set penduduk.status_penduduk_id = penduduk.status_penduduk_id-old.status WHERE penduduk.nik = old.nik
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `meninggal_penduduk_update2` BEFORE UPDATE ON `meninggal` FOR EACH ROW UPDATE penduduk set penduduk.status_penduduk_id = penduduk.status_penduduk_id+new.status WHERE penduduk.nik = new.nik
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `no_kk` bigint(16) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `status_keluarga` enum('KEPALA KELUARGA','ISTRI','ANAK') NOT NULL,
  `status_penduduk_id` int(11) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_kawin` enum('BELUM KAWIN','KAWIN') NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `warga_negara` enum('WNI','WNA') NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` int(5) NOT NULL,
  `no_rw` int(5) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `no_kk`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `status_keluarga`, `status_penduduk_id`, `agama`, `status_kawin`, `pekerjaan`, `warga_negara`, `alamat`, `no_rt`, `no_rw`, `kode_pos`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `date_created`) VALUES
(1, 3211000000000001, 3210000000000001, 'Andy', 'Purwakarta', '2020-12-01', 'LAKI-LAKI', 'KEPALA KELUARGA', 0, 'ISLAM', 'KAWIN', 'WIRASWASTA', 'WNI', 'JL.ABC', 1, 10, 41117, 'MUNJUL JAYA', 'PURWAKARTA', 'PURWAKARTA', 'JAWA BARAT', 1608612601),
(2, 3211000000000001, 3210000000000002, 'Bi', 'Purwakarta', '2020-12-01', 'LAKI-LAKI', 'ISTRI', 1, 'ISLAM', 'KAWIN', 'PNS', 'WNI', 'JL.ABC', 1, 10, 41117, 'MUNJUL JAYA', 'PURWAKARTA', 'PURWAKARTA', 'JAWA BARAT', 1608615222);

--
-- Triggers `penduduk`
--
DELIMITER $$
CREATE TRIGGER `penduduk_keluarga_delete` AFTER DELETE ON `penduduk` FOR EACH ROW UPDATE keluarga set keluarga.jumlah_keluarga = keluarga.jumlah_keluarga-old.status_penduduk_id WHERE keluarga.no_kk = old.no_kk
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `penduduk_keluarga_insert` AFTER INSERT ON `penduduk` FOR EACH ROW UPDATE keluarga set keluarga.jumlah_keluarga = keluarga.jumlah_keluarga+new.status_penduduk_id WHERE keluarga.no_kk = new.no_kk
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `penduduk_keluarga_update1` AFTER UPDATE ON `penduduk` FOR EACH ROW UPDATE keluarga set keluarga.jumlah_keluarga = keluarga.jumlah_keluarga-old.status_penduduk_id WHERE keluarga.no_kk = old.no_kk
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `penduduk_keluarga_update2` BEFORE UPDATE ON `penduduk` FOR EACH ROW UPDATE keluarga set keluarga.jumlah_keluarga = keluarga.jumlah_keluarga+new.status_penduduk_id WHERE keluarga.no_kk = new.no_kk
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `rt`
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
-- Dumping data for table `rt`
--

INSERT INTO `rt` (`id`, `nama_rt`, `no_rt`, `jenis_kelamin`, `pendidikan_id`, `no_telephone`, `alamat`, `no_rw_id`) VALUES
(1, 'Agus', 1, 'Laki-laki', 4, 1234567890123, 'Jl.Abc No.1', 1),
(2, 'Bisma', 2, 'Laki-laki', 4, 123456789012, 'Jl.Abc No.2', 1),
(3, 'Cecep', 3, 'Laki-laki', 5, 123456789012, 'Jl.Abc No.3', 2),
(4, 'Dedi', 4, 'Laki-laki', 5, 123456789012, 'Jl.Abc No.4', 2);

-- --------------------------------------------------------

--
-- Table structure for table `rw`
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
-- Dumping data for table `rw`
--

INSERT INTO `rw` (`id`, `nama_rw`, `no_rw`, `jenis_kelamin`, `pendidikan_id`, `no_telephone`, `alamat`) VALUES
(1, 'Andy', 10, 'Laki-laki', 5, 123456789012, 'Jl.Abc No.10'),
(2, 'Bayu', 12, 'Laki-laki', 5, 123456789012, 'Jl.Abc No.12');

-- --------------------------------------------------------

--
-- Table structure for table `spektp`
--

CREATE TABLE `spektp` (
  `id` int(11) NOT NULL,
  `no_spektp` int(11) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_kawin` enum('BELUM KAWIN','KAWIN') NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` int(11) NOT NULL,
  `no_rw` int(11) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spektp`
--

INSERT INTO `spektp` (`id`, `no_spektp`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `status_kawin`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `kode_pos`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `date_created`) VALUES
(1, 100, 3210000000000001, 'ANDY', 'PURWAKARTA', '2020-12-01', 'LAKI-LAKI', 'ISLAM', 'KAWIN', 'WIRASWASTA', 'JL.ABC', 1, 10, 41117, 'MUNJUL JAYA', 'PURWAKARTA', 'PURWAKARTA', 'JAWA BARAT', 1608618148),
(2, 1002, 3210000000000002, 'BI', 'PURWAKARTA', '2020-12-01', 'LAKI-LAKI', 'ISLAM', 'KAWIN', 'PNS', 'JL.ABC', 1, 10, 41117, 'MUNJUL JAYA', 'PURWAKARTA', 'PURWAKARTA', 'JAWA BARAT', 1611049442);

-- --------------------------------------------------------

--
-- Table structure for table `tb_agama`
--

CREATE TABLE `tb_agama` (
  `id` int(11) NOT NULL,
  `agama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_agama`
--

INSERT INTO `tb_agama` (`id`, `agama`) VALUES
(1, 'ISLAM'),
(2, 'KRISTEN'),
(3, 'HINDU'),
(4, 'BUDHA'),
(5, 'KHONG HU CHU'),
(6, 'KEPERCAYAAN SUKU');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kabupaten`
--

CREATE TABLE `tb_kabupaten` (
  `id` int(11) NOT NULL,
  `kabupaten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kabupaten`
--

INSERT INTO `tb_kabupaten` (`id`, `kabupaten`) VALUES
(1, 'PURWAKARTA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id`, `kecamatan`) VALUES
(1, 'PURWAKARTA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelurahan`
--

CREATE TABLE `tb_kelurahan` (
  `id` int(11) NOT NULL,
  `kelurahan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelurahan`
--

INSERT INTO `tb_kelurahan` (`id`, `kelurahan`) VALUES
(1, 'MUNJUL JAYA'),
(4, 'TEGAL MUNJUL');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pekerjaan`
--

CREATE TABLE `tb_pekerjaan` (
  `id` int(11) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pekerjaan`
--

INSERT INTO `tb_pekerjaan` (`id`, `pekerjaan`) VALUES
(1, 'WIRASWASTA'),
(2, 'PNS'),
(3, 'BURUH'),
(4, 'PELAJAR'),
(5, 'TIDAK BEKERJA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendidikan`
--

CREATE TABLE `tb_pendidikan` (
  `id` int(11) NOT NULL,
  `pendidikan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pendidikan`
--

INSERT INTO `tb_pendidikan` (`id`, `pendidikan`) VALUES
(1, 'Belum/Tidak Sekolah'),
(2, 'SD'),
(3, 'SMP'),
(4, 'SMA/SMK'),
(5, 'S1'),
(6, 'S2'),
(7, 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id` int(11) NOT NULL,
  `provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id`, `provinsi`) VALUES
(1, 'JAWA BARAT');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_penduduk`
--

CREATE TABLE `tb_status_penduduk` (
  `id` int(11) NOT NULL,
  `status_penduduk` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_status_penduduk`
--

INSERT INTO `tb_status_penduduk` (`id`, `status_penduduk`) VALUES
(0, 'MENINGGAL'),
(1, 'HIDUP');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
  `motivasi` text NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `background`, `password`, `role_id`, `is_active`, `motivasi`, `date_created`) VALUES
(1, 'Wendi Abdul Rohim', 'admin@sadewa.com', 'contoh.png', 'back.jpg', '$2y$10$1FVoxc84j2YawaIjFp0nMeeld9DoIMuCZhlUp3w6kGQQxATyYHFJu', 1, 1, 'Sukses Berawal Dari Hal Kecil.', 1603603295),
(2, 'Pengguna 1', 'pengguna1@sadewa.com', 'default.jpg', 'back.jpg', '$2y$10$t8fJPqcqbV/sen5RMo6G/OUE3aIPryXgcwAKg6.qu/5LLrP/CSNdC', 45, 1, 'Sukses', 1603614697),
(3, 'Pengguna 2', 'pengguna2@sadewa.com', 'default.jpg', 'back.jpg', '$2y$10$SGjdDKOcHFCnyP7cQX7sCOq1S6FXDzb332GAmX8NIpUS79kw3L12y', 2, 1, 'Sukses', 1603636158),
(4, 'Pengguna 3', 'pengguna3@sadewa.com', 'default.jpg', 'back.jpg', '$2y$10$V4fPk/eJ.HmTleWCAV5mDePJcPFboSeNGJY7SqfnR0.Be4hR2SAUm', 2, 1, 'Sukses', 1603636224),
(10, 'Pengguna 5', 'pengguna5@sadewa.com', 'default.jpg', 'background.jpg', '$2y$10$iMGokczIxk38FUIHzFUPD.vR4oFOmcR5/aJie4VKFenOSaoj62O.K', 2, 1, '', 1608888453),
(11, 'test', 'test@gmail.com', 'default.jpg', 'back.jpg', '$2y$10$S4KoD0uNNolRIsorIUEeKuv/5sEiN3qONv8mWqryh7UEamFfP4PDO', 1, 1, '', 1610400521);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(6, 2, 2),
(7, 2, 3),
(12, 1, 3),
(27, 1, 2),
(29, 1, 15),
(30, 1, 16),
(35, 2, 15),
(36, 2, 16),
(37, 1, 4),
(39, 45, 3),
(40, 45, 17),
(41, 45, 2),
(42, 1, 17);

-- --------------------------------------------------------

--
-- Table structure for table `user_active`
--

CREATE TABLE `user_active` (
  `id` int(11) NOT NULL,
  `active` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_active`
--

INSERT INTO `user_active` (`id`, `active`) VALUES
(0, 'off'),
(1, 'on');

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Info'),
(3, 'User'),
(4, 'Menu'),
(5, 'Penduduk'),
(6, 'Layanan'),
(15, 'Data'),
(16, 'Pelayanan'),
(17, 'Report');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Pegawai'),
(45, 'Kepala Desa');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
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
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'micon fa fa-tachometer', 1),
(2, 1, 'User Level', 'admin/role', 'micon fa fa-shield', 1),
(3, 1, 'Daftar User', 'admin/daftar_user', 'micon fa fa-address-book', 0),
(4, 2, 'Instansi', 'info', 'micon fa fa-id-badge', 1),
(5, 2, 'Struktur', 'info/struktur', 'micon fa fa-sitemap', 1),
(6, 2, 'RT/RW', 'info/rtrw', 'micon fa fa-users', 1),
(7, 3, 'Profile', 'user', 'micon  fa fa-user-o', 1),
(8, 4, 'Judul Menu', 'menu', 'micon fa fa-tasks', 1),
(9, 4, 'Judul SubMenu', 'menu/submenu', 'micon fa fa-list-alt', 1),
(10, 5, 'Daftar PerKK', 'penduduk', 'micon fa fa-address-card', 0),
(11, 5, 'Daftar PerKTP', 'penduduk/ktp', 'micon fa fa-vcard-o', 0),
(12, 6, 'SP E-KTP', 'layanan', 'micon fa fa-envelope', 0),
(13, 6, 'Surat Domisili', 'layanan/domisili', 'micon fa fa-envelope', 0),
(14, 1, 'User Active', 'admin/useractive', 'micon dw dw dw-user-13', 1),
(17, 3, 'Pengguna', 'user/pengguna', 'micon dw dw-group', 1),
(18, 6, 'Surat Kelahiran', 'layanan/kelahiran', 'micon fa fa-envelope', 0),
(19, 6, 'Surat Kematian', 'layanan/kematian', 'micon fa fa-envelope', 0),
(20, 15, 'Keluarga', 'data', 'micon fa fa-address-card', 1),
(21, 15, 'Penduduk', 'data/penduduk', 'micon fa fa-vcard-o', 1),
(22, 16, 'SP EKTP', 'pelayanan', 'micon fa fa-envelope', 1),
(23, 16, 'Surat Domisili', 'pelayanan/domisili', 'micon fa fa-envelope', 1),
(24, 16, 'SK Melahirkan', 'pelayanan/melahirkan', 'micon fa fa-envelope', 1),
(25, 16, 'SK Meninggal', 'pelayanan/meninggal', 'micon fa fa-envelope', 1),
(26, 17, 'Laporan', 'report', 'micon fa fa-file-archive-o', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_perektp`
--
ALTER TABLE `data_perektp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_perkk`
--
ALTER TABLE `data_perkk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domisili`
--
ALTER TABLE `domisili`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `melahirkan`
--
ALTER TABLE `melahirkan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meninggal`
--
ALTER TABLE `meninggal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rt`
--
ALTER TABLE `rt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rw`
--
ALTER TABLE `rw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spektp`
--
ALTER TABLE `spektp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_agama`
--
ALTER TABLE `tb_agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kelurahan`
--
ALTER TABLE `tb_kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_status_penduduk`
--
ALTER TABLE `tb_status_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_active`
--
ALTER TABLE `user_active`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_perektp`
--
ALTER TABLE `data_perektp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_perkk`
--
ALTER TABLE `data_perkk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `domisili`
--
ALTER TABLE `domisili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `melahirkan`
--
ALTER TABLE `melahirkan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `meninggal`
--
ALTER TABLE `meninggal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rt`
--
ALTER TABLE `rt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rw`
--
ALTER TABLE `rw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `spektp`
--
ALTER TABLE `spektp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_agama`
--
ALTER TABLE `tb_agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kelurahan`
--
ALTER TABLE `tb_kelurahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_status_penduduk`
--
ALTER TABLE `tb_status_penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user_active`
--
ALTER TABLE `user_active`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
