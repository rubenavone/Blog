<?php
ob_start();
$_SESSION["delete"] = null;

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
      foreach ($this->manage_article->get_all_articles($this->bdd) as $article) {
        $actual_category = $this->category->get_one_category($this->bdd, $article->id_category);
      ?>
        <tr id="<?= $article->id_art?>" >
          <td class="border border-slate-700 hover:bg-neutral-50"><?= $article->id_art ?></td>
          <td class="border border-slate-700 hover:bg-neutral-50"><?= $article->name_art ?></td>
          <td class="border border-slate-700 hover:bg-neutral-50"><?= $article->name_user . $article->first_name_user ?></td>
          <td class="border border-slate-700 hover:bg-neutral-50"><?= $article->name_category ?></td>
          <td class="border border-slate-700 hover:bg-neutral-50"><?= $article->date_art ?></td>
          <td class="border border-slate-700 hover:bg-neutral-50">
            <a href="/" class="modal-button-js"><button class="w-auto" id="<?= $article->id_art ?> ">❌ Supprimer</button></a>
            <a href="articles/editArticle/<?= $article->id_art?>" class=""><button class="w-auto ">🖊️ Editer</button></a>
          </td>
        </tr>

      <?php } ?>

    </tbody>
  </table>


</main>
<section class="w-full h-screen absolute top-0 z-30 flex justify-center items-center modal-view-js hidden bg-[rgba(0,0,0,0.9)] ">

  <article class="w-2/4 bg-white  text-center justify-center h-[200px] items-center z-20 border-4 border-blue-700 ">
    <h2 class="mt-10">ATTENTION VOUS ALLEZ SUPPRIMER UNE DONNÉES IMPORTANTE</h2>

    <section class="w-2/4 mx-auto mb-10">

      <a href=""><button class="rounded-full bg-blue-800 text-white h-10 w-1/3 mx-auto mt-5 valid">Valider</button></a>

      <a href=""><button class="rounded-full bg-blue-800 text-white h-10 w-1/3 mx-auto mt-5 cancel">Annuler</button></a>
    </section>

  </article>
</section>
<?php
$content = ob_get_clean();
require 'vue/template.php';
?>