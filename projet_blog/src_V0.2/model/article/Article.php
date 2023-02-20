<?php

class Article
{
    function __construct(private ?STRING $name_art, private ?STRING $content_art,  
    private ?STRING $date_art, private ?INT $id_art, private ?INT $id_category = null , 
    private ?STRING $image_art = "default.jpg", private ?INT $id_user = 1)
    {
        $this->name_art = $name_art;
        $this->content_art = $content_art;
        $this->date_art = $date_art;
        $this->id_art = $id_art;
        $this->id_category = $id_category;
        $this->image_art = $image_art;
        $this->id_user = $id_user;
    }

    public function get_name_art(): STRING
    {
        return $this->name_art;
    }

    public function set_name_art(STRING $value): VOID
    {
        $this->name_art = $value;
    }

    public function get_content_art(): STRING
    {
        return $this->content_art;
    }

    public function set_content_art(STRING $value): VOID
    {
        $this->content_art = $value;
    }

    public function get_date_art(): STRING
    {
        return $this->date_art;
    }
    public function set_date_art(STRING $value): VOID
    {
        $this->date_art = $value;
    }

    public function get_id_art(): INT
    {
        return $this->id_art;
    }

    public function get_id_category(): INT
    {
        return $this->id_category;
    }
    public function set_id_category($value):VOID
    {
        $this->id_category = $value;
    }
    public function get_image_art(): STRING{
        return $this->image_art;
    }

    public function set_image_art(STRING $value): VOID{
        $this->image_art = $value;
    }

    public function get_id_user(): INT{
        return $this->id_user;
    }

}
