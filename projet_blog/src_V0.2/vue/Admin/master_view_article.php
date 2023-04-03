<?php
ob_start();
$_SESSION["delete"] = null;
require './vue/utils/modal_delete.comp.php';
?>

<main class="flex flex-col ml-5 mr-10 text-center">
  <article class="flex items-center mt-10 mb-10">
    <a href="articles/addArticle">
      <button class="rounded-full bg-blue-800 text-white h-10 w-60 ">Ajouter un article</button>
    </a>
  </article>
  <table class="border-collapse border border-slate-500">
    <thead>
      <tr>
        <th class="border border-slate-600">ID</th>
        <th class="border border-slate-600">Article</th>
        <th class="border border-slate-600">Auteur</th>
        <th class="border border-slate-600">Catégorie</th>
        <th class="border border-slate-600">Date</th>
        <th class="border border-slate-600">Gestion</th>

      </tr>
    </thead>
    <tbody>

      <?php
      foreach ($this->manage_article->get_all_articles() as $article) {
        $actual_category = $this->manage_category->get_one_category( $article->id_category);
      ?>
        <tr id="<?= $article->id_art ?>">
          <td class="border border-slate-700 hover:bg-neutral-50"><?= $article->id_art ?></td>
          <td class="border border-slate-700 hover:bg-neutral-50"><?= $article->name_art ?></td>
          <td class="border border-slate-700 hover:bg-neutral-50"><?= $article->name_user . $article->first_name_user ?></td>
          <td class="border border-slate-700 hover:bg-neutral-50"><?= $article->name_category ?></td>
          <td class="border border-slate-700 hover:bg-neutral-50"><?= $article->date_art ?></td>
          <td class="border border-slate-700 hover:bg-neutral-50">
            <a href="/" class="modal-button-js"><button class="w-auto" id="<?= $article->id_art ?> ">❌ Supprimer</button></a>
            <a href="articles/editArticle/<?= $article->id_art ?>" class=""><button class="w-auto ">🖊️ Editer</button></a>
          </td>
        </tr>

      <?php } ?>

    </tbody>
  </table>


</main>

<?php
echo $modal_delete;
$content = ob_get_clean();
require 'vue/template.php';
?>