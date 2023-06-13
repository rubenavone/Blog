<?php

require_once './utils/connect_bdd.php';
require_once './model/category/Category.php';
require_once './model/category/Manager_category.php';

class Category_controller{
  
  private Manager_category $manage_category;

  public function __construct(){
    $this->manage_category = Manager_category::create_manager_category();
  }

  public function add_category(){
    try{
      $content_title = "Ajouter une";
      $title = "Categorie";
      $flag = false; 
      if(!isset($_SESSION['connected'])){
        header('location: connexion?error=interdit');
      } 

      if(isset($_POST['submit'])){
        $flag = true;
      }
      
      if(!$flag && empty($_POST['name-category'])){
        $error = 'error';
        $flag = false;
      }
      
      if($flag){
        $category = new Category(
          null,
          htmlspecialchars($_POST['name-category'])
        );
        $this->manage_category->add_category($category);
        $error = "ok";
      }


      require_once './vue/Category/add_category.php';
    }catch(Exception $e){
      exit('Une erreur est survenue lors de l\'ajout de la catégorie' .  $e->getMessage());
    }
  }

}
