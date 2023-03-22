<?php

class Comment
{

    function __construct(
        private ?INT $id_art,
        private ?INT $id_user,
        public ?STRING $comment,
        public ?STRING $date_comment
    ) {
        $this->id_art = $id_art;
        $this->id_user = $id_user;
        $this->comment = $comment;
        $this->date_comment = $date_comment;
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
