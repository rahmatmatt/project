-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 03:28 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tribalamina`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_menu`
--

CREATE TABLE `tabel_menu` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(25) NOT NULL,
  `is_main_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_menu`
--

INSERT INTO `tabel_menu` (`id`, `nama_menu`, `link`, `icon`, `is_main_menu`) VALUES
(1, 'Dashboard', 'tampilan_utama', 'fa fa-home', 0),
(2, 'All Trials', 'trials', 'fa fa-table', 0),
(3, 'Entry', '#', 'fa fa-folder', 0),
(4, 'Treatment Data', 'treatment', ' fa fa-folder', 3),
(5, 'Measurement Data', 'measurement', 'fa fa-folder', 3),
(6, 'Laboratory Data', 'laboratory', 'fa fa-folder', 3),
(11, 'View', 'view', 'fa fa-database', 0),
(12, 'Statistic', 'statistic', 'fa fa-line-chart', 0),
(13, 'Graph', 'graph', 'fa fa-bar-chart', 0),
(14, 'User Management', 'user', 'fa fa-id-badge', 0),
(15, 'Menu', 'menu', 'fa fa-list', 0),
(17, 'Nilai', 'nilai', 'fa fa-archive', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level_user`
--

CREATE TABLE `tbl_level_user` (
  `id_level_user` int(11) NOT NULL,
  `nama_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_level_user`
--

INSERT INTO `tbl_level_user` (`id_level_user`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'Walikelas'),
(3, 'Guru'),
(4, 'Keuangan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `id_level_user` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_lengkap`, `username`, `password`, `id_level_user`, `foto`) VALUES
(1, 'Muhammad Rahmat', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'palm2.png'),
(2, 'Muhammad Mulvi', 'mulvi', 'e10adc3949ba59abbe56e057f20f883e', 1, 'user-siluet1.jpg'),
(3, 'Ika Nurul Fadhila', 'ika', 'e10adc3949ba59abbe56e057f20f883e', 4, 'user-siluet3.jpg'),
(4, 'A', 'admin2', 'c84258e9c39059a89ab77d846ddab909', 1, 'palm21.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_rule`
--

CREATE TABLE `tbl_user_rule` (
  `id_rule` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_rule`
--

INSERT INTO `tbl_user_rule` (`id_rule`, `id_menu`, `id_level_user`) VALUES
(1, 16, 4),
(2, 1, 1),
(3, 2, 1),
(4, 3, 1),
(5, 4, 1),
(6, 5, 1),
(7, 7, 1),
(8, 8, 1),
(9, 11, 1),
(10, 6, 1),
(11, 14, 1),
(12, 15, 1),
(13, 13, 1),
(14, 12, 1),
(15, 10, 1),
(16, 9, 1),
(17, 11, 3),
(19, 17, 3),
(20, 18, 3),
(21, 12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `trials`
--

CREATE TABLE `trials` (
  `trial_code` char(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `location` varchar(16) NOT NULL,
  `block` varchar(6) NOT NULL,
  `palm_age` varchar(3) NOT NULL,
  `installation_date` date NOT NULL,
  `start` date NOT NULL,
  `finish` date NOT NULL,
  `last_update` date NOT NULL,
  `tot_treatment` int(5) NOT NULL,
  `tot_time_squence` int(5) NOT NULL,
  `tot_habitat_type` int(5) NOT NULL,
  `tot_baits` int(5) NOT NULL,
  `tot_hole` int(5) NOT NULL,
  `treatment` varchar(10) NOT NULL,
  `time_squence` int(3) NOT NULL,
  `replicate` varchar(3) NOT NULL,
  `habitat_type` int(30) NOT NULL,
  `baits` varchar(3) NOT NULL,
  `hole` int(5) NOT NULL,
  `score` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trials`
--

INSERT INTO `trials` (`trial_code`, `title`, `location`, `block`, `palm_age`, `installation_date`, `start`, `finish`, `last_update`, `tot_treatment`, `tot_time_squence`, `tot_habitat_type`, `tot_baits`, `tot_hole`, `treatment`, `time_squence`, `replicate`, `habitat_type`, `baits`, `hole`, `score`) VALUES
('BCDS109', 'Kinetic of EFB decomposition 1st', 'Pekanbaru', 'F2', '15', '0000-00-00', '2021-02-01', '2021-02-16', '0000-00-00', 0, 0, 0, 0, 0, 'Control', 4, '4', 4, '4', 3, 0),
('KNDE01', 'Kinetic of EFB decomposition 1st', 'KNDE', 'I13', '26', '0000-00-00', '0000-00-00', '0000-00-00', '2021-02-06', 0, 0, 0, 0, 0, 'Control', 1, '3', 0, '10', 16, 0),
('SRKE109', 'Monitoring Soil EFB ', 'Rokan', 'R45', '15', '0000-00-00', '2021-02-01', '2021-02-27', '0000-00-00', 0, 0, 0, 0, 0, '', 0, '', 0, '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_level_user`
--
ALTER TABLE `tbl_level_user`
  ADD PRIMARY KEY (`id_level_user`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_user_rule`
--
ALTER TABLE `tbl_user_rule`
  ADD PRIMARY KEY (`id_rule`);

--
-- Indexes for table `trials`
--
ALTER TABLE `trials`
  ADD PRIMARY KEY (`trial_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_level_user`
--
ALTER TABLE `tbl_level_user`
  MODIFY `id_level_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_user_rule`
--
ALTER TABLE `tbl_user_rule`
  MODIFY `id_rule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
