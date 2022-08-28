<?php

/*  DECLARAR UNA CONSTANTE EN PHP define("","") 
    define("SITE_NAME", "prueba");
    echo SITE_NAME
*/

class Usuario{

    public $id;
    protected $array_vengadores;

    public function  __construct(string $id)
    {
        $this->id = $id;
        $this->array_vengadores = ["Iroman", "Thor","Hulk","Doctor Strange"];
    }
 
    public function buscar_vengador(int $id = null): string {
        return $this->array_vengadores[$id ?? $this->id];
    }

    public function getNombre_vengador() : string{
        return $this->array_vengadores[ $this->id];
    }

    public function conociendo_vengador(): string {
        $respuesta = "";
        foreach ($this->array_vengadores as  $vengador){
            $respuesta .= "<br>{$vengador}";
        }
        return $respuesta;
       
    }


    public function __toString()
    {
        return $this->buscar_vengador();
    }

}
 


$vengador = new Usuario(0); 
echo $vengador;
echo "<br>";
echo $vengador->buscar_vengador(3);
echo "<br>";
echo $vengador->getNombre_vengador();
echo "<br>";
echo $vengador->conociendo_vengador();

?>