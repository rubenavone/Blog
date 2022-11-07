<?php

class Category{

    function __construct(private ?INT $id_category, private ?STRING $name_category, private ?STRING $img_category)
    {
        $this->id_category = $id_category;
        $this->name_category = $name_category;
        $this->img_category = $img_category;

    }

    public function get_id_category():INT{
        return $this->id_category;
    }
    public function set_id_category($value):VOID{
        $this->id_category = $value;
    }
    public function get_name_category():STRING{
        return $this->name_category;
    }
    public function set_name_category($value):VOID{
        $this->name_category = $value;
    }
    public function get_img_category():INT{
        return $this->img_category;
    }
    public function set_img_category($value):VOID{
        $this->img_category = $value;
    }
}