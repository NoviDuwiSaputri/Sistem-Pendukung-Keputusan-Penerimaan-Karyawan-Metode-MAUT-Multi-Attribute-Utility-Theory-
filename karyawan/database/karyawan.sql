-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2021 pada 06.53
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `input_nilai`
--

CREATE TABLE `input_nilai` (
  `id_input` int(5) NOT NULL,
  `nama_karyawan` varchar(50) DEFAULT NULL,
  `pengalaman_kerja` varchar(20) DEFAULT NULL,
  `nilai_tes` varchar(10) DEFAULT NULL,
  `jenjang_pendidikan` varchar(15) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `umur` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `input_nilai`
--

INSERT INTO `input_nilai` (`id_input`, `nama_karyawan`, `pengalaman_kerja`, `nilai_tes`, `jenjang_pendidikan`, `status`, `umur`) VALUES
(1, 'Aulia Indah', '2', '2', '1', '1', '4'),
(2, 'Nadia Wijaya', '3', '1', '2', '2', '4'),
(3, 'Ahmad Ilham', '3', '2', '2', '1', '3'),
(4, 'Ana Budiono', '4', '4', '3', '1', '4'),
(5, 'Herlinda Ayu', '2', '3', '1', '3', '4'),
(6, 'Kanza Putri', '3', '3', '1', '3', '4'),
(7, 'Icha Uttaran', '3', '3', '1', '3', '4'),
(8, 'Nadin Kusuma', '3', '3', '2', '1', '4'),
(9, 'Andi Prayoga', '3', '2', '3', '1', '3'),
(10, 'Yunanda Putra', '3', '2', '3', '1', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenjang_pendidikan`
--

CREATE TABLE `jenjang_pendidikan` (
  `id_pendidikan` int(5) NOT NULL,
  `jenjang_pendidikan` varchar(20) DEFAULT NULL,
  `bobot` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenjang_pendidikan`
--

INSERT INTO `jenjang_pendidikan` (`id_pendidikan`, `jenjang_pendidikan`, `bobot`) VALUES
(1, 'SMA', '1'),
(2, 'D3/D4', '2'),
(3, 'S1', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(5) NOT NULL,
  `nama_karyawan` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `nohp` varchar(13) DEFAULT NULL,
  `pengalaman_kerja` varchar(20) DEFAULT NULL,
  `nilai_tes` varchar(10) DEFAULT NULL,
  `jenjang_pendidikan` varchar(20) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `umur` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `alamat`, `nohp`, `pengalaman_kerja`, `nilai_tes`, `jenjang_pendidikan`, `status`, `umur`) VALUES
(1, 'Aulia Indah', 'Lamongan', '089134567456', '6 Bulan', '49', 'SMA', 'Menikah', '22'),
(2, 'Nadia Wijaya', 'Jombang', '081341999008', '1 Tahun', '30', 'D3', 'Janda', '25'),
(3, 'Ahmad Ilham', 'Tuban', '085666578098', '2 Bulan', '50', 'D4', 'Menikah', '30'),
(4, 'Ana Budiono', 'Bojonegoro', '081908861445', '3 Tahun', '80', 'S1', 'Menikah', '27'),
(5, 'Herlinda Ayu', 'Madura', '089913455187', '5 Bulan', '73', 'SMA', 'Belum Menikah', '20'),
(6, 'Kanza Putri', 'Mojokerto', '088543387409', '8 Bulan', '66', 'SMA', 'Belum Menikah', '20'),
(7, 'Icha Uttaran', 'Nganjuk', '066511439876', '10 bulan', '71', 'SMA', 'Belum Menikah', '19'),
(8, 'Nadin Kusuma', 'Gresik', '082209121187', '7 Bulan', '60', 'D4', 'Menikah', '26'),
(9, 'Andi Prayoga', 'Sidoarjo', '099521548876', '1 Tahun', '51', 'S1', 'Menikah', '29'),
(10, 'Yunanda Putra', 'Malang', '089521347755', '2 Tahun', '41', 'S1', 'Menikah', '31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(5) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nama_kriteria` varchar(25) NOT NULL,
  `atribut` varchar(10) NOT NULL,
  `bobot` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id`, `kode`, `nama_kriteria`, `atribut`, `bobot`) VALUES
(1, 'C1', 'Pengalaman Kerja', 'Benefit', '0,25'),
(2, 'C2', 'Nilai Tes', 'Benefit', '0,25'),
(3, 'C3', 'Jenjang Pendidikan', 'Benefit', '0,2'),
(4, 'C4', 'Status', 'Benefit', '0,15'),
(5, 'C5', 'Umur', 'Benefit', '0,15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_tes`
--

CREATE TABLE `nilai_tes` (
  `id_nilai` int(5) NOT NULL,
  `nilai_tes` varchar(10) DEFAULT NULL,
  `bobot` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_tes`
--

INSERT INTO `nilai_tes` (`id_nilai`, `nilai_tes`, `bobot`) VALUES
(1, '0-39', '1'),
(2, '40-59', '2'),
(3, '60-79', '3'),
(4, '80-100', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalaman_kerja`
--

CREATE TABLE `pengalaman_kerja` (
  `id_pengalaman` int(5) NOT NULL,
  `pengalaman_kerja` varchar(20) DEFAULT NULL,
  `bobot` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengalaman_kerja`
--

INSERT INTO `pengalaman_kerja` (`id_pengalaman`, `pengalaman_kerja`, `bobot`) VALUES
(1, 'Tidak Ada', '1'),
(2, '1-6 Bulan', '2'),
(3, '7 Bulan - 2 Tahun', '3'),
(4, '>2 Tahun', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` int(5) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `bobot` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `status`, `bobot`) VALUES
(1, 'Menikah', '1'),
(2, 'Janda/Duda', '2'),
(3, 'Belum Menikah', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `umur`
--

CREATE TABLE `umur` (
  `id_umur` int(5) NOT NULL,
  `umur` varchar(13) DEFAULT NULL,
  `bobot` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `umur`
--

INSERT INTO `umur` (`id_umur`, `umur`, `bobot`) VALUES
(1, '45-54 Tahun', '1'),
(2, '36-44 Tahun', '2'),
(3, '28-35 Tahun', '3'),
(4, '19-27 Tahun', '4');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `input_nilai`
--
ALTER TABLE `input_nilai`
  ADD PRIMARY KEY (`id_input`);

--
-- Indeks untuk tabel `jenjang_pendidikan`
--
ALTER TABLE `jenjang_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai_tes`
--
ALTER TABLE `nilai_tes`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `pengalaman_kerja`
--
ALTER TABLE `pengalaman_kerja`
  ADD PRIMARY KEY (`id_pengalaman`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `umur`
--
ALTER TABLE `umur`
  ADD PRIMARY KEY (`id_umur`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `input_nilai`
--
ALTER TABLE `input_nilai`
  MODIFY `id_input` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `jenjang_pendidikan`
--
ALTER TABLE `jenjang_pendidikan`
  MODIFY `id_pendidikan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `nilai_tes`
--
ALTER TABLE `nilai_tes`
  MODIFY `id_nilai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengalaman_kerja`
--
ALTER TABLE `pengalaman_kerja`
  MODIFY `id_pengalaman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `umur`
--
ALTER TABLE `umur`
  MODIFY `id_umur` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
