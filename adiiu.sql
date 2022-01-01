-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 01, 2022 at 01:49 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adiiu`
--

-- --------------------------------------------------------

--
-- Table structure for table `Banana`
--

CREATE TABLE `Banana` (
  `Nutrients` varchar(60) NOT NULL,
  `Grams` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Banana`
--

INSERT INTO `Banana` (`Nutrients`, `Grams`) VALUES
('Carbohydrates', 23),
('Fiber', 2.6),
('Protein', 1.1),
('Sugars', 12),
('Total Fat', 0.3);

-- --------------------------------------------------------

--
-- Table structure for table `Navegador`
--

CREATE TABLE `Navegador` (
  `Navegador` varchar(20) NOT NULL,
  `Usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Navegador`
--

INSERT INTO `Navegador` (`Navegador`, `Usuarios`) VALUES
('Chrome', 73),
('Edge', 9),
('Firefox', 8),
('Opera', 3),
('Others', 3),
('Safari', 10);

-- --------------------------------------------------------

--
-- Table structure for table `Population`
--

CREATE TABLE `Population` (
  `id` int(11) NOT NULL,
  `country` text NOT NULL,
  `population` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Population`
--

INSERT INTO `Population` (`id`, `country`, `population`) VALUES
(1, 'China', 1439323776),
(2, 'India', 1380004385),
(3, 'USA', 331002651),
(4, 'Indonesia', 273523615),
(5, 'Pakistan', 220892340);

-- --------------------------------------------------------

--
-- Table structure for table `Ventas`
--

CREATE TABLE `Ventas` (
  `Mes` int(2) NOT NULL,
  `Ventas` int(11) NOT NULL,
  `Gastos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Ventas`
--

INSERT INTO `Ventas` (`Mes`, `Ventas`, `Gastos`) VALUES
(1, 100000, 40000),
(2, 100000, 40000),
(3, 120000, 45000),
(4, 130000, 60000),
(5, 110000, 80000),
(6, 150000, 85000),
(7, 170000, 90000),
(8, 190000, 100000),
(9, 210000, 140000),
(10, 250000, 145000),
(11, 200000, 154000),
(12, 280000, 160000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Banana`
--
ALTER TABLE `Banana`
  ADD PRIMARY KEY (`Nutrients`);

--
-- Indexes for table `Navegador`
--
ALTER TABLE `Navegador`
  ADD PRIMARY KEY (`Navegador`);

--
-- Indexes for table `Population`
--
ALTER TABLE `Population`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Ventas`
--
ALTER TABLE `Ventas`
  ADD PRIMARY KEY (`Mes`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Population`
--
ALTER TABLE `Population`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
