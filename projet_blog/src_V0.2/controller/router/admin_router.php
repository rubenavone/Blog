<?php

if (empty($request_uri[1])) {
    require_once "controller/Admin/admin_home_controller.php";
    $admin = new Admin_home_controller;
    $admin->show_home_admin();
}

if ($request_uri[1] === "articles") {
    if (empty($request_uri[2])) {
        require_once "controller/Admin/Master_article_controller.php";
        $admin = new Master_article_controller;
        $admin->show_master_article();
    }
    if ($request_uri[2] === "addArticle") {
        require_once 'controller/Article/Article_controller.php';
        $article = new Article_controller();
        $article->addArticle();
    }
    if ($request_uri[2] === "editArticle") {
        if (empty($request_uri[3])) {
            throw new Exception("404");
        } else {
            require_once 'controller/Article/Article_controller.php';
            $article = new Article_controller();
            $article->edit_article(htmlspecialchars(intval($request_uri[3])));
        }
    }
    if ($request_uri[2] === "delete") {
        require_once 'controller/Article/Article_controller.php';
        $article = new Article_controller();
        empty($request_uri[3]) ? throw new Exception("404") :  $article->delete_article($request_uri[3]);
    }
}

if ($request_uri[1] === "utilisateur") {
    require_once "controller/Admin/Master_user_controller.php";
    $admin = new Master_user_controller;
    $admin->show_master_user();
}

if ($request_uri[1] === "categorie") {
    require_once "controller/Admin/Master_category_controller.php";
    $admin = new Master_category_controller;
    $admin->show_master_category();
}
