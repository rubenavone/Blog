<?php

class Comment {

    function __construct(private ?INT $id_art, private ?INT $id_user, private ?STRING $comment, private ?STRING $date_comment)
    {
        $this->id_art = $id_art;
        $this->id_user = $id_user;
        $this->comment = $comment;
        $this->date_comment = $date_comment;

    }

    public function get_id_art():INT{
        return $this->id_art;
    }

    public function set_id_art(INT $value):VOID{
        $this->id_art = $value;
    }
    
    public function get_id_user():INT{
        return $this->id_user;
    }

    public function set_id_user(INT $value):VOID{
        $this->id_user = $value;
    }

    public function get_comment():STRING{
        return $this->comment;
    }

    public function set_comment(STRING $value):VOID{
        $this->comment = $value;
    }

    public function get_date_comment():STRING{
        return $this->date_comment;
    }

    public function set_date_comment(STRING $value):VOID{
        $this->date_comment = $value;
    }
}