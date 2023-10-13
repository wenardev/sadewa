-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Agu 2022 pada 10.27
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
-- Struktur dari tabel `data_perektp`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_perkk`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `domisili`
--

CREATE TABLE `domisili` (
  `id` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `kode_surat` varchar(100) NOT NULL,
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
  `nama_surat` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `instansi`
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
-- Dumping data untuk tabel `instansi`
--

INSERT INTO `instansi` (`id`, `image_instansi`, `nama_instansi`, `jenis_instansi`, `email_instansi`, `telephone_instansi`, `alamat`, `kode_pos`, `kelurahan`, `kecamatan`, `kabupaten`, `image_pimpinan`, `nama_pimpinan`, `nip_pimpinan`, `email_pimpinan`, `telephone_pimpinan`) VALUES
(1, 'halmaherautara.png', 'Popilo', 'Desa/Kelurahan', '', 0, 'Desa Popilo', 97767, 'Popilo', 'Tobelo Utara', 'Halmahera Utara', 'adminsamplephoto.jpg', 'Tabris Djalal', 0, '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluarga`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `melahirkan`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `meninggal`
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
-- Trigger `meninggal`
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
-- Struktur dari tabel `pemohon`
--

CREATE TABLE `pemohon` (
  `id` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `kode_surat` varchar(100) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `calon` varchar(100) NOT NULL,
  `binbinti` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `warga_negara` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `tempat_lahir_ayah` varchar(100) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `agama_ayah` varchar(100) NOT NULL,
  `warga_negara_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tempat_lahir_ibu` varchar(100) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `agama_ibu` varchar(100) NOT NULL,
  `warga_negara_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `nama_pasangan` varchar(100) NOT NULL,
  `tempat_lahir_pasangan` varchar(100) NOT NULL,
  `tanggal_lahir_pasangan` date NOT NULL,
  `calon_pasangan` varchar(100) NOT NULL,
  `agama_pasangan` varchar(100) NOT NULL,
  `warga_negara_pasangan` varchar(100) NOT NULL,
  `pekerjaan_pasangan` varchar(100) NOT NULL,
  `alamat_pasangan` varchar(100) NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemohon_ndua`
--

CREATE TABLE `pemohon_ndua` (
  `id` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `kode_surat` varchar(100) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `calon` varchar(100) NOT NULL,
  `binbinti` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `warga_negara` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `tempat_lahir_ayah` varchar(100) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `agama_ayah` varchar(100) NOT NULL,
  `warga_negara_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tempat_lahir_ibu` varchar(100) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `agama_ibu` varchar(100) NOT NULL,
  `warga_negara_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `nama_pasangan` varchar(100) NOT NULL,
  `tempat_lahir_pasangan` varchar(100) NOT NULL,
  `tanggal_lahir_pasangan` date NOT NULL,
  `calon_pasangan` varchar(100) NOT NULL,
  `agama_pasangan` varchar(100) NOT NULL,
  `warga_negara_pasangan` varchar(100) NOT NULL,
  `pekerjaan_pasangan` varchar(100) NOT NULL,
  `alamat_pasangan` varchar(100) NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemohon_nempat`
--

CREATE TABLE `pemohon_nempat` (
  `id` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `kode_surat` varchar(100) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `calon` varchar(100) NOT NULL,
  `binbinti` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `warga_negara` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `tempat_lahir_ayah` varchar(100) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `agama_ayah` varchar(100) NOT NULL,
  `warga_negara_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tempat_lahir_ibu` varchar(100) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `agama_ibu` varchar(100) NOT NULL,
  `warga_negara_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `nama_pasangan` varchar(100) NOT NULL,
  `tempat_lahir_pasangan` varchar(100) NOT NULL,
  `tanggal_lahir_pasangan` date NOT NULL,
  `calon_pasangan` varchar(100) NOT NULL,
  `agama_pasangan` varchar(100) NOT NULL,
  `warga_negara_pasangan` varchar(100) NOT NULL,
  `pekerjaan_pasangan` varchar(100) NOT NULL,
  `alamat_pasangan` varchar(100) NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemohon_nlima`
--

CREATE TABLE `pemohon_nlima` (
  `id` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `kode_surat` varchar(100) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `calon` varchar(100) NOT NULL,
  `binbinti` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `warga_negara` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `tempat_lahir_ayah` varchar(100) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `agama_ayah` varchar(100) NOT NULL,
  `warga_negara_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tempat_lahir_ibu` varchar(100) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `agama_ibu` varchar(100) NOT NULL,
  `warga_negara_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `nama_pasangan` varchar(100) NOT NULL,
  `tempat_lahir_pasangan` varchar(100) NOT NULL,
  `tanggal_lahir_pasangan` date NOT NULL,
  `calon_pasangan` varchar(100) NOT NULL,
  `agama_pasangan` varchar(100) NOT NULL,
  `warga_negara_pasangan` varchar(100) NOT NULL,
  `pekerjaan_pasangan` varchar(100) NOT NULL,
  `alamat_pasangan` varchar(100) NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemohon_nsatu`
--

CREATE TABLE `pemohon_nsatu` (
  `id` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `kode_surat` varchar(100) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `calon` varchar(100) NOT NULL,
  `binbinti` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `warga_negara` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `tempat_lahir_ayah` varchar(100) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `agama_ayah` varchar(100) NOT NULL,
  `warga_negara_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tempat_lahir_ibu` varchar(100) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `agama_ibu` varchar(100) NOT NULL,
  `warga_negara_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `nama_pasangan` varchar(100) NOT NULL,
  `tempat_lahir_pasangan` varchar(100) NOT NULL,
  `tanggal_lahir_pasangan` date NOT NULL,
  `calon_pasangan` varchar(100) NOT NULL,
  `agama_pasangan` varchar(100) NOT NULL,
  `warga_negara_pasangan` varchar(100) NOT NULL,
  `pekerjaan_pasangan` varchar(100) NOT NULL,
  `alamat_pasangan` varchar(100) NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemohon_ntiga`
--

CREATE TABLE `pemohon_ntiga` (
  `id` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `kode_surat` varchar(100) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `calon` varchar(100) NOT NULL,
  `binbinti` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `warga_negara` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `tempat_lahir_ayah` varchar(100) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `agama_ayah` varchar(100) NOT NULL,
  `warga_negara_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tempat_lahir_ibu` varchar(100) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `agama_ibu` varchar(100) NOT NULL,
  `warga_negara_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `nama_pasangan` varchar(100) NOT NULL,
  `tempat_lahir_pasangan` varchar(100) NOT NULL,
  `tanggal_lahir_pasangan` date NOT NULL,
  `calon_pasangan` varchar(100) NOT NULL,
  `agama_pasangan` varchar(100) NOT NULL,
  `warga_negara_pasangan` varchar(100) NOT NULL,
  `pekerjaan_pasangan` varchar(100) NOT NULL,
  `alamat_pasangan` varchar(100) NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `no_kk` bigint(16) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki - laki','Perempuan') NOT NULL,
  `status_penduduk_id` int(11) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `status_kawin` enum('Belum Menikah','Menikah','Duda','Janda') NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `warga_negara` enum('WNI','WNA') NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` int(5) NOT NULL,
  `no_rw` int(5) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `penduduk`
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
-- Struktur dari tabel `rt`
--

CREATE TABLE `rt` (
  `id` int(11) NOT NULL,
  `nama_rt` varchar(100) NOT NULL,
  `no_rt` varchar(3) NOT NULL,
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
(1, '-', '001', 'Laki-laki', 5, 1234567890123, '-', 1),
(2, '-', '002', 'Laki-laki', 5, 123456789012, '-', 1),
(3, '-', '003', 'Laki-laki', 1, 123456789012, '-', 2),
(4, '-', '004', 'Laki-laki', 1, 123456789012, '-', 2),
(5, '-', '005', 'Laki-laki', 1, 123456789012, '-', 3),
(6, '-', '006', 'Laki-laki', 1, 123456789012, '-', 3),
(7, '-', '007', 'Laki-laki', 1, 123456789012, '-', 4),
(8, '-', '008', 'Laki-laki', 1, 123456789012, '-', 4),
(9, '-', '009', 'Laki-laki', 1, 123456789012, '-', 5),
(10, '-', '010', 'Laki-laki', 1, 123456789012, '-', 5),
(11, '-', '011', 'Laki-laki', 1, 123456789012, '-', 6),
(12, '-', '012', 'Laki-laki', 1, 123456789012, '-', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rw`
--

CREATE TABLE `rw` (
  `id` int(11) NOT NULL,
  `nama_rw` varchar(100) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `pendidikan_id` int(11) NOT NULL,
  `no_telephone` bigint(11) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rw`
--

INSERT INTO `rw` (`id`, `nama_rw`, `no_rw`, `jenis_kelamin`, `pendidikan_id`, `no_telephone`, `alamat`) VALUES
(1, '-', '001', 'Laki-laki', 1, 123456789012, '-'),
(2, '-', '002', 'Laki-laki', 1, 123456789012, '-'),
(3, '-', '003', 'Laki-laki', 1, 123456789012, '-'),
(4, '-', '004', 'Laki-laki', 1, 123456789012, '-'),
(5, '-', '005', 'Laki-laki', 1, 123456789012, '-'),
(6, '-', '006', 'Laki-laki', 1, 123456789012, '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skpd_tb_alasan_pindah`
--

CREATE TABLE `skpd_tb_alasan_pindah` (
  `id` int(11) NOT NULL,
  `alasan_pindah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skpd_tb_alasan_pindah`
--

INSERT INTO `skpd_tb_alasan_pindah` (`id`, `alasan_pindah`) VALUES
(1, 'Pekerjaan'),
(2, 'Pendidikan'),
(3, 'Keamanan'),
(4, 'Kesehatan'),
(5, 'Perumahan'),
(6, 'Keluarga'),
(7, 'Lainnya (Sebutkan)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skpd_tb_jenis_kepindahan`
--

CREATE TABLE `skpd_tb_jenis_kepindahan` (
  `id` int(11) NOT NULL,
  `jenis_kepindahan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skpd_tb_jenis_kepindahan`
--

INSERT INTO `skpd_tb_jenis_kepindahan` (`id`, `jenis_kepindahan`) VALUES
(1, 'Kep. Keluarga'),
(2, 'Kep. Keluarga dan Seluruh Anggota Keluarga'),
(3, 'Kep. Keluarga dan Sbg. Anggota Keluarga'),
(4, 'Anggota Keluarga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skpd_tb_klasifikasi_pindah`
--

CREATE TABLE `skpd_tb_klasifikasi_pindah` (
  `id` int(11) NOT NULL,
  `klasifikasi_pindah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skpd_tb_klasifikasi_pindah`
--

INSERT INTO `skpd_tb_klasifikasi_pindah` (`id`, `klasifikasi_pindah`) VALUES
(1, 'Dalam Satu Desa/Kelurahan'),
(2, 'Antar Desa/Kelurahan'),
(3, 'Antar Kecamatan'),
(4, 'Antar Kab/Kota'),
(5, 'Antar Provinsi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skpd_tb_status_pindah`
--

CREATE TABLE `skpd_tb_status_pindah` (
  `id` int(11) NOT NULL,
  `status_pindah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skpd_tb_status_pindah`
--

INSERT INTO `skpd_tb_status_pindah` (`id`, `status_pindah`) VALUES
(1, 'Numpang KK'),
(2, 'Membuat KK Baru'),
(3, 'Nama Kep. Keluarga dan Nomor KK Tetap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skpd_tb_status_tidak_pindah`
--

CREATE TABLE `skpd_tb_status_tidak_pindah` (
  `id` int(11) NOT NULL,
  `status_tidak_pindah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skpd_tb_status_tidak_pindah`
--

INSERT INTO `skpd_tb_status_tidak_pindah` (`id`, `status_tidak_pindah`) VALUES
(1, 'Numpang KK'),
(2, 'Membuat KK Baru'),
(3, 'Tidak Ada Angg. Keluarga Yang Ditinggal'),
(4, 'Nomor KK Tetap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_belum_menikah`
--

CREATE TABLE `sk_belum_menikah` (
  `id` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `kode_surat` varchar(100) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `warga_negara` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_izin_orang_tua`
--

CREATE TABLE `sk_izin_orang_tua` (
  `id` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `kode_surat` varchar(100) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `warga_negara` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `tempat_lahir_ayah` varchar(100) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tempat_lahir_ibu` varchar(100) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_kelahiran`
--

CREATE TABLE `sk_kelahiran` (
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
  `warga_negara` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tempat_lahir_ibu` varchar(100) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `agama_ibu` varchar(100) NOT NULL,
  `pendidikan_terakhir_ibu` varchar(100) NOT NULL,
  `warga_negara_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `nama_anak` varchar(100) NOT NULL,
  `jenis_kelamin_anak` varchar(100) NOT NULL,
  `tanggal_lahir_anak` date NOT NULL,
  `jam` time NOT NULL,
  `tempat_lahir_anak` varchar(100) NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_kematian`
--

CREATE TABLE `sk_kematian` (
  `id` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `kode_surat` varchar(100) NOT NULL,
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
  `tanggal_kematian` varchar(100) NOT NULL,
  `jam` time NOT NULL,
  `tempat_kematian` varchar(100) NOT NULL,
  `penyebab_kematian` varchar(100) NOT NULL,
  `pelapor` varchar(100) NOT NULL,
  `hubungan` varchar(100) NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_ndua`
--

CREATE TABLE `sk_ndua` (
  `id` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `kode_surat` varchar(100) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `calon` varchar(100) NOT NULL,
  `binbinti` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `warga_negara` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `tempat_lahir_ayah` varchar(100) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `agama_ayah` varchar(100) NOT NULL,
  `warga_negara_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tempat_lahir_ibu` varchar(100) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `agama_ibu` varchar(100) NOT NULL,
  `warga_negara_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `nama_pasangan` varchar(100) NOT NULL,
  `tempat_lahir_pasangan` varchar(100) NOT NULL,
  `tanggal_lahir_pasangan` date NOT NULL,
  `calon_pasangan` varchar(100) NOT NULL,
  `agama_pasangan` varchar(100) NOT NULL,
  `warga_negara_pasangan` varchar(100) NOT NULL,
  `pekerjaan_pasangan` varchar(100) NOT NULL,
  `alamat_pasangan` varchar(100) NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_nempat`
--

CREATE TABLE `sk_nempat` (
  `id` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `kode_surat` varchar(100) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `calon` varchar(100) NOT NULL,
  `binbinti` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `warga_negara` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `tempat_lahir_ayah` varchar(100) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `agama_ayah` varchar(100) NOT NULL,
  `warga_negara_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tempat_lahir_ibu` varchar(100) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `agama_ibu` varchar(100) NOT NULL,
  `warga_negara_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `nama_pasangan` varchar(100) NOT NULL,
  `tempat_lahir_pasangan` varchar(100) NOT NULL,
  `tanggal_lahir_pasangan` date NOT NULL,
  `calon_pasangan` varchar(100) NOT NULL,
  `agama_pasangan` varchar(100) NOT NULL,
  `warga_negara_pasangan` varchar(100) NOT NULL,
  `pekerjaan_pasangan` varchar(100) NOT NULL,
  `alamat_pasangan` varchar(100) NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_nlima`
--

CREATE TABLE `sk_nlima` (
  `id` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `kode_surat` varchar(100) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `calon` varchar(100) NOT NULL,
  `binbinti` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `warga_negara` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `tempat_lahir_ayah` varchar(100) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `agama_ayah` varchar(100) NOT NULL,
  `warga_negara_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tempat_lahir_ibu` varchar(100) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `agama_ibu` varchar(100) NOT NULL,
  `warga_negara_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `nama_pasangan` varchar(100) NOT NULL,
  `tempat_lahir_pasangan` varchar(100) NOT NULL,
  `tanggal_lahir_pasangan` date NOT NULL,
  `calon_pasangan` varchar(100) NOT NULL,
  `agama_pasangan` varchar(100) NOT NULL,
  `warga_negara_pasangan` varchar(100) NOT NULL,
  `pekerjaan_pasangan` varchar(100) NOT NULL,
  `alamat_pasangan` varchar(100) NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_nsatu`
--

CREATE TABLE `sk_nsatu` (
  `id` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `kode_surat` varchar(100) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `calon` varchar(100) NOT NULL,
  `binbinti` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `warga_negara` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `tempat_lahir_ayah` varchar(100) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `agama_ayah` varchar(100) NOT NULL,
  `warga_negara_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tempat_lahir_ibu` varchar(100) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `agama_ibu` varchar(100) NOT NULL,
  `warga_negara_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `nama_pasangan` varchar(100) NOT NULL,
  `tempat_lahir_pasangan` varchar(100) NOT NULL,
  `tanggal_lahir_pasangan` date NOT NULL,
  `calon_pasangan` varchar(100) NOT NULL,
  `agama_pasangan` varchar(100) NOT NULL,
  `warga_negara_pasangan` varchar(100) NOT NULL,
  `pekerjaan_pasangan` varchar(100) NOT NULL,
  `alamat_pasangan` varchar(100) NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_ntiga`
--

CREATE TABLE `sk_ntiga` (
  `id` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `kode_surat` varchar(100) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `calon` varchar(100) NOT NULL,
  `binbinti` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `warga_negara` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `tempat_lahir_ayah` varchar(100) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `agama_ayah` varchar(100) NOT NULL,
  `warga_negara_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tempat_lahir_ibu` varchar(100) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `agama_ibu` varchar(100) NOT NULL,
  `warga_negara_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `nama_pasangan` varchar(100) NOT NULL,
  `tempat_lahir_pasangan` varchar(100) NOT NULL,
  `tanggal_lahir_pasangan` date NOT NULL,
  `calon_pasangan` varchar(100) NOT NULL,
  `agama_pasangan` varchar(100) NOT NULL,
  `warga_negara_pasangan` varchar(100) NOT NULL,
  `pekerjaan_pasangan` varchar(100) NOT NULL,
  `alamat_pasangan` varchar(100) NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_sudah_menikah`
--

CREATE TABLE `sk_sudah_menikah` (
  `id` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `kode_surat` varchar(100) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `warga_negara` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `nama_pasangan` varchar(100) NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_tidak_mampu`
--

CREATE TABLE `sk_tidak_mampu` (
  `id` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `kode_surat` varchar(100) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `warga_negara` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_usaha`
--

CREATE TABLE `sk_usaha` (
  `id` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `kode_surat` varchar(100) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `warga_negara` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `bidang_usaha` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `status_perusahaan` varchar(100) NOT NULL,
  `golongan_usaha` varchar(100) NOT NULL,
  `nama_surat` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `spektp`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_agama`
--

CREATE TABLE `tb_agama` (
  `id` int(11) NOT NULL,
  `agama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_agama`
--

INSERT INTO `tb_agama` (`id`, `agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Hindu'),
(4, 'Budha'),
(5, 'Khong Hu Chu'),
(6, 'Kepercayaan Suku');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_kelamin`
--

CREATE TABLE `tb_jenis_kelamin` (
  `id` int(11) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jenis_kelamin`
--

INSERT INTO `tb_jenis_kelamin` (`id`, `jenis_kelamin`) VALUES
(1, 'Laki -laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kabupaten`
--

CREATE TABLE `tb_kabupaten` (
  `id` int(11) NOT NULL,
  `kabupaten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kabupaten`
--

INSERT INTO `tb_kabupaten` (`id`, `kabupaten`) VALUES
(1, 'Halmahera Utara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id`, `kecamatan`) VALUES
(1, 'Tobelo Utara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelurahan`
--

CREATE TABLE `tb_kelurahan` (
  `id` int(11) NOT NULL,
  `kelurahan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kelurahan`
--

INSERT INTO `tb_kelurahan` (`id`, `kelurahan`) VALUES
(1, 'Popilo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pekerjaan`
--

CREATE TABLE `tb_pekerjaan` (
  `id` int(11) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pekerjaan`
--

INSERT INTO `tb_pekerjaan` (`id`, `pekerjaan`) VALUES
(1, 'Wiraswasta'),
(2, 'PNS'),
(3, 'Buruh'),
(4, 'Pelajar/Mahasiswa'),
(5, 'Pegawai Swasta'),
(6, 'Tidak Bekerja'),
(7, 'Lainnya');

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
(1, 'Belum/Tidak Sekolah'),
(2, 'SD'),
(3, 'SMP'),
(4, 'SMA/SMK'),
(5, 'Strata 1'),
(6, 'Strata 2'),
(7, 'Strata 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id` int(11) NOT NULL,
  `provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id`, `provinsi`) VALUES
(1, 'Maluku Utara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_status_penduduk`
--

CREATE TABLE `tb_status_penduduk` (
  `id` int(11) NOT NULL,
  `status_penduduk` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_status_penduduk`
--

INSERT INTO `tb_status_penduduk` (`id`, `status_penduduk`) VALUES
(0, 'MENINGGAL'),
(1, 'HIDUP');

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
(12, 1, 3),
(27, 1, 2),
(29, 1, 15),
(30, 1, 16),
(35, 2, 15),
(36, 2, 16),
(39, 45, 3),
(40, 45, 17),
(41, 45, 2),
(42, 1, 17),
(43, 2, 17),
(46, 3, 17),
(47, 1, 4),
(49, 1, 19),
(50, 3, 2);

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
(5, 'Penduduk'),
(6, 'Layanan'),
(16, 'Pelayanan'),
(17, 'Report'),
(18, 'Data');

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
(3, 'Pimpinan');

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
-- Indexes for table `pemohon`
--
ALTER TABLE `pemohon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemohon_ndua`
--
ALTER TABLE `pemohon_ndua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemohon_nempat`
--
ALTER TABLE `pemohon_nempat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemohon_nlima`
--
ALTER TABLE `pemohon_nlima`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemohon_nsatu`
--
ALTER TABLE `pemohon_nsatu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemohon_ntiga`
--
ALTER TABLE `pemohon_ntiga`
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
-- Indexes for table `skpd_tb_alasan_pindah`
--
ALTER TABLE `skpd_tb_alasan_pindah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skpd_tb_jenis_kepindahan`
--
ALTER TABLE `skpd_tb_jenis_kepindahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skpd_tb_klasifikasi_pindah`
--
ALTER TABLE `skpd_tb_klasifikasi_pindah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skpd_tb_status_pindah`
--
ALTER TABLE `skpd_tb_status_pindah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skpd_tb_status_tidak_pindah`
--
ALTER TABLE `skpd_tb_status_tidak_pindah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk_belum_menikah`
--
ALTER TABLE `sk_belum_menikah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk_izin_orang_tua`
--
ALTER TABLE `sk_izin_orang_tua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk_kelahiran`
--
ALTER TABLE `sk_kelahiran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk_kematian`
--
ALTER TABLE `sk_kematian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk_ndua`
--
ALTER TABLE `sk_ndua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk_nempat`
--
ALTER TABLE `sk_nempat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk_nlima`
--
ALTER TABLE `sk_nlima`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk_nsatu`
--
ALTER TABLE `sk_nsatu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk_ntiga`
--
ALTER TABLE `sk_ntiga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk_pindah`
--
ALTER TABLE `sk_pindah`
  ADD PRIMARY KEY (`id`,`no_surat`);

--
-- Indexes for table `sk_pindah_datang`
--
ALTER TABLE `sk_pindah_datang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk_sudah_menikah`
--
ALTER TABLE `sk_sudah_menikah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk_tidak_mampu`
--
ALTER TABLE `sk_tidak_mampu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk_usaha`
--
ALTER TABLE `sk_usaha`
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
-- Indexes for table `tb_jenis_kelamin`
--
ALTER TABLE `tb_jenis_kelamin`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_perkk`
--
ALTER TABLE `data_perkk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `domisili`
--
ALTER TABLE `domisili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `melahirkan`
--
ALTER TABLE `melahirkan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `meninggal`
--
ALTER TABLE `meninggal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemohon`
--
ALTER TABLE `pemohon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemohon_ndua`
--
ALTER TABLE `pemohon_ndua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemohon_nempat`
--
ALTER TABLE `pemohon_nempat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemohon_nlima`
--
ALTER TABLE `pemohon_nlima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemohon_nsatu`
--
ALTER TABLE `pemohon_nsatu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemohon_ntiga`
--
ALTER TABLE `pemohon_ntiga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rt`
--
ALTER TABLE `rt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `rw`
--
ALTER TABLE `rw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `skpd_tb_alasan_pindah`
--
ALTER TABLE `skpd_tb_alasan_pindah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `skpd_tb_jenis_kepindahan`
--
ALTER TABLE `skpd_tb_jenis_kepindahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `skpd_tb_klasifikasi_pindah`
--
ALTER TABLE `skpd_tb_klasifikasi_pindah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `skpd_tb_status_pindah`
--
ALTER TABLE `skpd_tb_status_pindah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `skpd_tb_status_tidak_pindah`
--
ALTER TABLE `skpd_tb_status_tidak_pindah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sk_belum_menikah`
--
ALTER TABLE `sk_belum_menikah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sk_izin_orang_tua`
--
ALTER TABLE `sk_izin_orang_tua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sk_kelahiran`
--
ALTER TABLE `sk_kelahiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sk_kematian`
--
ALTER TABLE `sk_kematian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sk_ndua`
--
ALTER TABLE `sk_ndua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sk_nempat`
--
ALTER TABLE `sk_nempat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sk_nlima`
--
ALTER TABLE `sk_nlima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sk_nsatu`
--
ALTER TABLE `sk_nsatu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sk_ntiga`
--
ALTER TABLE `sk_ntiga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sk_pindah`
--
ALTER TABLE `sk_pindah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sk_pindah_datang`
--
ALTER TABLE `sk_pindah_datang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sk_sudah_menikah`
--
ALTER TABLE `sk_sudah_menikah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sk_tidak_mampu`
--
ALTER TABLE `sk_tidak_mampu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sk_usaha`
--
ALTER TABLE `sk_usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `spektp`
--
ALTER TABLE `spektp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_agama`
--
ALTER TABLE `tb_agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_jenis_kelamin`
--
ALTER TABLE `tb_jenis_kelamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_kelurahan`
--
ALTER TABLE `tb_kelurahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `user_active`
--
ALTER TABLE `user_active`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
