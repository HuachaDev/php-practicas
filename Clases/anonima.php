<?php

class User
{

    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function listUser(): string
    {
        return $this->database->selectUsuarios();
    }

}

