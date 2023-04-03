<?php
ob_start();
?>
<section class="flex items-center flex-col mt-10 text-center">
    <p class="text-center text-2xl mb-10">Vous n'avez pas l'autorisation</p>
    <object class="w-3/6" data="/dist/img/non_autorise.svg" type="image/svg+xml"></object>
</section>

<?php
$content = ob_get_clean();
require_once 'vue/template.php';

?>