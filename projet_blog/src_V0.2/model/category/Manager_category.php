<?php

class Manager_category extends Category
{
    private PDO $user_bdd;
    private PDO $admin_bdd;
    public function __construct()
    {

        $this->user_bdd = BDD::get_user_access();
        $this->admin_bdd = BDD::get_admin_access();
    }
    public static function create_manager_category()
    {
        return new self();
    }
    public function get_all_categories(): array
    {
        try {
            $req = $this->user_bdd->prepare("SELECT * FROM category");
            $req->execute();
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            $data_array = [];
            foreach ($data as $value) {
                $category = new Category($value->id_category, $value->name_category, null);
                array_push($data_array, $category);
            }
            return $data_array;
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }

    public function get_one_category($id): OBJECT
    {
        try {
            $req = $this->user_bdd->prepare("SELECT * FROM category WHERE id_category = :id_category");
            $req->execute([
                'id_category' => $id,
            ]);
            $data = $req->fetch(PDO::FETCH_OBJ);
            return new Category($data->id_category, $data->name_category, null);
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }

    public function add_category():void
    {
        try {
            $req = $this->admin_bdd->prepare("INSERT INTO category(name-category) VALUE (:name-category) ");
            $req->execute([
                'name-category' => $this->name_category
            ]);
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }
}
