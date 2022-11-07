<?php

require_once './utils/connect_bdd.php';
require_once './model/article/Article.php';
require_once './model/category/Category.php';
require_once './model/category/Manager_category.php';
require_once './model/article/Manager_article.php';
require_once './model/comment/Comment.php';
require_once './model/comment/Manager_comment.php';
require_once './model/user/Manager_user.php';
require_once './controller/Utils/Utils_controller.php';

class Article_controller
{
    private $manage_comment;
    private $manage_user;
    private $category;
    private $bdd;

    public function __construct()
    {
        $this->new_article = new Manager_article(null, null, null, null);
        $this->manage_comment = new Manager_comment(null, null, null, null);
        $this->manage_user = new Manager_user(null,null, null, null, null, null);
        $this->category = new Manager_category(null, null, null);
        $this->bdd = BDD::getBDD();
    }

    public function addArticle():void
    {
        try {
            $content_title = "Ajouter un";
            $title = "Article";
            $flag = true;
            $error = "not";

            if (!isset($_SESSION['connected'])) {
                header('location: connexion?error=interdit');
            }

            #Récuperation de la date 
            #Verifier le contenus des input
            if (isset($_POST['submit'])) {
                $flag = false;
            }

            if ((!$flag && empty($_POST['name-article'])) || (!$flag && empty($_POST['content-article']))) {
                $error = "error";
            }

            if (!$flag) {
                $path = Utils_controller::check_image("img-article");
                if ($path === "") {
                    $path = "default.jpg";
                }
            }

            if (!$flag && !empty($_POST['name-article']) && !empty($_POST['content-article'])) {
                if (empty($_POST['date-article'])) {
                    $_POST['date-article'] = date("Y-m-d");
                }
                $new_article = new Manager_article(
                    $_POST['name-article'],
                    $_POST['content-article'],
                    $_POST['date-article'],
                    1
                );
                $new_article->set_id_category($_POST["id-category"]);
                $new_article->set_image_art($path);
                $new_article->add_article($this->bdd);
                $error = "ok";
            }

            $all_categories = $this->category->get_all_categories($this->bdd);

            include './vue/Article/add_article.php';
        } catch (Exception $e) {
            die('Erreur Dans lors de l\'ajout' . $e->getMessage());
        }
    }

    /**
     * TODO : finish this method
     */
    public function edit_article(int $id):void
    {
        try {
            $content_title = "Modifier un";
            $title = "Article";
            $article_wanted = $this->new_article->article_by_id($this->bdd, $id);
            $all_categories = $this->category->get_all_categories($this->bdd);

            $flag = true;
            if(!$article_wanted){
                throw new Exception();
            }
            $edited_article = new Article(
                $article_wanted->get_name_art(),
                $article_wanted->get_content_art(),
                $article_wanted->get_date_art(),
                $article_wanted->get_id_art(),
                $article_wanted->get_id_category(),
                $article_wanted->get_image_art(),
                $article_wanted->get_id_user()
            );

            if (isset($_POST['submit'])) {
                $flag = false;
            }

            if (!$flag && $_POST['name-article'] !== $article_wanted->get_name_art() && !empty($_POST['name-article'])) {
                $edited_article->set_name_art($_POST['name-article']);
            }

            if (
                !$flag &&  $_POST['content-article'] !== $article_wanted->get_content_art()
                && !empty($_POST['content-article'])
            ) {
                $edited_article->set_content_art($_POST['content-article']);
            }

            if (!$flag && $_POST['date-article'] !== $article_wanted->get_date_art() && !empty($_POST['date-article'])) {
                $edited_article->set_date_art($_POST['date-article']);
            }

            if (!$flag && $_POST['id-category'] !== $article_wanted->get_id_category() && !empty($_POST['id-category'])) {
                $edited_article->set_id_category($_POST['id-category']);
            }

            if (!$flag ) {
                $path = Utils_controller::check_image("img-article");
                if (!empty($path)) {
                    $edited_article->set_image_art($path);
                }
            }

            if(!$flag){
                $this->new_article->edit_article($this->bdd, $edited_article->get_id_art(), $edited_article);
                header("location: ".$edited_article->get_id_art());
            }

            include './vue/Article/edit_article.php';
        } catch (Exception $e) {
            die("Erreur lors de la mofication" . $e->getMessage());
        }
    }

    public function show_article():void
    {
        $flag = true;

        $_SESSION['temp_page'] = "article?id=" . $_GET["id"];

        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $flag = false;
        }

        if (!$flag && $_GET['id'] !== null) {

            #Récuperation de l'articles et des commentaire si il existe
            $article_wanted = $this->new_article->article_by_id($this->bdd, $_GET['id']);
            $comment_wanted = $this->manage_comment->comment_by_id($this->bdd, $_GET['id']);

            if ($article_wanted) {
                $title = $article_wanted->get_name_art();
                $lines = explode(".", $article_wanted->get_content_art());
                $content_title = "";
            } else {
                header("location: ./404");
            }
        } else {
            header("location: ./articles");
        }

        require_once './vue/Article/view_one_article.php';
    }

    public function show_preview(int $id_art):string
    {
        $preview = $this->new_article->article_preview_by_id($this->bdd, $id_art);

        if ($preview) {
            $lines = explode(".", $preview->content_art);
        }
        return $lines[0];
    }

    public function show_all_articles():void
    {
        $content_title = "Tous les";
        $title = "Articles";

        include "./vue/Article/view_all_articles.php";
    }

    public function delete_article(int $id_art):void
    {
        if (isset($_SESSION["role"]) && !empty($id_art)) {
            $this->new_article->delete_article($this->bdd, $id_art);
            header("location: /admin/articles");
        } else {
            header("location: /admin/articles");
        }
    }
}
