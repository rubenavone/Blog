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
            
            
            $path = explode("." , $name)[0]; 
            move_uploaded_file($temp_name, "./dist/img/$path");
            $path = Utils_controller::convert_to_avif("./dist/img/$path");
            unlink("./dist/img/$path");
            return $path;
        } else {
            return "";
        }
    }

    private static function convert_to_avif(STRING $path){
        try{
            $image = new Imagick($path);
            $actual_type = $image->getImageFormat();
            $image->setImageFormat("avif");
            $image->writeImage("$path.avif");
            $path = $image->getImageFileName();
            return explode("/", $path)[3];
        }catch(Exception $e){
            var_dump($e);
        }  
    }

    public static function check_type(STRING $type){
        $type_allowed = [
            "image/jpg",
            "image/png",
            "image/webp",
            "image/avif",
            "image/jpeg"
        ];
        if(in_array($type, $type_allowed)){
            return true;
        }
        return false;
    }

    /**
     * Fonction de compression d'image
     */

    public static function any_to_avif() {

    }
}
