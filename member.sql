-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 05:24 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perora_petshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `nama`, `alamat`, `no_hp`, `tgl_daftar`) VALUES
(1, 'Aveenda Zhafira', 'Gemuruh, Bawang', '089503730453', '2019-02-14'),
(2, 'Rayhan W.', 'Kutabanjarnegara', '082334456754', '2019-05-25'),
(3, 'Isna Rizqi', 'Gemuruh, Bawang', '087555436789', '2020-07-24'),
(4, 'Salsabila Rizkiani', 'Semarang', '086558795342', '2017-10-20'),
(5, 'Husein Rafli', 'Semarang', '088664356890', '2017-10-12'),
(6, 'Fitria Rahmawati', 'Krandegan, Banjarnegara', '085345677898', '2021-04-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
