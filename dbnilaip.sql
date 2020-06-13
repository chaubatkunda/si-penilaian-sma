-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2020 pada 12.32
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

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
  `nama` varchar(100) NOT NULL DEFAULT '0',
  `jk` varchar(20) NOT NULL DEFAULT '0',
  `no_tlp` varchar(50) NOT NULL DEFAULT '0',
  `alamat` text NOT NULL DEFAULT '0',
  `jabatan` int(11) NOT NULL DEFAULT 0,
  `foto` varchar(125) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_guru`
--

INSERT INTO `t_guru` (`id_tu`, `id_user`, `kode_guru`, `nama`, `jk`, `no_tlp`, `alamat`, `jabatan`, `foto`) VALUES
(1, 1, '12345678', 'Puris', '1', '00000', 'Malang', 1, 'default.jpg'),
(2, 2, '321', 'Rindang', '1', '0', 'Malang', 2, 'default.jpg'),
(3, 3, '123', 'Catur', '1', '0', 'Malang', 3, 'default.jpg'),
(4, 0, '23232', 'wewew', '1', '32323', 'sasas', 3, 'default.jpg'),
(5, 0, '23232', 'wewewe', '2', '323232', 'wewewe', 2, 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_gurumapel`
--

CREATE TABLE `t_gurumapel` (
  `id_gurumapel` int(11) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kd`
--

CREATE TABLE `t_kd` (
  `id_kd` int(11) NOT NULL,
  `guru_id` int(11) NOT NULL DEFAULT 0,
  `nilai_id` int(11) NOT NULL DEFAULT 0,
  `mapel_id` int(11) NOT NULL DEFAULT 0,
  `sub_kd` int(11) DEFAULT NULL,
  `ket_kd` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Struktur dari tabel `t_mapel`
--

CREATE TABLE `t_mapel` (
  `id_mapel` int(11) NOT NULL,
  `kode_mapel` varchar(50) DEFAULT NULL,
  `nama_mapel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_mapel`
--

INSERT INTO `t_mapel` (`id_mapel`, `kode_mapel`, `nama_mapel`) VALUES
(1, '001', 'Fisika'),
(2, '002', 'Biologi'),
(3, '003', 'Kimia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_nilai`
--

CREATE TABLE `t_nilai` (
  `id_nilai` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL DEFAULT 0,
  `siswa_id` int(11) DEFAULT NULL,
  `kd_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_siswa`
--

CREATE TABLE `t_siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_kls` char(50) NOT NULL DEFAULT '0',
  `nisn` varchar(50) NOT NULL DEFAULT '0',
  `nama` varchar(100) NOT NULL DEFAULT '0',
  `tempat_lahir` varchar(100) NOT NULL DEFAULT '0',
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(15) DEFAULT NULL,
  `alamat` text NOT NULL DEFAULT '0',
  `foto` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_siswa`
--

INSERT INTO `t_siswa` (`id_siswa`, `id_kls`, `nisn`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `alamat`, `foto`) VALUES
(5, '001', '123456', 'Puris', 'Malang', '1994-03-21', '1', 'Malang', 'default.jpg'),
(8, '001', '12345', 'Alan', 'Malang', '2020-05-12', '1', 'Malang', 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  `level` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, '0', '16510039', '$2y$10$NcGkRUrlkyi1FnzIEiYWL.i/N4cTCmCZyuWlwWgGHxn0D0uRkn00S', 1),
(2, '0', '16510017', '$2y$10$LPeiWoubgYopGoFDLb0Mfu0nOnTHnXYTuSpjTPJJrnym1OVt5bQF.', 2),
(3, '0', '16510012', '$2y$10$olibWkJ./iZ.i1es7sgXRO8lnaW84.nt0zznAbF2M5vTIniiTQTCm', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_waka`
--

CREATE TABLE `t_waka` (
  `id_waka` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL DEFAULT 0,
  `guru_id` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_waka`
--

INSERT INTO `t_waka` (`id_waka`, `mapel_id`, `guru_id`) VALUES
(1, 1, '12345678'),
(2, 3, '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_guru`
--
ALTER TABLE `t_guru`
  ADD PRIMARY KEY (`id_tu`);

--
-- Indeks untuk tabel `t_gurumapel`
--
ALTER TABLE `t_gurumapel`
  ADD PRIMARY KEY (`id_gurumapel`);

--
-- Indeks untuk tabel `t_kd`
--
ALTER TABLE `t_kd`
  ADD PRIMARY KEY (`id_kd`);

--
-- Indeks untuk tabel `t_kelas`
--
ALTER TABLE `t_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `t_mapel`
--
ALTER TABLE `t_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `t_nilai`
--
ALTER TABLE `t_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `mapel_id` (`mapel_id`),
  ADD KEY `siswa_id` (`siswa_id`),
  ADD KEY `kd_id` (`kd_id`);

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
-- Indeks untuk tabel `t_waka`
--
ALTER TABLE `t_waka`
  ADD PRIMARY KEY (`id_waka`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_guru`
--
ALTER TABLE `t_guru`
  MODIFY `id_tu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `t_kd`
--
ALTER TABLE `t_kd`
  MODIFY `id_kd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_kelas`
--
ALTER TABLE `t_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_mapel`
--
ALTER TABLE `t_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_nilai`
--
ALTER TABLE `t_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_siswa`
--
ALTER TABLE `t_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_waka`
--
ALTER TABLE `t_waka`
  MODIFY `id_waka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
