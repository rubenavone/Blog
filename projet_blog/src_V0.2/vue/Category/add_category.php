<?php
  ob_start();
?>

<form action="" clas="relative justify-center flex mb-10" method="POST">
  
    <div class="mt-8 mr-10 ml-10 w-full lg:w-2/5">
        <div class="grid grid-cols-1 gap-6">

            <label for="name-article" class="block">
                <span class="text-gray-700">Category name *</span>
                <input type="text" class=" mb-5 rounded-md mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blue-800" placeholder="Nom de la nouvelle categorie" name="name-category" />
            </label>

            <input type="submit" value="submit" class=" w-2/3 mx-auto rounded-md bg-blue-800 text-white h-10" name="submit" />
        </div>
    </div>
  
</form>

<?php 
  $content = ob_get_clean();
  require_once './vue/template.php';
?>
