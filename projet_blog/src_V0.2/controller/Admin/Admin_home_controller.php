<?php
class Admin_home_controller
{
    public function show_home_admin(): VOID
    {
        $content_title = "";
        $title = "Administration";
        require_once "./vue/admin/view_admin_home.php";
    }
}
