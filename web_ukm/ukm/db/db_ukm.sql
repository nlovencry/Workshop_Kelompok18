-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 12:39 PM
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
(1, 1, 'Basket', 'Nando'),
(6, 1, 'Voli', 'Kana'),
(7, 11, 'Divisi 1', 'Alfyan'),
(8, 11, 'Divisi 2', 'Nando');

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
(12, 1, 'Meeting Online', 'assa', '18630_0e119f588e3810f26b88816a3c5fabf9.jpg'),
(13, 11, 'Foto Pengurus ', 'Periode 2017-2018', '9792_7..jpg'),
(14, 11, 'Pertemuan di Batalyon', '-', '3377_2.jpg'),
(15, 11, 'Foto Pengurus Inti', 'Periode 2018-2019', '15382_6..jpg'),
(16, 11, 'Upacara Hari Kemerdekaan', 'di Lapangan Hijau Polije ', '31097_5.jpg');

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
  `angkatan` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim_mhs`, `id_prodi`, `nama_mhs`, `jk`, `no_wa`, `email`, `angkatan`, `alamat`, `id_user`) VALUES
('E41191322', 1, 'Bunga', 'Perempuan', '083111693588', 'bunga@gmail.com', 2019, 'Jember', 41);

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

--
-- Dumping data for table `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id_prestasi`, `id_ukm`, `nama_prestasi`) VALUES
(1, 1, 'Juara 1 Lomba Basket Putri tingkat Propinsi'),
(2, 1, 'Juara 2 Lomba Basket Putra tingkat Kabupaten'),
(3, 2, 'Juara Umum Speech Tingkat Kabupaten'),
(7, 2, 'Juara 1 Story Telling Tingkat Regional tahun 2018'),
(8, 11, 'Juara 1 Tingkat Kabupaten '),
(9, 11, 'Juara Harapan PBB Putri Tingkat Propinsi'),
(10, 11, 'Juara 3 PBB Putra Tingkat Propinsi'),
(11, 11, 'Peserta Terbaik Festival Jember 2018');

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

--
-- Dumping data for table `tb_struktur`
--

INSERT INTO `tb_struktur` (`id_struktur`, `id_ukm`, `nama_mhs`, `id_jabatan`, `id_prodi`, `angkatan`, `foto`) VALUES
(1, 1, 'Ahmad Zayn', 1, 16, '2018', ''),
(2, 1, 'Mayasari Eka Putri', 2, 7, '2018', ''),
(3, 2, 'Puti Anisatur Rohman', 1, 15, '2018', ''),
(7, 1, 'Nur Azizah', 3, 12, '2019', '12226_0c929776a84f3b63080633abd4031648.jpg'),
(8, 1, 'Alfyan Putra', 4, 1, '2019', '31629_4abeecb7399e4a469c2368ab551d2618.jpg'),
(9, 11, 'Suroto Edy Nur', 1, 1, '2019', '19643_120be938c42ee27464e8bebbc13832a6.jpg'),
(10, 11, 'Fahmi Putra Wibisono', 2, 6, '2019', '12174_c6eb8809af67189a491c6165f4eb8968.jpg'),
(11, 11, 'David Adrian Putra', 3, 7, '2019', '21976_5bdacbb317a4d5c87ee2da6fc0d3839e.jpg'),
(12, 11, 'Wahyu Rizky Purnomo', 4, 21, '2019', '13231_bad4417b454c507f8c593038b54ec946.jpg'),
(13, 11, 'Nauval Dandi ', 5, 9, '2019', '956_2c80960ea6f19b66d252e78f786b2081.jpg'),
(14, 11, 'Juna Firmansyah', 6, 26, '2019', '14277_841180311c7d87d30d9b4ebd6ba0219e.jpg');

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
(1, 32, 'UKM-O', 'Unit Kegiatan Mahasiswa Olahraga', 'Memiliki ashaha', '<p>1. jadbajdb</p>\r\n\r\n<p>2. jsdgbua</p>\r\n\r\n<p>3. jhasdaik</p>\r\n', '8272_LOGO POLITEKNIK NEGERI  JEMBER.png'),
(2, 0, 'E-CLUB', 'Unit Kegiatan Mahasiswa English Club', 'memiliki jsanska', '', ''),
(3, 0, 'ROBOTIKA IR-64', 'Unit Kegiatan Mahasiswa Robotika IR-64', '', '', ''),
(4, 0, 'RASPOL', 'Unit Kegiatan Mahasiswa Pramuka Racana Arjuna-Srikandi Gugusdepan Jember 02.155-02.156 Pangkalan Politeknik Negeri Jember', '', '', ''),
(5, 0, 'KSR PMI', 'Unit Kegiatan Mahasiswa Korps Suka Rela Palang Merah Indonesia Unit Politeknik Negeri Jember', '', '', ''),
(10, 0, 'LUMUT', 'Unit Kegiatan Mahasiswa Lukis Musik Tari', 'memiliki dajhdauauadadasdsd', '<p>1. qwertyuiop</p>\r\n\r\n<p>2. asdjkl</p>\r\n\r\n<p>3. zxcnm</p>\r\n', '24332_LOGO POLITEKNIK NEGERI  JEMBER.png'),
(11, 33, 'MENWA 877', 'Unit Kegiatan Mahasiswa Resimen Mahasiswa 877', 'Sebagai wadah penyalur potensi mahasiswa dalam rangka mewujudkan hak dan kewajiban Warga Negara dan bela negara.', '<p>1. Merencanakan, mempersiapkan dan menyusun potensi mahasiswa pada setiap provinsi daerah tingkat 1, untuk menetapkan ketahanan nasional, dengan melaksanakan usaha dan kegiatan rutin.</p>\r\n\r\n<p>2.&nbsp;Sebagai wadah sarana pengembangan diri Mahasiswa ke arah perluasan wawasan dan peningkatan keikutsertaan dalam upaya bela negara yang disusun, dikoorganisasikan dan dibentuk secara kewilayahan pada setiap provinsi daerah tingkat 1, dan suatu resimen mahasiswa (SATMENWA).</p>\r\n', '1762_3. menwa.png');

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
(32, 'admin-olahraga', 'b5c68d3407e971f95e0ccadac8e7a063', 2),
(33, 'admin-menwa', '3e3d18edd0f0d924ea192d2b87badacc', 2),
(41, 'bunga', '385f719f8dc7c85efbae03eb38bff95a', 3);

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
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id_ukm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
