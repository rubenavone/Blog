<?php
ob_start();

?>
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

    $modal_delete = ob_get_clean();

    ?>