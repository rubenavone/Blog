<?php

#Instanciation de l'objet PDO pour pouvoir ce connecter à la bdd

class BDD
{
    private PDO $bdd;

    public static function get_user_access():PDO
    {
        $data = file_get_contents('./config/user.json');
        // JSON decode
        $obj = json_decode($data);
        return new PDO(
            $obj->bdd,
            $obj->id,
            $obj->pwd,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    }
    public static function get_admin_access():PDO
    {
        $data = file_get_contents('./config/admin.json');
        // JSON decode
        $obj = json_decode($data);
        return new PDO(
            $obj->bdd,
            $obj->id,
            $obj->pwd,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    }
}
