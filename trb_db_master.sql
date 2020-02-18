-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2020 at 02:31 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trb_db_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `inspected`
--

CREATE TABLE `inspected` (
  `userid` int(11) NOT NULL,
  `toda_no` varchar(225) NOT NULL,
  `toda` varchar(255) NOT NULL,
  `inspector` varchar(225) NOT NULL,
  `ins_date` text NOT NULL,
  `status` int(6) NOT NULL,
  `seen_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspected`
--

INSERT INTO `inspected` (`userid`, `toda_no`, `toda`, `inspector`, `ins_date`, `status`, `seen_status`) VALUES
(15, '1111', 'TODAG', 'inspector@email.com', '2020-02-11 15:29:44', 0, 0),
(16, '12', 'Toda', 'inspector@email.com', '2020-02-11 16:16:29', 0, 0),
(17, '23', 'AGORA', 'inspector@email.com', '2020-02-11 16:31:51', 0, 0),
(18, '45', 'AGORA', 'inspector@email.com', '2020-02-11 16:35:54', 0, 0),
(19, '45', 'DOMAN', 'inspector@email.com', '2020-02-11 16:52:18', 0, 0),
(20, '987', 'SATODA', 'inspector@email.com', '2020-02-11 17:33:53', 0, 0),
(21, '43', 'DOMAN', 'inspector@email.com', '2020-02-11 18:06:00', 0, 0),
(22, '78', 'TODAW', 'inspector@email.com', '2020-02-11 18:53:36', 0, 0),
(23, '90', 'TODAY', 'inspector@email.com', '2020-02-11 19:03:53', 0, 0),
(24, '89', 'TODAY', 'inspector@email.com', '2020-02-11 19:09:02', 0, 0),
(25, '12', 'TODAS', 'inspector@email.com', '2020-02-12 10:48:47', 0, 0),
(26, '01', 'BAGORA', 'inspector@email.com', '2020-02-12 11:46:43', 0, 0),
(27, '213', 'TODAS', 'inspector@email.com', '2020-02-12 11:52:40', 0, 0),
(28, '34', 'AGORA', 'inspector@email.com', '2020-02-12 11:53:07', 0, 0),
(29, '66', 'TODAY', 'inspector@email.com', '2020-02-12 13:14:50', 0, 0),
(30, '23', 'Agora', 'inspector@email.com', '2020-02-12 13:57:40', 0, 0),
(31, '78', 'Agora', 'inspector@email.com', '2020-02-12 14:48:19', 0, 0),
(32, '76', 'AGOGO', 'inspector@email.com', '2020-02-13 09:07:25', 0, 0),
(33, '88', 'TODAK', 'inspector@email.com', '2020-02-13 13:40:00', 0, 0),
(34, '2013', 'TODAP', 'inspector@email.com', '2020-02-13 14:48:16', 0, 0),
(35, '45', 'TODAK', 'inspector@email.com', '2020-02-14 08:57:16', 0, 0),
(36, '1', 'TODAK', 'board@email.com', '2020-02-14 11:04:36', 0, 0),
(37, '123', 'TODAR', 'atong@email.com', '2020-02-14 15:22:48', 0, 0),
(38, '35', 'TODAJ', 'atong@email.com', '2020-02-14 16:44:14', 0, 0),
(39, '4567', 'TOPAK', 'atong@email.com', '2020-02-14 17:15:12', 0, 0),
(40, '738', 'TODAT', 'atong@email.com', '2020-02-14 17:18:02', 0, 0),
(41, '89', 'TODAT', 'atong@email.com', '2020-02-14 17:20:41', 0, 0),
(42, '89', 'TODAW', 'atong@email.com', '2020-02-14 17:24:20', 0, 0),
(43, '77', 'TODAY', 'atong@email.com', '2020-02-14 17:25:36', 0, 0),
(44, '76', 'TODAY', 'inspector@email.com', '2020-02-14 17:32:41', 0, 0),
(45, '676', 'TODAT', 'inspector@email.com', '2020-02-14 17:37:26', 0, 0),
(46, '45', 'TODAW', 'inspector@email.com', '2020-02-14 17:40:42', 0, 0),
(47, '5', 'F.Roman', 'head@email.com', '2020-02-15 23:30:35', 0, 0),
(48, '25', 'F.Roman', 'head@email.com', '2020-02-16 00:36:12', 0, 0),
(49, '25', 'Agora', 'inspector@email.com', '2020-02-17 22:39:18', 0, 0),
(50, '123', 'Agora', 'head@email.com', '2020-02-18 20:54:44', 0, 1),
(51, '255', 'F.Roman', 'head@email.com', '2020-02-18 20:55:51', 0, 1),
(52, '255', 'F.Roman', 'head@email.com', '2020-02-18 20:55:57', 0, 1),
(53, '255', 'F.Roman', 'head@email.com', '2020-02-18 20:56:24', 0, 1),
(54, '255', 'F.Roman', 'head@email.com', '2020-02-18 20:57:02', 0, 1),
(55, '08', 'Agora', 'head@email.com', '2020-02-18 21:01:44', 0, 1),
(56, '08', 'Agora', 'head@email.com', '2020-02-18 21:02:08', 0, 1),
(57, '02', 'Agora', 'head@email.com', '2020-02-18 21:02:43', 0, 0),
(58, '12', 'testjoseph', 'head@email.com', '2020-02-18 21:10:32', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `new_logs`
--

CREATE TABLE `new_logs` (
  `id_log` int(6) NOT NULL,
  `toda` text NOT NULL,
  `toda_no` text NOT NULL,
  `inspected` text NOT NULL,
  `inspected_by` text NOT NULL,
  `inspected_date` text NOT NULL,
  `created_oop` text NOT NULL,
  `created_oop_by` text NOT NULL,
  `created_oop_date` text NOT NULL,
  `payment_received` text NOT NULL,
  `payment_received_by` text NOT NULL,
  `payment_received_date` text NOT NULL,
  `created_new` text NOT NULL,
  `created_new_by` text NOT NULL,
  `created_new_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_logs`
--

INSERT INTO `new_logs` (`id_log`, `toda`, `toda_no`, `inspected`, `inspected_by`, `inspected_date`, `created_oop`, `created_oop_by`, `created_oop_date`, `payment_received`, `payment_received_by`, `payment_received_date`, `created_new`, `created_new_by`, `created_new_date`) VALUES
(1, 'Agora', '25', 'Inspected', 'inspector@email.com', '2020-02-17 22:39:18', '', '', '', 'Paid', 'head@email.com', '2020-02-18 21:22:15', '', '', ''),
(2, 'F.Roman', '255', 'inspected', 'head@email.com', '2020-02-18 20:57:02', '1', '1', '1', '', '', '', '', '', ''),
(3, 'Agora', '08', 'inspected', 'head@email.com', '2020-02-18 21:02:08', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(4, 'Agora', '02', 'inspected', 'head@email.com', '2020-02-18 21:02:43', '1', '1', '1', '1', '1', '1', 'Created OOP', 'head@email.com', '2020-02-18 21:07:31'),
(5, 'testjoseph', '12', 'inspected', 'head@email.com', '2020-02-18 21:10:32', 'Created OOP sa', 'head@email.com', '2020-02-18 21:12:41', 'Paid', 'head@email.com', '2020-02-18 21:22:41', 'Created OOP', 'head@email.com', '2020-02-18 21:10:58');

-- --------------------------------------------------------

--
-- Table structure for table `new_user`
--

CREATE TABLE `new_user` (
  `new_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `seen_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `or_payments`
--

CREATE TABLE `or_payments` (
  `id_payment` int(6) NOT NULL,
  `id_no` int(6) NOT NULL,
  `reg_fee` int(6) NOT NULL,
  `mch` int(6) NOT NULL,
  `reg_sticker` int(6) NOT NULL,
  `petition` int(6) NOT NULL,
  `confirmation` int(6) NOT NULL,
  `inspection` int(6) NOT NULL,
  `supervision` int(6) NOT NULL,
  `fare_sticker` int(6) NOT NULL,
  `plate_sticker` int(6) NOT NULL,
  `others` text NOT NULL,
  `total_amount` text NOT NULL,
  `sticker_no` text NOT NULL,
  `or_date` text NOT NULL,
  `seen_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `or_payments`
--

INSERT INTO `or_payments` (`id_payment`, `id_no`, `reg_fee`, `mch`, `reg_sticker`, `petition`, `confirmation`, `inspection`, `supervision`, `fare_sticker`, `plate_sticker`, `others`, `total_amount`, `sticker_no`, `or_date`, `seen_status`) VALUES
(14, 16, 150, 100, 200, 0, 0, 0, 0, 0, 0, '', '450', '1111', '2020-02-11 15:31:01', 0),
(15, 17, 150, 0, 0, 0, 0, 0, 0, 0, 0, '', '150', '789', '2020-02-11 16:24:00', 0),
(16, 18, 150, 0, 0, 0, 0, 0, 0, 0, 0, '', '150', '090909', '2020-02-11 16:37:27', 0),
(17, 22, 150, 0, 0, 0, 0, 0, 0, 0, 0, '', '150', '987', '2020-02-11 17:37:12', 0),
(18, 19, 150, 0, 0, 0, 0, 0, 0, 0, 0, '', '150', '', '2020-02-11 18:00:58', 0),
(19, 21, 150, 0, 0, 0, 0, 0, 0, 0, 0, '', '150', '', '2020-02-11 18:01:14', 0),
(20, 23, 0, 0, 0, 0, 300, 0, 0, 0, 0, '', '300', '1258', '2020-02-11 18:47:01', 0),
(21, 24, 150, 100, 200, 300, 300, 500, 1500, 100, 100, '', '3,250', '7878', '2020-02-11 18:55:39', 0),
(22, 25, 150, 100, 0, 0, 0, 0, 1500, 0, 0, '', '1,750', '', '2020-02-11 19:05:35', 0),
(23, 26, 0, 0, 0, 0, 0, 0, 1500, 0, 0, '', '1,500', '12345', '2020-02-11 19:10:10', 0),
(24, 27, 150, 0, 0, 0, 0, 0, 0, 0, 0, '', '150', '', '2020-02-12 10:51:32', 0),
(25, 28, 150, 100, 200, 300, 300, 500, 1500, 100, 100, '', '3,250', '1986', '2020-02-12 11:49:01', 0),
(26, 29, 150, 0, 0, 0, 0, 0, 0, 0, 0, '', '150', '8586', '2020-02-12 12:08:17', 0),
(27, 30, 150, 100, 200, 0, 0, 0, 0, 0, 0, '', '450', '', '2020-02-12 12:25:09', 0),
(28, 31, 150, 100, 200, 300, 300, 500, 1500, 100, 100, '', '3,250', '1212', '2020-02-12 13:59:36', 0),
(29, 32, 150, 100, 200, 300, 300, 500, 1500, 100, 100, '', '3,250', '7852', '2020-02-13 13:09:44', 0),
(30, 35, 150, 100, 200, 300, 300, 500, 1500, 100, 100, '', '3,250', '45', '2020-02-14 09:02:04', 0),
(31, 36, 150, 100, 200, 300, 300, 500, 1500, 100, 100, '', '3,250', '0101', '2020-02-14 11:08:47', 1),
(32, 37, 150, 100, 200, 300, 300, 500, 1500, 100, 100, '', '3,250', '0123', '2020-02-14 15:26:16', 1),
(33, 38, 150, 100, 200, 300, 300, 500, 1500, 100, 100, '', '3,250', '66', '2020-02-14 16:13:13', 1),
(34, 40, 150, 0, 0, 0, 0, 0, 0, 0, 0, '', '150', '1231', '2020-02-14 16:46:48', 1),
(35, 43, 150, 0, 0, 0, 0, 0, 0, 0, 0, '', '150', '', '2020-02-14 17:19:03', 1),
(36, 46, 0, 100, 0, 0, 0, 0, 0, 0, 0, '', '100', '4589', '2020-02-14 17:26:36', 1),
(37, 47, 0, 0, 0, 0, 0, 0, 1500, 0, 0, '', '1,500', '1231', '2020-02-14 17:33:44', 1),
(38, 50, 0, 0, 0, 0, 0, 0, 1500, 0, 0, '', '1,500', '20145', '2020-02-14 17:41:35', 1),
(39, 33, 150, 100, 200, 0, 0, 0, 0, 0, 0, '12', '450', '0034', '2020-02-18 20:19:17', 1),
(40, 34, 150, 0, 0, 0, 0, 0, 0, 0, 0, '', '150', '0034', '2020-02-18 20:30:37', 1),
(41, 34, 150, 0, 0, 0, 0, 0, 0, 0, 0, '', '150', '0034', '2020-02-18 20:31:08', 1),
(42, 51, 150, 100, 0, 0, 0, 0, 0, 0, 0, '', '250', '0034', '2020-02-18 20:31:20', 1),
(43, 51, 150, 100, 0, 0, 0, 0, 0, 0, 0, '', '250', '0034', '2020-02-18 20:31:28', 1),
(44, 49, 150, 0, 0, 0, 0, 0, 0, 0, 100, '', '250', '0034', '2020-02-18 20:31:41', 1),
(45, 49, 150, 0, 0, 0, 0, 0, 0, 0, 100, '', '250', '0034', '2020-02-18 20:34:11', 1),
(46, 39, 2, 2, 200, 300, 300, 500, 1500, 100, 100, '', '3,100', '0034', '2020-02-18 20:34:26', 1),
(47, 39, 0, 0, 0, 300, 300, 500, 1500, 100, 100, '', '3,100', '0034', '2020-02-18 20:38:38', 1),
(48, 45, 0, 0, 0, 0, 300, 0, 0, 0, 100, '', '600', '0034', '2020-02-18 20:38:51', 1),
(49, 45, 0, 0, 0, 0, 300, 0, 0, 0, 100, '', '600', '0034', '2020-02-18 20:39:01', 1),
(50, 52, 150, 0, 0, 0, 0, 0, 0, 0, 0, '', '150', '0035', '2020-02-18 20:51:43', 1),
(51, 52, 150, 0, 0, 0, 0, 0, 0, 0, 0, '', '150', '0035', '2020-02-18 20:52:30', 1),
(52, 53, 150, 0, 0, 0, 0, 0, 0, 0, 0, '', '150', '0036', '2020-02-18 21:09:44', 1),
(53, 54, 0, 0, 0, 0, 0, 0, 0, 100, 0, '', '200', '0037', '2020-02-18 21:12:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tricycle_operator`
--

CREATE TABLE `tricycle_operator` (
  `id_no` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `middle_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `house_no` varchar(25) NOT NULL,
  `street` varchar(25) NOT NULL,
  `barangay` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `case_no` varchar(25) NOT NULL,
  `toda` varchar(25) NOT NULL,
  `toda_no` smallint(6) NOT NULL,
  `make` varchar(25) NOT NULL,
  `motor_no` varchar(25) NOT NULL,
  `chasis_no` varchar(25) NOT NULL,
  `plate_no` varchar(25) NOT NULL,
  `date` varchar(25) NOT NULL,
  `unit` smallint(6) NOT NULL,
  `status` int(6) NOT NULL,
  `seen_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tricycle_operator`
--

INSERT INTO `tricycle_operator` (`id_no`, `first_name`, `middle_name`, `last_name`, `house_no`, `street`, `barangay`, `city`, `case_no`, `toda`, `toda_no`, `make`, `motor_no`, `chasis_no`, `plate_no`, `date`, `unit`, `status`, `seen_status`) VALUES
(16, 'Atong', 'P', 'Francisco', '1111', 'WASS', 'BARS', 'San Juan', 'CN1111', 'TODAG', 1111, 'Honda', 'MN-1111', 'CN-1111', 'PN-1111', '2020-02-11 15:30:36', 1, 5, 0),
(17, 'qwert', 'a', 'asdf', '123', 'DF', 'SJDC', 'San Juan City', 'CN789', 'Toda', 12, 'Honda', 'MN-789', 'CN789', 'PN789', '2020-02-11 16:18:42', 1, 5, 0),
(18, 'A', 'B', 'C', '1', 'D', 'E', 'F', 'CN564', 'AGORA', 23, 'Honda', 'MN7894', 'CN7894', 'PN7894', '2020-02-11 16:32:54', 1, 5, 0),
(19, 'AS', 'O', 'NOW', '90', 'OPT', 'NUGY', 'SAN J', 'CN4500', 'AGORA', 45, 'Honda', 'MN09090909', 'CN09090909090', 'PN8976', '2020-02-11 16:36:52', 1, 5, 0),
(21, 'ARE', 'U', 'READY', '12', 'STREET', 'FIGHTER', 'SAN JUAN', 'CN-89898', 'DOMAN', 45, 'HONDA', 'MN789789', 'CN789789', 'PN9874', '2020-02-11 16:53:29', 1, 5, 0),
(22, 'SA', 'TO', 'DA', '12', 'SAD', 'DAS', 'SJ', '987', 'SATODA', 987, 'HONDA', 'MN1234557', 'CN-123456789', 'PN0989', '2020-02-11 17:35:09', 1, 5, 0),
(23, 'AKO', 'L', 'ANG', '12', 'STEEL', 'BAKAL', 'San Juan', '2020-0404', 'DOMAN', 43, 'Honda', 'MN-0808', 'CN-0808', 'PN0808', '2020-02-11 18:07:03', 1, 5, 0),
(24, 'MAN', 'L', 'OKO', '12', 'DEWQ', 'OPS', 'SAN YUN', '2020-7878', 'TODAW', 78, 'HONDEI', 'MN0909', 'CN7898', 'PN56867', '2020-02-11 18:54:36', 1, 5, 0),
(25, 'ARE', 'U', 'HU', '88', 'SEW', 'TUY', 'SAN JI', '2020-9090', 'TODAY', 90, 'KTM', 'MN89088', 'CN679', 'PN8956', '2020-02-11 19:05:00', 1, 5, 0),
(26, 'ME', 'N', 'MY', '77', 'TER', 'RETE', 'SANJU', '2020-58788', 'TODAY', 89, 'HOUDU', 'MN6789', 'CN5689', 'PN5686', '2020-02-11 19:09:56', 1, 5, 0),
(27, 'A', 'B', 'C', '1', 'S', 'B', 'C', '2020-12', 'TODAS', 12, 'Honda', 'MN5656', 'CN5656', 'PN5656', '2020-02-12 10:49:35', 1, 5, 0),
(28, 'Lourdes', 'D', 'Santiago', '1', 'Narciso', 'Corazon', 'SANJU', '2020-0212-0001', 'BAGORA', 1, 'Honda', 'MN-0123456', 'CN-9383811', 'PN9087', '2020-02-12 11:48:04', 1, 5, 0),
(29, 'E', 'R', 'G', '1', 'STR', 'TIY', 'SNAJI', '2020-59874', 'TODAS', 213, 'HONDO', 'MN8921', 'CN1234', 'PN8832', '2020-02-12 11:58:08', 1, 5, 0),
(30, 'F', 'U', 'L', '4', 'huy', 'Bar', 'Cit', '2020-7894', 'AGORA', 34, 'Honda', 'MN-909023', 'CN-909023', 'PN8756', '2020-02-12 12:24:11', 1, 5, 0),
(31, 'kK', 'k', 'K', '1', 'asdasd', 'as', 'san', '202025465464', 'Agora', 23, 'honda', 'mn3231', 'cn-99898', 'pn3323', '2020-02-12 13:59:00', 1, 5, 0),
(32, 'AL', 'A', 'Pagalilawan', '23', 'PUP', 'Additionhills', 'sanju', '2020', 'Agora', 78, 'honda', 'MN9090', 'CN9090', 'PN9090', '2020-02-12 14:51:16', 1, 5, 0),
(33, 'Mickey', 'M.', 'Mouse', '1', 'Wu', 'Han', 'SanJI', '2020-0213-8888', 'TODAK', 88, 'HOnda', 'MN8888', 'CN8888', 'PN8888', '2020-02-13 13:41:21', 1, 2, 0),
(34, 'CJ', 'B', 'Sarmiento', '1', 'Purez', 'Sta mesa', ' Manila', '2020-0213-2013', 'TODAP', 2013, 'Honda', 'MN92345', 'CN12345', 'PN9021', '2020-02-13 14:49:25', 1, 2, 0),
(35, 'JOHN', 'L', 'LENON', '1', 'WALL', 'SAN', 'JUAN', '2020-0214-45', 'TODAK', 45, 'HONDA', 'MN4545', 'CN4545', 'PN4545', '2020-02-14 08:58:18', 1, 5, 0),
(36, 'Atong', 'P', 'Francisco', '1', 'Pinaglabanan', 'Corazon', 'San Juan City', '2020-0214-0101', 'TODAK', 1, 'Honda', 'MN0101', 'CN0101', 'PN0101', '2020-02-14 11:06:32', 1, 5, 0),
(37, 'LIT', 'O', 'LITS', '1', 'WER', 'TER', 'SAN JUAN', '2020-0214-0123', 'TODAR', 123, 'HONDA', 'MN-0123', 'CN-0123', 'PN0123', '2020-02-14 15:25:07', 1, 5, 0),
(38, 'Ali', 'P', 'Io', '2', 'Sert', 'Cora', 'An Ju', '2020-0214-66', 'TODAY', 66, 'Honda', 'MN-66', 'CN66', 'pn66', '2020-02-14 16:12:49', 1, 5, 0),
(39, 'A', 'b', 'P', '^', 'ERT', 'SAN', '', '2020-76', 'AGOGO', 76, 'Honda', 'MN-89', 'Cn090', 'PN999', '2020-02-14 16:18:56', 1, 2, 0),
(40, 'KL', 'P', 'HR', '90', 'WER', 'PasadeÃ±a', 'San Juan City M.M.', '2020-35', 'TODAJ', 35, 'HONDA', 'MN-90', 'CN-90', 'PN-90', '2020-02-14 16:46:26', 1, 5, 0),
(42, 'AT', 'O', 'FRA', '23', 'NU', 'PasadeÃ±a', 'San Juan City M.M.', '2020-4567', 'TOPAK', 4567, 'HONDA', 'MN-9876', 'CN9034', 'PN9099', '2020-02-14 17:16:32', 1, 1, 0),
(43, 'AT', 'N', 'YUR', '78', 'GEN', 'ErmitaÃ±o', 'San Juan City M.M.', '2020-738', 'TODAT', 738, 'HONDA', 'MN92741', 'CN34564', 'PN37575', '2020-02-14 17:18:47', 1, 2, 0),
(44, 'YU', 'G', 'IN', '8', 'YUT', 'PasadeÃ±a', 'San Juan City M.M.', '2020-0214-7894', 'TODAT', 89, 'HONDA', 'MN455454', 'CN34521', 'PN7843', '2020-02-14 17:21:39', 1, 1, 0),
(45, 'TUY', 'Y', 'REG', '8', 'TER', 'Balong-Bato', 'San Juan City M.M.', '2020-45687', 'TODAW', 89, 'KAWASAKI', 'MN8979', 'CN7374', 'PN7383', '2020-02-14 17:25:14', 1, 2, 0),
(46, 'JUH', 'G', 'MAW', '7', 'SYTEE', 'ErmitaÃ±o', 'San Juan City M.M.', '2020-78542', 'TODAY', 77, 'HONAD', 'MN2122', 'CN37474', 'PNYYRR7', '2020-02-14 17:26:21', 1, 2, 0),
(47, 'ATONG', 'P', 'FRANCISCO', '12', 'YUN', 'PasadeÃ±a', 'San Juan City M.M.', '2020-78945', 'TODAY', 76, 'HONDA', 'MN8923', 'CN3421', 'PN3452', '2020-02-14 17:33:20', 1, 5, 0),
(49, 'YU', 'H', 'YUT', 'T', 'H', 'ErmitaÃ±o', 'San Juan City M.M.', '2020-789421', 'TODAT', 676, 'HONDA', 'MN787', 'CNYET', 'PN637', '2020-02-14 17:38:29', 1, 2, 0),
(50, 'UI', 'A', 'NO', '78', 'YTER', 'Ermitano', 'San Juan City M.M.', '2020-78521', 'TODAW', 45, 'HONDA', 'MN9023', 'CN7634', 'PN37482', '2020-02-14 17:41:17', 1, 2, 0),
(51, 'Joseph', 'Arce', 'Rivera Jr', '16', 'C. Leyva', 'Balong-Bato', 'San Juan', '2020-0215-0033', 'F.Roman', 5, 'Make3131', 'Motor no. 2000222', 'Chasis 1231231231', '7777', '2020-02-16 00:10:03', 1, 2, 1),
(52, 'Joseph', 'Arce', 'Rivera Jr', '15', 'San juan', 'Maytunas', 'Quezon City', '2020-0218-0034', 'Agora', 25, '555', 'Motor no. 200022', '777', '111', '2020-02-18 20:50:36', 1, 2, 1),
(53, 'Joseph', 'Middle Name', 'Last Name', '111', 'San juan', 'Onse', 'Quezon City', '2020-0218-0035', 'Agora', 2, 'zcqad123', '231asda', '1', 'asad123', '2020-02-18 21:08:12', 1, 2, 1),
(54, 'Joseph', 'Middle Name', 'Last Name', '1', 'San juan', 'Santa Lucia', 'Quezon City', '2020-0218-0036', 'testjoseph', 12, 'Make3131asd123', 'Motor 12331', '23131', '121231adaa', '2020-02-18 21:10:58', 1, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `phone_no` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `isAdmin` tinyint(4) NOT NULL,
  `isBlocked` tinyint(4) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  `verified` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`user_id`, `first_name`, `last_name`, `phone_no`, `username`, `password`, `isAdmin`, `isBlocked`, `active`, `deleted`, `verified`) VALUES
(37, 'Hanz', 'Cuevaz', '09215595340', 'inspector@email.com', 'password', 1, 0, 1, 0, 1),
(38, 'Mark', 'Delgado', '09561234569', 'head@email.com', 'password', 3, 0, 1, 0, 1),
(39, 'Trea', 'Sury', '09215595632', 'treasury@email.com', 'password', 4, 0, 1, 0, 1),
(40, 'Atty', 'Milaor', '09254568987', 'board@email.com', 'password', 5, 0, 1, 0, 1),
(42, 'Bong', 'Bong', '09215597894', 'personnel@email.com', 'password', 2, 0, 1, 0, 1),
(44, 'Atong', 'Francisco', '09215559534', 'atong@email.com', 'password', 5, 0, 1, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inspected`
--
ALTER TABLE `inspected`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `new_logs`
--
ALTER TABLE `new_logs`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `new_user`
--
ALTER TABLE `new_user`
  ADD PRIMARY KEY (`new_id`);

--
-- Indexes for table `or_payments`
--
ALTER TABLE `or_payments`
  ADD PRIMARY KEY (`id_payment`),
  ADD KEY `id_no` (`id_no`);

--
-- Indexes for table `tricycle_operator`
--
ALTER TABLE `tricycle_operator`
  ADD PRIMARY KEY (`id_no`),
  ADD UNIQUE KEY `case_no` (`case_no`),
  ADD UNIQUE KEY `motor_no` (`motor_no`),
  ADD UNIQUE KEY `chasis_no` (`chasis_no`),
  ADD UNIQUE KEY `plate_no` (`plate_no`),
  ADD UNIQUE KEY `case_no_2` (`case_no`),
  ADD UNIQUE KEY `case_no_3` (`case_no`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inspected`
--
ALTER TABLE `inspected`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `new_logs`
--
ALTER TABLE `new_logs`
  MODIFY `id_log` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `new_user`
--
ALTER TABLE `new_user`
  MODIFY `new_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `or_payments`
--
ALTER TABLE `or_payments`
  MODIFY `id_payment` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `tricycle_operator`
--
ALTER TABLE `tricycle_operator`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `or_payments`
--
ALTER TABLE `or_payments`
  ADD CONSTRAINT `or_payments_ibfk_1` FOREIGN KEY (`id_no`) REFERENCES `tricycle_operator` (`id_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
