<?php
ob_start();
?>
<main class="flex flex-col ml-5 mr-10 text-center">
  <article class="flex items-center mt-10 mb-10">
    <a href="addArticle">
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
        <th class="border border-slate-600">Suppression</th>

      </tr>
    </thead>
    <tbody>

      <?php
      foreach ($this->new_article->get_all_articles($this->bdd) as $article) {
        $actual_type = $this->type->get_one_type($this->bdd, $article->id_type);
      ?>
        <tr >
          <td class="border border-slate-700 hover:bg-neutral-50"><?= $article->id_art ?></td>
          <td class="border border-slate-700 hover:bg-neutral-50"><?= $article->name_art ?></td>
          <td class="border border-slate-700 hover:bg-neutral-50"><?= $article->name_util . $article->first_name_util ?></td>
          <td class="border border-slate-700 hover:bg-neutral-50"><?= $article->name_type ?></td>
          <td class="border border-slate-700 hover:bg-neutral-50"><?= $article->date_art ?></td>
          <td class="border border-slate-700 hover:bg-neutral-50"><a href="/" class="modal-button-js"><div class="w-auto">X</div></a></td>
        </tr>

      <?php } ?>

    </tbody>
  </table>


</main>
<section class="w-full h-screen absolute top-0 z-30 flex justify-center items-center modal-view-js hidden bg-[rgba(0,0,0,0.9)] ">

  <article class="w-2/4 bg-white  text-center justify-center h-[200px] items-center z-20 border-4 border-blue-700 ">
    <h2 class="mt-10">ATTENTION VOUS ALLEZ SUPPRIMER UNE DONNÉES IMPORTANTE</h2>

    <section class="w-2/4 mx-auto mb-10">

      <a href="#"><button class="rounded-full bg-blue-800 text-white h-10 w-1/3 mx-auto mt-5">Annuler</button></a>

      <a href="/addUser" class="delete-value"><button class="rounded-full bg-blue-800 text-white h-10 w-1/3 mx-auto mt-5">Valider</button></a>
    </section>

  </article>
</section>
<?php
$content = ob_get_clean();
require 'vue/template.php';
?>