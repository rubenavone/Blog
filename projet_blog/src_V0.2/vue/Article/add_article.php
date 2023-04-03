<?php
ob_start();
?>
<form action="" class="relative justify-center flex mb-10" method="POST" enctype="multipart/form-data">
    <div class="mt-8 mr-10 ml-10 w-full lg:w-2/5">
        <div class="grid grid-cols-1 gap-6">

            <label for="name-article" class="block">
                <span class="text-gray-700">Article name *</span>
                <input type="text" class=" mb-5 rounded-md mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blue-800" placeholder="Nom de l'article" name="name-article" data-cy="add-article-name"  />
            </label>

            <label for="id-category" class="block">
                <span class="text-gray-700">Dans quel catégorie</span>
                <select class=" mb-5 rounded-md block w-full mt-2 px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blue-800" name="id-category">
                    <?php foreach ($all_categories as $value) { ?>
                        <option value="<?= $value->get_id_category() ?>" /> <?= $value->name_category ?> </option>
                    <?php } ?>
                </select>
            </label>
            <div class="lg:flex justify-between items-center">
                <label for="date-article" class="block">
                    <span class="text-gray-700">Une date</span>
                    <input type="date" class="mt-1 mb-5 form-control block w-4/4 px-3 py-1.5  border-0 border-b-2 text-base font-normal text-gray-700 bg-white bg-clip-padding  border-solid border-gray-300 rounded-md
                     transition ease-in-out m-0 focus:ring-0 focus:text-gray-700 focus:bg-white focus:border-blue-800 focus:outline-none " name="date-article">
                </label>


                <label for="img-article" class="block">
                    <span class="text-gray-700">Image pour l'article</span>
                    <input type="file" class="file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-800 file:text-white  mt-1 mb-5 
                    form-control block w-4/4 px-3 py-1.5 border-0 border-b-2 text-base font-normal text-gray-700 bg-gray-200 bg-clip-padding  border-solid  rounded-md transition ease-in-out m-0" name="img-article" />
                </label>
            </div>


            <label for="content-art" class="block">
                <span class="text-gray-700">Votre article *</span>
                <textarea class="mt-2 mb-5 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blue-800 rounded-md" rows="7" name="content-article" data-cy="add-article-content" ></textarea>
            </label>

            <input type="submit" value="submit" class=" w-2/3 mx-auto rounded-md bg-blue-800 text-white h-10" name="submit" />
        </div>
    </div>
</form>

<?php if ($error === "ok") {
?>
    <aside class="absolute bottom-0 left-0">
        <p class=" text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-green-600 relative inline-block"> <span class="relative text-white ">Article Ajouté</span>
        <p>
            <?php if (!isset($_FILES["img-art"])) { ?>
        <p class="text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-red-600 relative inline-block "> <span class="relative text-white ">Image de profile par défaut</span> </p>
    </aside>
<?php } ?>


<?php } else if ($error === "error") { ?>
    '<p class="text-center text-red-600"> Désolé une erreur est survenue il manque le titre ou le contenus </p>';
<?php }
$content = ob_get_clean();
require_once './vue/template.php';
?>