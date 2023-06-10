<?php

class Manager_comment extends Comment
{
    private PDO $user_bdd;
    private PDO $admin_bdd;
    public function __construct()
    {

        $this->user_bdd = BDD::get_user_access();
        $this->admin_bdd = BDD::get_admin_access();
    }
    static function create_manager_comment():Manager_comment
    {
        return new self();
    }

    public function add_comment(Comment $comment): void
    {
        try {
            $req = $this->admin_bdd->prepare("INSERT INTO comment(id_art, id_user, comment, date_comment) VALUE
            (:id_art, :id_user, :comment, :date_comment)");

            $comment->date_comment = date('y-m-d h:m:s');

            $req->execute([
                'id_art' => $comment->get_id_art(),
                'id_user' => $comment->get_id_user(),
                'comment' => $comment->comment,
                'date_comment' => $comment->date_comment,
            ]);
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }

    public function comment_by_id(INT $id): array
    {
        try {
            $req = $this->user_bdd->prepare("SELECT * FROM comment WHERE id_art = :id_art ");
            $req->execute([
                'id_art' => $id,
            ]);
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            return $data;
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }

    public function remove_comment( INT $id): void
    {
        try {
            /***CODE***/
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }
}
