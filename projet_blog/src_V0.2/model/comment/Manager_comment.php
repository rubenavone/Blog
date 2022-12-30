<?php

class Manager_comment extends Comment
{
    
    static function create_manager_comment(){
        return new Manager_comment(null, null, null, null);
    }

    public function add_comment(object $bdd):void
    {
        try {
            $req = $bdd->prepare("INSERT INTO comment(id_art, id_user, comment, date_comment) VALUE
            (:id_art, :id_user, :comment, :date_comment)");

            $this->set_date_comment(date('y-m-d h:m:s'));

            $req->execute([
                'id_art' => $this->get_id_art(),
                'id_user' => $this->get_id_user(),
                'comment' => $this->get_comment(),
                'date_comment' => $this->get_date_comment(),
            ]);
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }

    public function comment_by_id(object $bdd, int $id):array
    {
        try {
            $req = $bdd->prepare("SELECT * FROM comment WHERE id_art = :id_art ");
            $req->execute([
                'id_art' => $id,
            ]);
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            return $data;
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }

    public function remove_comment(object $bdd):void
    {
        try {
            /***CODE***/
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }
}
