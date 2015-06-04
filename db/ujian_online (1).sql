-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2015 at 12:30 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ujian_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `alamat_admin` varchar(100) NOT NULL,
  `foto_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `nama_admin`, `alamat_admin`, `foto_admin`) VALUES
('bejoo', 'bejo diningrat', 'kkkd kdkdd  djd', 'bejoo.jpg'),
('fg', 'fgf', 'fgfhh', 'fg.jpg'),
('mifta', 'nur miftahul jannah', 'bali', 'mifta.jpg'),
('rachmad', 'rachmad nurhidayat', 'Tenggarong', '253290.jpg');

--
-- Triggers `admin`
--
DELIMITER $$
CREATE TRIGGER `buat_user_admin` AFTER INSERT ON `admin`
 FOR EACH ROW begin
insert into user(id_user,password,level) values(new.username,md5(new.username),"admin");
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `hapus_data_admin` AFTER DELETE ON `admin`
 FOR EACH ROW begin
delete  from user where user.id_user = old.username;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) COLLATE utf8_swedish_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('2c8f5c3c22cfe5aaa51d9a46450aad95277698e6', '::1', 1433408266, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333430383036393b696470656e6767756e617c733a303a22223b6964677275707c733a303a22223b6e616d6170656e6767756e617c733a31313a22676667664064662e636f6d223b706c6174666f726d7c733a393a2257696e646f77732037223b62726f777365727c733a31393a224368726f6d652034332e302e323335372e3831223b6c6f676765645f696e7c733a31323a225375646168204c6f6767696e223b69645f757365727c733a373a22726163686d6164223b70617373776f72647c733a33323a223434353863313933663238333763333530346230623036316564663561616665223b6c6576656c7c733a353a2261646d696e223b),
('94fae8d32b3acf91e6f5df0795f9171492110f99', '::1', 1433408368, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333430383236363b);

-- --------------------------------------------------------

--
-- Table structure for table `dikelas`
--

CREATE TABLE IF NOT EXISTS `dikelas` (
  `nim` varchar(20) NOT NULL,
  `id_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dikelas`
--

INSERT INTO `dikelas` (`nim`, `id_kelas`) VALUES
('136310040009', '3'),
('136310040010', '1'),
('136310040011', '1');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `foto_dosen` varchar(100) NOT NULL,
  `nip` varchar(20) NOT NULL DEFAULT '',
  `nama_dosen` varchar(50) NOT NULL,
  `alamat_dosen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`foto_dosen`, `nip`, `nama_dosen`, `alamat_dosen`) VALUES
('3353535.jpg', '3353535', 'Bambang', 'Tenggarong'),
('7736428.png', '7736428', 'Sutejoo', 'Samarindaa'),
('837874.jpg', '837874', 'Tukimin', 'Sumber Sari');

--
-- Triggers `dosen`
--
DELIMITER $$
CREATE TRIGGER `hapus_data_dosen` AFTER DELETE ON `dosen`
 FOR EACH ROW begin
delete  from user where user.id_user = old.nip;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `isi_user_dosen` AFTER INSERT ON `dosen`
 FOR EACH ROW begin
insert into user(id_user,password,level) values(new.nip,md5(new.nip),"dosen");
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE IF NOT EXISTS `jawaban` (
  `id_jawaban` int(10) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `id_ujian` int(10) NOT NULL,
  `id_soal` int(10) NOT NULL,
  `jawaban` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` varchar(10) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
('JRS-001', 'Informatica Computer'),
('JRS-002', 'Business Administrasi');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` varchar(10) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `id_jurusan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `id_jurusan`) VALUES
('3', 'ba15', 'JRS-002'),
('4', 'tab05', 'JRS-002'),
('5', 'ik01', 'JRS-002'),
('6', 'tab10', 'JRS-001'),
('KLS-007', '0', 'JRS-001'),
('KLS-008', '0', 'JRS-001');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(12) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `alamat_mahasiswa` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto_mahasiswa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mahasiswa`, `alamat_mahasiswa`, `tgl_lahir`, `foto_mahasiswa`) VALUES
('136310040009', 'Rachmad nurhidayat', 'Tenggarong', '1994-08-28', '136310040009.jpg'),
('136310040011', 'Nurmiftahul', 'Tenggarong', '2015-05-12', '136310040011'),
('136310040020', 'Tukimin diningrat', 'Balikpapan', '1994-08-27', '136310040020'),
('136310040021', 'Nur Miftahul Jannah', 'Tenggarong', '1994-08-29', '136310040021.png'),
('136310040022', 'Udin', 'Sumber sari', '2015-06-21', '136310040022.jpg');

--
-- Triggers `mahasiswa`
--
DELIMITER $$
CREATE TRIGGER `hapus_data_mahasiswa` AFTER DELETE ON `mahasiswa`
 FOR EACH ROW begin

