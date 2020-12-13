-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2020 pada 18.01
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_divisi_ukm`
--

CREATE TABLE `tb_divisi_ukm` (
  `ID_DIVISI_UKM` int(11) NOT NULL,
  `ID_UKM` int(11) NOT NULL,
  `NAMA_DIVISI` varchar(50) DEFAULT NULL,
  `NAMA_CO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `NIM_MHS` varchar(10) NOT NULL,
  `NAMA_MHS` varchar(50) DEFAULT NULL,
  `TTL` date DEFAULT NULL,
  `JENIS_KELAMIN` varchar(20) DEFAULT NULL,
  `JURUSAN` varchar(50) DEFAULT NULL,
  `PRODI` varchar(20) DEFAULT NULL,
  `ANGKATAN` int(11) DEFAULT NULL,
  `NO_TELP` varchar(20) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `ID_PENDAFTARAN` int(11) NOT NULL,
  `ID_DIVISI_UKM` int(11) NOT NULL,
  `ID_UKM` int(11) NOT NULL,
  `NIM_MHS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ukm`
--

CREATE TABLE `tb_ukm` (
  `ID_UKM` int(11) NOT NULL,
  `NAMA_UKM` varchar(100) DEFAULT NULL,
  `KETUA_UKM` varchar(50) DEFAULT NULL,
  `WAKIL_UKM` varchar(50) DEFAULT NULL,
  `SEKRETARIS1_UKM` varchar(50) DEFAULT NULL,
  `SEKRETARIS2_UKM` varchar(50) DEFAULT NULL,
  `BENDAHARA1_UKM` varchar(50) DEFAULT NULL,
  `BENDAHARA2_UKM` varchar(50) DEFAULT NULL,
  `VISI_UKM` varchar(100) DEFAULT NULL,
  `MISI_UKM` varchar(200) DEFAULT NULL,
  `LOGO_UKM` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `ID_USER` int(11) NOT NULL,
  `USERNAME` varchar(20) DEFAULT NULL,
  `NO_TELP` varchar(20) DEFAULT NULL,
  `LEVEL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_divisi_ukm`
--
ALTER TABLE `tb_divisi_ukm`
  ADD PRIMARY KEY (`ID_DIVISI_UKM`),
  ADD KEY `FK_MEMPUNYAI` (`ID_UKM`);

--
-- Indeks untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`NIM_MHS`);

--
-- Indeks untuk tabel `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`ID_PENDAFTARAN`),
  ADD KEY `FK_MELAKUKAN` (`NIM_MHS`),
  ADD KEY `FK_MEMILIH` (`ID_DIVISI_UKM`),
  ADD KEY `FK_MEMILIKI` (`ID_UKM`);

--
-- Indeks untuk tabel `tb_ukm`
--
ALTER TABLE `tb_ukm`
  ADD PRIMARY KEY (`ID_UKM`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_divisi_ukm`
--
ALTER TABLE `tb_divisi_ukm`
  ADD CONSTRAINT `FK_MEMPUNYAI` FOREIGN KEY (`ID_UKM`) REFERENCES `tb_ukm` (`ID_UKM`);

--
-- Ketidakleluasaan untuk tabel `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD CONSTRAINT `FK_MELAKUKAN` FOREIGN KEY (`NIM_MHS`) REFERENCES `tb_mahasiswa` (`NIM_MHS`),
  ADD CONSTRAINT `FK_MEMILIH` FOREIGN KEY (`ID_DIVISI_UKM`) REFERENCES `tb_divisi_ukm` (`ID_DIVISI_UKM`),
  ADD CONSTRAINT `FK_MEMILIKI` FOREIGN KEY (`ID_UKM`) REFERENCES `tb_ukm` (`ID_UKM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
