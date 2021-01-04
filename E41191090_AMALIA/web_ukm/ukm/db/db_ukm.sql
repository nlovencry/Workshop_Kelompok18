-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 02:15 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
('E41191322', 1, 'Bunga Prasetya Dwi Ulul Azmi', 'Perempuan', '+62 831-1169', 'bunga@gmail.com', '2019', 'Jember', 68),
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

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `id_ukm` int(11) NOT NULL,
  `nama_prestasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `tb_ukm`
--

CREATE TABLE `tb_ukm` (
  `id_ukm` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_ukm` varchar(50) NOT NULL,
  `deskripsi_ukm` text NOT NULL,
  `visi_ukm` varchar(150) NOT NULL,
  `misi_ukm` text NOT NULL,
  `logo_ukm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ukm`
--

INSERT INTO `tb_ukm` (`id_ukm`, `id_user`, `nama_ukm`, `deskripsi_ukm`, `visi_ukm`, `misi_ukm`, `logo_ukm`) VALUES
(12, 42, 'E-CLUB', 'Merupakan Unit Kegiatan Mahasiswa Politeknik Negeri Jember yang bertujuan untuk mengembangkan minat dan bakat mahasiswa terutama dalam penguasaan Bahasa Inggris.', '', '', ''),
(13, 43, 'UKM LUMUT', 'merupakan Unit Kegiatan Mahasiswa Politeknik Negeri Jember yang bergerak dibidang seni yaitu UKM LUMUT (Lukis, Musik, Tari).', '', '', ''),
(14, 44, 'UKM-O', 'Merupakan Unit Kegiatan Mahasiswa yang lahir dari kemauan yang kuat dan berdasarkan pada persamaan persepsi, tanggung jawab, dan rasa memiliki dibidang Keolahragaan Politeknik Negeri Jember. Tujuanya, membina dan mengembangkan potensi Mahasiswa Politeknik Negeri Jember dalam bidang olahraga.', '', '', ''),
(15, 45, 'UKM PRAMUKA', 'Merupakan Unit Kegiatan Mahasiswa Politeknik Negeri jember yang fokus pada pembelajaran dan pengembangan mahasiswa pada kegiatan Kepramukaan.', '', '', ''),
(17, 47, 'UKM LABAIK', 'Merupakan Unit Kegiatan Mahasiswa Politeknik Negeri Jember yang fokus pada pengembangan Lembaga Aktifis Islam Kampus. UKM Labaik lahir atas sebuah keinginan yang mulia. Sebuah niat membentuk aktualisasi keislaman.', '', '', ''),
(18, 48, 'UKM-PMK', 'Merupakan Unit Kegiatan Mahasiswa Politeknik Negeri Jember sebagai wadah kegiatan pembinaan kerohanian sebagai koordinasi ajaran Agama Kristen.', '', '', ''),
(19, 49, 'UKM KOTAK', 'Merupakan Unit Kegiatan Mahasiswa yang bergerak dibidang seni pertunjukkan, sandiwara, drama yang mengungkapkan pikiran atau perasaan dengan menggunakan gerak dan suara sebagai wadah atau tempat inspirasi  mahasiswa.', '', '', ''),
(20, 50, 'UKM EXPLANT', 'Merupakan Unit Kegiatan Mahasiswa Politeknik Negeri Jember, Lembaga Pers Mahasiswa yang bergerak dibidang penyediaan informasi berbasis jurnalistik.', '', '', ''),
(21, 51, 'UKM PSM', 'Merupakan Unit Kegiatan Mahasiswa dalam ruang lingkup untuk mengembangkan Teknik Bernyanyi dan Bermusik yang memberikan pengaruh besar dalam rutinitas mahasiswadan kegiatan kelembagaan.', '', '', ''),
(22, 52, 'UKM-KSR', 'merupakan Unit Kegiatan dalam himpunan PMI yang beranggotakan himpunan PMI yang menyatakan diri menjadikan KSR PMI, sudah memperoleh latihan khusus KSR.', '', '', ''),
(23, 53, 'UKM HIMAPALA', 'Merupakan organisasi pecinta alam yang menyediakan wadah bagi mahasiswa Politeknik Negeri Jember yang mempunyai minat dan bakat untuk kegiatan di alam bebas.', '', '', ''),
(24, 54, 'UKM ROBOTIKA IR-64', 'Merupakan Unit Kegiatan Mahasiswa yang dikelola mahasiswa  untuk mengembangkan gagasan bahwa koperasi sebagai soko guru perekonomian bangsa indonesia serta untuk menumbuhkan jiwa koperasi Politeknik Negeri Jember.', '', '', ''),
(25, 55, 'UKM Barabas Drum Corps', 'Merupakan Unitk Kegiatan Mahasiswa Politeknik Negeri Jember yang disahkan pada tanggal 12 Okbober 2009, yang disahkan saat Kongres Tahun 2019.', '', '', ''),
(26, 56, 'UKM-SKIM', 'Merupakan Unit Kegiatan Mahasiswa Studi Karya Ilmiah Mahasiswa, mahasiswa yang dilatih berpolafikir krisis, analitis, inovatif dan kreatif dalam menyelesaikan permasalahan secara ilmiah.', '', '', ''),
(27, 57, 'UKM Satmenwa 877', 'Merupakan Unit Kegiatan Mahasiswa satuan kekuatan yang membentuk sebagai wadah dan sarana pengembangan diri mahasiswa ke arah perluasan wawasan serta meningkatkan keikutsertaan dalam upaya Bela Negara, Pertahanan dan Keamanan Negara.', '', '', '');

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
(46, 'admin-menwa', 'dffb94a325bdfb176cafc88a71297bd4', 2),
(47, 'admin-labaik', 'ae18b79c215078e1c695211854b8130d', 2),
(48, 'admin-pmk', '4c2ebcc9d8f8b2b3150c614d11a036d5', 2),
(49, 'admin-kotak', 'e01b3094f0a5f1e8f1125ae6fc65ec79', 2),
(50, 'admin-explant', '6128e0957d9ac761592aa2613239724c', 2),
(51, 'admin-psm', '791fe30359274887daf8cfbca7bc9c66', 2),
(52, 'admin-ksr', '3d424bf0ef4c0f35347e96a53ccbaf68', 2),
(53, 'admin-himapala', 'dd76ce202f5ca6cdd9e99e416ffbaa82', 2),
(54, 'admin-robotika', '290a02a39e651d25af3ae60c5ac3f7c7', 2),
(55, 'admin-barabas', '21232f297a57a5a743894a0e4a801fc3', 2),
(56, 'admin-skim', '00a3a19871ab37cc1a580e875f8a094f', 2),
(57, 'admin-menwa', 'dffb94a325bdfb176cafc88a71297bd4', 2),
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
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_sosmed`
--
ALTER TABLE `tb_sosmed`
  MODIFY `id_sosmed` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_struktur`
--
ALTER TABLE `tb_struktur`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_ukm`
--
ALTER TABLE `tb_ukm`
  MODIFY `id_ukm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
