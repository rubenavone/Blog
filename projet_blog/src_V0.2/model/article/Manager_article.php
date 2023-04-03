<?php
require_once './utils/connect_bdd.php';
class Manager_article extends Article
{
    private PDO $user_bdd;
    private PDO $admin_bdd;
    public function __construct()
    {
        $this->user_bdd = BDD::get_user_access();
        $this->admin_bdd = BDD::get_admin_access();
    }

    static function create_manager_article()
    {
        return new self();
    }

    public function add_article(Article $article): VOID
    {
        try {
            $req = $this->admin_bdd->prepare("INSERT INTO article(name_art, content_art, date_art
            , id_category,image_art, id_user) VALUE
            (:name_art, :content_art, :date_art, :id_category, :image_art, :id_user)");

            $req->execute([
                'name_art' => $article->name_art,
                'content_art' => $article->content_art,
                'date_art' => $article->date_art,
                'id_category' => $article->id_category,
                'image_art' => $article->image_art,
                'id_user' => $article->get_id_user(),
            ]);
        } catch (Exception $e) {
            die('Erreur dans la requête:' . $e->getMessage());
        }
    }

    public function article_by_id(INT $id): Article | bool
    {
        try {
            $req = $this->user_bdd->prepare("SELECT * FROM article WHERE id_art = :id_art ");
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

    public function article_preview_by_id( INT $id): OBJECT
    {
        try {
            $req = $this->user_bdd->prepare("SELECT content_art FROM article WHERE id_art = :id_art ");
            $req->execute(['id_art' => $id,]);
            $data = $req->fetch(PDO::FETCH_OBJ);
            return $data;
        } catch (Exception $e) {
            die('Erreur dans la requête:' . $e->getMessage());
        }
    }

    public function get_all_articles(): array
    {
        try {
            $req = $this->user_bdd->prepare("SELECT * FROM `article`
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

    public function delete_article(INT $id): VOID
    {
        try {
            $req = $this->admin_bdd->prepare("DELETE FROM `article` where id_art = :id_art");
            $req->execute(['id_art' => $id]);
        } catch (Exception $e) {
            die('Erreur dans la requête:' . $e->getMessage());
        }
    }

    public function edit_article(INT $id, Article $edited_article): VOID
    {
        try {
            $req = $this->admin_bdd->prepare("UPDATE article SET name_art = :name_art, content_art = :content_art,
            date_art = :date_art, id_category = :id_category,image_art = :image_art, id_user = :id_user
            WHERE id_art = :id_art ");
            $req->execute([
                'name_art' => $edited_article->name_art,
                'content_art' => $edited_article->content_art,
                'date_art' => $edited_article->date_art,
                'id_category' => $edited_article->id_category,
                'image_art' => $edited_article->image_art,
                'id_user' => $edited_article->get_id_user(),
                'id_art' => $id
            ]);
        } catch (Exception $e) {
            die('Erreur dans la requête:' . $e->getMessage());
        }
    }
}
