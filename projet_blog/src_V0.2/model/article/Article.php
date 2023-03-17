<?php

class Article
{
    function __construct(
        public ?STRING $name_art,
        public ?STRING $content_art,
        public ?STRING $date_art,
        private ?INT $id_art,
        public ?INT $id_category = null,
        public ?STRING $image_art = "default.jpg",
        private ?INT $id_user = 1
    ) {
        $this->name_art = $name_art;
        $this->content_art = $content_art;
        $this->date_art = $date_art;
        $this->id_art = $id_art;
        $this->id_category = $id_category;
        $this->image_art = $image_art;
        $this->id_user = $id_user;
    }

    public function get_id_art(): INT
    {
        return $this->id_art;
    }

    public function get_id_user(): INT
    {
        return $this->id_user;
    }
}
