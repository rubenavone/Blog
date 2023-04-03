<?php
ob_start();
$_SESSION["delete"] = null;
require './vue/utils/modal_delete.comp.php';

/**
 * TODO: Adapter pour afficher tout les utilisateur
 */
?>

<main class="flex flex-col ml-5 mr-10 text-center">

  <table class="border-collapse border border-slate-500">
    <thead>
      <tr>
        <th class="border border-slate-600">ID</th>

        <th class="border border-slate-600">Pseudo</th>
        <th class="border border-slate-600">Mail</th>
        <th class="border border-slate-600">Role</th>
        <th class="border border-slate-600">Nombre de commentaire</th>
        <th class="border border-slate-600">Gestion</th>


      </tr>
    </thead>
    <tbody>

      <?php
      foreach ($user_tr as $user) {
      ?>
        <tr id="">
          <td class="border border-slate-700 hover:bg-neutral-50"><?= $user->get_id_user() ?></td>
          <td class="border border-slate-700 hover:bg-neutral-50"><?= $user->get_name_user() ?></td>
          <td class="border border-slate-700 hover:bg-neutral-50"><?= $user->get_mail_user() ?></td>
          <td class="border border-slate-700 hover:bg-neutral-50"><?= $user->get_id_role() ?></td>
          <td class="border border-slate-700 hover:bg-neutral-50"></td>
          <td class="border border-slate-700 hover:bg-neutral-50">
            <a href="#" class="modal-button-js"><button class="w-auto" id="">❌ Supprimer</button></a>
            <a href="#" class=""><button class="w-auto ">🖊️ Editer</button></a>
          </td>
        </tr>

      <?php
      }
      ?>

    </tbody>
  </table>


</main>

<?php
echo $modal_delete;
$content = ob_get_clean();
require_once 'vue/template.php';
?>