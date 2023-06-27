-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 12 déc. 2022 à 10:17
-- Version du serveur : 8.0.31
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog_folio`
--

DROP TABLE IF EXISTS `comment`;
DROP TABLE IF EXISTS `article`;
DROP TABLE IF EXISTS `project`;
DROP TABLE IF EXISTS `category`;
DROP TABLE IF EXISTS `user`;
DROP TABLE IF EXISTS `role`;


CREATE TABLE IF NOT EXISTS `article` (
  `id_art` int NOT NULL AUTO_INCREMENT,
  `name_art` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `content_art` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `date_art` date NOT NULL,
  `id_category` int DEFAULT NULL,
  `image_art` varchar(150) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `id_user` int NOT NULL,
  PRIMARY KEY (`id_art`),
  KEY `article_type_FK` (`id_category`),
  KEY `article_user_FK` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_art`, `name_art`, `content_art`, `date_art`, `id_category`, `image_art`, `id_user`) VALUES
(2, '$_GET', 'Aujourd\'hui nous allons parler de la super globale $_GET.\r\nCette variable va nous permettre de passer des argument dans l\'url de votre site web.\r\nIl sera ainsi possible de faire passer des argument précis pour la suite de vos opération.\r\nPar exemple vous êtes sur une page ou il y a plusieurs article, la requêtes va donc demandez l\'ensemble des articles.\r\nAvec par exemple: \r\nSELECT * FROM articles;\r\n\r\nMaintenant vous souhaitez voir l\'article entierement sur une page dédier, alors avec la super globale GET vous pourrez faire passez l\'id de l\'article dans l\'url et ainsi faire la requete suivante sur la prochaine page.\r\nSELECT * FROM articles WHERE id=\"$_GET[\"id\"] , faite attention parcontre il faudra sécuriser votre entrée sinon vous risquez une injection sql.\r\nVoila à vous de jouer :)', '2022-07-18', 1, 'php_type.png', 1),
(3, 'Hello World !', 'Ecrire un Hello world en JavaScript(JS) est relativement simple.\r\nJS est un langage haut niveau et permet d’écrire rapidement du code.\r\n\r\nconsole.log(\"Hello World !\")\r\n\r\nfaite une liaison de votre script avec la balise <script src=\"script.js\"></script> \r\n\r\nEt voila ! \r\nEn quelques ligne vous trouver votre hello world sur votre page\r\n             ', '2022-07-20', 2, 'javascript_type.jpg', 1),
(4, 'Doctype', '                                Le doctype permet de spécifier au navigateur le type de document que vous allez lui transmettre.\r\nC\'est une information importantes pour le navigateur.\r\n\r\n<!DOCTYPE html>          \r\n\r\nET voila simple et efficace  azdzvzzag               azd                ', '2022-07-20', 3, 'html_type.jpg', 1);


CREATE TABLE IF NOT EXISTS `project` (
  `id_project` int NOT NULL AUTO_INCREMENT,
  `name_project` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `content_project` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `date_project` date NOT NULL,
  `image_project` varchar(200) NOT NULL,
  `id_user` int NOT NULL,
  PRIMARY KEY (`id_project`),
  KEY `project_type_FK` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;


CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int NOT NULL AUTO_INCREMENT,
  `name_category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'PHP'),
(2, 'JavaScript'),
(3, 'HTML/CSS'),
(4, 'Autre');



CREATE TABLE IF NOT EXISTS `comment` (
  `id_art` int NOT NULL,
  `id_user` int NOT NULL,
  `date_comment` datetime NOT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`id_art`,`id_user`,`date_comment`),
  KEY `fk_utilisateur` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id_art`, `id_user`, `date_comment`, `comment`) VALUES
(2, 1, '2022-09-23 11:09:04', '      '),
(2, 1, '2022-09-27 08:09:15', '      blablablablabla'),
(2, 2, '2022-04-24 08:09:45', 'Glad to see you again my friend');


CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `name_role` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id_role`, `name_role`) VALUES
(1, 'Admin'),
(2, 'Utilisateur');

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `name_user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `first_name_user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mail_user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password_user` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `img_user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `statut_user` tinyint(1) NOT NULL,
  `id_role` int DEFAULT '2',
  PRIMARY KEY (`id_user`),
  KEY `utilisateur_role_FK` (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `first_name_user`, `mail_user`, `password_user`, `img_user`, `statut_user`, `id_role`) VALUES
(1, 'Ruben', 'Navone', 'navone_ruben@msn.com', '$2y$10$jBmCP.dkyDckXBcY5A4hf.PIY9E9BEkO.2MAabkNVkTiXfv6Uuy4q', 'default.jpg', 1, 1),
(2, 'a', 'a', 'james@gd.com', '$2y$10$yjzl4F0wkpJXWWb5uZsz8OBtOb56SYCfNHlNudyFXhCLzO8hf7jPy', 'default.jpg', 0, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_type_FK` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`),
  ADD CONSTRAINT `article_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_article` FOREIGN KEY (`id_art`) REFERENCES `article` (`id_art`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_utilisateur` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `utilisateur_role_FK` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

