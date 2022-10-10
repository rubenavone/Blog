<?php


class Manager_article extends Article
{
    public function add_article(object $bdd):void
    {
        try {
            $req = $bdd->prepare("INSERT INTO article(name_art, content_art, date_art
            , id_type,image_art, id_util) VALUE
            (:name_art, :content_art, :date_art, :id_type, :image_art, :id_util)");

            $req->execute([
                'name_art' => $this->get_name_art(),
                'content_art' => $this->get_content_art(),
                'date_art' => $this->get_date_art(),
                'id_type' => $this->get_id_type(),
                'image_art' => $this->get_image_art(),
                'id_util' => $this->get_id_util(),
            ]);
        } catch (Exception $e) {
            die('Erreur dans la requête:' . $e->getMessage());
        }
    }

    public function article_by_id(object $bdd, INT $id):Article
    {
        try {
            $req = $bdd->prepare("SELECT * FROM article WHERE id_art = :id_art ");
            $req->execute([
                'id_art' => $id,
            ]);
            $data = $req->fetch(PDO::FETCH_OBJ);
            if (!empty($data)) {
                $new_art = new Article(
                    $data->name_art,
                    $data->content_art,
                    $data->date_art,
                    $data->id_art,
                    $data->id_type,
                    $data->image_art,
                    $data->id_util
                );
                return $new_art;
            }
            return $data;
        } catch (Exception $e) {
            die('Erreur dans la requête:' . $e->getMessage());
        }
    }

    public function article_preview_by_id(object $bdd, INT $id):Object
    {
        try {
            $req = $bdd->prepare("SELECT content_art FROM article WHERE id_art = :id_art ");
            $req->execute(['id_art' => $id,]);
            $data = $req->fetch(PDO::FETCH_OBJ);
            return $data;
        } catch (Exception $e) {
            die('Erreur dans la requête:' . $e->getMessage());
        }
    }

    public function get_all_articles(object $bdd):Array
    {
        try {
            $req = $bdd->prepare("SELECT * FROM `article`
            INNER JOIN
            `type` ON type.id_type = article.id_type
            INNER JOIN 
            `utilisateur` ON utilisateur.id_util = article.id_util");
            $req->execute();
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            return $data;
        } catch (Exception $e) {
            die('Erreur dans la requête:' . $e->getMessage());
        }
    }

    public function delete_article(object $bdd, int $id):Void
    {
        try {
            $req = $bdd->prepare("DELETE FROM `article` where id_art = :id_art");
            $req->execute(['id_art' => $id]);
        } catch (Exception $e) {
            die('Erreur dans la requête:' . $e->getMessage());
        }
    }

    public function edit_article(object $bdd, int $id, Article $edited_article):Void
    {
        try {
            $req = $bdd->prepare("UPDATE article SET name_art = :name_art, content_art = :content_art,
            date_art = :date_art, id_type = :id_type,image_art = :image_art, id_util = :id_util
            WHERE id_art = :id_art ");
            $req->execute([
                'name_art' => $edited_article->get_name_art(),
                'content_art' => $edited_article->get_content_art(),
                'date_art' => $edited_article->get_date_art(),
                'id_type' => $edited_article->get_id_type(),
                'image_art' => $edited_article->get_image_art(),
                'id_util' => $edited_article->get_id_util(),
                'id_art' => $id
            ]);
        } catch (Exception $e) {
            die('Erreur dans la requête:' . $e->getMessage());
        }
    }
}
