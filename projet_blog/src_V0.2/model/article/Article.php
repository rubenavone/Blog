<?php

class Article
{
    function __construct(private ?STRING $name_art, private ?STRING $content_art,  
    private ?STRING $date_art,   private ?INT $id_art, private ?INT $id_category = null , 
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

    public function get_name_art(): string
    {
        return htmlspecialchars($this->name_art);
    }

    public function set_name_art(string $value): VOID
    {
        $this->name_art = $value;
    }

    public function get_content_art(): string
    {
        return $this->content_art;
    }

    public function set_content_art(string $value): void
    {
        $this->content_art = $value;
    }

    public function get_date_art(): string
    {
        return $this->date_art;
    }
    public function set_date_art(DateTime $value): void
    {
        $this->date_art = $value;
    }

    public function get_id_art(): int
    {
        return $this->id_art;
    }

    public function set_id_art(int $value): void
    {
        $this->id_art = $value;
    }

    public function get_id_category(): int
    {
        return $this->id_category;
    }

    public function set_id_category(int $value): void
    {
        $this->id_category = $value;
    }

    public function get_image_art(): string{
        return $this->image_art;
    }

    public function set_image_art(string $value): void{
        $this->image_art = $value;
    }

    public function get_id_user(): int{
        return $this->id_user;
    }

    public function set_id_user(int $value): void{
        $this->id_user = $value;
    }

}
