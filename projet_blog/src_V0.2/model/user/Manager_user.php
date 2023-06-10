<?php
require "./model/user/User.php";
class Manager_user extends User
{
    private PDO $user_bdd;
    private PDO $admin_bdd;
    public function __construct()
    {

        $this->user_bdd = BDD::get_user_access();
        $this->admin_bdd = BDD::get_admin_access();
    }
    static function create_manager_user()
    {
        return new self();
    }

    public function add_user(User $user): VOID
    {
        try {
            $req = $this->admin_bdd->prepare("INSERT INTO user(name_user, first_name_user, mail_user, password_user, img_user) VALUE
            (:name_user, :first_name_user, :mail_user, :password_user, :img_user)");

            $req->execute([
                'name_user' => $user->get_name_user(),
                'first_name_user' => $user->get_first_name_user(),
                'mail_user' => $user->get_mail_user(),
                'password_user' => password_hash($user->get_password_user(), PASSWORD_DEFAULT),
                'img_user' => $user->get_img_user(),
            ]);
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }

    public function get_all_users(): array
    {
        try {
            $req = $this->user_bdd->prepare("SELECT * FROM user");
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

    public function verify_mail_exist($mail): BOOL
    {
        try {
            $req = $this->user_bdd->prepare("SELECT * FROM user WHERE mail_user = :mail_user LIMIT  0,1");
            $req->execute(array("mail_user" => $mail));
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

    public function verify_user($mail): OBJECT
    {
        try {
            $req = $this->user_bdd->prepare("SELECT * FROM user WHERE mail_user = :mail_user LIMIT 0,1");
            $req->execute(array("mail_user" => $mail));
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

    public function user_by_id(int $id): OBJECT
    {
        try {
            $req = $this->user_bdd->prepare("SELECT * FROM user WHERE id_user = :id_user LIMIT 0,1 ");
            $req->execute([
                'id_user' => $id,
            ]);
            $data = $req->fetch(PDO::FETCH_OBJ);
            return $data;
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }
}
