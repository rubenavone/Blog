<?php
require "./model/user/User.php";
class Manager_user extends User
{
    static function create_manager_user(){
        return new Manager_user(null, null, null, null, null, null);
    }

    public function add_user(object $bdd): VOID
    {
        try {
            $req = $bdd->prepare("INSERT INTO user(name_user, first_name_user, mail_user, password_user, img_user) VALUE
            (:name_user, :first_name_user, :mail_user, :password_user, :img_user)");

            $req->execute([
                'name_user' => $this->get_name_user(),
                'first_name_user' => $this->get_first_name_user(),
                'mail_user' => $this->get_mail_user(),
                'password_user' => password_hash($this->get_password_user(), PASSWORD_DEFAULT),
                'img_user' => $this->get_img_user(),
            ]);
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }

    public function get_all_users(object $bdd): array
    {
        try {
            $req = $bdd->prepare("SELECT * FROM user");
            $req->execute();
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            $users = [];
            foreach ($data as $user) {
                $actual_user = new User($user->id_user, $user->name_user, $user->first_name_user, $user->mail_user, $user->password_user, $user->img_user);
                array_push($users, $actual_user);
            }
            return $users;
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }

    public function verify_mail_exist(object $bdd): BOOL
    {
        try {
            $req = $bdd->prepare("SELECT * FROM user WHERE mail_user = :mail_user");
            $req->execute(array("mail_user" => $this->get_mail_user()));
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            if (!empty($data)) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }

    public function verify_user(object $bdd): OBJECT
    {
        try {
            $req = $bdd->prepare("SELECT * FROM user WHERE mail_user = :mail_user");
            $req->execute(array("mail_user" => $this->get_mail_user()));
            $data = $req->fetch(PDO::FETCH_OBJ);
            if (!empty($data)) {
                return $data;
            } else {
                return $data;
            }
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }

   public function user_by_id(object $bdd, int $id): OBJECT
    {
        try{
            $req = $bdd->prepare("SELECT * FROM user WHERE id_user = :id_user ");
            $req->execute([
                'id_user' => $id,
            ]);
            $data = $req->fetch(PDO::FETCH_OBJ);
            return $data;
        }catch(Exception $e){
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }

}
