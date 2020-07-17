-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 04:03 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jgs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `mapel` varchar(125) NOT NULL,
  `role_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `email`, `tgl_lahir`, `alamat`, `mapel`, `role_id`) VALUES
(7, 'Nida', 'nida@gmail.com', '2000-06-01', 'Jatiwaringin', 'Bahasa Inggris', 2),
(8, 'Gilang', 'gilang@gmail.com', '1999-02-09', 'Jatiasih', 'Matematika', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nis` int(6) NOT NULL,
  `nama` varchar(126) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `mapel` varchar(126) NOT NULL,
  `nilai_uts` int(11) NOT NULL,
  `nilai_uas` int(11) NOT NULL,
  `rerata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nis`, `nama`, `kelas`, `mapel`, `nilai_uts`, `nilai_uas`, `rerata`) VALUES
(1, 1210001, 'Nida', '10', 'Matematika', 60, 60, 60),
(4, 1210002, 'Nana', '10', 'Bahasa Inggris', 95, 90, 93),
(5, 1210002, 'Nana', '10', 'Matematika', 76, 76, 76),
(6, 1210002, 'Nana', '10', 'Bahasa indonesia', 89, 100, 95),
(7, 1210004, 'Dwi', '11', 'Matematika', 88, 88, 88),
(9, 1210005, 'Dian', '12', 'Matematika', 55, 55, 55),
(10, 1210005, 'Dian', '12', 'Bahasa indonesia', 80, 80, 80),
(12, 1210004, 'Dwi', '11', 'Bahasa Inggris', 77, 77, 77),
(13, 1210004, 'Dwi', '11', 'Bahasa indonesia', 66, 66, 66),
(14, 1210005, 'Dian', '12', 'Bahasa Inggris', 77, 77, 77),
(15, 1210006, 'Indra', '12', 'Bahasa indonesia', 44, 80, 62),
(16, 1210001, 'Nida', '10', 'Bahasa indonesia', 70, 90, 80),
(17, 1210001, 'Nida', '10', 'Bahasa Inggris', 77, 77, 77);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(6) NOT NULL,
  `kelas` int(2) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `role_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `kelas`, `nama`, `tgl_lahir`, `role_id`) VALUES
(1210001, 10, 'Nida', '2020-05-01', 3),
(1210002, 10, 'Nana', '1999-02-01', 3),
(1210003, 10, 'ripan', '1996-07-08', 3),
(1210004, 11, 'Dwi', '2000-01-05', 3),
(1210005, 12, 'Dian', '2000-05-05', 3),
(1210006, 12, 'Indra', '2020-05-30', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(225) NOT NULL,
  `img` varchar(225) NOT NULL,
  `id` int(11) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `role_id` varchar(128) NOT NULL,
  `is_active` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `img`, `id`, `password`, `nama`, `role_id`, `is_active`) VALUES
('nida12@gmail.com', 'default.jpg', 21, '$2y$10$heLql.nMowqiRk0iROmB9eQ2NGWF5D3CvO6mNAXoenOV20ma2uDei', 'Nida Aulia', '1', 1),
('dians@gmail.com', 'default.jpg', 22, '$2y$10$Fs117mPoLNH5rXTzpIRwAeGE6wUOkE3rxLVO8j3.Tq9PdmjVoVIOW', 'Dian Min', '1', 1),
('rivan@gmail.com', 'default.jpg', 23, '$2y$10$3Fh55WyZDgYtkSQdiQxcKughFMavfgbRfj4caCHl2s./26JsJr0Se', 'Rivan AO', '2', 1),
('noni@gmail.com', 'default.jpg', 27, '$2y$10$UPes6et18ZQfIKDXGBw0yuYObvSRkRCWjDgm4R8d3X0LlUkD/BQ7C', 'noni', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 16),
(2, 1, 0),
(3, 1, 18),
(4, 1, 19),
(5, 1, 20),
(6, 1, 21),
(7, 1, 6),
(8, 2, 17),
(9, 2, 19),
(10, 2, 21),
(11, 3, 22),
(12, 3, 23);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(16, 'Admin'),
(17, 'Guru'),
(18, 'Input'),
(19, 'Kelas'),
(20, 'Menu'),
(22, 'siswa'),
(23, 'Nilai');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'guru'),
(3, 'peserta_didik');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(24, 16, 'Dashboard', 'admin', 'fas fa-fw fa-user', 1),
(25, 17, 'Profile Guru', 'guru', 'fas fa-fw fa-chalkboard-teacher', 1),
(26, 18, 'Input Siswa', 'input', 'fas fa-fw fa-pencil-alt', 1),
(28, 19, 'Kelas 10', 'kelas', 'fas fa-user-plus', 1),
(29, 19, 'Kelas 11', 'kelas/sebelas', 'fas fa-user-plus', 1),
(30, 19, 'Kelas 12', 'kelas/duabelas', 'fas fa-user-plus', 1),
(31, 20, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(32, 20, 'subMenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(34, 21, 'Lihat Rapot', 'rapot', 'fas fa-fw fa-eye', 1),
(40, 18, 'Input Guru', 'input/guru', 'fas fa-fw fa-pencil-alt', 1),
(41, 23, 'Nilai Siswa', 'siswa/nilai', 'fas fa-fw fa-folder', 1),
(42, 22, 'Dashboard', 'siswa', 'fas fa-fw fa-user', 1),
(44, 22, 'Profil Siswa', 'siswa/profil', 'fas fa-fw fa-pencil-alt', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `nis` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1219802;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
