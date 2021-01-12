-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 02:08 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ukm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_divisi`
--

CREATE TABLE `tb_divisi` (
  `id_divisi` int(11) NOT NULL,
  `id_ukm` int(11) NOT NULL,
  `nama_divisi` varchar(50) NOT NULL,
  `nama_co` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_divisi`
--

INSERT INTO `tb_divisi` (`id_divisi`, `id_ukm`, `nama_divisi`, `nama_co`) VALUES
(1, 15, 'Pemangku Adat 1', 'Kak Ferdian'),
(2, 15, 'Pemangku Adat 2', 'Kak Anggrek'),
(3, 15, 'Pendidikan dan Kepramukaan 1', 'Kak Alvin'),
(4, 15, 'Pendidikan dan Kepramukaan 2', 'Kak Yolanda'),
(5, 15, 'Pramuka Peduli 1', 'Kak Gilang'),
(6, 15, 'Pramuka Peduli 2', 'Kak Emil'),
(7, 15, 'Humas dan Kesekretariatan 1', 'Kak Rony'),
(8, 15, 'Humas dan Kesekretariatan 2', 'Kak Weny'),
(9, 15, 'Evaluasi dan Pengembangan 1', 'Kak Andi'),
(10, 15, 'Evaluasi dan Pengembangan 2', 'Kak Ritma'),
(11, 23, 'KRSBI', 'Puja Dwi Lestari'),
(12, 23, 'KRAI', 'Ulfiatun Hasanah'),
(13, 23, 'KRTMI', 'Anisyaroh Pangestuti'),
(14, 23, 'KRPAI', 'Sofi Rahma Chyati'),
(15, 23, 'KRTI', 'Bunga Prasetya Dwi Ulul Azmi'),
(16, 23, 'KOMURINDO', 'Anisa Fitri Sulistyaningrum'),
(17, 12, 'Academic Activity', ''),
(18, 12, 'Student Interest', ''),
(19, 12, 'Humas', ''),
(20, 12, 'Kaderisasi', ''),
(21, 12, 'Kesekretariatan', ''),
(22, 13, 'Sie Litbang', ''),
(23, 13, 'Keanggotaan', ''),
(24, 13, 'Humas', ''),
(25, 13, 'Kelengkapan', ''),
(26, 13, 'Kabid Lukis', ''),
(27, 13, 'Kabid Musik', ''),
(28, 13, 'Kabid Tari', ''),
(29, 17, 'Kerohanian Kristen', ''),
(30, 17, 'Katolik', ''),
(31, 17, 'Humas 1', ''),
(32, 17, 'Humas 2', ''),
(33, 17, 'Kesekretariatan', ''),
(34, 17, 'Pemerhati', ''),
(35, 14, 'Futsal', ''),
(36, 14, 'Sepak Bola', ''),
(37, 14, 'Bola Basket', ''),
(38, 14, 'Badminton', ''),
(39, 14, 'Bola Voli', ''),
(40, 14, 'Catur dan Bridge', ''),
(41, 14, 'PSHT', ''),
(42, 14, 'Merpati Putih', ''),
(43, 14, 'Perisai Diri', ''),
(44, 14, 'Karate', ''),
(45, 26, 'Ka. Si. Pengamanan dan Operasional', 'Bella Karina'),
(46, 26, 'Ka. Si Personaliadan Teritorial', 'Yeferi Karoba'),
(47, 26, 'Ka. Si. Logistik dan Kima', 'Firda Marta Tiana'),
(48, 26, 'Anggota Provos', 'RB. Alhumaydi'),
(49, 26, 'Anggota Provos dan Teritorial', 'Dheni Satrio Prayogo'),
(50, 26, 'Anggota Provos dan Logistik ', 'Fanika Ningrum'),
(51, 26, 'Anggota Logistik dan Kima', 'Alisa Qurrotun Nada'),
(52, 22, 'Divisi Gunung dan Hutan', ''),
(53, 22, 'Sport', ''),
(54, 22, 'Konservasi', ''),
(55, 19, 'Media', ''),
(56, 19, 'Dana Usaha', ''),
(57, 19, 'Jaringan Kerja', ''),
(58, 19, 'Latihan dan Pengembangan', ''),
(59, 18, 'Kabid. Litbang', 'Muhammad Khadafi'),
(60, 18, 'Sie Inventaris', 'Maulana Agung K'),
(61, 18, 'Sie Kesekretariatan', 'Natansya Kamila'),
(62, 18, 'Kabid. Organisasi', 'M. Agung Wicaksono'),
(63, 18, 'Sie Pementasan', 'Syarifatul Hasanah'),
(64, 18, 'Sie Latihan', 'Mushliha'),
(65, 18, 'Kabid. Seni', 'Forman Rizki P'),
(66, 18, 'Sie Humas', 'ST Nur Asita Al. M'),
(67, 20, 'Komforma', 'Ilham Rifqi Ayudaya Putra'),
(68, 20, 'Keanggotaan', 'Angga Kristiana Putri'),
(69, 20, 'Kewirausahaan', 'Siti Hoiriyah'),
(70, 20, 'K-3', 'Salsabila Rahmatillah'),
(71, 20, 'Keorganisasian', 'Fennldy Bambang Aguta'),
(72, 20, 'KSK LOG', 'Dwi Cahyo Hermawan'),
(73, 21, 'Penelitian dan Pengembangan', 'Putri Winda N'),
(74, 21, 'Pendidikan dan Keternagaan', 'Lu\'lu Berlyan N. W'),
(75, 21, 'Pengapdian Masyarakat', 'Firdaus Khumairoh'),
(76, 21, 'Hubungan Masyarakat', 'Febrina Faihauzzahroh'),
(77, 21, 'Logistik dan Inventaris', 'Tiara Melia Fanny'),
(78, 24, 'Operasional', 'M. Tri Anjas'),
(79, 24, 'Peralatan', 'Andi Sukma'),
(80, 24, 'Seragam dan Atribut', 'Putra Riyanto'),
(81, 24, 'Logistik', 'Kirana Sandi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Ketua Umum'),
(2, 'Wakil Ketua Umum'),
(3, 'Sekretaris 1'),
(4, 'Sekretaris 2'),
(5, 'Bendahara 1'),
(6, 'Bendahara 2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Teknologi Informasi'),
(2, 'Teknik'),
(3, 'Produksi Pertanian'),
(4, 'Teknologi Pertanian'),
(5, 'Manajemen Agribisnis'),
(6, 'Bahasa,  Komunikasi dan Pariwisata'),
(7, 'Kesehatan'),
(8, 'Peternakan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `id_ukm` int(11) NOT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `foto_kegiatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_kegiatan`, `id_ukm`, `nama_kegiatan`, `keterangan`, `foto_kegiatan`) VALUES
(1, 12, 'Rutination Class', 'Weekly Program - Golden Class - Silver Class', ''),
(2, 12, 'PEC (Polije English Competition-2019)', 'Elevate The Future With Industry 4.0', ''),
(3, 12, 'NEMOE 2019', 'Diklat UKM English Club', ''),
(4, 12, 'OREO 2019', '-', ''),
(5, 13, 'APLIKASI 23', 'UKM LUMUT Mempersembahkan Aplikasi 23', ''),
(6, 13, 'LUMUT Goes To - Taman Mini Indonesia Indah Jakarta', 'Performance by - CS LARAS JIWA UKM LUMUT', ''),
(7, 14, 'Direktur Cup VIII - 15 - 22 Januari 2020', '-', ''),
(8, 14, 'Porseni Internal 2019', '-', ''),
(9, 16, 'Kajian Online ', '\"Tidak Perlu Takut dan Paranoid Hadapi Corona\"', ''),
(10, 16, 'Berjihad Melawan COVID 19', '-', ''),
(11, 16, 'Labaik Learning Program ', '(L2P)', ''),
(12, 16, 'Labaik Berbagi', '\"Galang Dana Serta Penyaluran Bantuan Untuk Korban', ''),
(13, 15, 'Latihan Rutin', 'Pertemuan Rutin', ''),
(14, 15, 'Green Scout', 'Aksi Sejukkan Bumi', ''),
(15, 15, 'MUGUS', 'Musyawarah Gugus Depan Racana Arjuna Srikandi', ''),
(16, 15, 'MUSDEGA', 'Musyawarah Pandega', ''),
(17, 17, 'Perayaan Natal UKM PMK 2020', 'Unshakealbe Faith I Corinth 15 : 58', ''),
(18, 17, 'Rapat Anggota Tahunan UKM PMK 2019/2020', '28 November 2020', ''),
(19, 18, 'Latihan Rutin', 'Semangat Latihan Bersama', ''),
(20, 18, 'Temu Teman', 'Opening Temu Teman Di Yogyakarta', ''),
(21, 18, 'OPREC', 'Salam Budaya \"Dalam Kotak Aku Berada dalam Aku Kot', ''),
(22, 19, 'Kegiatan Kampus', '', ''),
(23, 19, 'National Politechnic English Olimpic', 'NPEO - Politeknik Negeri Bali', ''),
(24, 19, 'Perilisan Majalah Kmpus vol. 2', 'Kegiatan dilaksanakan Kamis, 29 Agustues 2019 di A', ''),
(25, 20, 'Laras Aluna', 'Swara Asmaralaya arranger Yoki Prasetyo.', ''),
(26, 21, 'Oprec Panitia Konser', '', ''),
(27, 21, 'RAT 2020', 'Pelaksanaan 14-15 November 2020', ''),
(28, 21, 'Kumpulan Rutin', 'Kegiatan Mingguan', ''),
(29, 21, 'Anjangsana', 'KSR Unit IAIN Jember', ''),
(30, 22, 'DIKLATSAR XXXI', 'Kegiatan Dilaksanakan di Lereng Gunung Selatan Arg', ''),
(31, 22, 'PRADIKLAT 2', '19-20 Oktober 2019 -Penyampaian Materi, Aplikasi P', ''),
(32, 22, 'Salam Lestari', 'Temu Angkatan 2018 MAPALA Se- Jember di Lapangan G', ''),
(37, 24, 'Latihan Rutin', 'UKM Barabasdc', ''),
(38, 24, 'PKBDC', 'Satu Rasa, Satu Jiwa, Satu Swara', ''),
(39, 25, 'Bakti Literasi', 'SLB Branjangan, Desa Bintoro, Partang', ''),
(40, 26, 'Rapat Anggota Tahunan UKM SKIM 2019/2020', '21-22 November 2020, 19.00WIB - Selesai', ''),
(41, 23, 'Riset Harian', 'Uji coba robot untuk perlombaan', '16154_4.jpg'),
(42, 23, 'Pengabdian Masyarakat', 'Robot Semprot Disinfektan dari Polije - 20 April 2', '31307_5 (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nim_mhs` varchar(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `no_wa` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `angkatan` varchar(4) NOT NULL,
  `alamat` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim_mhs`, `id_prodi`, `nama_mhs`, `jk`, `no_wa`, `email`, `angkatan`, `alamat`, `id_user`) VALUES
('E41190739', 1, 'Resa Wahyu Saputra', 'Laki-laki', '+62 898-0038', 'resa@gmail.com', '2019', 'Jember', 64),
('E41190755', 1, 'Dwi Wahyu Prambodo', 'Laki-laki', '+62 895-3291', 'wahyu@gmail.com', '2019', 'Tuban', 76),
('E41190793', 1, 'M.ainul Yaqin', 'Laki-laki', '+62 895-2753', 'ainul@gmail.com', '2019', 'Jember', 71),
('E41190853', 1, 'Arini Eka Noviyanti', 'Perempuan', '+62 823-3541', 'arini@gmail.com', '2019', 'Madura', 69),
('E41190889', 1, 'M. Lutfi Fadilah', 'Laki-laki', '+62 856-3201', 'luthfi@gmail.com', '2019', 'Jember', 80),
('E41190890', 1, 'Fathor Rahman', 'Laki-laki', '+62 822-3151', 'fathor@gmail.com', '2019', 'Bondowoso', 81),
('E41190892', 1, 'Athfal Kamali', 'Perempuan', '+62 898-0502', 'athfal@gmail.com', '2019', 'Bondowoso', 66),
('E41190897', 1, 'Adi Wijaya', 'Laki-laki', '+62 858-4748', 'adi@gmail.com', '2019', 'Jember', 63),
('E41190904', 1, 'Fajriansyah Decky Setiawan', 'Laki-laki', '+62 853-3516', 'decky@gmail.com', '2019', 'Madura', 58),
('E41190925', 1, ' Anju Alicia Johan', 'Perempuan', '+62 812-3223', 'anju@gmail.com', '2019', 'Jember', 67),
('E41190934', 1, 'Hayung Dewanto', 'Laki-laki', '+62 852-3203', 'hayung@gmail.com', '2019', 'Jember', 75),
('E41190937', 1, 'Moh Iskandar Zulkarnain', 'Laki-laki', '+62 821-3129', 'iskandar@gmail.com', '2019', 'Jember', 62),
('E41190956', 1, 'suroto Edy Nur', 'Laki-laki', '+62 831-1163', 'Suroto@gmail.com', '2019', 'Jember', 70),
('E41191039', 1, 'Firgo Bhaktiar Hamsah', 'Laki-laki', '+62 823-3156', 'igo@gmail.com', '2019', 'Jember', 83),
('E41191074', 1, 'Evra Mario Sirait', 'Laki-laki', '+62 853-6272', 'evra@gmail.com', '2019', 'Medan', 59),
('E41191090', 1, 'Amalia', 'Perempuan', '081548391998', 'amalia@gmail.com', '2019', 'Tulungagung', 78),
('E41191132', 1, 'Shovi Imany Wardiana', 'Perempuan', '+62 823-3773', 'shovi@gmail.com', '2019', 'Madura', 65),
('E41191133', 1, 'Shenila Letishya Ramona', 'Perempuan', '+62 821-4629', 'shen@gmail.com', '2019', 'Jember', 60),
('E41191151', 1, 'Yulinar Nur Rahmawati', 'Perempuan', '+62 852-1115', 'yulinar@gmail.com', '2019', 'Probolinggo', 73),
('E41191157', 1, 'M. Afdal Zikri', 'Laki-laki', '+62 823-6164', 'afdal@gmail.com', '2019', 'Aceh', 82),
('E41191206', 1, 'Fitroh Fathur Rohman', 'Laki-laki', '+62 878-6470', 'fathur@gmail.com', '2019', 'Banyuwangi', 77),
('E41191224', 1, 'Ferry Septian Ferdiyanto', 'Laki-laki', '+62 857-3747', 'ferry@gmail.com', '2019', 'Kediri', 74),
('E41191244', 1, 'Dwi Prasetiyo Utomo', 'Laki-laki', '+62 857-0603', 'pras@gmail.com', '2019', 'Gresik', 79),
('E41191322', 1, 'Bunga Prasetya Dwi Ulul Azmi', 'Perempuan', '+62 831-1169', 'bunga@gmail.com', '2019', 'Jember Jatim', 68),
('E41191351', 1, 'Thufeil Wartono Putra', 'Laki-laki', '+62 822-3423', 'thufeil@gmail.com', '2019', 'Madura', 61),
('E41191382', 1, 'Muhammad Nuzul Ridoi', 'Laki-laki', '+62 819-1813', 'nuzul@gmail.com', '2019', 'Madura', 72);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `nim_mhs` varchar(11) NOT NULL,
  `id_ukm` int(11) NOT NULL,
  `alasan` text NOT NULL,
  `sim_online` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tgl_pendaftaran`, `nim_mhs`, `id_ukm`, `alasan`, `sim_online`) VALUES
(3, '2021-01-07', 'E41191322', 23, 'Ingin belajar dan menambah wawasan di bidang robotika', '7208_Screenshot (325).png'),
(4, '2021-01-07', 'E41191322', 12, 'Ingin belajar dan mengasah skill berbicara bahasa inggris', '27806_Screenshot (325).png'),
(5, '2021-01-07', 'E41191206', 16, 'Pengen tobat', '4991_Screenshot (326).png'),
(6, '2021-01-07', 'E41191206', 23, 'ingin jadi robot', '23873_Screenshot (326).png'),
(7, '2021-01-07', 'E41190925', 23, 'cari mas crush', '28711_Screenshot (324).png'),
(8, '2021-01-07', 'E41191133', 23, 'apa aja deh yang penting seneng', '26779_Screenshot (323).png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `id_ukm` int(11) NOT NULL,
  `nama_prestasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id_prestasi`, `id_ukm`, `nama_prestasi`) VALUES
(1, 12, 'Semifinalists Of Speech - PEC 2019 - Dwi Nur Aini'),
(2, 12, 'Semifinalists Of Story Telling - PEC 2019 - Arif H'),
(3, 12, 'Semifinalists Of Newscasting - PEC 2019 - Riza Uma'),
(4, 12, 'Semifinalists Of Debate - PEC 2019 -  Muhammad Gus'),
(5, 14, 'Juara 2 Hj. Hendy Cup - Tim futsal Putra Polije'),
(6, 14, 'Peserta Kejuaraan Tenis Meja Pada Universitas Braw'),
(7, 14, 'Mendali Perak Kategori Catur Kilat - POMNAS XVI Ja'),
(8, 14, 'Mendali Perunggu Kategori Catur Standar - POMNAS X'),
(9, 14, 'Mendali Emas - Turnamen Pencak Silat Internasional'),
(10, 14, 'Mendali Emas - Turnamen Pencak Silat Internasional'),
(11, 14, 'Mendali Emas - Turnamen Pencak Silat Internasional'),
(12, 14, 'Mendali Perak - Turnamen Pencak Silat Internasiona'),
(13, 14, 'Mendali Perunggu - Turnamen Pencak Silat Internasi'),
(14, 15, 'Gerakan Pramuka Juara Umum di 13th Malaysian Scout'),
(15, 16, 'Juara 1 Hifdzil Qur\'an - MTQ Internal 2019 - Nur L'),
(16, 16, 'Juara 3 Hifdzil Qur\'an - MTQ Internal 2019 - Frana'),
(17, 16, 'Juara 1 Tartil Qur\'an - MTQ Internal 2019 - Nur La'),
(18, 16, 'Juara 2 Tilawatil Qur\'an - MTQ Internal 2019 - Har'),
(19, 26, 'Juara 1 Lintas Medan - Jalaka Paragri IV 2019 kate'),
(20, 26, 'Juara 1 LMMP Nasional 2018 - Satmenwa 832 Universi'),
(21, 26, 'Juara 3 Menembak Jalaka Paragri 2017 - Satmewa 807'),
(22, 26, 'Juara Terbaik Suskabintalnas 2018 - Satmenwa 811 U'),
(23, 23, 'Juara 5 Muatan Balon Atmosfer - Tim Agro Ballon'),
(24, 23, 'Juara 1 KRTMI -  KRI 2019'),
(25, 23, 'Juara 1 dan Best Strategi - Tim Tanoker_IR64 - Div'),
(26, 23, 'KRPAI Team IROTANI\' 64 - Urutan ke 7'),
(27, 23, 'KRSBI Team - In The Quarter Finalis'),
(28, 22, 'Rynner Up 2ND - KRAI Robotics Team Papuma_IR64 - 2'),
(29, 22, 'Mendali Perak Cabang Wall Climbing - Speed Klasik '),
(30, 22, 'Mendali Perunggu Cabang Wall Climbing - Lead Klasi'),
(31, 22, 'Juara 2 Lead Mapala Putra - Tursina Nasional Wall '),
(32, 25, 'Lolos Pimnas 2020 - Septian R, Niftah K, Ella M. 2'),
(33, 25, 'Juara 1 Lomba Esai ONcam 2020 - Himpunan Mahasiswa'),
(34, 25, 'Juara 2 AFC Nasional - Universitas Jendral Soedirm'),
(35, 25, 'Juara 1 Desain Interface Mr. Hetic Competition Nas'),
(36, 25, 'Juara 2 Esai Nasional NEC Universitas Jember -  Ze'),
(37, 25, 'Juara Harapan 1 - Plant Protetection competition N'),
(38, 25, 'Juara 1 Esai Nasional NEC Universitas Jember - Muh'),
(39, 25, 'Juara 2 LKTIN 8 th Airlangga Ideas Competition 201');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id_prodi` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_prodi`
--

INSERT INTO `tb_prodi` (`id_prodi`, `id_jurusan`, `nama_prodi`) VALUES
(1, 1, 'Teknik Informatika'),
(2, 1, 'Teknik Komputer'),
(3, 1, 'Manajemen Informatika'),
(4, 1, 'Teknik Informatika Internasional'),
(5, 1, 'Manajemen Informatika Internasional'),
(6, 2, 'Teknik Energi Terbarukan'),
(7, 2, 'Mesin Otomotif'),
(8, 2, 'Teknologi Rekayasa Mekatronika'),
(9, 3, 'Produksi Tanaman Holtikultura'),
(10, 3, 'Produksi Tanaman Perkebunan'),
(11, 3, 'Teknik Produksi Benih'),
(12, 3, 'Teknologi Produksi Tanaman Pangan'),
(13, 3, 'Budidaya Tanaman Perkebunan'),
(14, 3, 'Pengelolaan Perkebunan Kopi'),
(15, 4, 'Keteknikan Pertanian'),
(16, 4, 'Teknologi Industri Pangan'),
(17, 4, 'Teknologi Rekayasa Pangan'),
(18, 5, 'Manajemen Agribisnis'),
(19, 5, 'Manajemen Agroindustri'),
(20, 5, 'Akuntansi Sektor Publik'),
(21, 5, 'Manajemen Agroindustri Internasional'),
(22, 6, 'Bahasa Inggris'),
(23, 7, 'Rekam Medik'),
(24, 7, 'Gizi Klinik'),
(25, 8, 'Produksi Ternak'),
(26, 8, 'Manajemen Bisnis Unggas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sosmed`
--

CREATE TABLE `tb_sosmed` (
  `id_sosmed` int(11) NOT NULL,
  `id_ukm` int(11) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `youtube` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sosmed`
--

INSERT INTO `tb_sosmed` (`id_sosmed`, `id_ukm`, `instagram`, `youtube`) VALUES
(1, 12, '@e_clubpolije', 'English Club'),
(2, 13, '@ukmlumut', 'Lumutertainment'),
(3, 14, '@ukmolahraga', 'ukm olahraga'),
(4, 15, '@ukmpramuka_polije', 'Pramuka Polije'),
(5, 16, '@ukmlabaik', 'UKM LABAIK Official'),
(6, 17, '@ukmpmkpolije', 'UKM PMK Polije'),
(7, 18, '@teater_kotak', 'UKM Kotak Polije'),
(8, 19, '@ukpmexplant', 'Explant Channel'),
(9, 20, '@psm_polije', 'PSM POLIJE'),
(10, 21, '@ksrpmipolije', 'KSR PMI POLIJE'),
(11, 22, '@himapalabekisar', 'Himapala Bekisar Polije'),
(12, 23, '@ir64_polije', 'ir64 Polije'),
(13, 24, '@ukm_barabasdc', 'UKM Barabasdc Polije'),
(14, 25, '@ukm_skimpolije', 'UKM SKIM POLIJE'),
(15, 26, '@batalyon_877', 'UKM BATALYON 877 POLIJE');

-- --------------------------------------------------------

--
-- Table structure for table `tb_struktur`
--

CREATE TABLE `tb_struktur` (
  `id_struktur` int(11) NOT NULL,
  `id_ukm` int(11) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `angkatan` varchar(4) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_struktur`
--

INSERT INTO `tb_struktur` (`id_struktur`, `id_ukm`, `nama_mhs`, `id_jabatan`, `id_prodi`, `angkatan`, `foto`) VALUES
(1, 16, 'Mohammad Yusuf Sofyan', 1, 11, '2018', ''),
(2, 15, 'Dicky Dwi Kisworo', 1, 16, '2017', ''),
(3, 15, 'Kummala Nuzulul Fajri', 2, 24, '2017', ''),
(4, 15, 'Anraeni Wahyu Pratiwi', 5, 26, '2018', ''),
(5, 15, 'Prisma Arman', 6, 26, '2018', ''),
(6, 15, 'Qurrota A\'yun Mahros', 3, 17, '2018', ''),
(7, 15, 'Firman Shalihin', 4, 23, '2017', ''),
(8, 18, 'Moch.Aliffi Akbar', 1, 0, '2017', ''),
(9, 18, 'Linda Purnamasari', 3, 0, '2018', ''),
(10, 18, 'Siti Nurfadilah', 5, 0, '2018', ''),
(11, 19, 'Alif M. Yardan Kurnia ', 1, 0, '', ''),
(13, 20, 'Rafian Desanta I. A. B', 1, 0, '2018', ''),
(14, 20, 'Yosef Triadi Setiawan Santoso', 2, 0, '2018', ''),
(15, 20, 'Salsa Avira Yuwantara', 3, 0, '2018', ''),
(16, 20, 'Wanda Agista Rahmasari', 4, 0, '2018', ''),
(17, 20, 'Eka Serly Safirti', 5, 0, '2018', ''),
(18, 20, 'Fatihah Izzatul Amimah', 6, 0, '2018', ''),
(19, 22, 'Abdul Fakka', 1, 0, '2018', ''),
(20, 23, 'Ichal Wira Sukmana', 1, 2, '2019', ''),
(21, 23, 'Mohammad Sodikin ', 2, 2, '2019', ''),
(22, 23, 'Amalia', 3, 2, '2019', ''),
(23, 23, 'Wulan Cahya Wandani', 4, 3, '', ''),
(24, 23, 'Anisa Fitri Sulistyaningrum', 5, 0, '2019', ''),
(25, 23, 'Sri Nurhidayati Bariqoh', 6, 2, '2018', ''),
(26, 26, 'Mulyono', 1, 0, '', ''),
(27, 26, 'Fariz Lutfan Hasbi', 2, 0, '', ''),
(28, 26, 'Ayu Amalia Rizky Syah Putri', 3, 0, '', ''),
(29, 26, 'Zerlinda Kumala Diva', 4, 0, '', ''),
(30, 25, 'Tio Nanda Gutama', 1, 0, '2018', ''),
(31, 25, 'Evilia Maulidha Wibowo', 2, 0, '2018', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ukm`
--

CREATE TABLE `tb_ukm` (
  `id_ukm` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_ukm` varchar(50) NOT NULL,
  `deskripsi_ukm` text NOT NULL,
  `visi_ukm` varchar(1000) NOT NULL,
  `misi_ukm` text NOT NULL,
  `logo_ukm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ukm`
--

INSERT INTO `tb_ukm` (`id_ukm`, `id_user`, `nama_ukm`, `deskripsi_ukm`, `visi_ukm`, `misi_ukm`, `logo_ukm`) VALUES
(12, 42, 'E-CLUB', 'Merupakan Unit Kegiatan Mahasiswa Politeknik Negeri Jember yang bertujuan untuk mengembangkan minat dan bakat mahasiswa terutama dalam penguasaan Bahasa Inggris.', '\"As an active media to develop knowledge, skills, and achievements in many aspects of English Language\"', '1. Socialize the importance of English in our lives to further increase the students awareness and motivation in learning English.\r\n2. Devise creative and innovative programs to help enhance the student\'s ability in the basic skills of English taught at campus\r\n3. Promote active English speaking in the campus to encourage the students to practice their English more frequently and increase their fluency', ''),
(13, 43, 'UKM LUMUT', 'Merupakan Unit Kegiatan Mahasiswa Politeknik Negeri Jember yang bergerak dibidang seni yaitu UKM LUMUT (Lukis, Musik, Tari).', '\"Menjadi Mahasiswa yang Kreatif dan Inofatif dalam Karya Seni Nyata\"', '1. Membangun mahasiswa/i yang kreatif dalam hal seni Lukis, Musik, dan Tari\r\n2. Melatih dan Mendidik anggota agar memiliki semangat usaha yang tinggi, disiplin, serta bertanggung jawab\r\n3. Mengembangkan kesenian sebagai upaya untuk meningkatkan kesejahteraan pelaku seni Lukis, Musik dan Tari', ''),
(14, 44, 'UKM-O', 'Merupakan Unit Kegiatan Mahasiswa yang lahir dari kemauan yang kuat dan berdasarkan pada persamaan persepsi, tanggung jawab, dan rasa memiliki dibidang Keolahragaan Politeknik Negeri Jember. Tujuanya, membina dan mengembangkan potensi Mahasiswa Politeknik Negeri Jember dalam bidang olahraga.', '\"Menuju Bakat Berkualitas dan Mencapai Prestasi Asean Tahun 2021\"', '1. Mempunyai Atlet yang berkualitas pada setiap divisi olahraga\r\n2. Menjunjung Tinggi Sportifitas \r\n3. Membentuk Komunitas yang baik didalam mengembangkan jaringan\r\n4. Mengembangkan Objek dalam berprestasi penguatan UKM Olahraga', ''),
(15, 45, 'UKM PRAMUKA', 'Merupakan Unit Kegiatan Mahasiswa Politeknik Negeri jember yang fokus pada pembelajaran dan pengembangan mahasiswa pada kegiatan Kepramukaan.', '\"Menjadikan Lulusan Pramuka Politeknik Negeri Jember yang Mmpun Membaktikan Diri pada Masyarakat Mengacu pada Tridarma Politeknik Negeri Jember berlandaskan Trisatya dan Dharma Paamuka melalui Pembinaan yang Berkualitas\"', '1. Melakukan kegiatan keagamaan bersama guna meningkatkan rasa taqwa dan syukur kepada Tuhan YME.\r\n2. Melakukan pembinaan emosional anggota guna menumbuhkembangkan perasaan dan pengungkapan perasaan secara wajar, tepat dan seimbang.\r\n3. Mengoptimalkan pola mekanisme pembelajaran dan pembinaan pramuka Politeknik Negeri Jember.', ''),
(16, 46, 'UKM LABAIK', 'Merupakan Unit Kegiatan Mahasiswa Politeknik Negeri Jember yang fokus pada pengembangan Lembaga Aktifis Islam Kampus. UKM Labaik lahir atas sebuah keinginan yang mulia. Sebuah niat membentuk aktualisasi keislaman.', '\"Menjadi UKM LABAIK sebagai sumber pusat kegiatan kerohanian islam yang terstruktur dan kolaboratif untuk mewujudkan POLIJE madani\" ', '1. Menjalankan program kerja untuk menciptakan pemberdayaan anggota secara optimal\r\n2. Menjalin dan memperluas jaringan internal dan eksternal\r\n3. sebagai sarana penguatan karakter  dan kepribadian ', ''),
(17, 47, 'UKM-PMK', 'Merupakan Unit Kegiatan Mahasiswa Politeknik Negeri Jember sebagai wadah kegiatan pembinaan kerohanian sebagai koordinasi ajaran Agama Kristen.', '\"Terwujudnya Mahasiswa yang Aktif, Tanggap, Bertolerasi, Kreatif, dan Mandiri dalam Pondasi Nilai-Nilai Kasih untuk Kepentingan sesama sebagai Pelopor tolerasi Umat Beragama\"', '1. Peningkatan kualitas persekutuan yang terprogram dalam penguatan keimanan\r\n2. Pengembangan integrasi mahasiswa Kristen dan Katolik menuju mahasiswa teladan\r\n3. Pengembangan tolerani umat beragama melalui aksi sosial\r\n4. Penguatan organisasi PMK menuju UKM sehat', ''),
(18, 48, 'UKM KOTAK', 'Merupakan Unit Kegiatan Mahasiswa yang bergerak dibidang seni pertunjukkan, sandiwara, drama yang mengungkapkan pikiran atau perasaan dengan menggunakan gerak dan suara sebagai wadah atau tempat inspirasi  mahasiswa.', '\"Kesenian Adalah Salah Satu Bentuk Kebudayaan yang Harus Dilestarikan\"\r\n\"Teater sebagai Salah Satu Bentuk Kesenian Sangatlah Dekat Dengan Kita\"', '1. Menjadi tempat bermaung para Mahasiswa yang ingin menyalurkan bakat di bidangng kesenian\r\n2. Menjadikan sebuah kampus yang harmoni/ seimbang dalam kehidupan sosial.', ''),
(19, 49, 'UKPM EXPLANT', 'Merupakan Unit Kegiatan Mahasiswa Politeknik Negeri Jember, Lembaga Pers Mahasiswa yang bergerak dibidang penyediaan informasi berbasis jurnalistik.', '\"UKM Sebagai Kontrol Sosial Untuk Seluruh Elemen di Politeknik negeri Jember\"', '1. Menegakkan Piral Ke 4 Demokrasi Di Politeknik negeri Jember\r\n2. Menghimpun Pers Mhasiswa Di Indonesia dalam Mengawal Isu Nasional\r\n', ''),
(20, 50, 'UKM PSM', 'Merupakan Unit Kegiatan Mahasiswa dalam ruang lingkup untuk mengembangkan Teknik Bernyanyi dan Bermusik yang memberikan pengaruh besar dalam rutinitas mahasiswadan kegiatan kelembagaan.', '\"Bersatu Padu Mengintrepretasikan Seni Tarik Suara dalam Kebudayaan Nasional dan Berbakti kepada Tuhan dan Kelembagaan\"', '1. Menyanyikan lagu-lagu dan berkarya\r\n2. Berkarya dan menjunjung tinggi semangat kebudayaan dan kegembiraan dalam tugas pelayanan terhadap lembaga dan sesama', ''),
(21, 51, 'UKM-KSR', 'merupakan Unit Kegiatan dalam himpunan PMI yang beranggotakan himpunan PMI yang menyatakan diri menjadikan KSR PMI, sudah memperoleh latihan khusus KSR.', '\"Menjadikan UKM KSR (PMI) Unit Kegiatan Politeknik Negeri Jember sebagai Panutan Relawan Kepalangmerahan yang Berkarakter, Berkualitas dan Profesional', '1. Meningkatkan kualitas kompetisi dan karakter kepalangmerahan UKM PMI Unit Kegiatan Politeknik Negeri Jember\r\n2. Melaksanakan pemberdayaan dan pengapdian kepada masyarakat\r\n3. Menjalin kerjasama dengan antar relawan dan masyarakat\r\n4. Meningkatkan kapasitas dan kapabilitas UKM KSR (PMI) Unit Kegiatan Politeknik Negeri Jember ', ''),
(22, 52, 'UKM HIMAPALA', 'Merupakan organisasi pecinta alam yang menyediakan wadah bagi mahasiswa Politeknik Negeri Jember yang mempunyai minat dan bakat untuk kegiatan di alam bebas.', '', '\"', ''),
(23, 53, 'UKM ROBOTIKA IR-64', 'Merupakan Unit Kegiatan Mahasiswa yang dikelola mahasiswa  untuk mengembangkan gagasan bahwa koperasi sebagai soko guru perekonomian bangsa indonesia serta untuk menumbuhkan jiwa koperasi Politeknik Negeri Jember.', '\"Menjadi UKM yang Unggul dalam Pengembangan pada bidang Robotika Revolusi Industri 4.0\"', '<p>1. Meningkatkan kualitas kompetensi robotika bagi anggota</p>\r\n\r\n<p>2. Meningkatkan kualitas karakter bertanggung jawab bagi setiap anggota</p>\r\n\r\n<p>3. Meningkatkan kepedulian kepada masyarakat di bidang robotika</p>\r\n\r\n<p>4. Mengembangkan robot agro sebagai penciri kualitas mahasiswa</p>\r\n', '14396_4. robotika (2).png'),
(24, 54, 'UKM Barabas Drum Corps', 'Merupakan Unitk Kegiatan Mahasiswa Politeknik Negeri Jember yang disahkan pada tanggal 12 Okbober 2009, yang disahkan saat Kongres Tahun 2019.', '\"Menciptakan Generasi yang Kreatif, Disiplin dan Ceria Menuju Prestasi Nangemilang\"', '1. Tertciptanya kreatifitas para Mahasiswa dalam mengembangankan minat dan bakatnya\r\n2. Terciptanya mentalitas tim yang disiplin, taat dan patuh pada peraturan yang ada\r\n3. Terciptanya sikap anggota tim yang sopan, ceria dan gembira dalam penampilan\r\n4. Terwujudnya tim drumband yang solid, unggul dan memperoleh prestasi yang gemilang', ''),
(25, 55, 'UKM-SKIM', 'Merupakan Unit Kegiatan Mahasiswa Studi Karya Ilmiah Mahasiswa, mahasiswa yang dilatih berpolafikir krisis, analitis, inovatif dan kreatif dalam menyelesaikan permasalahan secara ilmiah.', '\"Menjadikan UKM SKIM sebagai Pelopor Budaya Ilmiah Mahasiswa dan Berprestasi di PIMNAS Tahun 2021\"', '1. Peningkatan kualitas dan kuantitas organisasi UKM SKIM\r\n2. Pengembangan daya nallar angggota UKM SKIM\r\n3. Meningkatkan prestasi UKM SKIM dibidang ilmiah\r\n4. Peningkatan kerja sama UKM SKIM sdengan oganisasi lain', ''),
(26, 56, 'UKM Satmenwa 877', 'Merupakan Unit Kegiatan Mahasiswa satuan kekuatan yang membentuk sebagai wadah dan sarana pengembangan diri mahasiswa ke arah perluasan wawasan serta meningkatkan keikutsertaan dalam upaya Bela Negara, Pertahanan dan Keamanan Negara.', 'Menjadi laboratorium pendidikan kepemimpinan untuk generasi muda pada umumnya dan mahasiswa pada khususnya yang menekankan diri dan berkomitmen untuk mengembangkan dan memberdayakan sumber daya generasi muda yang berbasis pada jiwa patriotisme, disiplin, kepemimpinan, pembentukan fisik dan mental yang berkualitas, serta pelestarian nilai-nilai jiwa dan semangat kejuangan.', '1. Meningkatkan Kesadaran Bela Negara pada Generasi Muda\r\n2. Meningkatkan pengetahuan dan ketrampilan kepemimpinan dan menejemen melalui kegiatan da pelatihan diorgan\r\n3. Pengabdian masyarakat dan kontibusi aktif dalam pembangunan, khususnya pembangunan sumber daya manusia Indonesia seutuhnya.', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(42, 'admin-eclub', '414611c6f1533f11f55608eee942ec6d', 2),
(43, 'admin-lumut', 'f04dbd59f3c7875137c1ef5fdb8ee827', 2),
(44, 'admin-olahraga', '215b278c8251e10775002f93823027db', 2),
(45, 'admin-pramuka', '141238962fe153005171bfbcadc51f5a', 2),
(46, 'admin-labaik', 'ae18b79c215078e1c695211854b8130d', 2),
(47, 'admin-pmk', '4c2ebcc9d8f8b2b3150c614d11a036d5', 2),
(48, 'admin-kotak', 'e01b3094f0a5f1e8f1125ae6fc65ec79', 2),
(49, 'admin-explant', '6128e0957d9ac761592aa2613239724c', 2),
(50, 'admin-psm', '791fe30359274887daf8cfbca7bc9c66', 2),
(51, 'admin-ksr', '3d424bf0ef4c0f35347e96a53ccbaf68', 2),
(52, 'admin-himapala', 'dd76ce202f5ca6cdd9e99e416ffbaa82', 2),
(53, 'admin-robotika', '290a02a39e651d25af3ae60c5ac3f7c7', 2),
(54, 'admin-barabas', '21232f297a57a5a743894a0e4a801fc3', 2),
(55, 'admin-skim', '00a3a19871ab37cc1a580e875f8a094f', 2),
(56, 'admin-menwa', 'dffb94a325bdfb176cafc88a71297bd4', 2),
(58, 'decky', 'cb90ee43c74eb18d47627feb69f3f919', 3),
(59, 'Evra', '98a39818c800262c33e11c6bd30a5d5d', 3),
(60, 'Shenila', 'e1f364d163c69f592fb1906f41dbb4a8', 3),
(61, 'Thufeil', '02bd246fdaa31da928b1e65e1747b97d', 3),
(62, 'Iskandar', 'd969ac863de44a038ae9235aa45b1f52', 3),
(63, 'Adi', 'a19276e012c5cccf03016a08e0e53fcc', 3),
(64, 'Resa', 'dd017ce8ba9eaab638f8bf73be18f195', 3),
(65, 'Shovi', 'bd806bc7280a3738df40a8da034532a9', 3),
(66, 'Athfal', '99c1f32f4662c9af800fa771cd98885a', 3),
(67, 'Anju', '84b6f2ef37c3144263bc7456003515dc', 3),
(68, 'Bunga', 'fe6ddea849ea82bfbeeb93fd342af307', 3),
(69, 'Arini', 'fb9da2be4cd161493e0c6091daff4af0', 3),
(70, 'Suroto', '7330a6f656c58f3f8827febaa6b24908', 3),
(71, 'Ainul', '5e4eac07018b3f029b4fbe7d7b19099a', 3),
(72, 'Nuzul', '972a05667639a768ec5c9d02b6f29b75', 3),
(73, 'Yulinar', '35631b6e405ed0c8b9780b4395af2841', 3),
(74, 'Ferry', 'b02bb60dfc239269ad9afa3c9bacec19', 3),
(75, 'Hayung', '9ca04ccd5b8450e56e36a4ee0c311312', 3),
(76, 'Wahyu', 'd8031c8f2494c09ab33ee37af9631dae', 3),
(77, 'Fathur', '8ea5ad1440f6d0436378800ac61d6ef9', 3),
(78, 'Amaila', '35af60c781f5316be46dfdf958b6631f', 3),
(79, 'Pras', 'fd813b7b6306577a3e05da0bffdba2a9', 3),
(80, 'Luthfi', '55cb4c764885e626acc5c8ae36817861', 3),
(81, 'Fathor', 'ad2323badee263a22c279abbf5014a3e', 3),
(82, 'Afdal', '76a527044549b6a883f91049e8bfa8e0', 3),
(83, 'Igo', '790cde524f0993f0ce9e5c47702c3bda', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim_mhs`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tb_sosmed`
--
ALTER TABLE `tb_sosmed`
  ADD PRIMARY KEY (`id_sosmed`);

--
-- Indexes for table `tb_struktur`
--
ALTER TABLE `tb_struktur`
  ADD PRIMARY KEY (`id_struktur`);

--
-- Indexes for table `tb_ukm`
--
ALTER TABLE `tb_ukm`
  ADD PRIMARY KEY (`id_ukm`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_sosmed`
--
ALTER TABLE `tb_sosmed`
  MODIFY `id_sosmed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_struktur`
--
ALTER TABLE `tb_struktur`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_ukm`
--
ALTER TABLE `tb_ukm`
  MODIFY `id_ukm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
