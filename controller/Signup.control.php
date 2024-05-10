<?php

class SignupControl extends SignupModel {

    public function isError() {
        if (empty($this->email) || empty($this->pwd) || empty($this->confirmPwd) || empty($this->playerStatus)) {
            return true;
        }
    }
}