<?php

class Manager_category extends Category
{

    public function get_all_categories(object $bdd):array
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

    public function get_one_category(object $bdd, $id):object
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

    public function add_category(object $bdd){
        try{
            $req = $bdd->prepare("INSERT INTO category(name-category) VALUE (:name-category) ");
            $req->execute([
                'name-category' =>$this->get_name_category()
            ]);
        }catch(Exception $e){
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }
}
