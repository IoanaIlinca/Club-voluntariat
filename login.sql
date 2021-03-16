-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2019 at 10:13 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `massages`
--

CREATE TABLE `massages` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `message` varchar(400) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `massages`
--

INSERT INTO `massages` (`id`, `lastname`, `firstname`, `message`, `email`, `date`) VALUES
(1, 'Moldovan', 'Ioana Ilinca', 'Test', 'admin@gmail.com', '2019-05-16 11:28:38'),
(2, 'Nume', 'Prenume', 'Rotaract este aripa tanara a Rotary, o comunitate internationala de tineri profesionisti cu varsta cuprinsa intre 18 si 30 de ani, care ofera acestora un cadru de dezvoltare personala prin implicarea in rezolvarea nevoilor fizice si sociale ale comunitatilor lor.', 'admin@gmail.com', '2019-05-16 11:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `membri`
--

CREATE TABLE `membri` (
  `id` int(11) NOT NULL,
  `poza` varchar(255) NOT NULL,
  `nume` varchar(255) NOT NULL,
  `functie` varchar(255) NOT NULL,
  `descriere` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membri`
--

INSERT INTO `membri` (`id`, `poza`, `nume`, `functie`, `descriere`, `facebook`) VALUES
(1, 'https://cdn.rotaract.ro/images-crop/avatars/300x300/2077@2x.jpg', 'Alexandru Iliesi', 'Presedinte', '', 'https://www.facebook.com/alexandru.iliesi'),
(3, 'https://cdn.rotaract.ro/images-crop/avatars/300x300/3968@2x.jpg', 'Lorena Cosma', 'Secretar', '', 'https://www.facebook.com/cosma.lorenutza');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `is_admin`) VALUES
(2, 'admin@gmail.com', 'admin12', '9d9cefe63dd1e233fcbb8ee3320073c77c0880e9', 1),
(3, 'user@gmail.com', 'user', '869b3d7602a0fff95dbfd7413b67a79ef8689ba0', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `massages`
--
ALTER TABLE `massages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membri`
--
ALTER TABLE `membri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `massages`
--
ALTER TABLE `massages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `membri`
--
ALTER TABLE `membri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
