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

/**
 * In these method I inverted all the logical for the flag true -> don't submit because error
 * I will change this
 * [x] add_article
 */

class Article_controller 
{
    private Manager_article $manage_article;
    private Manager_comment $manage_comment;
    private Manager_user $manage_user;
    private Manager_category $manage_category;


    public function __construct()
    {
        $this->manage_article = Manager_article::create_manager_article();
        $this->manage_comment = Manager_comment::create_manager_comment();
        $this->manage_user = Manager_user::create_manager_user();
        $this->manage_category = Manager_category::create_manager_category();
    }
    
    public function add_article(): VOID
    {
        try {
            $content_title = "Ajouter un";
            $title = "Article";
            $flag = false;
            $error = "";

            if (!isset($_SESSION['connected'])) {
                header('location: connexion?error=interdit');
            }

            if (isset($_POST['submit'])) {
                $flag = true;
            }

            if (($flag && empty($_POST['name-article'])) || ($flag && empty($_POST['content-article']))) {
                $error = "Il manque ";
                empty($_POST['name-article']) ? $error = "$error le nom de l'article" : $error = "$error";
                empty($_POST['content-article']) ? $error = "$error le contenus de l'article" : $error = "$error";
                $flag = false;
            }

            
            if($flag && !Utils_controller::check_type($_FILES["img-article"]["type"])){
                $error = "Le format du fichier est incorecte";
                $flag = false;
            }

            if ($flag) {
                $path = Utils_controller::check_image("img-article");
                
                if ($path === "") {
                    $path = "default.jpg";
                }
            }

            if ($flag) {
                if (empty($_POST['date-article'])) {
                    $_POST['date-article'] = date("Y-m-d");
                }
                $article = new Article(
                    htmlspecialchars($_POST['name-article']),
                    htmlspecialchars($_POST['content-article']),
                    $_POST['date-article'],
                    null,
                    $_POST["id-category"],
                    htmlspecialchars($path)
                );
           
                $this->manage_article->add_article($article);
                $error = "ok";
            }
            $all_categories = $this->manage_category->get_all_categories();
            require_once './vue/Article/add_article.php';
        } catch (Exception $e) {
            exit('Erreur lors de l\'ajout ' . $e->getMessage());
        }
    }

    /**
     * TODO : finish this method
     */
    public function edit_article(INT $id): VOID
    {
        try {
            $content_title = "Modifier un";
            $title = "Article";
            $article_wanted = $this->manage_article->article_by_id($id);
            $all_categories = $this->manage_category->get_all_categories();

            $flag = true;
            if (!$article_wanted) {
                throw new Exception();
            }
            $edited_article = new Article(
                $article_wanted->name_art,
                $article_wanted->content_art,
                $article_wanted->date_art,
                $article_wanted->get_id_art(),
                $article_wanted->id_category,
                $article_wanted->image_art,
                $article_wanted->get_id_user()
            );

            if (isset($_POST['submit'])) {
                $flag = false;
            }

            if (!$flag && $_POST['name-article'] !== $article_wanted->name_art && !empty($_POST['name-article'])) {
                $edited_article->name_art = $_POST['name-article'];
            }

            if (
                !$flag &&  $_POST['content-article'] !== $article_wanted->content_art && !empty($_POST['content-article'])
            ) {
                $edited_article->content_art = $_POST['content-article'];
            }

            if (!$flag && $_POST['date-article'] !== $article_wanted->date_art && !empty($_POST['date-article'])) {
                $edited_article->date_art = $_POST['date-article'];
            }

            if (!$flag && $_POST['id-category'] !== $article_wanted->id_category && !empty($_POST['id-category'])) {

                $edited_article->id_category = $_POST['id-category'];
            }

            if (!$flag) {
                $path = Utils_controller::check_image("img-article");
                if (!empty($path)) {
                    $edited_article->image_art = $path;
                }
            }

            if (!$flag) {
                $this->manage_article->edit_article($edited_article->get_id_art(), $edited_article);
                header("location: " . $edited_article->get_id_art());
            }

            require_once './vue/Article/edit_article.php';
        } catch (Exception $e) {
            require_once 'controller/ctrl_404.php';
        }
    }

    public function show_article(): VOID
    {
        $flag = true;

        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $flag = false;
            $_SESSION['temp_page'] = "article?id=" . $_GET["id"];
            $_GET["id"] = (int)$_GET["id"];
        } else {
            header("location: ./404");
        }

        if (!$flag && $_GET['id'] !== null) {

            #Récuperation de l'articles et des commentaires 
            $article_wanted = $this->manage_article->article_by_id($_GET['id']);
            $comment_wanted = $this->manage_comment->comment_by_id($_GET['id']);

            if ($article_wanted) {
                $title = $article_wanted->name_art;
                $lines = explode(".", $article_wanted->content_art);
                $content_title = "";
            } else {
                header("location: ./404");
            }
        } else {
            header("location: ./articles");
        }

        require_once './vue/Article/view_one_article.php';
    }

    public function show_preview(INT $id_art): STRING
    {
        $preview = $this->manage_article->article_preview_by_id($id_art);

        if ($preview) {
            $lines = explode(".", $preview->content_art);
        }
        return $lines[0];
    }

    public function show_all_articles(): VOID
    {
        $content_title = "Tous les";
        $title = "Articles";
        $all_articles = $this->manage_article->get_all_articles();

        require_once "./vue/Article/view_all_articles.php";
    }

    public function delete_article(INT $id_art): VOID
    {
        if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) {
            $this->manage_article->delete_article(htmlspecialchars($id_art));
            header("location: /admin/articles");
        } else {
            header("location: /admin/articles");
        }
    }
}
