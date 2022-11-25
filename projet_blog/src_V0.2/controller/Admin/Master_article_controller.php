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
    private $new_article;
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
    
    public function show_master_article():void{
        $content_title = "Gestion des";
        $title = "Articles";
        /**
         * Cette méthode doit retourner l'article mais également le nom de l'utilisateur et son prénom
         * Commen instancier l'ensemble dans un objet ? 
         */
        $articles_tr = [];
        foreach ($this->new_article->get_all_articles($this->bdd) as $article) {
            array_push($articles_tr, $article);
        }

        # Refacto à faire bonne pratique le __DIR__ donne le chemin courant
        require_once __DIR__ . "/../../vue/Admin/master_view_article.php";
    }

}
