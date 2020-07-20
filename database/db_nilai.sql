-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `t_guru`;
CREATE TABLE `t_guru` (
  `id_guru` int(11) NOT NULL AUTO_INCREMENT,
  `user_id_guru` int(11) NOT NULL,
  `kode_guru` char(18) CHARACTER SET utf8mb4 NOT NULL,
  `nama_guru` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `jk_guru` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `no_tlp` varchar(12) CHARACTER SET utf8mb4 NOT NULL,
  `alamat_guru` text CHARACTER SET utf8mb4 NOT NULL,
  `jabatan` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii;


DROP TABLE IF EXISTS `t_gurumapel`;
CREATE TABLE `t_gurumapel` (
  `id_gurumapel` int(11) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_gurumapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_kd`;
CREATE TABLE `t_kd` (
  `id_kd` int(11) NOT NULL,
  `guru_id` int(11) NOT NULL DEFAULT '0',
  `nilai_id` int(11) NOT NULL DEFAULT '0',
  `mapel_id` int(11) NOT NULL DEFAULT '0',
  `sub_kd` int(11) DEFAULT NULL,
  `ket_kd` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_kelas`;
CREATE TABLE `t_kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kelas` char(50) NOT NULL DEFAULT '0',
  `nama_kelas` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `t_kelas` (`id_kelas`, `kode_kelas`, `nama_kelas`) VALUES
(1,	'001',	'X1'),
(2,	'002',	'X2');

DROP TABLE IF EXISTS `t_mapel`;
CREATE TABLE `t_mapel` (
  `id_mapel` int(11) NOT NULL AUTO_INCREMENT,
  `kode_mapel` varchar(50) DEFAULT NULL,
  `nama_mapel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `t_mapel` (`id_mapel`, `kode_mapel`, `nama_mapel`) VALUES
(1,	'B001',	'Bahasa Indonesia'),
(2,	'B002',	'Bahasa Jerman');

DROP TABLE IF EXISTS `t_nilai`;
CREATE TABLE `t_nilai` (
  `id_nilai` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL DEFAULT '0',
  `siswa_id` int(11) DEFAULT NULL,
  `kd_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_nilai`),
  KEY `mapel_id` (`mapel_id`),
  KEY `siswa_id` (`siswa_id`),
  KEY `kd_id` (`kd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `t_siswa`;
CREATE TABLE `t_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas_id` int(11) NOT NULL,
  `nis` char(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `t_siswa` (`id`, `kelas_id`, `nis`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `alamat`, `foto`) VALUES
(1,	1,	'1231311',	'gfgfg',	'dsd',	'2020-07-13',	'1',	'sasas',	'sewa_fasilitas3.JPG');

DROP TABLE IF EXISTS `t_tu`;
CREATE TABLE `t_tu` (
  `id_tu` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `nip` char(20) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_tu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `t_tu` (`id_tu`, `user_id`, `nip`, `jk`, `telp`, `alamat`) VALUES
(1,	0,	'12345767',	'Laki-laki',	'',	'');

DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  `level` int(3) NOT NULL DEFAULT '0',
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `t_user` (`id_user`, `nama`, `username`, `password`, `level`, `foto`) VALUES
(1,	'Puris',	'16510039',	'$2y$10$NcGkRUrlkyi1FnzIEiYWL.i/N4cTCmCZyuWlwWgGHxn0D0uRkn00S',	1,	'default.jpg');

DROP TABLE IF EXISTS `t_waka`;
CREATE TABLE `t_waka` (
  `id_waka` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL DEFAULT '0',
  `guru_id` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP VIEW IF EXISTS `view_login`;
CREATE TABLE `view_login` (`id_user` int(11), `username` varchar(30), `nama` varchar(255), `password` varchar(255), `level` int(3), `foto` varchar(255), `id_guru` int(11), `user_id_guru` int(11), `id_tu` int(11), `user_id` int(11), `nip` char(20));


DROP TABLE IF EXISTS `view_login`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_login` AS select `u`.`id_user` AS `id_user`,`u`.`username` AS `username`,`u`.`nama` AS `nama`,`u`.`password` AS `password`,`u`.`level` AS `level`,`u`.`foto` AS `foto`,`g`.`id_guru` AS `id_guru`,`g`.`user_id_guru` AS `user_id_guru`,`t`.`id_tu` AS `id_tu`,`t`.`user_id` AS `user_id`,`t`.`nip` AS `nip` from ((`t_user` `u` left join `t_tu` `t` on((`u`.`id_user` = `t`.`user_id`))) left join `t_guru` `g` on((`g`.`user_id_guru` = `u`.`id_user`)));

-- 2020-07-14 08:39:11
