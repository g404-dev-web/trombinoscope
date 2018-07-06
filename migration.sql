SET NAMES utf8;

DROP DATABASE IF EXISTS simplon;
CREATE DATABASE simplon CHARACTER SET utf8 COLLATE utf8_general_ci;

USE simplon;

DROP TABLE IF EXISTS `likes`;
CREATE TABLE `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `ip` varchar(45) NOT NULL,
  `liked_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `likes` (`id`, `student_id`, `ip`, `liked_at`) VALUES
(1,	1, 'xx:xx:xx:xx', NOW());

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `students` (`id`, `firstname`, `lastname`) VALUES
(1,	'Jennifer',	'Paratte'),
(2, 'Céline', 'Guyot');