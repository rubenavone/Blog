<?php
require_once 'utils/connect_bdd.php';
require_once './model/comment/Comment.php';
require_once './model/comment/Manager_comment.php';
require_once './model/user/Manager_user.php';
require_once './controller/Utils/Utils_controller.php';

class Master_user_controller
{

    private Manager_user $manage_user;

    public function __construct()
    {
        $this->manage_user = Manager_user::create_manager_user();
    }

    public function show_master_user(): void
    {
        $content_title = "Gestion des";
        $title = "Utilisateurs";
        $user_tr = [];
        foreach ($this->manage_user->get_all_users() as $user) {
            array_push($user_tr, $user);
        }
        # Refacto à faire bonne pratique le __DIR__ donne le chemin courant
        require_once __DIR__ . "/../../vue/Admin/master_view_user.php";
    }
}
