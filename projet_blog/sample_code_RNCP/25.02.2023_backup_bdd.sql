-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 25 fév. 2023 à 14:36
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

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

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_art`, `name_art`, `content_art`, `date_art`, `id_category`, `image_art`, `id_user`) VALUES
(4, '$_POST', 'La superglobale $_POST est une variable prédéfinie en PHP qui contient les données envoyées à un script à partir d&#039;un formulaire HTML. Les données sont envoyées au serveur en utilisant la méthode HTTP POST, ce qui les rend invisibles dans l&#039;URL contrairement à la méthode GET.\r\n\r\nPour utiliser $_POST, vous devez d&#039;abord créer un formulaire HTML avec les champs de formulaire nécessaires, puis définir la méthode HTTP sur &quot;POST&quot; et l&#039;action sur l&#039;URL du script qui va traiter les données. Voici un exemple de formulaire :\r\n\r\npython\r\n\r\n&lt;form method=&quot;post&quot; action=&quot;script.php&quot;&gt;\r\n  &lt;input type=&quot;text&quot; name=&quot;nom&quot;&gt;\r\n  &lt;input type=&quot;submit&quot; value=&quot;Envoyer&quot;&gt;\r\n&lt;/form&gt;\r\n\r\nLorsque l&#039;utilisateur soumet le formulaire en cliquant sur le bouton &quot;Envoyer&quot;, les données saisies dans le champ de formulaire &quot;nom&quot; seront envoyées à &quot;script.php&quot; sous forme de tableau associatif $_POST. Dans ce cas, la variable $_POST[&#039;nom&#039;] contiendrait la valeur saisie dans le champ de formulaire &quot;nom&quot;.\r\n\r\nIl est important de noter que pour des raisons de sécurité, il est recommandé de valider et d&#039;échapper les données reçues via $_POST avant de les utiliser, afin d&#039;éviter les attaques telles que les injections SQL ou les attaques XSS.\r\n\r\nEn résumé, la superglobale $_POST est un outil pratique pour envoyer des données à un script à partir d&#039;un formulaire HTML de manière sécurisée, sans que les données soient visibles dans l&#039;URL.    ', '2023-02-07', 1, 'php_type.png', 1),
(3, '$_GET', '           La superglobale $_GET est une variable prédéfinie en PHP qui contient les informations envoyées à un script via l&#039;URL. Cela signifie que vous pouvez envoyer des données à un script en les ajoutant à l&#039;URL de la page, comme ceci :\r\n\r\njavascript\r\n\r\nhttp://www.example.com/script.php?nom=value\r\n\r\nDans ce cas, la variable $_GET[&#039;nom&#039;] contiendrait la valeur &quot;value&quot;. Les informations envoyées via $_GET sont accessibles à tout moment dans le script, ce qui en fait une méthode pratique pour transmettre des données entre les pages.\r\n\r\nIl est important de noter que les informations envoyées via $_GET sont visibles dans l&#039;URL, ce qui peut poser des problèmes de sécurité si des données sensibles sont transmises de cette manière. Pour envoyer des données sensibles, il est préférable d&#039;utiliser la superglobale $_POST.\r\n\r\nEn résumé, la superglobale $_GET est un outil utile pour transmettre des informations d&#039;une page à l&#039;autre via l&#039;URL, mais il est important de prendre en compte les considérations de sécurité associées à l&#039;utilisation de cette méthode.     ', '2023-02-07', 1, 'php_type.png', 1),
(5, 'azd', '                                azd                ', '2023-02-15', 1, 'default.jpg', 1),
(6, 'adzad', '               azdazd ', '2023-02-15', 3, 'default.jpg', 1),
(7, 'azd', '                azd', '2023-02-15', 4, 'default.jpg', 1),
(8, 'azd', '                azd', '2023-02-15', 1, 'Frame 1.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int NOT NULL AUTO_INCREMENT,
  `name_category` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'PHP'),
(2, 'JavaScript'),
(3, 'HTML/CSS'),
(4, 'Autre');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id_comment` int NOT NULL AUTO_INCREMENT,
  `id_art` int NOT NULL,
  `id_user` int NOT NULL,
  `date_comment` datetime NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`id_comment`),
  KEY `fk_utilisateur` (`id_user`),
  KEY `fk_article` (`id_art`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id_comment`, `id_art`, `id_user`, `date_comment`, `comment`) VALUES
(1, 1, 1, '2022-09-23 11:09:04', 'Hey c\'est vraiment simpa de partager des conseil'),
(2, 1, 1, '2022-09-27 08:09:15', 'Article utile, cependant il y a des fautes ! '),
(3, 4, 1, '2023-02-13 08:02:58', '      erhgrthjrth');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `name_role` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id_role`, `name_role`) VALUES
(1, 'Admin'),
(2, 'Utilisateur');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `name_user` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `first_name_user` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mail_user` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password_user` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `img_user` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `statut_user` tinyint(1) NOT NULL,
  `id_role` int DEFAULT '2',
  PRIMARY KEY (`id_user`),
  KEY `utilisateur_role_FK` (`id_role`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `first_name_user`, `mail_user`, `password_user`, `img_user`, `statut_user`, `id_role`) VALUES
(1, 'Ruben', 'Navone', 'navone_ruben@msn.com', '$2y$10$/oOmodLaPrAuAI.fclaIpum3961hBLC.lE4El.cMsimTBYaxoSBoG', 'default.jpg', 0, 1),
(2, 'gerard', 'majax', 'gerard@mail.Fr', '$2y$10$ML6V9yeblal55ANmNYa3IeIzx6m40R8np01fCagQt/GLaGIVlahda', 'default.jpg', 0, 2),
(3, 'gerard', 'rubenSimple', 'adz@example.cd', '$2y$10$ZJPHnCU3diZuVxt.Fd350eoRWrQ7SMD06iX/WzJsKtTry4EjJNhAu', 'default.jpg', 0, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
