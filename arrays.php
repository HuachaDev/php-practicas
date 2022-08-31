<?php
    $data = json_decode(file_get_contents("https://pokeapi.co/api/v2/pokemon/"),true);
    // array_column devuevle una fila de un array
    $name = array_column($data['results'],'name');
    
    $a_pokemons = ['venusaur','Bea','Corphish','squirtle', 'Mr.Mime'];
    //arry_diff devuelve la diferencia que existe entre un array y el otro 
    //$a_results = array_diff($a_pokemons,$name  );

    //array_chunck dividir un array en array mas pequenos
    $a_results = array_chunk($name,3);
  
    //array_filter dado un array creas una funcion que cumpla una condicion 
    // y se lo asignas a un variable
    $a_sayayines = [
        [
            "name" => "Goku",
            "ki" => 1200,        
        ],
        [
            "name" => "Vegeta",
            "ki" => 1000,        
        ],
        [
            "name" => "Truks",
            "ki" => 20000,        
        ],
        [
            "name" => "Goten",
            "ki" => 500,        
        ],
        [
            "name" => "Kale",
            "ki" => 900,        
        ]
    ];

    
    $powerUpSayayin = array_filter($a_sayayines, function($ki){
        return $ki['ki'] <= 900 ;
    });
    $powerUpSayayin = array_column($powerUpSayayin,'name');
    
    // Agregando un nuevo key => value a un array
    function addNewCharacteristic($array){
        foreach ($array as $key => $value) {        
            $value2 = rand(1,10);    
            $array [$key] += array( 'newPowerUp' =>  $value2);
            
        }
        return $array ;
        
    }
    $a_sayayines = addNewCharacteristic($a_sayayines);

     echo '<pre>';
     print_r($a_sayayines);
     echo '</pre>'

?>