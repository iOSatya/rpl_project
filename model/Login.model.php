<?php

require_once BASE_URL . "model/Database.model.php";

class LoginModel extends Database {
    protected $email = "";
    protected $pwd = "";

    public function __construct($email, $pwd) {
        $this->email = $email;
        $this->pwd = $pwd;
    }

}