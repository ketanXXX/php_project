-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2024 at 04:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookingdetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `villaSelect` varchar(10) NOT NULL,
  `vehicleType` varchar(10) NOT NULL,
  `checkInDate` date NOT NULL,
  `checkOutDate` date NOT NULL,
  `adults` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`villaSelect`, `vehicleType`, `checkInDate`, `checkOutDate`, `adults`) VALUES
('ECR', 'none', '2024-02-12', '2024-02-13', 1),
('PONDICHERR', 'none', '2024-02-12', '2024-02-13', 1),
('ECR', 'none', '2024-02-12', '2024-02-13', 1),
('ECR', 'none', '2024-02-12', '2024-02-13', 1),
('PONDICHERR', 'none', '2024-02-12', '2024-02-13', 1),
('PONDICHERR', 'none', '2024-02-12', '2024-02-13', 1),
('PONDICHERR', 'none', '2024-02-12', '2024-02-13', 1),
('VARKALA', 'none', '2024-02-25', '2024-02-26', 1),
('ECR', 'twoWheeler', '2024-02-18', '2024-02-19', 1),
('PONDICHERR', 'fourWheele', '2024-03-12', '2024-02-18', 3),
('PONDICHERR', 'fourWheele', '2024-03-12', '2024-03-18', 2),
('PONDICHERR', 'fourWheele', '2024-03-12', '2024-03-18', 2),
('PONDICHERR', 'fourWheele', '2024-03-12', '2024-03-18', 2),
('PONDICHERR', 'fourWheele', '2024-03-12', '2024-03-18', 2),
('WAYANADU', 'fourWheele', '2024-02-15', '2024-02-16', 3),
('WAYANADU', 'fourWheele', '2024-02-15', '2024-02-16', 3),
('WAYANADU', 'fourWheele', '2024-02-15', '2024-02-16', 3),
('WAYANADU', 'fourWheele', '2024-02-15', '2024-02-16', 3),
('WAYANADU', 'fourWheele', '2024-02-15', '2024-02-16', 3),
('WAYANADU', 'fourWheele', '2024-02-15', '2024-02-16', 3),
('WAYANADU', 'fourWheele', '2024-02-15', '2024-02-16', 3),
('WAYANADU', 'fourWheele', '2024-02-15', '2024-02-16', 3),
('WAYANADU', 'fourWheele', '2024-02-15', '2024-02-16', 3),
('ECR', 'twoWheeler', '2024-03-12', '2024-02-15', 1),
('ECR', 'twoWheeler', '2024-03-12', '2024-02-15', 1),
('ECR', 'twoWheeler', '2024-03-13', '2024-02-15', 1),
('ECR', 'twoWheeler', '2024-02-13', '2024-02-15', 1),
('ECR', 'twoWheeler', '2024-02-13', '2024-02-15', 1),
('ECR', 'twoWheeler', '2024-02-13', '2024-02-14', 1),
('ECR', 'twoWheeler', '2024-02-13', '2024-02-14', 1),
('ECR', 'twoWheeler', '2024-02-13', '2024-02-14', 1),
('ECR', 'twoWheeler', '2024-02-13', '2024-02-14', 1),
('ECR', 'fourWheele', '2024-02-14', '2024-02-15', 1),
('ECR', 'none', '2024-02-13', '2024-02-14', 1),
('ECR', 'none', '2024-02-13', '2024-02-14', 1),
('MUNNAR', 'fourWheele', '2024-02-14', '2024-02-15', 1),
('ECR', 'twoWheeler', '2024-02-15', '2024-02-16', 1),
('ECR', 'fourWheele', '2024-02-14', '2024-02-15', 1),
('ECR', 'none', '2024-02-14', '2024-02-15', 1),
('ECR', 'none', '2024-02-14', '2024-02-15', 1),
('ECR', 'none', '2024-02-14', '2024-02-15', 1),
('ECR', 'none', '2024-02-14', '2024-02-15', 1),
('ECR', 'none', '2024-02-14', '2024-02-15', 1),
('ECR', 'none', '2024-02-14', '2024-02-15', 1),
('ECR', 'fourWheele', '2024-02-15', '2024-02-16', 1),
('ECR', 'none', '2024-02-15', '2024-02-16', 1),
('WAYANADU', 'fourWheele', '2024-02-16', '2024-02-18', 3),
('WAYANADU', 'fourWheele', '2024-02-16', '2024-02-18', 3),
('WAYANADU', 'fourWheele', '2024-02-16', '2024-02-18', 3),
('WAYANADU', 'fourWheele', '2024-02-16', '2024-02-18', 3),
('WAYANADU', 'fourWheele', '2024-02-16', '2024-02-21', 3),
('ECR', 'none', '2024-02-14', '2024-02-15', 1),
('ECR', 'none', '2024-02-29', '2024-03-01', 1),
('WAYANADU', 'twoWheeler', '2024-02-28', '2024-02-29', 1),
('VARKALA', 'none', '2024-02-23', '2024-02-29', 1),
('MUNNAR', 'twoWheeler', '2024-02-22', '2024-02-23', 3),
('ECR', 'none', '2024-02-15', '2024-02-16', 1),
('ECR', 'none', '2024-02-15', '2024-02-16', 1),
('ECR', 'none', '2024-02-15', '2024-02-16', 1),
('ECR', 'none', '2024-02-15', '2024-02-16', 1),
('ECR', 'none', '2024-02-15', '2024-02-18', 1),
('ECR', 'none', '2024-02-15', '2024-02-16', 1),
('ECR', 'fourWheele', '2024-02-15', '2024-02-16', 1),
('ECR', 'none', '2024-02-15', '2024-02-16', 3),
('ECR', 'twoWheeler', '2024-02-18', '2024-02-19', 1),
('ECR', 'twoWheeler', '2024-02-18', '2024-02-19', 1),
('ECR', 'twoWheeler', '2024-02-18', '2024-02-19', 1),
('VARKALA', 'fourWheele', '2024-02-18', '2024-02-19', 3),
('VARKALA', 'fourWheele', '2024-02-18', '2024-02-19', 3),
('PONDICHERR', 'twoWheeler', '2024-02-18', '2024-02-19', 1),
('ECR', 'none', '2024-02-23', '2024-02-24', 1),
('ECR', 'twoWheeler', '2024-02-29', '2024-03-01', 3),
('ECR', 'twoWheeler', '2024-02-29', '2024-03-01', 3),
('ECR', 'fourWheele', '2024-02-24', '2024-02-25', 3),
('ECR', 'fourWheele', '2024-02-24', '2024-02-25', 3),
('ECR', 'fourWheele', '2024-02-24', '2024-02-25', 3),
('ECR', 'none', '2024-02-18', '2024-02-19', 1),
('ECR', 'none', '2024-02-18', '2024-02-19', 1),
('ECR', 'none', '2024-02-18', '2024-02-19', 1),
('ECR', 'none', '2024-02-18', '2024-02-19', 1),
('ECR', 'none', '2024-02-18', '2024-02-19', 1),
('ECR', 'none', '2024-02-18', '2024-02-19', 1),
('ECR', 'none', '2024-02-18', '2024-02-19', 3),
('ECR', 'none', '2024-02-18', '2024-02-19', 1),
('ECR', 'none', '2024-02-18', '2024-02-19', 1),
('ECR', 'none', '2024-02-18', '2024-02-19', 1),
('ECR', 'none', '2024-02-18', '2024-02-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ultimate`
--

CREATE TABLE `ultimate` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ultimate`
--

INSERT INTO `ultimate` (`firstname`, `lastname`, `email`, `phone`) VALUES
('rbrsusfhu', '0', 'gaikwadnitesh949@gmail.com', 2147483647),
('rbrsusfhu', 'dsfsk', 'gaikwadnitesh949@gmail.com', 2147483647),
('rajendra', 'singh', 'arifkhan8850@gmail.com', 45689563),
('rajendra', 'singh', 'arifkhan8850@gmail.com', 45689563),
('efkfsiuiu', 'prasad', 'arifkhan8850@gmail.com', 2147483647),
('efkfsiuiu', 'fsohfuih', 'gaikwadnitesh949@gmail.com', 2147483647),
('rajendra', 'fsfljfljsilf', 'singhrajendra9821266@gmail.com', 2147483647),
('rajendra', 'fsfljfljsilf', 'gaikwadnitesh949@gmail.com', 2147483647),
('khjrg', 'fsfljfljsilf', 'gaikwadnitesh949@gmail.com', 2147483647),
('harsha', 'fsfljfljsilf', 'singhrajendra9821266@gmail.com', 1234567892),
('khjrg', 'fsfljfljsilf', 'gaikwadnitesh949@gmail.com', 2147483647),
('rajendra', 'fsfljfljsilf', 'lathaprasad114@gmail.com', 2147483647),
('rajendra', 'fsfljfljsilf', 'lathaprasad114@gmail.com', 2147483647),
('rajendra', 'singh', 'arifkhan8850@gmail.com', 2147483647),
('efkfsiuiu', 'fsfljfljsilf', 'arifkhan8850@gmail.com', 987541263),
('khjrg', 'fsfljfljsilf', 'gaikwadnitesh949@gmail.com', 2147483647);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
