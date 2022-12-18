-- création de la vue
CREATE VIEW _vwliste_article5 AS SELECT nom_art AS titre,
contenu_art AS contenu,
date_art AS date_creation,
img_art AS image,
nom_cat AS categorie,
nom_util AS nom,
prenom_util AS prenom,
nom_role AS statut
FROM article 
INNER JOIN categorie ON article.id_cat = categorie.id_cat 
INNER JOIN utilisateur ON article.id_util = utilisateur.id_util
INNER JOIN role ON role.id_role = utilisateur.id_role;

-- exporter un json
SELECT CONCAT("[",
         GROUP_CONCAT(
         CONCAT("{"),
         CONCAT('"titre":','"',titre,'"'),",",
         CONCAT('"contenu":','"',contenu,'"'),",",
         CONCAT('"date_creation":','"',date_creation,'"'),",",
         CONCAT('"image":','"',image,'"'),",",
         CONCAT('"categorie":','"',categorie,'"'),",",
         CONCAT('"nom":','"',nom,'"'),",",
         CONCAT('"prenom":','"',prenom,'"'),",",
         CONCAT('"statut":','"',statut,'"'),
         CONCAT("}")
         )
    ,"]") 
AS json 

INTO OUTFILE '/temp/temp5.json' FROM _vwliste_article4;