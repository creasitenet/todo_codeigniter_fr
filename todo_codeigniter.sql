-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 26 Septembre 2015 à 20:52
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `todo_codeigniter`
--

-- --------------------------------------------------------

--
-- Structure de la table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `todos`
--

CREATE TABLE IF NOT EXISTS `todos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '1',
  `text` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=166 ;

--
-- Contenu de la table `todos`
--

INSERT INTO `todos` (`id`, `user_id`, `text`, `status`, `created`, `modified`) VALUES
(147, 1, 'Test', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 1, 'Re test', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 1, 're re test', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 1, 're re test', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 0, 'Ajouter un système de modification de l''email', 1, '2014-08-19 18:40:35', '2014-10-05 15:25:50'),
(118, 0, 'Ajouter un système de modification du mot de passe', 1, '2014-08-19 18:38:03', '2014-10-05 15:25:55'),
(95, 0, 'Ajouter un système d''export de la liste de tâche', 1, '2014-08-12 20:00:00', '2014-11-20 18:36:26'),
(165, 0, 'test', 1, '2015-09-26 20:44:17', '0000-00-00 00:00:00');
