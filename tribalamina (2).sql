-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 09:26 AM
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
(16, 'Menu', 'menu', 'fa fa-list', 0);

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
(2, 'Operator');

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
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'palm2.png'),
(5, 'Operator', 'operator', '4b583376b2767b923c3e1da60d10de59', 2, '');

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
(21, 12, 3),
(22, 1, 2),
(23, 2, 2),
(24, 3, 2),
(25, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `id` int(11) NOT NULL,
  `trial_code` char(10) NOT NULL,
  `installation_date` date NOT NULL,
  `treatment` varchar(20) NOT NULL,
  `time_squence` int(5) NOT NULL,
  `tgl_input` date NOT NULL,
  `days_after` int(5) NOT NULL,
  `replicate` int(5) NOT NULL,
  `habitat_type` varchar(20) NOT NULL,
  `baits` int(5) NOT NULL,
  `hole` int(5) NOT NULL,
  `score` int(5) NOT NULL,
  `success` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`id`, `trial_code`, `installation_date`, `treatment`, `time_squence`, `tgl_input`, `days_after`, `replicate`, `habitat_type`, `baits`, `hole`, `score`, `success`) VALUES
(10509, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 6, 12, 1, NULL),
(10510, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 6, 13, 1, NULL),
(10511, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 6, 14, 1, NULL),
(10512, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 6, 15, 1, NULL),
(10513, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 6, 16, 1, NULL),
(10514, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 7, 1, 1, NULL),
(10515, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 7, 2, 1, NULL),
(10516, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 7, 3, 1, NULL),
(10517, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 7, 4, 1, NULL),
(10518, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 7, 5, 1, NULL),
(10519, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 7, 6, 1, NULL),
(10520, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 7, 7, 1, NULL),
(10521, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 7, 8, 1, NULL),
(10522, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 7, 9, 1, NULL),
(10523, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 7, 10, 1, NULL),
(10524, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 7, 11, 1, NULL),
(10525, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 7, 12, 1, NULL),
(10526, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 7, 13, 1, NULL),
(10527, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 7, 14, 1, NULL),
(10528, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 7, 15, 1, NULL),
(10529, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 7, 16, 0, NULL),
(10530, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 8, 1, 0, NULL),
(10531, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 8, 2, 0, NULL),
(10532, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 8, 3, 0, NULL),
(10533, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 8, 4, 0, NULL),
(10534, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 8, 5, 0, NULL),
(10535, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 8, 6, 0, NULL),
(10536, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 8, 7, 0, NULL),
(10537, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 8, 8, 0, NULL),
(10538, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 8, 9, 0, NULL),
(10539, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 8, 10, 0, NULL),
(10540, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 8, 11, 0, NULL),
(10541, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 8, 12, 0, NULL),
(10542, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 8, 13, 0, NULL),
(10543, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 8, 14, 0, NULL),
(10544, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 8, 15, 0, NULL),
(10545, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 8, 16, 0, NULL),
(10546, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 9, 1, 0, NULL),
(10547, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 9, 2, 5, NULL),
(10548, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 9, 3, 0, NULL),
(10549, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 9, 4, 0, NULL),
(10550, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 9, 5, 0, NULL),
(10551, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 9, 6, 0, NULL),
(10552, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 9, 7, 0, NULL),
(10553, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 9, 8, 0, NULL),
(10554, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 9, 9, 0, NULL),
(10555, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 9, 10, 0, NULL),
(10556, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 9, 11, 0, NULL),
(10557, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 9, 12, 0, NULL),
(10558, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 9, 13, 0, NULL),
(10559, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 9, 14, 0, NULL),
(10560, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 9, 15, 0, NULL),
(10561, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 9, 16, 0, NULL),
(10562, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 10, 1, 0, NULL),
(10563, 'KNDE0111', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 10, 2, 0, NULL),
(10564, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 10, 3, 0, NULL),
(10565, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 10, 4, 0, NULL),
(10566, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 10, 5, 0, NULL),
(10567, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 10, 6, 0, NULL),
(10568, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 10, 7, 0, NULL),
(10569, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 10, 8, 0, NULL),
(10570, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 10, 9, 0, NULL),
(10571, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 10, 10, 0, NULL),
(10572, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 10, 11, 0, NULL),
(10573, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 10, 12, 0, NULL),
(10574, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 10, 13, 0, NULL),
(10575, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 10, 14, 0, NULL),
(10576, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 10, 15, 0, NULL),
(10577, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 2, 'Control', 10, 16, 0, NULL),
(10578, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 1, 1, 0, NULL),
(10579, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 1, 2, 0, NULL),
(10580, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 1, 3, 0, NULL),
(10581, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 1, 4, 0, NULL),
(10582, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 1, 5, 0, NULL),
(10583, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 1, 6, 0, NULL),
(10584, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 1, 7, 0, NULL),
(10585, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 1, 8, 0, NULL),
(10586, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 1, 9, 0, NULL),
(10587, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 1, 10, 0, NULL),
(10588, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 1, 11, 0, NULL),
(10589, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 1, 12, 0, NULL),
(10590, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 1, 13, 0, NULL),
(10591, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 1, 14, 0, NULL),
(10592, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 1, 15, 0, NULL),
(10593, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 1, 16, 0, NULL),
(10594, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 2, 1, 0, NULL),
(10595, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 2, 2, 0, NULL),
(10596, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 2, 3, 0, NULL),
(10597, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 2, 4, 0, NULL),
(10598, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 2, 5, 0, NULL),
(10599, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 2, 6, 0, NULL),
(10600, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 2, 7, 0, NULL),
(10601, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 2, 8, 0, NULL),
(10602, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 2, 9, 0, NULL),
(10603, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 2, 10, 0, NULL),
(10604, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 2, 11, 0, NULL),
(10605, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 2, 12, 0, NULL),
(10606, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 2, 13, 0, NULL),
(10607, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 2, 14, 0, NULL),
(10608, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 2, 15, 0, NULL),
(10609, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 2, 16, 0, NULL),
(10610, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 3, 1, 0, NULL),
(10611, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 3, 2, 0, NULL),
(10612, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 3, 3, 0, NULL),
(10613, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 3, 4, 0, NULL),
(10614, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 3, 5, 0, NULL),
(10615, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 3, 6, 0, NULL),
(10616, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 3, 7, 0, NULL),
(10617, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 3, 8, 0, NULL),
(10618, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 3, 9, 0, NULL),
(10619, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 3, 10, 0, NULL),
(10620, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 3, 11, 0, NULL),
(10621, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 3, 12, 0, NULL),
(10622, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 3, 13, 0, NULL),
(10623, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 3, 14, 0, NULL),
(10624, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 3, 15, 0, NULL),
(10625, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 3, 16, 0, NULL),
(10626, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 4, 1, 0, NULL),
(10627, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 4, 2, 0, NULL),
(10628, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 4, 3, 0, NULL),
(10629, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 4, 4, 0, NULL),
(10630, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 4, 5, 0, NULL),
(10631, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 4, 6, 0, NULL),
(10632, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 4, 7, 0, NULL),
(10633, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 4, 8, 0, NULL),
(10634, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 4, 9, 0, NULL),
(10635, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 4, 10, 0, NULL),
(10636, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 4, 11, 0, NULL),
(10637, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 4, 12, 0, NULL),
(10638, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 4, 13, 0, NULL),
(10639, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 4, 14, 0, NULL),
(10640, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 4, 15, 0, NULL),
(10641, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 4, 16, 0, NULL),
(10642, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 5, 1, 0, NULL),
(10643, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 5, 2, 0, NULL),
(10644, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 5, 3, 0, NULL),
(10645, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 5, 4, 0, NULL),
(10646, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 5, 5, 0, NULL),
(10647, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 5, 6, 0, NULL),
(10648, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 5, 7, 0, NULL),
(10649, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 5, 8, 0, NULL),
(10650, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 5, 9, 0, NULL),
(10651, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 5, 10, 0, NULL),
(10652, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 5, 11, 0, NULL),
(10653, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 5, 12, 0, NULL),
(10654, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 5, 13, 0, NULL),
(10655, 'KNDE01', '0000-00-00', 'Control', 1, '0000-00-00', 3, 3, 'Control', 5, 14, 0, NULL),
(10656, 'KNDE01', '0000-00-00', 'SSS', 1, '0000-00-00', 3, 3, 'Control', 5, 15, 0, NULL),
(10657, 'KNDE01', '0000-00-00', 'EFB', 1, '0000-00-00', 3, 3, 'EFB Decline', 5, 16, 1, NULL),
(111111, 'PLPE01', '0000-00-00', 'EFB', 1, '0000-00-00', 1, 1, 'EFB Decline', 1, 1, 0, NULL);

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
  `status` varchar(15) NOT NULL,
  `last_update` date NOT NULL,
  `tot_treatment` int(5) NOT NULL,
  `tot_time_squence` int(5) NOT NULL,
  `tot_replicate` int(5) NOT NULL,
  `tot_habitat_type` int(5) NOT NULL,
  `tot_baits` int(5) NOT NULL,
  `tot_hole` int(5) NOT NULL,
  `treatment` varchar(10) NOT NULL,
  `time_squence` int(3) NOT NULL,
  `replicate` varchar(3) NOT NULL,
  `habitat_type` int(30) NOT NULL,
  `baits` varchar(3) NOT NULL,
  `hole` int(5) NOT NULL,
  `score` int(5) NOT NULL,
  `soil_humidity` int(10) NOT NULL,
  `temperature` int(10) NOT NULL,
  `rainfall_during` int(10) NOT NULL,
  `rainfall_three` int(10) NOT NULL,
  `rainfall_six` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trials`
--

INSERT INTO `trials` (`trial_code`, `title`, `location`, `block`, `palm_age`, `installation_date`, `start`, `finish`, `status`, `last_update`, `tot_treatment`, `tot_time_squence`, `tot_replicate`, `tot_habitat_type`, `tot_baits`, `tot_hole`, `treatment`, `time_squence`, `replicate`, `habitat_type`, `baits`, `hole`, `score`, `soil_humidity`, `temperature`, `rainfall_during`, `rainfall_three`, `rainfall_six`) VALUES
('KNDE01', 'Kinetic of EFB decomposition 1st', 'Kandista', 'A1', '26', '0000-00-00', '2021-02-03', '2021-05-14', 'On Going', '0000-00-00', 0, 0, 0, 0, 0, 0, 'Control', 1, '3', 0, '10', 16, 0, 0, 0, 0, 0, 0),
('PLPE102', 'Kinetic of EFB decomposition 2nd', 'Palapa', 'C32', '15', '2020-12-01', '2021-02-01', '2021-02-16', 'On Going', '2021-02-19', 0, 0, 0, 0, 0, 0, 'Control', 4, '4', 4, '4', 3, 0, 0, 0, 0, 0, 0),
('SRKE109', 'Monitoring Soil EFB 3rd', 'Rokan', 'B3', '15', '0000-00-00', '2021-02-01', '2021-02-27', 'On Going', '2021-02-18', 0, 0, 0, 0, 0, 0, '', 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_user`
--
CREATE TABLE `view_user` (
`id_user` int(11)
,`nama_lengkap` varchar(40)
,`username` varchar(30)
,`password` varchar(40)
,`id_level_user` int(11)
,`foto` text
,`nama_level` varchar(30)
);

-- --------------------------------------------------------

--
-- Structure for view `view_user`
--
DROP TABLE IF EXISTS `view_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_user`  AS  select `tu`.`id_user` AS `id_user`,`tu`.`nama_lengkap` AS `nama_lengkap`,`tu`.`username` AS `username`,`tu`.`password` AS `password`,`tu`.`id_level_user` AS `id_level_user`,`tu`.`foto` AS `foto`,`tlu`.`nama_level` AS `nama_level` from (`tbl_user` `tu` join `tbl_level_user` `tlu`) where (`tu`.`id_level_user` = `tlu`.`id_level_user`) ;

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
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_treatment_trials` (`trial_code`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_level_user`
--
ALTER TABLE `tbl_level_user`
  MODIFY `id_level_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_user_rule`
--
ALTER TABLE `tbl_user_rule`
  MODIFY `id_rule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111113;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
