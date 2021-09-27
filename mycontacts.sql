-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2021 at 12:31 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `mycontacts`
--

CREATE TABLE `mycontacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(18) DEFAULT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mycontacts`
--

INSERT INTO `mycontacts` (`id`, `name`, `phone`, `email`) VALUES
(1, 'Carine Schmitt', '09039887826', 'carine.schmitt@verizon.net'),
(2, 'Jean King', '09039887826', 'jean.king@me.com'),
(3, 'Peter Ferguson', '09039887826', 'peter.ferguson@google.com'),
(4, 'Janine Labrune', '09039887826', 'janine.labrune@aol.com'),
(5, 'Jonas Bergulfsen', '09039887826', 'jonas.bergulfsen@mac.com'),
(6, 'Janine Labrune', '09039887826', 'janine.labrune@aol.com'),
(7, 'Susan Nelson', '09039887826', 'susan.nelson@comcast.net'),
(8, 'Zbyszek Piestrzeniewicz', '09039887826', 'zbyszek.piestrzeniewicz@att.net'),
(9, 'Roland Keitel', '09039887826', 'roland.keitel@yahoo.com'),
(10, 'Julie Murphy', '09039887826', 'julie.murphy@yahoo.com'),
(11, 'Kwai Lee', '09039887826', 'kwai.lee@google.com'),
(12, 'Jean King', '09039887826', 'jean.king@me.com'),
(13, 'Susan Nelson', '09039887826', 'susan.nelson@comcast.net'),
(14, 'Roland Keitel', '09039887826', 'roland.keitel@yahoo.com'),
(15, 'Yusuf Adam', '08037861770', 'saif@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mycontacts`
--
ALTER TABLE `mycontacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mycontacts`
--
ALTER TABLE `mycontacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
