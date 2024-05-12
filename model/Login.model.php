<?php

class LoginModel extends Database {
    protected $email = "";
    protected $pwd = "";

    public function __construct($email, $pwd) {
        $this->email = $email;
        $this->pwd = $pwd;
    }

}