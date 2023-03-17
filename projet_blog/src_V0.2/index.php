<?php

session_start();

if (!isset($_SESSION["role"])) {
  $_SESSION["role"] = 0;
}

$LOGIN_MANDATORY_URL = [
  "deconnexion",
  
];

$LOGIN_MANDATORY_URL_ADMIN = [
  "admin",
];

/****************************/

require "./controller/router/main_router.php";
