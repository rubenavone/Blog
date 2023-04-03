<?php
require_once "./utils/connect_bdd.php";
require_once "./model/user/Manager_user.php";
require_once './model/comment/Comment.php';
require_once './model/comment/Manager_comment.php';
require_once './controller/Utils/Utils_controller.php';
#Flag on baisse le drapeau si une condition n'est pas remplis ainsi ils passe des les else

class User_controller
{
    private Manager_comment $manage_comment;
    private Manager_user $manage_user;
    public function __construct()
    {

        $this->manage_comment = Manager_comment::create_manager_comment();
        $this->manage_user = Manager_user::create_manager_user();

    }
    public function addUser(): VOID
    {
        # Déclaration d'un tableau vide pour afficher certaine valeur ou non
        $entry = [];

        $content_title = "Crée mon";
        $title = "compte";
        $flag = true;

        # On à définis un name="submit" sur notre input type button pour verifier si il existe dans la super globale $_POST
        if (isset($_POST['submit'])) {
            $flag = false;
        }

        # Ici on verifie si touts nos champs sont remplis
        if (!$flag && !empty($_POST['name_user']) && !empty($_POST['first_name_user']) && !empty($_POST['mail_user']) && !empty($_POST['mdp_user'])) {
            # Instanciation d'un nouvel utilisateur, définis img_user vide car on à pas encore le chemin
            $new_user = new User(null, htmlspecialchars($_POST['name_user']), htmlspecialchars($_POST['first_name_user']), htmlspecialchars($_POST['mail_user']), $_POST['mdp_user'], htmlspecialchars(""));
        } else {
            $entry_value = '<p  class="text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-red-600 relative inline-block " > <span class="relative text-white " >Désoler une erreur est survenue   </span> </p> ';
            array_push($entry, $entry_value);
            $flag = true;
        }

        # Ici on verifie que le mail n'existe pas dans la BDD
        if (!$flag && !$this->manage_user->verify_mail_exist($new_user->get_mail_user())) {
            # Verif de l'existance d'un fichiers (upload ou pas par l'utilisateur)
            $path = Utils_controller::check_image("img_user");

            if ($path === "") {
                $path = "default.jpg";
                $entry_value = '<p class="text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-red-600 relative inline-block " > <span class="relative text-white " >Image de profile par défaut</span> </p> ';
                array_push($entry, $entry_value);
            }

            $this->manage_user->set_img_user($path);
            $this->manage_user->add_user($new_user);

            $entry_value = '<p class=" text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-green-600 relative inline-block" > <span class="relative text-white ">Inscription validé</span><p>';
            array_push($entry, $entry_value);
        } else {
            $entry_value = '<p class="text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-red-600 relative inline-block " > <span class="relative text-white " >Désoler le mail est déjà utilisé <a href="#" class="text-gray-600"> Oublie ? </a></span> </p> ';
            array_push($entry, $entry_value);
        }

        require_once './vue/User/add_user.php';
    }

    public function add_comment(): VOID
    {
        $content_title = "Ajouter un";
        $title = "Commentaire";
        $entry = [];
        $secret_key = "6Ld-PPohAAAAAOvXAyCMz-efehnN-dwsNJMDCtdD";
        if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
            // Verify the reCAPTCHA API response 
            $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response']);

            // Decode JSON data of API response 
            $response_data = json_decode($verify_response);
            // If the reCAPTCHA API response is valid 
            if ($response_data->success) {
                if (isset($_POST["commentaire"]) && isset($_SESSION['connected']) && isset($_GET['id'])) {
                    $comment = new Comment(htmlspecialchars($_GET["id"]), $_SESSION['id'], htmlspecialchars($_POST["commentaire"]), null);
                    $this->manage_comment->add_comment($comment);
                    if (isset($_SESSION["temp_page"])) {
                        header('location: ' . $_SESSION["temp_page"]);
                    }
                }
            }
        } else {
            $entry_value = '<p  class=" text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-red-600 relative inline-block" > <span class="relative text-white ">Merci de cocher la case anti robot</span><p>';
            array_push($entry, $entry_value);
        }

        require_once './vue/User/add_comment.php';
    }

    public function connexion(): VOID
    {
        $content_title = "Interface de ";
        $title = "Connexion";
        $error = "";
        $flag = true;
        #Verification que l'utilisateur à bien appuyer sur le boutton
        if (isset($_SESSION["temp_page"])) {
            $go_back_link = $_SESSION["temp_page"];
        } else {
            $go_back_link = "";
        }

        if (isset($_GET['error']) && $_GET['error'] === '2') {
            $error = 'Erreur mail ou mot de passe<br/>';
        }

        if (isset($_POST['submit'])) {
            $flag = false;
        }

        if (!$flag && !empty($_POST['mail_user'] and !empty($_POST['mdp_user']))) {
            $actual_user = new User(null, "", "", $_POST['mail_user'], $_POST['mdp_user'], "");
  
        } else if (!isset($_GET["error"])) {
            header('location: connexion?error=2');
        } else {
            $flag = true;
        }
        var_dump($actual_user);
        die;
        #Verification que le mail exist en base de données
        if (!$flag && !empty($this->manage_user->verify_mail_exist($actual_user->get_mail_user()))) {
            $user = $this->manage_user->verify_user($actual_user->get_mail_user());
            $hash = $user->password_user;
        } else if (!$flag) {
            header('location: connexion?error=2');
        }
        if (!$flag && password_verify($actual_user->get_password_user(), $hash)) {
            $_SESSION['id'] = $user->id_user;
            $_SESSION['name'] = $user->name_user;
            $_SESSION['connected'] = true;
            $_SESSION['role'] = $user->id_role;
            if (isset($_SESSION["temp_page"])) {
                header('location: ' . $_SESSION["temp_page"]);
            } else {
                header('location: /');
            }
        } else if (!$flag) {
            header('location: connexion?error=2');
        }
        require_once 'vue/User/view_connexion.php';
    }

    public function deconnexion(): VOID
    {
        session_destroy();
        unset($_COOKIE['PHPSESSID']);
        header('location: / ');
    }

    public function profil_user(): VOID
    {
        $content_title = "Profil ";
        $title = "Connexion";

        require_once 'vue/User/view_profil.php';
    }
}
