<?php

class User
{

    public function __construct(
        private ?INT $id_user,
        private ?STRING $name_user,
        private ?STRING $first_name_user,
        private ?STRING $mail_user,
        private ?STRING $password_user,
        private ?STRING $img_user,
        private ?INT $status_user = 0,
        private ?INT $id_role = 2
    ) {
        $this->name_user = $name_user;
        $this->first_name_user = $first_name_user;
        $this->mail_user = $mail_user;
        $this->password_user = $password_user;
        $this->img_user = $img_user;
    }

    public function get_id_user(): INT
    {
        return $this->id_user;
    }

    public function set_id_user(INT $value): VOID
    {
        $this->id_user = $value;
    }

    public function get_name_user(): STRING
    {
        return $this->name_user;
    }

    public function set_name_user(STRING $value): VOID
    {
        $this->name_user = $value;
    }

    public function get_first_name_user(): STRING
    {
        return $this->first_name_user;
    }

    public function set_first_name_user(STRING $value): VOID
    {
        $this->first_name_user = $value;
    }

    public function get_mail_user(): STRING
    {
        return $this->mail_user;
    }

    public function set_mail_user(STRING $value): VOID
    {
        $this->mail_user = $value;
    }

    public function get_password_user(): STRING
    {
        return $this->password_user;
    }

    public function set_password_user(STRING $value): VOID
    {
        $this->password_user = $value;
    }

    public function get_img_user(): STRING
    {
        return $this->img_user;
    }

    public function set_img_user(STRING $value): VOID
    {
        $this->img_user = $value;
    }

    public function get_id_role(): INT
    {
        return $this->id_role;
    }

    public function set_id_role(INT $value): VOID
    {
        $this->id_role = $value;
    }
}
