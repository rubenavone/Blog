<?php
require_once 'utils/connect_bdd.php';
require_once './model/article/Article.php';
require_once './model/category/Category.php';
require_once './model/category/Manager_category.php';
require_once './model/article/Manager_article.php';
require_once './model/comment/Comment.php';
require_once './model/comment/Manager_comment.php';
require_once './model/user/Manager_user.php';
require_once './controller/Utils/Utils_controller.php';

class Master_article_controller{
    private Manager_article $manage_article;
    private Manager_comment $manage_comment;
    private Manager_user $manage_user;
    private Manager_category $category;
    private PDO $bdd;
    
    public function __construct()
    {
        $this->manage_article = Manager_article::create_manager_article();
        $this->manage_comment = Manager_comment::create_manager_comment();
        $this->manage_user = Manager_user::create_manager_user();
        $this->category = Manager_category::create_manager_category();
        $this->bdd = BDD::getBDD();
    }
    
    public function show_master_article():void{
        $content_title = "Gestion des";
        $title = "Articles";
        /**
         * Cette méthode doit retourner l'article mais également le nom de l'utilisateur et son prénom
         * Commen instancier l'ensemble dans un objet ? 
         */
        $articles_tr = [];
        foreach ($this->manage_article->get_all_articles($this->bdd) as $article) {
            array_push($articles_tr, $article);
        }

        # Refacto à faire bonne pratique le __DIR__ donne le chemin courant
        require_once __DIR__ . "/../../vue/Admin/master_view_article.php";
    }

}
