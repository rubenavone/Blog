<?php

class Category{

    function __construct(private ?INT $id_category, private ?STRING $name_category)
    {
        $this->id_category = $id_category;
        $this->name_category = $name_category;
    }

    public function get_id_category():INT{
        return $this->id_category;
    }
    public function set_id_category(INT $value):VOID{
        $this->id_category = $value;
    }
    public function get_name_category():STRING{
        return $this->name_category;
    }
    public function set_name_category(STRING $value):VOID{
        $this->name_category = $value;
    }
}