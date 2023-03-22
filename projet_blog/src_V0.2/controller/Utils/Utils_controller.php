<?php
class Utils_controller
{

    public static function check_image(STRING $posted_img): STRING
    {

        /**
         * TODO Vérifier le type de fichiers, Gestion des effet de bord trop léger
         */
        if (!empty($_FILES[$posted_img]['name'])) {
            $temp_name = $_FILES[$posted_img]["tmp_name"];
            $name = $_FILES[$posted_img]["name"];
            $size = $_FILES[$posted_img]["size"];
            $error = $_FILES[$posted_img]["error"];
            $path = "$name";
            move_uploaded_file($temp_name,  "./dist/img/$path");
            return $path;
        } else {
            return "";
        }
    }
    /**
     * Fonction de compression d'image
     */
}
