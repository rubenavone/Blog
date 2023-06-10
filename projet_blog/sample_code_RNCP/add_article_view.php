<?php
ob_start();
?>
<form action="" class=" relative justify-center flex" method="POST" enctype="multipart/form-data">
    <div class="mt-8 mr-10 ml-10 w-full lg:w-2/5">
        <div class="grid grid-cols-1 gap-6">

            <label for="name-article" class="block">
                <span class="text-gray-700">Article name *</span>
                <input type="text" class=" mb-5 rounded-md ..." placeholder="Nom de l'article" name="name-article" />
            </label>

            <label for="id-category" class="block">
                <span class="text-gray-700">Dans quel catégorie</span>
                <select class=" mb-5 rounded-md ..." name="id-category">
                    <?php foreach ($all_categories as $value) { ?>
                        <option value="<?= $value->get_id_category() ?>" /> <?= $value->get_name_category() ?> </option>
                    <?php } ?>
                </select>

                <input type="submit" value="submit" class=" w-2/3 ..." name="submit" />
        </div>
    </div>
</form>

<?php if ($error === "ok") {
?>
    <aside class="absolute bottom-0 left-0">
        <p class=" text-xl before:block ... ">Article Ajouté</span>
        <p>
            <?php if (!isset($_FILES["img-art"])) { ?>
        <p class="text-xl ... "> <span class="relative text-white ">Image par défaut</span> </p>
    </aside>
            <?php } ?>


<?php } else if ($error === "error") { ?>
    '<p class="text-center text-red-600"> Désolé une erreur ... </p>';
<?php }
$content = ob_get_clean();
require_once './vue/template.php';
?>