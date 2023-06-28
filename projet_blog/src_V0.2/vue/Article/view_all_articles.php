<?php ob_start(); ?>
<main class="flex flex-wrap justify-around text-center ">
     <?php
     foreach ($all_articles as $article) {
          $actual_category = $this->manage_category->get_one_category($article->id_category);
     ?>
          <article class="relative mt-20  ">
               <a href="./article?id=<?= $article->id_art ?>" class=" top-0 text-6xl mx-auto">
                    <h2>
                         <?= $article->name_art ?>
                    </h2>
                    <section class="absolute">
                         <p class="text-xl"><?= $this->show_preview($article->id_art) ?></p>
                    </section>
                    <img src="./dist/img/upload/<?= $article->image_art ?>" alt="" class="relative w-[600px] max-h-[240px] object-cover object-center bg-slate-100 opacity-100 hover:opacity-10 ">
               </a>
          </article>
     <?php }
     ?>
</main>
<?php
$content = ob_get_clean();
require_once './vue/template.php';

?>
