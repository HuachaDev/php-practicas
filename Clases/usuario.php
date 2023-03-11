<?php

class Usuario
{

    public $id;
    protected $array_vengadores;

    public function  __construct(string $id)
    {
        $this->id = $id;
        $this->array_vengadores = ["Iroman", "Thor", "Hulk", "Doctor Strange"];
    }

    public function search_user(int $id = null): string
    {
        return $this->array_vengadores[$id ?? $this->id];
    }

    public function getname_user(): string
    {
        return $this->array_vengadores[$this->id];
    }

    public function list_user(): string
    {
        $respuesta = "";
        foreach ($this->array_vengadores as  $vengador) {
            $respuesta .= "<br>{$vengador}";
        }
        return $respuesta;
    }


    public function __toString()
    {
        return $this->search_user();
    }
}