delete  from user where user.id_user = old.nim;
delete  from nilai where nim = old.nim;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `isi_user_mahasiswa` AFTER INSERT ON `mahasiswa`
 FOR EACH ROW begin
insert into user(id_user,password,level) values(new.nim,md5(new.nim),"mahasiswa");
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE IF NOT EXISTS `matakuliah` (
  `id_matakuliah` varchar(10) NOT NULL,
  `nama_matakuliah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id_matakuliah`, `nama_matakuliah`) VALUES
('1', 'Desaign Web'),
('2', 'Desaign Grafis'),
('MAK-003', 'Database');

--
-- Triggers `matakuliah`
--
DELIMITER $$
CREATE TRIGGER `hapus_ujian` AFTER DELETE ON `matakuliah`
 FOR EACH ROW begin
delete  from ujian where ujian.id_matakuliah = old.id_matakuliah;

end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `mengajar`
--

CREATE TABLE IF NOT EXISTS `mengajar` (
  `id_kelas` int(10) NOT NULL,
  `id_matakuliah` int(10) NOT NULL,
  `nip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mengajar`
--

INSERT INTO `mengajar` (`id_kelas`, `id_matakuliah`, `nip`) VALUES
(3, 1, '7736428'),
(3, 2, '7736428'),
(3, 3, '7736428');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(10) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `id_ujian` int(10) NOT NULL,
  `benar` varchar(3) NOT NULL,
  `salah` varchar(3) NOT NULL,
  `nilai` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nim`, `id_ujian`, `benar`, `salah`, `nilai`) VALUES
(1, '136310040009', 1, '0', '2', 0),
(2, '136310040009', 3, '0', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE IF NOT EXISTS `soal` (
  `id_soal` varchar(10) NOT NULL,
  `id_ujian` int(10) NOT NULL,
  `pertanyaan` text NOT NULL,
  `pilihan_a` varchar(100) NOT NULL,
  `pilihan_b` varchar(100) NOT NULL,
  `pilihan_c` varchar(100) NOT NULL,
  `pilihan_d` varchar(100) NOT NULL,
  `pilihan_e` varchar(100) NOT NULL,
  `jawaban` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE IF NOT EXISTS `ujian` (
  `id_ujian` int(10) NOT NULL,
  `nama_ujian` varchar(50) NOT NULL,
  `id_matakuliah` int(10) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujian`
--

INSERT INTO `ujian` (`id_ujian`, `nama_ujian`, `id_matakuliah`, `id_kelas`, `tanggal`, `waktu`) VALUES
(1, 'PhpMyAdmin', 2, 3, '2015-05-10', '30'),
(3, 'uji coba', 2, 3, '2015-05-10', '30'),
(8, 'kdkdk', 1, 4, '0000-00-00', '30'),
(9, 'uihh', 1, 3, '2015-06-17', '300'),
(10, 'kdkdk', 1, 3, '2015-06-14', '31');

--
-- Triggers `ujian`
--
DELIMITER $$
CREATE TRIGGER `hapus_soal` AFTER DELETE ON `ujian`
 FOR EACH ROW begin
delete  from soal where soal.id_ujian = old.id_ujian;
delete  from nilai where nilai.id_ujian = old.id_ujian;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `password`, `level`) VALUES
('136310040009', '4458c193f2837c3504b0b061edf5aafe', 'mahasiswa'),
('136310040011', '8a9ed9ea88fca9bb6112ffc1f96ffbbc', 'mahasiswa'),
('136310040020', '5f64de43a1de88d6ec35fe54194e79b2', 'mahasiswa'),
('136310040021', '2a87e8960ab65016849971282a7ebb4f', 'mahasiswa'),
('136310040022', 'd3d4c9ed3a7163dad1ca7603c4c21a2a', 'mahasiswa'),
('3353535', '034d43984a73db130165aec0d4354255', 'dosen'),
('7736428', '26df39fe78c739ac9fe165db5e22cb36', 'dosen'),
('837874', '1b599d7f6fd2cfab8e7063d8eeca9f5e', 'dosen'),
('bejoo', '8a46c42929ad693dedde69cde73169f2', 'admin'),
('fg', '3d4044d65abdda407a92991f1300ec97', 'admin'),
('mifta', '150bfb5c3fcc30c477b8253721262363', 'admin'),
('rachmad', '4458c193f2837c3504b0b061edf5aafe', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`), ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `dikelas`
--
ALTER TABLE `dikelas`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id_matakuliah`);

--
-- Indexes for table `mengajar`
--
ALTER TABLE `mengajar`
  ADD PRIMARY KEY (`id_kelas`,`id_matakuliah`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`id_ujian`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ujian`
--
ALTER TABLE `ujian`
  MODIFY `id_ujian` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
