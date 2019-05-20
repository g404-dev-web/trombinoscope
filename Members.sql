-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: mariadb:3306
-- Generation Time: Sep 19, 2018 at 09:04 AM
-- Server version: 10.1.34-MariaDB-1~bionic
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simplon`
--

-- --------------------------------------------------------

--
-- Table structure for table `Members`
--

DROP TABLE IF EXISTS `Members`;

CREATE TABLE `Members` (
  `id` tinyint(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `lien` text NOT NULL,
  `phrase` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Indexes for table `Members`
--
ALTER TABLE `Members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `Members`
--
ALTER TABLE `Members`
  MODIFY `id` tinyint(10) NOT NULL AUTO_INCREMENT;
COMMIT;

--
-- Dumping data for table `Members`
--

INSERT INTO `Members` (`name`, `lastname`, `image`, `lien`, `phrase`) VALUES
('Jérémy', 'Marconnes', 'assets/team/Jeremy_M.png', 'promo1/Marconnes-Jeremy/index.html', 'test'),
('Wilfried', 'Artus', 'assets/team/Wilfried.jpeg', 'promo1/Wilfried-Artus/index.html', 'test'),
('Marie-France', 'Gauthier', 'assets/team/MF.jpeg', 'promo1/Gauthier-MF/index.html', 'test'),
('Jennifer', 'Parratte', 'assets/team/Jen.png', 'promo1/Paratte-Jennifer/index.html', 'test'),
('Arnaud', 'Dussart', 'assets/team/Arnaud.png', 'promo1/Dussart-Arnaud/index.html', 'test'),
('Kevin', 'Sinjy', 'assets/team/Kevin.png', 'promo1/Sinjy-Kevin/index.html', 'test'),
('Jérémy', 'Gauthier', 'assets/team/Jeremy_G.png', 'promo1/Gauthier-Jeremy/index.html', 'test'),
('Alexandre', 'Loretzin', 'assets/team/Alex.jpg', 'promo1/Loretzin-Alexandre/index.html', 'test'),
('Florent', 'Ferlay', 'assets/team/Florent.png', 'promo1/Ferlay-Florent/index.html', 'test'),
('Morgan', 'Vallicelli', 'assets/team/Morgane.jpg', 'promo1/Vallicelli-Morgan/index.html', 'test'),
('Estelle', 'Grange', 'assets/team/Estelle.jpg', 'promo1/Grange-Estelle/index.html', 'test'),
('Marine', 'Gontard', 'assets/team/Marine.png', 'promo1/Gontard-Marine/index.html', 'test'),
('Tiffany', 'Gouttenoire', 'assets/team/Tiffany.png', 'promo1/Gouttenoire-Tiffany/index.html', 'test'),
('Céline', 'Guyot', 'assets/team/Celine.png', 'promo1/Guyot-Celine/index.html', 'test'),
('Yvé', 'Da Costa', 'assets/team/Yvé.png', 'promo1/Da-Costa-Yve/index.html', 'test'),
('Thomas', 'Gaillot', 'assets/team/Thomas.png', 'promo1/Gaillot-Thomas/index.html', 'test'),
('Stéphane', 'Fernandes', 'assets/team/wilfried.jpeg', 'promo1/Fernandes-Stephane/index.html', 'test'),
('loic', 'Neyron', 'assets/team/loic.png', 'promo1/Neyron-Loic/index.html', 'test');

--
-- Indexes for dumped tables
--

--
-- AUTO_INCREMENT for dumped tables
--



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
