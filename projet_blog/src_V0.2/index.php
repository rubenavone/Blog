<?php

session_start();

# Si aucun role alors visiteur role = 0;
if (!isset($_SESSION["role"])) {
  $_SESSION["role"] = 0;
}

# Test soit l'url a une route sinon on renvoi à la racine
$LOGIN_MANDATORY_URL = [
  "deconnexion",
  "addArticle",
  "admin",
];


/****************************/
try {
  if (!isset($_GET["page"])) $_GET["page"] = "/";
  $request_uri = explode('/', $_GET["page"]);
  if (!isset($_SESSION['connected']) && in_array($request_uri[0], $LOGIN_MANDATORY_URL)) {
    throw new Exception("500");
  }
  switch ($request_uri[0]) {
    case "":
      require 'controller/ctrl_show_home.php';
      break;
    case "articles":
      require 'controller/Article/Article_controller.php';
      $article = new Article_controller();
      $article->show_all_articles();
      break;
    case "article":
      require 'controller/Article/Article_controller.php';
      $article = new Article_controller();
      $article->show_article();
      break;
    case "addComment":
      require "controller/User/User_controller.php";
      $user = new User_controller;
      $user->add_comment();
      break;
    case "addUser":
      require "controller/User/User_controller.php";
      $user = new User_controller;
      $user->addUser();
      break;
    case "connexion";
      require "controller/User/User_controller.php";
      $user = new User_controller;
      $user->connexion();
      break;
    case "deconnexion";
      require "controller/User/User_controller.php";
      $user = new User_controller;
      $user->deconnexion();
      break;
    case "profil";
      require "controller/User/User_controller.php";
      $user = new User_controller;
      $user->profil_user();
      break;
    case "admin";
      if (empty($request_uri[1])) {
        require "controller/Admin/admin_home_controller.php";
        $admin = new Admin_home_controller;
        $admin->show_home_admin();
      } else if ($request_uri[1] === "articles") {
        if (empty($request_uri[2])) {
          require "controller/Admin/Master_article_controller.php";
          $admin = new Master_article_controller;
          $admin->show_master_article();
        } else if ($request_uri[2] === "addArticle") {
          require 'controller/Article/Article_controller.php';
          $article = new Article_controller();
          $article->addArticle();
        } else if ($request_uri[2] === "editArticle") {
          if (empty($request_uri[3])) {
            throw new Exception("404");
          } else {
            require 'controller/Article/Article_controller.php';
            $article = new Article_controller();
            $article->edit_article(htmlspecialchars($request_uri[3]));
          }
        } else if ($request_uri[2] === "delete") {
          require 'controller/Article/Article_controller.php';
          $article = new Article_controller();
          empty($request_uri[3]) ? throw new Exception("404") :  $article->delete_article($request_uri[3]);
        }
      } else {
        throw new Exception("404");
      }
    default:
      throw new Exception("404");
      break;
  }
} catch (Exception $ex) {
  $ex->getMessage() === "404" ? require 'controller/ctrl_404.php' : require 'controller/ctrl_500.php';
}
