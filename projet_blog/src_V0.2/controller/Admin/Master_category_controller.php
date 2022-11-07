<?php
require_once 'utils/connect_bdd.php';
require_once './model/category/Category.php';
require_once './model/category/Manager_category.php';


class Master_category_controller{
    private $category;
    private $bdd;
    public function __construct()
    {
        $this->categories = new Manager_category(null, null, null);
        $this->bdd = BDD::getBDD();
    }
    
    public function show_master_category():void{
        $content_title = "Gestion des";
        $title = "Catégories";
        $categories_tr = [];
        foreach ($this->categories->get_all_categories($this->bdd) as $category) {
            array_push($categories_tr, $category);
        }
        # Refacto à faire bonne pratique le __DIR__ donne le chemin courant
        require_once __DIR__ . "/../../vue/Admin/master_view_category.php";
    }

}
