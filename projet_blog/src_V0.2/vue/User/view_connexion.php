<?php
ob_start();
?>


<article class="w-4/4 bg-white flex justify-center h-60 items-center z-20 mt-20">
    <section class="w-4/4 text-center">
        <p>
            Connexion
        </p>
        <form action="<?= $_SERVER['REQUEST_URI'] ?>" class="justify-center items-center flex flex-col " method="POST">
            <label class="block w-64">
                <input type="mail" class="mt-5 block w-full px-0.5 border-1 border-b-2 border-gray-200 focus:ring-0 focus:border-blue-800" placeholder="Votre mail" name="mail_user" data-cy="connexion-email" />
            </label>
            <label class="block w-64">
                <input type="password" placeholder="votre mot de passe" class="mt-5 block w-full px-0.5 border-1 border-b-2 border-gray-200 focus:ring-0 focus:border-blue-800" data-cy="connexion-password" placeholder="" name="mdp_user" />
            </label>

            <input type="submit" value="submit" class="rounded-full bg-blue-800 text-white w-32 h-10  mt-5" name="submit" />
            <?php $error ?>
        </form>
        <?= $error ?>
    </section>
</article>


<?php
$error = "";
$content = ob_get_clean();
require_once './vue/template.php';
?>