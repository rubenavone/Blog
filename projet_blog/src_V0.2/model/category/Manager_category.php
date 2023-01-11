<?php

class Manager_category extends Category
{
    static function create_manager_category(){
        return new Manager_category(null, null, null, null);
    }
    public function get_all_categories(OBJECT $bdd):ARRAY
    {
        try {
            $req = $bdd->prepare("SELECT * FROM category");
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

    public function get_one_category(OBJECT $bdd, $id):OBJECT
    {
        try {
            $req = $bdd->prepare("SELECT * FROM category WHERE id_category = :id_category");
            $req->execute([
                'id_category'=>$id,
            ]);
            $data = $req->fetch(PDO::FETCH_OBJ);
        
            return new Category($data->id_category, $data->name_category, null);
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }

    public function add_category(OBJECT $bdd){
        try{
            $req = $bdd->prepare("INSERT INTO category(name-category) VALUE (:name-category) ");
            $req->execute([
                'name-category' => $this->get_name_category()
            ]);
        }catch(Exception $e){
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }
}
