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

INSERT INTO
    `article` (
        `id_art`,
        `name_art`,
        `content_art`,
        `date_art`,
        `id_category`,
        `image_art`,
        `id_user`
    )
VALUES
    (
        1,
        '$_GET',
        'Aujourd\'hui nous allons parler de la super globale $_GET.Cette variable va
         nous permettre de passer des argument dans l\'url de votre site web.Il sera ainsi possible de faire 
        passer des argument précis pour la suite de vos opération.Par exemple 
        vous êtes sur une page ou il y a plusieurs article, la requêtes va donc demandez 
        l\'ensemble des articles.Avec par exemple: SELECT * FROM articles;
        Maintenant vous souhaitez voir l\'article entierement sur une page dédier, 
        alors avec la super globale GET vous pourrez faire passez l\'id de l\'article dans 
        l\'url et ainsi faire la requete suivante sur la prochaine page.SELECT * 
        FROM articles WHERE id=\"$_GET[\"id\"] , faite attention parcontre 
        il faudra sécuriser votre entrée sinon vous risquez une injection sql.Voila à vous de jouer :)',
        '2022-07-18',
        1,
        'php_type.png',
        1
    );

CREATE TABLE `category` (
    `id_category` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `name_category` varchar(255) NOT NULL
);

INSERT INTO
    `category` (`id_category`, `name_category`)
VALUES
    (1, 'PHP'),
    (2, 'JavaScript'),
    (3, 'HTML/CSS'),
    (4, 'Autre');

CREATE TABLE `comment` (
    `id_comment` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `id_art` int NOT NULL,
    `id_user` int NOT NULL,
    `date_comment` datetime NOT NULL,
    `comment` text,
    KEY `fk_utilisateur` (`id_user`)
);

INSERT INTO
    `comment` (`id_comment`, `id_art`, `id_user`, `date_comment`, `comment`)
VALUES
    (1, 1, 1, '2022-09-23 11:09:04', 'Hey c\'est vraiment simpa de partager des conseil'),
    (2, 1, 1, '2022-09-27 08:09:15', 'Article utile, cependant il y a des fautes ! ');

CREATE TABLE `role` (
    `id_role` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name_role` varchar(50) NOT NULL
);

INSERT INTO
    `role` (`id_role`, `name_role`)
VALUES
    (1, 'Admin'),
    (2, 'Utilisateur');

CREATE TABLE `user` (
    `id_user` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `name_user` varchar(50) NOT NULL,
    `first_name_user` varchar(50) NOT NULL,
    `mail_user` varchar(50) NOT NULL,
    `password_user` varchar(255) NOT NULL,
    `img_user` varchar(50) NOT NULL,
    `statut_user` tinyint(1) NOT NULL,
    `id_role` int DEFAULT '2',
    KEY `utilisateur_role_FK` (`id_role`)
);

INSERT INTO
    `user` (
        `id_user`,
        `name_user`,
        `first_name_user`,
        `mail_user`,
        `password_user`,
        `img_user`,
        `statut_user`,
        `id_role`
    )
VALUES
    (
        1,
        'Ruben',
        'Navone',
        'navone_ruben@msn.com',
        '$2y$10$/oOmodLaPrAuAI.fclaIpum3961hBLC.lE4El.cMsimTBYaxoSBoG',
        'default.jpg',
        0,
        1
    );

ALTER TABLE
    `article`
ADD
    CONSTRAINT `article_type_FK` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`),
ADD
    CONSTRAINT `article_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

ALTER TABLE
    `comment`
ADD
    CONSTRAINT `fk_article` FOREIGN KEY (`id_art`) REFERENCES `article` (`id_art`),
ADD
    CONSTRAINT `fk_utilisateur` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

ALTER TABLE
    `user`
ADD
    CONSTRAINT `utilisateur_role_FK` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);