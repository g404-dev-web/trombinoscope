-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 06 août 2018 à 15:17
-- Version du serveur :  10.1.34-MariaDB
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `minichatJenn`
--
CREATE DATABASE IF NOT EXISTS `minichatJenn` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `minichatJenn`;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `pseudo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `message` text CHARACTER SET utf8,
  `date` datetime DEFAULT NULL,
  `ip` varchar(255) CHARACTER SET utf8 NOT NULL,
  `UserAgent` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `pseudo`, `message`, `date`, `ip`, `UserAgent`) VALUES
(1, 'mklljk', 'uyij', '2018-07-27 16:11:18', '', ''),
(2, '', 'loklkj', '2018-07-27 16:11:28', '', ''),
(3, '', '', '2018-07-27 16:11:30', '', ''),
(4, '', '', '2018-07-27 16:11:34', '', ''),
(5, 'qsdw', 'wsdc', '2018-07-27 16:12:38', '', ''),
(6, 'esijdkl', 'sodiqk', '2018-07-30 09:18:34', '', ''),
(7, 'ijk', 'kl', '2018-07-30 09:20:12', '', ''),
(8, 'kjdklizjsd', 'qkudxiuqj', '2018-07-30 11:01:29', '', ''),
(9, 'kijloj', 'ijom', '2018-07-30 11:07:46', '', ''),
(10, 'hytiuokl', 'ikpmkmiuytr', '2018-07-30 11:43:04', '', ''),
(11, 'kiukjlij', 'sqsdfhghj', '2018-07-30 12:08:19', '', ''),
(12, 'uiytr', 'o__iuo', '2018-07-30 12:11:51', '', ''),
(13, 'ertyuio', 'reetyuiop', '2018-07-30 12:12:40', '', ''),
(14, 'ujktyd', 'sertyuijk', '2018-07-30 14:58:02', '', ''),
(15, 'zretyuiop', '?ertyuiop', '2018-07-30 14:59:27', '', ''),
(16, 'iuuk', 'khjlm', '2018-07-30 16:18:11', '', ''),
(17, 'jklllnjhj', 'sdfghjklm', '2018-07-31 11:27:47', '', ''),
(18, 'jojo', 'loikjlmmm', '2018-07-31 11:58:11', '', ''),
(19, 'zertyui', 'zertyuiop', '2018-07-31 12:00:19', '', ''),
(20, 'zertyui', 'sdfgyuiop', '2018-07-31 12:00:25', '', ''),
(21, 'zertyui', 'ertyuioplm', '2018-07-31 12:02:42', '', ''),
(22, 'lilil', 'qsdfghjklm', '2018-07-31 12:28:43', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(23, 'ertyui', 'tyujkilomp', '2018-07-31 14:15:09', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(24, 'ertyui', 'uklkmlm', '2018-07-31 14:48:33', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(25, 'gtjkijmokmp', 'qsdytuiokll', '2018-07-31 15:33:21', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(26, 'gtjkijmokmp', 'qsdytuiokll', '2018-07-31 15:35:03', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(27, 'gtjkijmokmp', 'qsdytuiokll', '2018-07-31 15:35:06', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(28, 'gtjkijmokmp', 'qsdytuiokll', '2018-07-31 16:37:51', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(29, 'gtjkijmokmp', 'qsdytuiokll', '2018-07-31 16:37:57', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(30, 'gtjkijmokmp', 'qsdytuiokll', '2018-07-31 16:38:21', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(31, 'gtjkijmokmp', 'qsdytuiokll', '2018-07-31 16:39:50', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(32, 'gtjkijmokmp', 'qsdytuiokll', '2018-07-31 16:41:02', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(33, 'gtjkijmokmp', 'qsdytuiokll', '2018-07-31 16:42:28', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(34, 'moi', 'hello', '2018-07-31 16:47:23', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(35, 'moi', 'hello2', '2018-07-31 16:49:41', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(36, 'moi', 'ulkmkiokùl', '2018-07-31 17:13:34', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(37, 'moi', 'ulkmkiokùl', '2018-08-01 10:06:19', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(38, 'moi', 'mouton', '2018-08-01 10:06:52', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(39, 'moi', 'moutonkljl', '2018-08-01 10:07:08', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(40, 'moi', 'moutonkljl', '2018-08-01 10:21:01', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(41, 'moi', 'moutonkljl', '2018-08-01 10:35:12', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(42, NULL, NULL, '2018-08-01 10:49:20', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(43, 'moi', 'moutonkljl', '2018-08-01 10:49:21', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(44, NULL, NULL, '2018-08-01 10:49:22', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(45, NULL, NULL, '2018-08-01 10:49:24', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(46, NULL, NULL, '2018-08-01 10:49:26', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(47, NULL, NULL, '2018-08-01 10:49:28', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(48, NULL, NULL, '2018-08-01 10:49:30', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(49, NULL, NULL, '2018-08-01 10:49:32', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(50, NULL, NULL, '2018-08-01 10:49:34', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(51, NULL, NULL, '2018-08-01 10:49:36', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(52, NULL, NULL, '2018-08-01 10:49:38', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(53, NULL, NULL, '2018-08-01 10:49:40', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(54, NULL, NULL, '2018-08-01 10:49:42', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(55, NULL, NULL, '2018-08-01 10:49:44', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(56, NULL, NULL, '2018-08-01 10:49:46', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(57, NULL, NULL, '2018-08-01 10:49:48', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(58, NULL, NULL, '2018-08-01 10:49:50', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(59, 'moi', 'moutonkljl', '2018-08-01 10:49:50', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(60, NULL, NULL, '2018-08-01 10:49:52', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(61, NULL, NULL, '2018-08-01 10:49:54', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(62, NULL, NULL, '2018-08-01 10:49:56', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(63, NULL, NULL, '2018-08-01 10:49:58', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(64, NULL, NULL, '2018-08-01 10:50:00', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(65, NULL, NULL, '2018-08-01 10:50:02', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(66, NULL, NULL, '2018-08-01 10:50:04', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(67, NULL, NULL, '2018-08-01 10:50:06', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(68, NULL, NULL, '2018-08-01 10:50:08', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(69, NULL, NULL, '2018-08-01 10:50:10', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(70, NULL, NULL, '2018-08-01 10:50:12', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(71, NULL, NULL, '2018-08-01 10:50:14', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(72, NULL, NULL, '2018-08-01 10:50:16', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(73, NULL, NULL, '2018-08-01 10:50:18', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(74, NULL, NULL, '2018-08-01 10:50:20', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(75, NULL, NULL, '2018-08-01 10:50:22', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(76, NULL, NULL, '2018-08-01 10:50:24', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(77, NULL, NULL, '2018-08-01 10:50:26', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(78, NULL, NULL, '2018-08-01 10:50:29', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(79, NULL, NULL, '2018-08-01 10:50:31', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(80, NULL, NULL, '2018-08-01 10:50:33', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(81, NULL, NULL, '2018-08-01 10:50:35', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(82, NULL, NULL, '2018-08-01 10:50:37', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(83, NULL, NULL, '2018-08-01 10:50:39', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(84, NULL, NULL, '2018-08-01 10:50:41', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(85, NULL, NULL, '2018-08-01 10:50:43', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(86, NULL, NULL, '2018-08-01 10:50:45', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(87, NULL, NULL, '2018-08-01 10:50:47', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(88, NULL, NULL, '2018-08-01 10:50:49', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(89, NULL, NULL, '2018-08-01 10:50:51', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(90, NULL, NULL, '2018-08-01 10:50:53', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(91, NULL, NULL, '2018-08-01 10:50:55', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(92, NULL, NULL, '2018-08-01 10:50:57', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(93, NULL, NULL, '2018-08-01 10:50:59', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(94, NULL, NULL, '2018-08-01 10:51:01', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(95, NULL, NULL, '2018-08-01 10:51:03', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(96, NULL, NULL, '2018-08-01 10:51:05', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(97, NULL, NULL, '2018-08-01 10:51:07', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(98, NULL, NULL, '2018-08-01 10:51:09', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(99, NULL, NULL, '2018-08-01 10:51:11', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(100, 'ukjlkjkmlkmlk', 'moutonkljl', '2018-08-01 10:51:20', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(101, 'ukjlkjkmlkmlk', 'moutonkljl', '2018-08-01 10:51:29', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(102, 'ukjlkjkmlkmlk', 'moutonkljl', '2018-08-01 10:51:32', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(103, 'ukjlkjkmlkmlk', 'moutonkljl', '2018-08-01 10:51:39', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(104, NULL, NULL, '2018-08-01 11:17:07', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(105, 'ukjlkjkmlkmlk', 'moutonkljl', '2018-08-01 11:17:08', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(106, NULL, NULL, '2018-08-01 11:17:09', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(107, NULL, NULL, '2018-08-01 11:17:11', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(108, NULL, NULL, '2018-08-01 11:17:13', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(109, NULL, NULL, '2018-08-01 11:17:15', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(110, NULL, NULL, '2018-08-01 11:17:17', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(111, NULL, NULL, '2018-08-01 11:17:19', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(112, NULL, NULL, '2018-08-01 11:17:21', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(113, NULL, NULL, '2018-08-01 11:17:23', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(114, NULL, NULL, '2018-08-01 11:17:25', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(115, NULL, NULL, '2018-08-01 11:17:27', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(116, NULL, NULL, '2018-08-01 11:17:29', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(117, NULL, NULL, '2018-08-01 11:17:31', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(118, NULL, NULL, '2018-08-01 11:17:33', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(119, NULL, NULL, '2018-08-01 11:17:35', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(120, NULL, NULL, '2018-08-01 11:17:37', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(121, NULL, NULL, '2018-08-01 11:17:39', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(122, NULL, NULL, '2018-08-01 11:17:41', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(123, NULL, NULL, '2018-08-01 11:17:43', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(124, NULL, NULL, '2018-08-01 11:17:45', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(125, NULL, NULL, '2018-08-01 11:17:47', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(126, NULL, NULL, '2018-08-01 11:17:49', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(127, NULL, NULL, '2018-08-01 11:17:51', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(128, NULL, NULL, '2018-08-01 11:17:53', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(129, NULL, NULL, '2018-08-01 11:17:55', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(130, NULL, NULL, '2018-08-01 11:17:57', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(131, NULL, NULL, '2018-08-01 11:17:59', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(132, NULL, NULL, '2018-08-01 11:18:01', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(133, NULL, NULL, '2018-08-01 11:18:03', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(134, NULL, NULL, '2018-08-01 11:18:05', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(135, NULL, NULL, '2018-08-01 11:18:07', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(136, NULL, NULL, '2018-08-01 11:18:09', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(137, NULL, NULL, '2018-08-01 11:18:11', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(138, NULL, NULL, '2018-08-01 11:18:13', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(139, NULL, NULL, '2018-08-01 11:18:15', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(140, NULL, NULL, '2018-08-01 11:18:17', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(141, NULL, NULL, '2018-08-01 11:18:19', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(142, NULL, NULL, '2018-08-01 11:18:21', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(143, NULL, NULL, '2018-08-01 11:18:23', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(144, 'ukjlkjkmlkmlk', 'moutonkljl', '2018-08-01 11:18:26', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(145, 'ukjlkjkmlkmlk', 'moutonkljl', '2018-08-01 11:18:38', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(146, 'ukjlkjkmlkmlk', 'moutonkljl', '2018-08-01 16:28:28', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(147, 'zretyuiop', 'iokmlm', '2018-08-06 09:29:26', '192.168.1.25', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(148, 'gael2', 'test2', '2018-08-06 10:07:24', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(149, 'gael2', 'test23', '2018-08-06 10:07:28', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(150, 'gael2', 'test23', '2018-08-06 10:07:48', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(151, 'gael2', 'test23', '2018-08-06 10:08:28', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(152, 'gael2', 'test23', '2018-08-06 10:08:28', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(153, 'gael2', 'test23', '2018-08-06 10:08:28', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(154, 'gael2', 'test23', '2018-08-06 10:08:28', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(155, 'gael2', 'test23', '2018-08-06 10:08:28', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(156, 'gael2', 'test23', '2018-08-06 10:08:29', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(157, 'gael2', 'test23', '2018-08-06 10:08:29', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(158, 'gael2', 'test23', '2018-08-06 10:08:29', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(159, 'gael2', 'test23', '2018-08-06 10:08:29', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(160, 'gael2', 'test23', '2018-08-06 10:08:29', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(161, 'gael2', 'test23', '2018-08-06 10:08:29', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(162, 'gael2', 'test23', '2018-08-06 10:08:31', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(163, 'gael2', 'test23', '2018-08-06 10:08:32', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(164, 'gael2', 'test23', '2018-08-06 10:08:32', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(165, 'gael2', 'test23', '2018-08-06 10:08:32', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(166, 'gael2', 'test23', '2018-08-06 10:08:32', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(167, 'gael2', 'test23', '2018-08-06 10:08:32', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(168, 'gael2', 'test23', '2018-08-06 10:08:32', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(169, 'gael2', 'test23', '2018-08-06 10:08:32', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(170, 'gael2', 'test23', '2018-08-06 10:08:33', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(171, 'gael2', 'test23', '2018-08-06 10:08:33', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(172, 'gael2', 'test23', '2018-08-06 10:08:33', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(173, 'gael2', 'test23', '2018-08-06 10:08:33', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(174, 'gael2', 'test23', '2018-08-06 10:08:35', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(175, 'gael2', 'test23', '2018-08-06 10:08:35', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(176, 'gael2', 'test23', '2018-08-06 10:08:35', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(177, 'gael2', 'test23', '2018-08-06 10:09:44', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(178, 'gael2', 'test23', '2018-08-06 10:09:45', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(179, 'gael2', 'test23', '2018-08-06 10:09:45', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(180, 'gael2', 'test23', '2018-08-06 10:09:45', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(181, 'gael2', 'test23', '2018-08-06 10:09:45', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(182, 'gael2', 'test23', '2018-08-06 10:09:45', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(183, 'gael2', 'test23', '2018-08-06 10:09:46', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(184, 'gael2', 'test23', '2018-08-06 10:09:46', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(185, 'gael2', 'test23', '2018-08-06 10:09:46', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(186, 'zretyuiop', 'ukjpompikojoi', '2018-08-06 11:36:33', '192.168.1.25', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(187, 'zretyuiop', 'ukjpompikojoi', '2018-08-06 11:36:37', '192.168.1.25', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(188, 'zretyuiop', 'ppppoollll', '2018-08-06 11:36:48', '192.168.1.25', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `pseudo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `color` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`pseudo`, `color`) VALUES
('gtjkijmokmp', '#f28ccb'),
('moi', '#878bd3'),
('', '#edf497'),
('', '#b921d1'),
('', '#d899ef'),
('', '#41db9b'),
('', '#f4abbd'),
('', '#a6fcd0'),
('', '#e57b8d'),
('', '#ef8bde'),
('', '#f738ce'),
('', '#ff56d4'),
('', '#4be574'),
('', '#3bbf8a'),
('', '#a51c27'),
('', '#54ce50'),
('', '#d36554'),
('', '#e5e110'),
('', '#f27d24'),
('', '#2e02dd'),
('', '#3bce85'),
('', '#c6301f'),
('', '#7441db'),
('', '#fcc7d3'),
('', '#693fbf'),
('', '#e835b2'),
('', '#ffb2f8'),
('', '#fccdc2'),
('', '#f75433'),
('', '#717f07'),
('', '#2b438c'),
('', '#e2524a'),
('', '#a4f780'),
('', '#72eae4'),
('', '#4aefe4'),
('', '#47e8e8'),
('', '#fcb3ca'),
('', '#86f9cd'),
('', '#e55e04'),
('', '#7680e2'),
('', '#c7a9f2'),
('', '#4321a8'),
('', '#85e5c5'),
('', '#138e3c'),
('', '#d30c34'),
('', '#b50a2a'),
('', '#e8736f'),
('', '#9ef7a8'),
('', '#abfcae'),
('', '#d3f79e'),
('', '#9eade2'),
('', '#5bea5b'),
('', '#94bc27'),
('', '#f4a98b'),
('', '#22e8ca'),
('', '#b1bc31'),
('', '#db4ca4'),
('', '#07a5ba'),
('ukjlkjkmlkmlk', '#f943e4'),
('', '#f7dfad'),
('', '#7de07f'),
('', '#3d859e'),
('', '#80f970'),
('', '#efb0a5'),
('', '#cc7adb'),
('', '#afe6f7'),
('', '#56b70c'),
('', '#c72bf2'),
('', '#c6ff91'),
('', '#96d631'),
('', '#c1c9ff'),
('', '#3fd398'),
('', '#44eae5'),
('', '#2aaf68'),
('', '#98c13f'),
('', '#bff6fc'),
('', '#3aed0e'),
('', '#d4fca6'),
('', '#2eb213'),
('', '#fcc7d3'),
('', '#937fdb'),
('', '#5f53e2'),
('', '#4254ce'),
('', '#955bb7'),
('', '#95ed80'),
('', '#27eac0'),
('', '#5dd123'),
('', '#d1bd25'),
('', '#445fe5'),
('', '#f780ed'),
('', '#93f9ef'),
('', '#87b2f2'),
('', '#3c74a3'),
('', '#69d136'),
('', '#efde6b'),
('', '#3c1b99'),
('', '#46ce81'),
('', '#99f799'),
('zretyuiop', '#e53af4'),
('gael2', '#5b0996');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
