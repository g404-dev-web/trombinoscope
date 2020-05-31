-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 06 août 2018 à 12:30
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
-- Base de données :  `mini_chat_marine`
--
CREATE DATABASE IF NOT EXISTS `mini_chat_marine` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mini_chat_marine`;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `date_message` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IP` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `pseudo`, `message`, `date_message`, `IP`, `user_agent`) VALUES
(1, 'sq', 'dsq', '2018-07-27 00:00:00', '', ''),
(2, 'dsqdsqdsqdsq', 'dsqdsqdsqdsqdsq', '2018-07-27 00:00:00', '', ''),
(3, 'jounette', 'Coucou la compagnie !!', '2018-07-27 00:00:00', '', ''),
(4, 'monique', 'hello', '2018-07-27 00:00:00', '', ''),
(5, 'flo', 'Tous à la flotte !', '2018-07-27 00:00:00', '', ''),
(6, 'Jinette', 'J\'ai chaud', '2018-07-27 00:00:00', '', ''),
(7, 'aze', 'salut', '2018-07-27 00:00:00', '', ''),
(8, 'rose', 'Canicule !', '2018-07-27 00:00:00', '', ''),
(9, 'arnaud', 'hola gwapa', '2018-07-27 00:00:00', '', ''),
(10, 'marion', 'Salut', '2018-07-27 00:00:00', '', ''),
(11, 'Zazouette', 'ciao', '2018-07-27 00:00:00', '', ''),
(12, 'Zazouette', 'ciao', '2018-07-27 00:00:00', '', ''),
(13, 'rertr', 'sfeserre', '2018-07-27 00:00:00', '', ''),
(14, 'rertr', 'sfeserre', '2018-07-27 14:56:00', '', ''),
(15, 'sss', 'qqq', '2018-07-27 14:56:08', '', ''),
(16, 'sss', 'qqq', '2018-07-27 14:56:31', '', ''),
(17, 'ol', 'lol', '2018-07-27 14:56:37', '', ''),
(18, 'ol', 'lol', '2018-07-27 14:58:35', '', ''),
(19, 'sa', 'sa', '2018-07-27 14:58:39', '', ''),
(20, 'sa', 'sa', '2018-07-27 14:59:58', '', ''),
(21, 'uieyzey', 'diozeyzeo', '2018-07-27 15:00:19', '', ''),
(22, 'uieyzey', 'diozeyzeo', '2018-07-27 15:00:53', '', ''),
(23, 'uieyzey', 'diozeyzeo', '2018-07-27 15:01:15', '', ''),
(24, 'uieyzey', 'diozeyzeo', '2018-07-27 15:01:42', '', ''),
(25, 'uieyzey', 'diozeyzeo', '2018-07-27 15:03:50', '', ''),
(26, 'uieyzey', 'diozeyzeo', '2018-07-27 15:21:50', '', ''),
(27, 'aaaa', 'cc', '2018-07-27 15:21:53', '', ''),
(28, 'aaaa', 'cc', '2018-07-27 15:29:05', '', ''),
(29, 'qa', 'lol', '2018-07-27 15:29:09', '', ''),
(30, 'qa', 'lol', '2018-07-27 16:07:47', '', ''),
(31, 'monique', 'fdsdfsq', '0000-00-00 00:00:00', '', ''),
(32, 'monique', 'zae', '0000-00-00 00:00:00', '', ''),
(33, 'kiki', 'dzezaeza', '0000-00-00 00:00:00', '', ''),
(34, 'kiki', 'ezaezaezaezezaezaeza', '0000-00-00 00:00:00', '', ''),
(35, 'kiki', 'aaaaaaaaaaa', '0000-00-00 00:00:00', '', ''),
(36, 'kiki', 'dsqdsq', '2018-07-31 12:03:16', '', ''),
(37, 'monique', 'za', '2018-07-31 12:09:30', '', ''),
(38, 'kiki', 'dd', '2018-07-31 12:09:36', '', ''),
(39, 'monique', 'zaeza', '2018-07-31 12:11:03', '', ''),
(40, 'aa', 'aaaaa', '2018-07-31 12:16:15', '', ''),
(41, 'aa', 'lllll', '2018-07-31 13:48:28', '', ''),
(42, 'jeannine', 'cc', '2018-07-31 13:53:18', '', ''),
(43, 'lll', 'azer', '2018-07-31 14:07:23', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(44, 'lll', 'sssssssss', '2018-07-31 15:18:53', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(45, 'lll', 'pppppp', '2018-07-31 15:19:01', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(46, 'marine', 'ok', '2018-07-31 15:21:14', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(47, 'marine42', 'ok', '2018-07-31 15:23:02', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(48, 'marine42', 'yeah', '2018-07-31 15:23:55', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(49, 'marie', 'okok', '2018-07-31 15:25:06', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(50, 'marie', 'slt', '2018-07-31 15:26:24', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(51, 'marie', 'okayyyy', '2018-07-31 15:27:31', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(52, 'mariez', 'ss', '2018-07-31 15:28:38', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(53, 'mariez', 'ss', '2018-07-31 15:29:03', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(54, 'mariez', 'ddd', '2018-07-31 15:29:11', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(55, 'mariez', 'zzzz', '2018-07-31 15:29:36', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(56, 'mariez', 'zzzz', '2018-07-31 15:29:45', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(57, 'jean robert', 'mdr', '2018-07-31 16:32:33', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(58, 'de la coquillette', 'coucou', '2018-07-31 16:32:44', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(59, 'de la coquillette', 'hola', '2018-07-31 16:57:11', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(60, 'jeannine', 'coucou', '2018-07-31 18:21:17', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(61, 'jeannine', 'Hola', '2018-07-31 18:38:50', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(62, 'zazouette', ';-)', '2018-07-31 21:19:06', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(63, 'Patou', 'slt biquette', '2018-07-31 22:18:12', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(64, 'Sylvie', 'Heyyyyyy !!', '2018-07-31 22:19:01', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(65, 'Renée', ';-)', '2018-07-31 22:41:52', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(66, 'Clara', 'Bonne vacance ! :-)', '2018-07-31 22:42:54', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(67, 'Delph Lair', 'Las vacaciones esto caliente !', '2018-07-31 22:46:23', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(68, 'Rose', 'Sur le pont d\'avignon ....', '2018-07-31 22:46:45', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(69, 'Laurie', 'Bientôt maman =)', '2018-07-31 22:47:31', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(70, 'Flamby', 'Si j\'avais un bateau je l\'appelerai l\'espagnola ', '2018-07-31 22:47:57', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(71, 'Godiflan', 'Viva Montpellier ! Pardi l\'ami ', '2018-07-31 23:20:01', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(72, 'Celine', 'Rodriguez !!!', '2018-07-31 23:20:12', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(73, 'Godiv', 'Dans mon monde à moi y\'a que des poneys !!', '2018-07-31 23:20:47', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(74, 'bambou', 'hey', '2018-07-31 23:21:24', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(75, 'zazou', 'mini chat', '2018-07-31 23:58:56', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(76, 'Jo', 'ahah', '2018-08-01 00:09:42', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(77, 'lol', 'aaa', '2018-08-01 10:02:17', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(78, 'jeanne', 'ok', '2018-08-01 10:04:21', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(79, 'jeanne', 'ok', '2018-08-01 10:10:16', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(80, 'jeanne', 'sa', '2018-08-01 10:10:34', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(81, 'jeanne', 'hi', '2018-08-01 10:19:06', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(82, 'patrick', 'hi', '2018-08-01 10:19:14', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(83, 'Flamby', 'qué calor', '2018-08-01 11:49:24', '192.168.1.24', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/68.0.3440.75 Chrome/68.0.3440.75 Safari/537.36'),
(84, 'pierre', 'fxfdf', '2018-08-01 17:58:49', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(85, 'Gael', 'test', '2018-08-06 09:37:25', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(86, 'Gael', 'test2', '2018-08-06 09:37:28', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(87, 'Gael', 'test2', '2018-08-06 09:37:30', '192.168.1.51', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0');

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
('bambou', '#ed9caf'),
('Celine', '#91ead2'),
('Clara', '#20a303'),
('de la coquillette', '#d7a8f7'),
('Delph Lair', '#fcc7cc'),
('Flamby', '#3d9dc6'),
('Gael', '#ac4af7'),
('Godiflan', '#ce21bd'),
('Godiv', '#94d863'),
('jean robert', '#f49986'),
('jeanne', '#b794ef'),
('jeannine', '#1abf8d'),
('Jo', '#9e97db'),
('Laurie', '#74bc2d'),
('lol', '#2b2bad'),
('mariez', '#ee56ff'),
('Patou', '#ce0e9e'),
('patrick', '#93f2ab'),
('pierre', '#aefce6'),
('Renée', '#fc6cce'),
('Rose', '#ef13d2'),
('Sylvie', '#cfdd08'),
('zazou', '#f235a3'),
('zazouette', '#ffd5a3');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`pseudo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
