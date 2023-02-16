<?php

class Manager_article extends Article
{
    
    static function create_manager_article(){
        return new Manager_article(null, null, null, null);
    }

    public function add_article(PDO $bdd):VOID
    {
        try {
            $req = $bdd->prepare("INSERT INTO article(name_art, content_art, date_art
            , id_category,image_art, id_user) VALUE
            (:name_art, :content_art, :date_art, :id_category, :image_art, :id_user)");

            $req->execute([
                'name_art' => $this->get_name_art(),
                'content_art' => $this->get_content_art(),
                'date_art' => $this->get_date_art(),
                'id_category' => $this->get_id_category(),
                'image_art' => $this->get_image_art(),
                'id_user' => $this->get_id_user(),
            ]);
        } catch (Exception $e) {
            die('Erreur dans la requête:' . $e->getMessage());
        }
    }

    public function article_by_id(PDO $bdd, INT $id):Article | bool
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
                    $data->id_category,
                    $data->image_art,
                    $data->id_user
                );
                return $new_art;
            }
            return $data;
        } catch (Exception $e) {
            die('Erreur dans la requête:' . $e->getMessage());
        }
    }

    public function article_preview_by_id(PDO $bdd, INT $id):OBJECT
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

    public function get_all_articles(PDO $bdd):Array
    {   
        try {
            $req = $bdd->prepare("SELECT * FROM `article`
            INNER JOIN
            `category` ON category.id_category = article.id_category
            INNER JOIN 
            `user` ON user.id_user = article.id_user");
            $req->execute();
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            return $data;
        } catch (Exception $e) {
            die('Erreur dans la requête:' . $e->getMessage());
        }
    }

    public function delete_article(PDO $bdd, INT $id):VOID
    {
        try {
            $req = $bdd->prepare("DELETE FROM `article` where id_art = :id_art");
            $req->execute(['id_art' => $id]);
        } catch (Exception $e) {
            die('Erreur dans la requête:' . $e->getMessage());
        }
    }

    public function edit_article(PDO $bdd, INT $id, Article $edited_article):VOID
    {
        try {
            $req = $bdd->prepare("UPDATE article SET name_art = :name_art, content_art = :content_art,
            date_art = :date_art, id_category = :id_category,image_art = :image_art, id_user = :id_user
            WHERE id_art = :id_art ");
            $req->execute([
                'name_art' => $edited_article->get_name_art(),
                'content_art' => $edited_article->get_content_art(),
                'date_art' => $edited_article->get_date_art(),
                'id_category' => $edited_article->get_id_category(),
                'image_art' => $edited_article->get_image_art(),
                'id_user' => $edited_article->get_id_user(),
                'id_art' => $id
            ]);
        } catch (Exception $e) {
            die('Erreur dans la requête:' . $e->getMessage());
        }
    }
}
