<?php
session_start();

if (!isset($_SESSION["role"])) {
  $_SESSION["role"] = 0;
}

$LOGIN_MANDATORY_URL = [
  "deconnexion",
  "addArticle",
];
$LOGIN_MANDATORY_URL_ADMIN = [
  "admin",
];
/****************************/
try {
  if (!isset($_GET["page"])) $_GET["page"] = "/";

  $request_uri = explode('/', $_GET["page"]);

  if (!isset($_SESSION['connected']) && in_array($request_uri[0], $LOGIN_MANDATORY_URL)) {
    throw new Exception("401");
  }
  if ($_SESSION["role"] !== 1 && in_array($request_uri[0], $LOGIN_MANDATORY_URL_ADMIN)) {
    throw new Exception("401");
  }
  switch ($request_uri[0]) {
    case "":
      require_once 'controller/ctrl_show_home.php';
      break;
    case "articles":
      require_once 'controller/Article/Article_controller.php';
      $article = new Article_controller();
      $article->show_all_articles();
      break;
    case "article":
      require_once 'controller/Article/Article_controller.php';
      $article = new Article_controller();
      $article->show_article();
      break;
    case "addComment":
      require_once "controller/User/User_controller.php";
      $user = new User_controller;
      $user->add_comment();
      break;
    case "addUser":
      require_once "controller/User/User_controller.php";
      $user = new User_controller;
      $user->addUser();
      break;
    case "connexion";
      require_once "controller/User/User_controller.php";
      $user = new User_controller;
      $user->connexion();
      break;
    case "deconnexion";
      require_once "controller/User/User_controller.php";
      $user = new User_controller;
      $user->deconnexion();
      break;
    case "profil";
      require_once "controller/User/User_controller.php";
      $user = new User_controller;
      $user->profil_user();
      break;
    case "admin";
      if (empty($request_uri[1])) {
        require_once "controller/Admin/admin_home_controller.php";
        $admin = new Admin_home_controller;
        $admin->show_home_admin();
      } else if ($request_uri[1] === "articles") {
        if (empty($request_uri[2])) {
          require_once "controller/Admin/Master_article_controller.php";
          $admin = new Master_article_controller;
          $admin->show_master_article();
        } else if ($request_uri[2] === "addArticle") {
          require_once 'controller/Article/Article_controller.php';
          $article = new Article_controller();
          $article->addArticle();
        } else if ($request_uri[2] === "editArticle") {
          if (empty($request_uri[3])) {
            throw new Exception("404");
          } else {
            require_once 'controller/Article/Article_controller.php';
            $article = new Article_controller();
            $article->edit_article(htmlspecialchars(intval($request_uri[3])));
          }
        } else if ($request_uri[2] === "delete") {
          require_once 'controller/Article/Article_controller.php';
          $article = new Article_controller();
          empty($request_uri[3]) ? throw new Exception("404") :  $article->delete_article($request_uri[3]);
        }
      } else if ($request_uri[1] === "utilisateur") {
        require_once "controller/Admin/Master_user_controller.php";
        $admin = new Master_user_controller;
        $admin->show_master_user();
      } else if ($request_uri[1] === "categorie") {
        require_once "controller/Admin/Master_category_controller.php";
        $admin = new Master_category_controller;
        $admin->show_master_category();
      } else {
        throw new Exception("404");
      }
    default:
      throw new Exception("404");
      break;
  }
} catch (Exception $ex) {
  $ex->getMessage() == "404" ? require_once 'controller/ctrl_404.php' : require_once 'controller/ctrl_401.php';
}
