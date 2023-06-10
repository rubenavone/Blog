<?php
require_once 'utils/connect_bdd.php';
require_once './model/category/Category.php';
require_once './model/category/Manager_category.php';


class Master_category_controller
{

    private Manager_category $manage_category;

    public function __construct()
    {
        $this->manage_category = new Manager_category(null, null, null);
    }

    public function show_master_category(): VOID
    {
        $content_title = "Gestion des";
        $title = "Catégories";
        $categories_tr = [];
        foreach ($this->manage_category->get_all_categories() as $category) {
            array_push($categories_tr, $category);
        }
        # Refacto à faire bonne pratique le __DIR__ donne le chemin courant
        require_once __DIR__ . "/../../vue/Admin/master_view_category.php";
    }
}
