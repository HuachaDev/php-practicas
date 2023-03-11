<?php

class Database
{

    public function __construct()
    {
    }

    public function selectUsuarios(): string
    {
        return "select * from usuarios";
    }
}

class User
{

    private $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function listUser(): string
    {
        return $this->database->selectUsuarios();
    }

    public function __toString()
    {
        return serialize($this->database);
    }
}
