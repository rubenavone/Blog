<?php
class Manager_article extends Article
{
    public function add_article($bdd)
    {
        try {
            $req = $bdd->prepare("INSERT INTO article(name_art, content_art, date_art, id_type,image_art, id_util) VALUE
            (:name_art, :content_art, :date_art, :id_type, :image_art, :id_util)");

            $req->execute([
                'name_art' => $this->get_name_art(),
                'content_art' => $this->get_content_art(),
                'date_art' => $this->get_date_art(),
                'id_type' => $this->get_id_type(),
                'image_art' => $this->get_image_art(),
                'id_util' => $this->get_id_util(),
            ]);
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }

    public function article_by_id($bdd, $id)
    {
        $req = $bdd->prepare("SELECT * FROM article WHERE id_art = :id_art ");
        $req->execute([
            'id_art' => $id,
        ]);
        $data = $req->fetch(PDO::FETCH_OBJ);
        return $data;
    }
    
    public function article_preview_by_id($bdd, $id){
        $req = $bdd->prepare("SELECT content_art FROM article WHERE id_art = :id_art ");
        $req->execute(['id_art' => $id,]);
        $data = $req->fetch(PDO::FETCH_OBJ);
        return $data;
    }

    public function get_all_articles($bdd)
    {
        try {
            $req = $bdd->prepare("SELECT * FROM `article`
            INNER JOIN
            `type` ON type.id_type = article.id_type
            INNER JOIN 
            `utilisateur` ON utilisateur.id_util = article.id_util");
            $req->execute();
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            return $data;
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }

    public function delete_article($bdd, $id){
        try{
            $req = $bdd->prepare("DELETE FROM `article` where id_art = :id_art");
            $req->execute(['id_art' => $id]);
        }catch (Exception $e){
            die('Erreur dans la requete:' . $e->getMessage());

        }
    }
}
