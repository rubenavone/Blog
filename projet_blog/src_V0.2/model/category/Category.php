<?php

class Category
{

    function __construct(private ?INT $id_category, public ?STRING $name_category)
    {
        $this->id_category = $id_category;
        $this->name_category = $name_category;
    }

    public function get_id_category(): INT
    {
        return $this->id_category;
    }
}
