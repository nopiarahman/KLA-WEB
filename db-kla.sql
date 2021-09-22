-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 04:10 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-kla`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penduduks`
--

CREATE TABLE `penduduks` (
  `id` int(11) NOT NULL,
  `rw` int(3) NOT NULL,
  `rt` int(3) NOT NULL,
  `dusun` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kode_keluarga` varchar(50) NOT NULL,
  `nm_kpl_keluarga` varchar(50) NOT NULL,
  `no_urut_keluarga` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nm_anggota_keluarga` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `hubungan` varchar(20) NOT NULL,
  `tpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `usia` int(3) NOT NULL,
  `status` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `goldarah` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `etnis_suku` varchar(20) DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduks`
--

INSERT INTO `penduduks` (`id`, `rw`, `rt`, `dusun`, `alamat`, `kode_keluarga`, `nm_kpl_keluarga`, `no_urut_keluarga`, `nik`, `nm_anggota_keluarga`, `jenis_kelamin`, `hubungan`, `tpt_lahir`, `tgl_lahir`, `usia`, `status`, `agama`, `goldarah`, `kewarganegaraan`, `etnis_suku`, `pendidikan`, `pekerjaan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505062704850001', 'ANUGRAH', 1, '_150506270485001', 'ANUGRAH', 'LAKI-LAKI', 'Kepala Keluarga', 'JAMBI', '27/04/1985', 36, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', '', '', 'Karyawan Perusahaan Swasta', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505062704850001', 'ANUGRAH', 2, '_1505065707860004', 'SUSILAWATI', 'PEREMPUAN', 'Istri', 'JAMBI', '17/05/1985', 36, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Tamat SLTA/sederajat', 'Ibu Rumah Tangga', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505063103790002', 'HAJUAR', 1, '_1505063103790002', 'HAJUAR', 'LAKI-LAKI', 'Kepala Keluarga', 'LONGKAT', '31/03/1979', 42, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Melayu', 'Tamat SLTA/sederajat', 'Wiraswasta', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505063103790002', 'HAJUAR', 2, '_1505066707870005', 'WITRIANI', 'PEREMPUAN', 'Istri', 'JAMBI', '27/07/1987', 34, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Tamat SLTP/sederajat', 'Ibu Rumah Tangga', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505063103790002', 'HAJUAR', 3, '_1505052403110001', 'M. KHADAFI', 'LAKI-LAKI', 'Anak Kandung', 'KASANG LOPAK ALAI', '24/03/2011', 10, 'Belum Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Melayu', 'Belum masuk TK/Kelompok Bermain', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505061905700001', 'MAYURIZAL', 2, '_1505066909700002', 'YULIANI', 'PEREMPUAN', 'Istri', 'JAMBI', '26/09/1970', 51, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', '', 'Tamat SLTA/sederajat', 'Ibu Rumah Tangga', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505061905700001', 'MAYURIZAL', 3, '_15050919010100003', 'EBIT MAYU', 'LAKI-LAKI', 'Anak Kandung', 'JAMBI', '19/01/2001', 20, 'Belum Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', '', 'Sedang SLTP/Sederajat', 'Pelajar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505061905700001', 'MAYURIZAL', 4, '_1505061110090003', 'MUSYAFFA AFIF', 'LAKI-LAKI', 'Anak Kandung', 'JAMBI', '11/10/2009', 12, 'Belum Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', '', 'Belum masuk TK/Kelompok Bermain', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_150606060580001', 'MULYONO', 1, '_150606060580001', 'MULYONO', 'LAKI-LAKI', 'Kepala Keluarga', 'BLORO', '05/03/1958', 63, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Tamat SD/sederajat', 'Petani', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_150606060580001', 'MULYONO', 2, '_1505066503590002', 'SUKIYEM', 'PEREMPUAN', 'Istri', 'BLORO', '25/03/1958', 63, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Tamat SD/sederajat', 'Petani', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_150606060580001', 'MULYONO', 3, '_1505060903860002', 'KUSMINAR', 'LAKI-LAKI', 'Anak Kandung', 'BLORO', '09/03/1986', 35, 'Belum Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Tamat SLTP/sederajat', 'Pegawai Negeri Sipil', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_150606060580001', 'MULYONO', 4, '_1505065206980002', 'VINA NUR ANGGRAINI', 'PEREMPUAN', 'Anak Kandung', 'BLORO', '12/08/1998', 23, 'Belum Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Sedang SLTA/sederajat', 'Pelajar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505060507780007', 'PARJIMIN', 1, '_1505060507780007', 'PARJIMIN', 'LAKI-LAKI', 'Kepala Keluarga', 'KASANG LOPAK ALAI', '05/07/1978', 43, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Tamat SLTA/sederajat', 'Petani', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505060507780007', 'PARJIMIN', 2, '_1505065012810002', 'PONIAH', 'PEREMPUAN', 'Istri', 'KASANG LOPAK ALAI', '22/12/1981', 39, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Tamat SD/sederajat', 'Petani', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505060507780007', 'PARJIMIN', 3, '_1505066911020002', 'KHAIRIMA RAHMA ALIYANTI', 'PEREMPUAN', 'Anak Kandung', 'KASANG LOPAK ALAI', '25/11/2002', 18, 'Belum Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Sedang SLTP/Sederajat', 'Pelajar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505060507780007', 'PARJIMIN', 4, '_1505061612090001', 'ARU ERLANGGA', 'LAKI-LAKI', 'Anak Kandung', 'KASANG LOPAK ALAI', '16/12/2008', 12, 'Belum Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Belum masuk TK/Kelompok Bermain', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505060603730004', 'PURYONO', 1, '_1505060603730004', 'PURYONO', 'LAKI-LAKI', 'Kepala Keluarga', 'KEBUMEN', '06/03/1973', 48, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Sedang SLTP/Sederajat', 'Wiraswasta', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505060603730004', 'PURYONO', 2, '_15050667067030002', 'ATIAH', 'PEREMPUAN', 'Istri', 'KEBUMEN', '27/06/1973', 48, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Sedang SLTP/Sederajat', 'Ibu Rumah Tangga', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505060603730004', 'PURYONO', 3, '_15050646111950005', 'NOVI WULANDARI', 'PEREMPUAN', 'Anak Kandung', 'JAMBI', '06/11/1995', 26, 'Belum Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505060603730004', 'PURYONO', 4, '_1505064611950004', 'NOVI WULANSARI', 'PEREMPUAN', 'Anak Kandung', 'JAMBI', '06/11/1995', 26, 'Belum Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Tamat SLTA/sederajat', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_150506060800007', 'RAHMAT EFENDI', 1, '_150506060800007', 'RAHMAT EFENDI', 'LAKI-LAKI', 'Kepala Keluarga', 'JAMBI', '08/06/1980', 41, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', '', 'Tidak tamat SD/sederajat', 'Buruh Harian Lepas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_150506060800007', 'RAHMAT EFENDI', 2, '_15050660370002', 'MAIASARA', 'PEREMPUAN', 'Istri', 'JAMBI', '12/03/1977', 44, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505061507540040', 'RATINO', 1, '_1505061507540040', 'RATINO', 'LAKI-LAKI', 'Kepala Keluarga', 'KEBUMEN', '10/09/1954', 67, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Tamat SD/sederajat', 'Wiraswasta', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505061507540040', 'RATINO', 2, '_1505064612540002', 'SARMINI', 'PEREMPUAN', 'Istri', 'KEBUMEN', '15/10/1954', 67, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Tamat SD/sederajat', 'Ibu Rumah Tangga', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505063006810004', 'SUPARNO', 1, '_150506300810004', 'SUPARNO', 'LAKI-LAKI', 'Kepala Keluarga', 'JAMBI', '30/06/1981', 40, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Tamat SD/sederajat', 'Buruh Harian Lepas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1117070804720003', 'SUPRIYANTO', 1, '_1117070804720003', 'SUPRIYANTO', 'LAKI-LAKI', 'Kepala Keluarga', 'PATI', '08/04/1972', 49, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Tamat SLTA/sederajat', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1117070804720003', 'SUPRIYANTO', 2, '_1117074108770003', 'CULYAH', 'PEREMPUAN', 'Istri', 'REMBANG', '08/08/1977', 44, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Tamat SLTA/sederajat', 'Ibu Rumah Tangga', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 1, 7, 'AIR MAWAR', 'Jln. Raya Kasang Lopak Alai', '_1505061103082477', 'RIAWAN', 1, '_1505060108830001', 'RIAWAN', 'LAKI-LAKI', 'Kepala Keluarga', 'KASANG LOPAK ALAI', '06/08/1983', 38, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Tamat SLTP/sederajat', 'Wiraswasta', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 1, 7, 'AIR MAWAR', 'Jln. Raya Kasang Lopak Alai', '_1505061103082477', 'RIAWAN', 2, '_1505066101880001', 'ROSMALA', 'PEREMPUAN', 'Istri', 'KASANG LOPAK ALAI', '21/01/1988', 33, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jambi', 'Tamat SLTA/sederajat', 'Ibu Rumah Tangga', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 1, 7, 'AIR MAWAR', 'Jln. Raya Kasang Lopak Alai', '_1505061103082477', 'RIAWAN', 3, '_1505064407070002', 'RISYA ZAHARA', 'PEREMPUAN', 'Anak Kandung', 'KASANG LOPAK ALAI', '04/07/2007', 14, 'Belum Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Sedang SD/sederajat', 'Pelajar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 1, 7, 'AIR MAWAR', 'Jln. Raya Kasang Lopak Alai', '_1505062609190005', 'SARIYAH', 1, '_1505066206550002', 'SARIYAH', 'PEREMPUAN', 'Kepala Keluarga', 'JAMBI', '22/06/1955', 66, 'Janda/Duda', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Tamat SD/sederajat', 'Ibu Rumah Tangga', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 1, 7, 'AIR MAWAR', 'JL. SATAM', '_1505061810120010', 'WAGIMAN SAMU', 1, '_1505060706610002', 'WAGIMAN SAMU', 'LAKI-LAKI', 'Kepala Keluarga', 'KASANG LOPAK ALAI', '07/06/1961', 60, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Tamat SD/sederajat', 'Petani', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 1, 7, 'AIR MAWAR', 'JL. SATAM', '_1505061810120010', 'WAGIMAN SAMU', 2, '_1505064807650003', 'MARYATI', 'PEREMPUAN', 'Istri', 'KASANG LOPAK ALAI', '08/07/1965', 56, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Tamat SD/sederajat', 'Ibu Rumah Tangga', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 1, 7, 'AIR MAWAR', 'JL. SATAM', '_1505061810120010', 'WAGIMAN SAMU', 3, '_1505061705930002', 'NURHAYAT', 'LAKI-LAKI', 'Anak Kandung', 'KASANG LOPAK ALAI', '07/02/1993', 28, 'Belum Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Sedang S-1/sederajat', 'Karyawan Perusahaan Swasta', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505062905120006', 'ADI', 1, '_1505062905120006', 'ADI', 'LAKI-LAKI', 'Kepala Keluarga', 'JAMBI', '16/04/1983', 38, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', '', 'Tamat SLTA/sederajat', 'Petani', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505062905120006', 'ADI', 2, '_1505066802910002', 'ROMI', 'PEREMPUAN', 'Istri', 'SOLOK', '26/02/1991', 30, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', '', 'Tamat SLTP/sederajat', 'Ibu Rumah Tangga', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505062905120006', 'ADI', 3, '_1505064905120002', 'DERA HUSNUN ELISIYA', 'PEREMPUAN', 'Anak Kandung', 'JAMBI', '09/05/2012', 9, 'Belum Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', '', 'Sedang TK/Kelompok Bermain', 'Pelajar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505062905120006', 'ADI', 4, '_1505065209160002', 'DISKA AULIA ADHA', 'PEREMPUAN', 'Anak Kandung', 'JAMBI', '12/09/2016', 5, 'Belum Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', '', 'Belum masuk TK/Kelompok Bermain', 'Belum Bekerja', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 1, 1, 'AIR MAWAR', 'LRG ANTU RENGAS', '_1505062810160013', 'AGUS SURANTO', 1, '_1571030208840001', 'AGUS SURANTO', 'LAKI-LAKI', 'Kepala Keluarga', 'JAMBI', '02/08/1984', 37, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Tamat SLTA/sederajat', 'Petani', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 1, 1, 'AIR MAWAR', 'LRG ANTU RENGAS', '_1505062810160013', 'AGUS SURANTO', 2, '_1505064903920002', 'WIDIATI', 'PEREMPUAN', 'Istri', 'JAWA TENGAH', '09/03/1992', 29, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', 'Jawa', 'Tamat SD/sederajat', 'Ibu Rumah Tangga', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 1, 1, 'AIR MAWAR', 'LRG ANTU RENGAS', '_1505062810160013', 'AGUS SURANTO', 3, '_1505061212160001', 'MUHAMMAD BAGUS WICAKSONO', 'LAKI-LAKI', 'Anak Kandung', 'MUARO JAMBI', '12/12/2016', 4, 'Belum Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', '', 'Belum masuk TK/Kelompok Bermain', 'Belum Bekerja', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505063009130011', 'AMIRUDIN', 1, '_1505060101610024', 'AMIRUDIN', 'LAKI-LAKI', 'Kepala Keluarga', 'JAMBI', '01/01/1961', 61, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', '', 'Tamat SD/sederajat', 'Petani', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505063009130011', 'AMIRUDIN', 2, '_1505066202670002', 'ILWANA', 'PEREMPUAN', 'Istri', 'JAMBI', '22/02/1967', 54, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', '', 'Tamat SLTA/sederajat', 'Ibu Rumah Tangga', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505063009130011', 'AMIRUDIN', 3, '_1505060809970004', 'KHAIRUL ANWAR. A', 'LAKI-LAKI', 'Anak Kandung', 'JAMBI', '08/08/1997', 24, 'Belum Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', '', 'Sedang S-1/sederajat', 'Pelajar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1505063009130011', 'AMIRUDIN', 4, '_1505062302050002', 'M. MUSAWIR FEBRI. A', 'LAKI-LAKI', 'Anak Kandung', 'MUARO JAMBI', '23/02/2005', 16, 'Belum Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', '', 'Sedang SLTP/Sederajat', 'Pelajar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1506060103730001', 'DAWUD', 1, '_1506060103730001', 'DAWUD', 'LAKI-LAKI', 'Suami', 'PONOROGO', '01/03/1973', 48, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', '', 'Tamat SLTP/sederajat', 'Wiraswasta', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1506060103730001', 'DAWUD', 2, '_15060606451278002', 'MUTIATUL WAHIDAH', 'PEREMPUAN', 'Istri', 'PONOROGO', '01/03/1977', 44, 'Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', '', 'Tamat SLTP/sederajat', 'Ibu Rumah Tangga', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 1, 1, 'AIR MAWAR', 'KASANG LOPAK ALAI', '_1506060103730001', 'DAWUD', 3, '_1505065412030001', 'FAIZATAZZAHRO', 'PEREMPUAN', 'Anak Kandung', 'PONOROGO', '01/03/2004', 17, 'Belum Kawin', 'Islam', 'Tidak Tahu', 'Warga Negara Indonesia', '', 'Sedang SD/sederajat', 'Belum Bekerja', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `id` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `isi` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`id`, `kategori`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'Sejarah Desa', 'Sejarah desa Kasang Lopak Alai sebelum tahun 1982adalah bagian dari desa Lopak Alai. Pada tahun 1982 desa Lopak Alai dimekarkan menjadi dua desa.\r\n\r\nSatu desa Lopak Alai yang pada waktu itu dipimpin oleh Datuk Usman Tholip, kemudian desaKasang Lopak Alai dipimpinOleh Datuk H.M Syafe’idengan Sekdesnya Bapak Kasim Inas dibantu oleh tiga orang kepala urusan yaitu:\r\n\r\nBapak Sudarno S, sebagai Kaur Pemerintahan\r\nBapak Susilo Budiono sebagai Kaur Pembangunan\r\nBapak M. Saleh sebagai Kaur Umum\r\n\r\nKasang Lopak Alai pada waktuitu dibagi menjadi dua Dusun yaitu Dusun Air Mawar (Dusun I) dan Dusun Andil (Dusun II), Dusun Air Mawar dipimpin Oleh Bapak Warso dan Dusun Andil dipimpin Bapak Ngadirin, dan kemudian terdiri dari dua (2) RW dan 6 RT yang masing-masing RW membawahi beberapa RT.\r\n\r\nDatuk H.M Syafe’i menjabat sebagai Datuk Kepala DesaKasang Lopak Alaidari tahun 1982 s/d 1988kemudian diteruskan oleh Bapak Sudarno S, yang menjabat sebagai PJS selama kurun waktu kurang lebih 2 tahun, kemudian pada tahun 1990 untuk pertama kalinya didesa Kasang Lopak Alai di adakan pemilhan Kepala Desayang pada waktu itu di ikuti oleh dua orang kandidat atau calon, yaitu Bapak Sudarno S, dan Bapak Junaidi Sy. Setelah diadakan pemilihan, terpilihlah Bapak Junaidi Sy menjadi Kepala Desa Kasang Lopak Alai periode 1990 s/d 1998 dan yang menjadi sekdesnya Bapak Sudarno S, serta dibantu oleh tiga kepala urusan (KAUR) yaitu:\r\n\r\nBapak Ngadirin sebagai Kaur Pemerintahan\r\nBapak Budiono sebagai Kaur Pembangunan\r\nBapak M. Saleh sebagai Kaur Umum\r\nKemudian pada tahun 1993 Bapak M. Shaleh yang menjabat sebagai Kaur Umum mengundurkan diri kemudian digantikan oleh Bapak Sariman.\r\n\r\nPada tahun 1998 masa jabatan Kepala Desa Kasang Lopak Alai Bapak Junaidi Sy berakhir setelah itu Desa Kasang Lopak Alai melakukan kembali pemilihan yang kedua kalinya yang di ikuti olehh dua orang kandidat (calon) yaitu Bapak Junaidi Sy dan Bapak Ngalimin. Dalam pemilihan Kepala Desa tersebut terpilihlah Bapak Junaidi Sy untuk kali keduanya menjadi Kepala Desa terpilih periode tahun 1998 s/d  2007.', '0000-00-00 00:00:00', '2021-07-17 21:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `srt_ket_biasas`
--

CREATE TABLE `srt_ket_biasas` (
  `id` int(11) NOT NULL,
  `no` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tpt_tgl_lhr` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `jenkel` varchar(20) NOT NULL,
  `goldar` varchar(20) DEFAULT NULL,
  `nik` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `rt_rw` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tgl_keluar` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srt_ket_biasas`
--

INSERT INTO `srt_ket_biasas` (`id`, `no`, `nama`, `tpt_tgl_lhr`, `status`, `jenkel`, `goldar`, `nik`, `agama`, `pekerjaan`, `rt_rw`, `alamat`, `tgl_keluar`, `created_at`, `updated_at`) VALUES
(5, '00', 'SITI PATIMAH', 'Jambi, 01 Januari 1961', 'Cerai Hidup', 'PEREMPUAN', '-', '_15050919010100004', 'Islam', 'Mengurus Rumah Tangga', '06 / I', 'Kasang Lopak Alai', '22 Januari 2020', '2021-07-17 12:18:33', '2021-07-17 12:29:39'),
(6, '00', 'SITI PATIMAH', 'Jambi, 01 Januari 1961', 'Kawin', 'PEREMPUAN', '-', '_15050919010100003', 'Islam', 'Mengurus Rumah Tangga', '06 / I', 'Kasang Lopak Alai', '22 Januari 2020', '2021-07-17 12:29:11', '2021-07-17 12:29:11');

-- --------------------------------------------------------

--
-- Table structure for table `srt_ket_tdk_mampus`
--

CREATE TABLE `srt_ket_tdk_mampus` (
  `id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenkel` varchar(20) NOT NULL,
  `tpt_tgl_lhr` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `rt_rw` varchar(20) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `kab` varchar(50) NOT NULL,
  `no_reg` varchar(50) DEFAULT NULL,
  `tgl_reg` varchar(50) DEFAULT NULL,
  `tgl_keluar` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srt_ket_tdk_mampus`
--

INSERT INTO `srt_ket_tdk_mampus` (`id`, `no`, `nama`, `jenkel`, `tpt_tgl_lhr`, `status`, `agama`, `pekerjaan`, `rt_rw`, `desa`, `kec`, `kab`, `no_reg`, `tgl_reg`, `tgl_keluar`, `created_at`, `updated_at`) VALUES
(2, 0, 'SUTRISNA', 'LAKI-LAKI', 'Jambi, 12 November 1983', 'Belum Kawin', 'Islam', 'Buruh Harian Lepas', '010 / II', 'Kasang Lopak Alai', 'Kumpeh Ulu', 'Muaro Jambi', NULL, NULL, '26 Mei 2020', '2021-07-17 18:52:32', '2021-07-17 18:53:29'),
(3, 0, 'SITI PATIMAH', 'PEREMPUAN', 'Jambi, 01 Januari 1961', 'Cerai Mati', 'Islam', 'Mengurus Rumah Tangga', '06 / I', 'Kasang Lopak Alai', 'Kumpeh Ulu', 'Muaro Jambi', NULL, NULL, '26 Mei 2020', '2021-07-19 00:28:46', '2021-07-19 00:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `srt_ket_usahas`
--

CREATE TABLE `srt_ket_usahas` (
  `id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tpt_tgl_lhr` varchar(50) NOT NULL,
  `jenkel` varchar(20) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `rt_rw` varchar(20) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `kab` varchar(50) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `resort` varchar(255) NOT NULL,
  `tgl_keluar` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srt_ket_usahas`
--

INSERT INTO `srt_ket_usahas` (`id`, `no`, `nama`, `tpt_tgl_lhr`, `jenkel`, `nik`, `pekerjaan`, `rt_rw`, `desa`, `kec`, `kab`, `perihal`, `resort`, `tgl_keluar`, `created_at`, `updated_at`) VALUES
(2, 0, 'SITI PATIMAH', 'Jambi, 01 Januari 1961', 'PEREMPUAN', '1505084101610015', 'Mengurus Rumah Tangga', '010 / II', 'Kasang Lopak Alai', 'Kumpeh Ulu', 'Muaro Jambi', 'Kantor Buruh', 'Kumpeh ulu', '22 Januari 2020', '2021-07-17 20:35:49', '2021-07-17 20:35:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0, 'admin', 'admin@gmail.com', '$2y$10$7RarBGcW0zZX8APNkl5lFujWgj5EdCVzawgNNzrTUiOzYd7LZE3.e', 'mHpqdATpJjLhBJTLUn8LzUcpXTXd77DpcrL0g7IU0yxtk7DXmx1QwxUgrLY8', '2021-07-04 10:41:29', '2021-07-04 10:41:29'),
(2, 1, 'sekdes', 'sekdes@gmail.com', '$2y$10$88uqpCnq15IcWEmuHdBLDeIBV1vR39z9D4kSiKxChBCSJDOqx5FyK', 'ysiJdxZ4LRDQAc7tvF0i7dVII6AMKyekhwXESUjMeqj4DLrCv2OVw4PRehX5', '2021-07-04 10:42:49', '2021-07-04 10:42:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penduduks`
--
ALTER TABLE `penduduks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `srt_ket_biasas`
--
ALTER TABLE `srt_ket_biasas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `srt_ket_tdk_mampus`
--
ALTER TABLE `srt_ket_tdk_mampus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `srt_ket_usahas`
--
ALTER TABLE `srt_ket_usahas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penduduks`
--
ALTER TABLE `penduduks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=756;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `srt_ket_biasas`
--
ALTER TABLE `srt_ket_biasas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `srt_ket_tdk_mampus`
--
ALTER TABLE `srt_ket_tdk_mampus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `srt_ket_usahas`
--
ALTER TABLE `srt_ket_usahas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
