<?php


class Login {
    private $user;
    private $pass;

    public function __construct($user, $pass) {
        $this->user = $user;
        $this->pass = $pass;
    }

    public function validarCredenciales($user, $pass) {
        if ($this->user === $user && $this->pass === $pass) {
            return true;
        } else {
            return false;
        }
    }
    public function __destruct()
    {
        echo 'Objeto destruido';
    }
}

