<?php

require_once './utils/connect_bdd.php';
require_once './model/category/Category.php';
require_once './model/category/Manager_category.php';

class Category_controller{
  
  private Manager_category $manage_category;

  function __constructor(){
    $this->manage_category = Manager_category::create_manager_category();
  }

  public function add_category(){
    try{
      $content_title = "Ajouter une";
      $title = "Categorie";
      
      require_once './vue/Category/add_category.php';
    }catch(Exception $e){
      exit('Une erreur est survenue lors de l\'ajout de la catégorie' .  $e->getMessage());
    }
  }

}
