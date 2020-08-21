-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `t_detail_mapel`;
CREATE TABLE `t_detail_mapel` (
  `id_gurumapel` int(11) NOT NULL AUTO_INCREMENT,
  `guru_id` int(11) NOT NULL,
  `kelas_id` char(15) CHARACTER SET utf8mb4 NOT NULL,
  `mapel_id` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_gurumapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `t_detail_mapel` (`id_gurumapel`, `guru_id`, `kelas_id`, `mapel_id`) VALUES
(1,	2,	'1',	'A001'),
(2,	1,	'2',	'B001');

DROP TABLE IF EXISTS `t_guru`;
CREATE TABLE `t_guru` (
  `id_guru` int(11) NOT NULL AUTO_INCREMENT,
  `user_id_guru` int(11) NOT NULL,
  `nip` char(18) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `no_tlp` varchar(12) NOT NULL,
  `alamat_guru` text NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `t_guru` (`id_guru`, `user_id_guru`, `nip`, `nama_guru`, `no_tlp`, `alamat_guru`, `jabatan`, `foto`) VALUES
(1,	6,	'12345',	'Chau Batkunda',	'12345678',	'Malang',	'2',	'default.jpg'),
(2,	0,	'12346',	'Yerry Kalele',	'12345678',	'Malang',	'3',	'default.jpg');

DROP TABLE IF EXISTS `t_kd`;
CREATE TABLE `t_kd` (
  `id_kd` int(11) NOT NULL AUTO_INCREMENT,
  `guru_id` int(11) NOT NULL DEFAULT '0',
  `mapel_id` char(15) NOT NULL DEFAULT '0',
  `kd` text NOT NULL,
  `sub_kd` text NOT NULL,
  `ket_kd` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_kd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `t_kd` (`id_kd`, `guru_id`, `mapel_id`, `kd`, `sub_kd`, `ket_kd`) VALUES
(1,	2,	'A001',	'3.1',	'asas asada adsadsad asas',	'adad adad'),
(2,	2,	'A001',	'3.2',	'asas dada asasd asasas',	'asasad');

DROP TABLE IF EXISTS `t_kelas`;
CREATE TABLE `t_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kode_kelas` char(50) NOT NULL DEFAULT '0',
  `nama_kelas` varchar(50) NOT NULL DEFAULT '0',
  `sub_kelas` char(50) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `t_kelas` (`id_kelas`, `kode_kelas`, `nama_kelas`, `sub_kelas`) VALUES
(1,	'X01',	'XA',	''),
(2,	'X02',	'XB',	'1');

DROP TABLE IF EXISTS `t_mapel`;
CREATE TABLE `t_mapel` (
  `id_mapel` int(11) NOT NULL AUTO_INCREMENT,
  `kode_mapel` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nama_mapel` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `t_mapel` (`id_mapel`, `kode_mapel`, `nama_mapel`) VALUES
(1,	'A001',	'Agama'),
(2,	'B001',	'Bahasa Indonesia');

DROP TABLE IF EXISTS `t_nilai`;
CREATE TABLE `t_nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `kelas_id` char(11) NOT NULL,
  `mapel_id` char(11) NOT NULL DEFAULT '0',
  `siswa_id` char(20) DEFAULT NULL,
  `kd_id` int(11) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_nilai`),
  KEY `mapel_id` (`mapel_id`),
  KEY `siswa_id` (`siswa_id`),
  KEY `kd_id` (`kd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `t_siswa`;
CREATE TABLE `t_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas_id` char(11) NOT NULL,
  `nis` char(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `t_tu`;
CREATE TABLE `t_tu` (
  `id_tu` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `nip` char(20) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_tu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `t_tu` (`id_tu`, `user_id`, `nip`, `telp`, `alamat`) VALUES
(1,	1,	'12345767',	'',	''),
(4,	5,	'16510014',	'081213131',	'Malang Malang');

DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  `level` int(3) NOT NULL DEFAULT '0',
  `fotou` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `t_user` (`id_user`, `nama`, `username`, `password`, `level`, `fotou`) VALUES
(1,	'Purama Fais',	'16510039',	'$2y$10$YYBN0Wd6dGwo8UYckjxpmen1syflPuvSeH2AcE7LXEWPhMQL6Ada.',	1,	'default.jpg'),
(5,	'Yerry Kalele',	'16510014',	'$2y$10$MI5pzN3fPF.itK7aryhVgOnop.4XZX/ceg7u2w8GBHC8LgHkjxOt2',	2,	'default.jpg'),
(6,	'Chau Batkunda',	'16510013',	'$2y$10$HCVSoR9suFNbVZf48WhjAedRDP0SsQy5IXbdCkRpQSFoR1PoTPnfi',	3,	'default.jpg');

DROP TABLE IF EXISTS `t_waka`;
CREATE TABLE `t_waka` (
  `id_waka` int(11) NOT NULL AUTO_INCREMENT,
  `guru_id` int(11) NOT NULL,
  PRIMARY KEY (`id_waka`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `t_waka` (`id_waka`, `guru_id`) VALUES
(1,	1);

-- 2020-08-21 10:14:35
