-- Exemple avec la bdd blog
CREATE VIEW vw_all_article AS
SELECT
    article.id AS id_art,
    article.title AS titre,
    article.contenu AS contenu_art,
    article.created_at AS date_art,
    GROUP_CONCAT(
        CONCAT(category.title)
        ORDER BY
            category.title ASC SEPARATOR ','
    ) AS categories,
    user.name AS nom,
    user.firstname AS prenom
FROM
    article_category
    INNER JOIN article ON article_category.article_id = article.id 
    INNER JOIN category ON article_category.category_id = category.id
    INNER JOIN user ON article.id = user.id
    GROUP BY article.id;
    
    
-- Pour ma BDD perso blog_folio
    CREATE VIEW vw_all_articles AS
SELECT
    article.id_art,
    article.name_art,
    article.content_art,
    article.date_art,
    category.name_category