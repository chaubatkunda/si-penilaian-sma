-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Mar 2020 pada 18.07
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbnilai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_guru`
--

CREATE TABLE `t_guru` (
  `id_tu` int(11) NOT NULL,
  `id_user` int(11) NOT NULL DEFAULT 0,
  `kode_guru` char(16) NOT NULL DEFAULT '0',
  `nama_guru` varchar(100) NOT NULL DEFAULT '0',
  `jk` varchar(20) NOT NULL DEFAULT '0',
  `no_tlp` varchar(50) NOT NULL DEFAULT '0',
  `alamat` text NOT NULL DEFAULT '0',
  `jabatan` int(11) NOT NULL DEFAULT 0,
  `foto` varchar(125) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_guru`
--

INSERT INTO `t_guru` (`id_tu`, `id_user`, `kode_guru`, `nama_guru`, `jk`, `no_tlp`, `alamat`, `jabatan`, `foto`) VALUES
(1, 1, '12345678', 'Puris', '1', '00000', 'Malang', 1, 'default.jpg'),
(2, 2, '0', 'Rindang', '1', '0', 'Malang', 2, 'default.jpg'),
(3, 3, '0', 'Catur', '1', '0', 'Malang', 3, 'default.jpg'),
(4, 0, '23232', 'wewew', '1', '32323', 'sasas', 3, 'default.jpg'),
(5, 0, '23232', 'wewewe', '2', '323232', 'wewewe', 2, 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kelas`
--

CREATE TABLE `t_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kode_kelas` char(50) NOT NULL DEFAULT '0',
  `nama_kelas` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_kelas`
--

INSERT INTO `t_kelas` (`id_kelas`, `kode_kelas`, `nama_kelas`) VALUES
(1, '001', 'XA'),
(2, '002', 'XB'),
(3, '003', 'XIA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_siswa`
--

CREATE TABLE `t_siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_kls` char(50) NOT NULL DEFAULT '0',
  `nisn` varchar(50) NOT NULL DEFAULT '0',
  `nama_siswa` varchar(100) NOT NULL DEFAULT '0',
  `tempat_lahir` varchar(100) NOT NULL DEFAULT '0',
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(15) DEFAULT NULL,
  `alamat` text NOT NULL DEFAULT '0',
  `foto` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_siswa`
--

INSERT INTO `t_siswa` (`id_siswa`, `id_kls`, `nisn`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `jk`, `alamat`, `foto`) VALUES
(4, '002', '12345', 'Chau Batkunda', 'Ambon', '2020-03-18', '1', 'Malang', 'default.jpg'),
(5, '001', '123456', 'Puris', 'Malang', '1994-03-21', '1', 'Malang', 'default.jpg'),
(6, '002', '1234567', 'Catur Pamungkas', 'Malang', '2020-03-14', '1', 'Malang', 'default.jpg'),
(7, '002', '12345678', 'Rindang', 'Malang', '2020-03-24', '1', 'Malang', 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  `level` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id_user`, `username`, `password`, `level`) VALUES
(1, '16510039', '$2y$10$NcGkRUrlkyi1FnzIEiYWL.i/N4cTCmCZyuWlwWgGHxn0D0uRkn00S', 1),
(2, '16510017', '$2y$10$LPeiWoubgYopGoFDLb0Mfu0nOnTHnXYTuSpjTPJJrnym1OVt5bQF.', 2),
(3, '16510012', '$2y$10$olibWkJ./iZ.i1es7sgXRO8lnaW84.nt0zznAbF2M5vTIniiTQTCm', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_guru`
--
ALTER TABLE `t_guru`
  ADD PRIMARY KEY (`id_tu`);

--
-- Indeks untuk tabel `t_kelas`
--
ALTER TABLE `t_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `t_siswa`
--
ALTER TABLE `t_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_guru`
--
ALTER TABLE `t_guru`
  MODIFY `id_tu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `t_kelas`
--
ALTER TABLE `t_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_siswa`
--
ALTER TABLE `t_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
