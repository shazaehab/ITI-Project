-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 07:39 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garage`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`c_id`, `c_name`, `c_image`) VALUES
(1, 'audi', 'audi.jpg'),
(2, 'KIA', 'kia.jpg'),
(3, 'Mercedes_Benz', 'mercedes.jpg'),
(4, 'Toyota', 'toyota.jpg'),
(5, 'Chevrolet', 'chevrolet.jpg'),
(6, 'BMW', 'BMWL.png');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `c_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(150) NOT NULL,
  `sub_img` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL,
  `model` int(11) NOT NULL,
  `best_seller` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`c_id`, `sub_id`, `sub_name`, `sub_img`, `price`, `model`, `best_seller`) VALUES
(1, 1, 'TT-RS', 'tt.jpg', '448.000 L.E\r\n40.859 $', 2019, 1),
(1, 2, 'A4', 'A4.jpg', '680.000 L.E\r\n60.500 $\r\n', 2020, 0),
(1, 3, 'A3', 'A3.jpg', '460.000 L.E\r\n41.000 $', 2020, 1),
(2, 4, 'sportag', 'sportage.jpg', '390.000 L.E\r\n40.000 $', 2020, 1),
(2, 5, 'Cerato', 'cerato.jpg', '360.000 L.E\r\n39.000 $', 2019, 0),
(2, 6, 'picanto', 'pec.jpg', '232.000 L.E\r\n35.000 $', 2013, 0),
(3, 7, 'EQC', 'EQC.png', '400.000 L.E\r\n38.000 $', 2019, 1),
(3, 8, 'AMG', 'AMG.jpg', '200.000.000 L.E\r\n12.500.000 $', 2020, 0),
(3, 9, 'GLG', 'GLG.jpg', '1.600.000 L.E\r\n100.000 $', 2020, 1),
(4, 10, 'corola', 'corola.jpg', '400.000 L.E\r\n38.000 $', 2019, 0),
(4, 11, 'raf 4', 'raf 4.jpg', '1.650.000 L.E\r\n104.000 $', 2020, 1),
(4, 12, 'RUSH', 'rush.jpg', '350.000 L.E\r\n25.000 $', 2018, 1),
(5, 13, 'LANOS', 'lanos.jpg', '166.000 L.E\r\n10.500 $', 2019, 0),
(5, 14, 'AVEO', 'aveo.jpg', '190.000 L.E\r\n20.000 $', 2012, 1),
(5, 15, 'OPTRA', 'optra.jpg', '220.000 L.E\r\n28.000 $', 2016, 1),
(6, 16, '118', '118.jpg', '600.000 L.E\r\n50.000 $ \r\n', 2019, 1),
(6, 17, 'X1', 'X.jpeg', '750.000 L.E\r\n64.000 $', 2016, 0),
(6, 18, '320', '320.jpg', '900.000 L.E\r\n70.000 $', 2017, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_name` (`c_name`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `c_id` (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `c_id_fk` FOREIGN KEY (`c_id`) REFERENCES `categorie` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
