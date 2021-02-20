-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2021 at 07:01 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `missions`
--

-- --------------------------------------------------------

--
-- Table structure for table `quests`
--

CREATE TABLE `quests` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `num_vots` int(11) NOT NULL,
  `mitjana` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quests`
--

INSERT INTO `quests` (`id`, `descripcion`, `num_vots`, `mitjana`) VALUES
(1, 'Trobar el cami al castell encantat', 5, '2.30'),
(2, 'Descobrir l\'habitació sectreta del hotel', 7, '3.20'),
(3, 'Hola em dic pau', 9, '2.50'),
(4, 'Descobrir udfnjronjro', 8, '3.70'),
(5, 'El príncipe rescató a la princesa de las garras del dragón', 7, '4.60');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `nick` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `nick`, `password`, `score`) VALUES
(1, 'Pau ', 'Saltó', 'psalto', '123456', 40),
(2, 'Cristian', NULL, 'cramirez', '123456', 436),
(3, 'Sergi', 'Grau', 'sgrau', '123456', 15),
(4, 'Alberto', 'Cabrera', 'acabrera', '123456', 0),
(5, 'Javi', NULL, 'jgarcia', '123456', 350),
(6, 'Manuel', 'Garcia', 'mgarcia', '123456', 0),
(11, 'Marta', 'Fernandez', 'mvidal', '123456', 230),
(12, 'dssa<f', 'sr2e42e2', 'dfdfdfd', '13r334', 10),
(13, 'marcel', 'reca', 'reka', '123456', 12155),
(14, 'Alex', 'Rios', 'Arios', '123456', 255),
(15, 'hola', 'hola', 'hola', '123456', 65);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quests`
--
ALTER TABLE `quests`
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
-- AUTO_INCREMENT for table `quests`
--
ALTER TABLE `quests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
