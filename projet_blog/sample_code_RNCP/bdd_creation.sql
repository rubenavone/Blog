CREATE TABLE `article` (
    `id_art` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name_art` varchar(50) NOT NULL,
    `content_art` text NOT NULL,
    `date_art` date NOT NULL,
    `id_category` int DEFAULT NULL,
    `image_art` varchar(150) NOT NULL,
    `id_user` int NOT NULL,
    KEY `article_type_FK` (`id_category`),
    KEY `article_user_FK` (`id_user`)
);