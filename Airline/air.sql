-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2019 at 09:41 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `air`
--
CREATE DATABASE IF NOT EXISTS `air` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `air`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `fname` varchar(34) NOT NULL,
  `email` varchar(43) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(34) NOT NULL,
  `sex` varchar(45) NOT NULL,
  `password` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fname`, `email`, `phone`, `address`, `sex`, `password`) VALUES
('Yaikob Tadele', 'yaikobtadele@gmail.com', '0930707872', 'Gondar', 'Male', 'james');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `fname` varchar(49) NOT NULL,
  `adress` varchar(34) NOT NULL,
  `email` varchar(34) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `comment` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`fname`, `adress`, `email`, `phone`, `comment`) VALUES
('Yaikob Tadele', 'Addis Ababa', 'yaikobtadele@gmail.com', '0917770064', 'The system is very nice!!'),
('Yigrmal Fikadu', 'Jimma', 'yigrmalfikadu@gmail.com', '0923234565', 'qwtgsduysudbhsd s\r\nsdsbjhbdhsbhcbsdhc');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `invoice` varchar(34) NOT NULL,
  `payment` varchar(54) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`invoice`, `payment`) VALUES
('34', 'cash'),
('12', 'cash'),
('', 'Payment option'),
('', 'Payment option'),
('1', 'Credit card'),
('12', 'Mobile money');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `fname` text NOT NULL,
  `address` text NOT NULL,
  `date` date NOT NULL,
  `dplace` text NOT NULL,
  `sex` text NOT NULL,
  `phone` text NOT NULL,
  `splace` text NOT NULL,
  `ticketno` text NOT NULL,
  `plane` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`fname`, `address`, `date`, `dplace`, `sex`, `phone`, `splace`, `ticketno`, `plane`) VALUES
('Mekdes Melkamu', 'Hawassa', '2019-06-09', 'Gondar', '0000-00-00', '0930707873', 'Addis Ababa', '1', 'Boeing 747-8'),
('Yaikob Tadele', 'Addis Ababa', '2019-06-09', 'Mekele', '0000-00-00', '0912321243', 'Addis Ababa', '12', 'Boeing 747-8'),
('rty', 'Jimma', '2019-06-04', 'Addis Ababa', '0000-00-00', '0930707873', 'Hawassa', '4', 'Boeing 747-8'),
('udfhd', 'Hawassa', '2019-06-09', 'Hawassa', 'Male', '0930707873', 'Gondar', '12', 'Boeing 747-8'),
('Abrham', 'Gondar', '2019-08-04', 'Addis Ababa', 'Male', '0912343563', 'Gondar', '1', 'Boeing 747-8');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `fname` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `adress` varchar(30) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fname`, `email`, `phone`, `adress`, `sex`, `password`) VALUES
('Yaikob Tadele', 'yaikobtadele@gmail.com', '0930707873', 'Gondar', 'Male', '12345'),
('Serkalem Terefe', 'serkalem@gmail.com', '0912324534', 'Gondar', 'Female', 'serkalem'),
('Mekdes Melkamu', 'mekdes@gmail.com', '0930707873', 'Asossa', 'Female', '123'),
('ag qw', 'ag@gmail.com', '0987654321', 'Addis Ababa', 'Female', '123'),
('Yaikob Tadele', 'yaikobtadele@gmail.com', '0930707872', 'Teppi', 'Male', 'james');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `photo` varchar(23) NOT NULL,
  `plane` varchar(43) NOT NULL,
  `seat` int(43) NOT NULL,
  `ddate` date NOT NULL,
  `price` varchar(34) NOT NULL,
  `source` varchar(43) NOT NULL,
  `destination` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`photo`, `plane`, `seat`, `ddate`, `price`, `source`, `destination`) VALUES
('1111.PNG', 'Boeing 747-8', 200, '2019-06-09', '14:34:00', 'Adis Ababa', 'Gondar'),
('16649329_67961903555289', 'Boeing 747-8', 200, '2019-06-09', '14:14:00', 'Adis Ababa', 'Gondar'),
('47299212_11919234876220', 'Boeing 747-8', 78, '2019-06-04', 'bn bjhbjh', 'Adis Ababa', 'Jimma'),
('47299212_11919234876220', 'Boeing 747-8', 78, '2019-06-04', 'bn bjhbjh', 'Adis Ababa', 'Jimma'),
('photo_2019-01-02_11-32-', 'Boeing 747-8', 12, '2019-06-04', '1324', 'Adis Ababa', 'Gambella');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
