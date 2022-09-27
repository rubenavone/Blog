<?php

session_start();

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
    throw new Exception("Erreur exceptionelle");
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
    case   "profil";
      require "controller/User/User_controller.php";
      $user = new User_controller;
      $user->profil_user();
      break;
    case   "admin";
      // var_dump(empty($request_uri[1]));
      if (empty($request_uri[1])) {
        // echo "0 url après request_uri[1]";
        require "controller/Admin/admin_home_controller.php";
        $admin = new Admin_home_controller;
        $admin->show_home_admin();
      } else if ($request_uri[1] === "articles") {
        require "controller/Admin/Master_article_controller.php";
        $admin = new Master_article_controller;
        $admin->show_master_article();
      } else if ($request_uri[1] === "addArticle") {
        require 'controller/Article/Article_controller.php';
        $article = new Article_controller();
        $article->addArticle();
      } else {
      throw new Exception("Erreur exceptionelle");

      }
    default:
      throw new Exception("Erreur exceptionelle");

      break;
  }
} catch (Exception $ex) {
  require 'controller/ctrl_404.php';

  // echo $ex->getMessage();
  // echo $ex->xdebug_message;
  // var_dump($ex);
}
