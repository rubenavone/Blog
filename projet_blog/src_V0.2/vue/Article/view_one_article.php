<?php
ob_start();
?>
<header>
    <img class="w-full h-40 object-contain" src="./dist/img/upload/<?= $article_wanted->image_art ?>" alt="">
</header>
<section class="flex flex-col text-left items-center w-4/5 mx-auto mt-20">
    <article class="mx-auto w-2/3">
        <?php foreach ($lines as $line) { ?>
            <p> <?= $line ?> </p>
        <?php } ?>
    </article>
    <?php
    if (isset($_SESSION["connected"])) { ?>
        <a href="./addComment?id=<?= $_GET["id"] ?>">
            <button class="rounded-full bg-blue-800 text-white h-10 w-60  mx-auto mt-5 ">Ajouter un commentaire</button>
        </a>
    <?php } else {
    ?>
        <a href="./connexion">
            <button class="rounded-full bg-blue-800 text-white h-10 w-60  mx-auto mt-5 ">Connectez vous </button>
        </a>
    <?php } ?>
</section>

<!-- Modification pour les commentaire l'appel de la méthode ne devrait pas être dans la vue  -->


<section class="flex flex-col items-center mt-5 w-full text-center">
    <h2 class="text-2xl">Commentaire :</h2>

    <?php
    foreach ($comment_wanted as $comment) { ?>
        <?php
        $id_user = $comment->id_user;
        $actual_user = $this->manage_user->user_by_id($id_user);
        ?>
        <div class="p-6 w-1/3 lg:w-2/3 bg-white rounded-xl shadow-lg flex lg:flex-col lg:items-center lg:text-white space-x-4 mb-14 break-all ">
            <div class="shrink-0">
                <img class="h-12 w-12" src="./dist/img/upload/pp<?= $actual_user->img_user ?>" alt="image de profil de <?= $actual_user->name_user ?>">
            </div>
            <div>
                <div class="text-xl font-medium text-black"> <?= $actual_user->name_user ?> <?= $actual_user->first_name_user ?></div>
                <p class="text-slate-500 "><?= $comment->comment ?></p>
            </div>
        </div>
    <?php }
    ?>
</section>

<?php
$content = ob_get_clean();

require_once './vue/template.php';
?>
