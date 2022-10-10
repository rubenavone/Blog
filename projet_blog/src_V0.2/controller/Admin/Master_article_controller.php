<?php
require 'utils/connect_bdd.php';
require './model/article/Article.php';
require './model/category/Category.php';
require './model/category/Manager_category.php';
require './model/article/Manager_article.php';
require './model/comment/Comment.php';
require './model/comment/Manager_comment.php';
require './model/user/Manager_user.php';
require './controller/Utils/Utils_controller.php';

class Master_article_controller{
    private $new_article;
    private $manage_comment;
    private $manage_user;
    private $type;
    private $bdd;
    public function __construct()
    {
        $this->new_article = new Manager_article(null, null, null, null);
        $this->manage_comment = new Manager_comment(null, null, null, null);
        $this->manage_user = new Manager_user(null, null, null, null, null);
        $this->type = new Manager_type(null, null, null);
        $this->bdd = BDD::getBDD();
    }
    
    public function show_master_article():void{
        $content_title = "Gestion des";
        $title = "Articles";

        # Refacto à faire bonne pratique le __DIR__ donne le chemin courant
        require_once __DIR__ . "/../../vue/Admin/master_view_article.php";
    }

}
