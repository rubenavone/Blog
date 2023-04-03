<?php

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
      $user->add_user();
      break;
    case "connexion";
      require_once "controller/User/User_controller.php";
      $user = new User_controller;
      $user->connect();
      break;
    case "deconnexion";
      require_once "controller/User/User_controller.php";
      $user = new User_controller;
      $user->disconnect();
      break;
    case "profil";
      require_once "controller/User/User_controller.php";
      $user = new User_controller;
      $user->display_profil();
      break;
    case "admin";
      require "./controller/router/admin_router.php";
      break;
    default:
      throw new Exception("404");
      break;
  }
} catch (Exception $ex) {
  $ex->getMessage() == "404" ? require_once 'controller/ctrl_404.php' : require_once 'controller/ctrl_401.php';
}
