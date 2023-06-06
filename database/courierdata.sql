-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 02:18 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courierdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogintab`
--

CREATE TABLE `adminlogintab` (
  `uName` varchar(50) NOT NULL,
  `pWord` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogintab`
--

INSERT INTO `adminlogintab` (`uName`, `pWord`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `agenttab`
--

CREATE TABLE `agenttab` (
  `uName` varchar(50) NOT NULL,
  `pWord` varchar(50) NOT NULL,
  `AgentName` varchar(50) NOT NULL,
  `aAdd` varchar(250) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `statename` varchar(50) NOT NULL,
  `MobileNo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agenttab`
--

INSERT INTO `agenttab` (`uName`, `pWord`, `AgentName`, `aAdd`, `cityname`, `statename`, `MobileNo`, `email`) VALUES
('sid', 'sid', 'siddhesh', 'jalgaon', '', '', '9234893744', ''),
('ishwar', 'ishwar', 'Ishwar', 'Shegaon', 'Shegaon', 'Maharashtra', '2423423423', '');

-- --------------------------------------------------------

--
-- Table structure for table `bookingtab`
--

CREATE TABLE `bookingtab` (
  `bookno` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `CourierTypeName` varchar(50) NOT NULL,
  `fPlace` varchar(50) NOT NULL,
  `tPlace` varchar(50) NOT NULL,
  `cPrice` int(11) NOT NULL,
  `fCustName` varchar(50) NOT NULL,
  `fAdd` varchar(250) NOT NULL,
  `fNo` varchar(20) NOT NULL,
  `tCustName` varchar(50) NOT NULL,
  `tAdd` varchar(250) NOT NULL,
  `tNo` varchar(20) NOT NULL,
  `details` varchar(250) NOT NULL,
  `agentcode` varchar(50) NOT NULL,
  `cStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookingtab`
--

INSERT INTO `bookingtab` (`bookno`, `bdate`, `CourierTypeName`, `fPlace`, `tPlace`, `cPrice`, `fCustName`, `fAdd`, `fNo`, `tCustName`, `tAdd`, `tNo`, `details`, `agentcode`, `cStatus`) VALUES
(1000, '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', ''),
(1001, '2021-05-23', 'electronics', 'Jalgaon', 'Shegaon', 150, 'Ishwar Chaudhari', ' Jalgaon', '9234893744', 'Siddhesh Lohar', ' Shegaon', '9233786211', '9233786211', 'sid', 'Booked'),
(1002, '2021-05-23', 'electronics', 'Shegaon', 'Jalgaon', 0, 'dsad', ' dasdawd', '2423423423', 'adadw', ' sfdws', '2343243242423', '2343243242423', 'sid', 'Booked'),
(1003, '2021-05-23', 'Clothes', 'Shegaon', 'Jalgaon', 0, 'Raju Chaudhari', ' Shegaon', '2345245546', 'Gaurav Patil', ' Jalgaon', '4313534554', '4313534554', 'sid', 'Booked'),
(1004, '2021-05-23', 'electronics', 'Jalgaon', 'Shegaon', 150, 'dsad', ' xsfsdf', '234234234', 'ergaregs', ' sgsrg', '34324234234', '34324234234', 'sid', 'Booked');

-- --------------------------------------------------------

--
-- Table structure for table `chargetab`
--

CREATE TABLE `chargetab` (
  `CourierTypeName` varchar(50) NOT NULL,
  `fPlace` varchar(50) NOT NULL,
  `tPlace` varchar(250) NOT NULL,
  `cPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chargetab`
--

INSERT INTO `chargetab` (`CourierTypeName`, `fPlace`, `tPlace`, `cPrice`) VALUES
('electronics', 'Jalgaon', 'Shegaon', 150),
('Clothes', 'Jalgaon', 'Shegaon', 100);

-- --------------------------------------------------------

--
-- Table structure for table `citytab`
--

CREATE TABLE `citytab` (
  `cityName` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citytab`
--

INSERT INTO `citytab` (`cityName`, `details`) VALUES
('Jalgaon', 'PIN-425001'),
('Shegaon', 'PIN-444203'),
('Surat', 'PIN-395003'),
('Surat', 'PIN-395003');

-- --------------------------------------------------------

--
-- Table structure for table `couriertypetab`
--

CREATE TABLE `couriertypetab` (
  `CourierTypeName` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `couriertypetab`
--

INSERT INTO `couriertypetab` (`CourierTypeName`, `details`) VALUES
('electronics', 'items'),
('Clothes', 'item');

-- --------------------------------------------------------

--
-- Table structure for table `statetab`
--

CREATE TABLE `statetab` (
  `StateName` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statetab`
--

INSERT INTO `statetab` (`StateName`, `details`) VALUES
('Maharashtra', 'maharashtra'),
('Gujrat', 'gujrat');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
