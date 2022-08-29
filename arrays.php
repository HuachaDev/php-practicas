<?php
    $data = json_decode(file_get_contents("https://pokeapi.co/api/v2/pokemon/"),true);
    // array_column devuevle una fila de un array
    $name = array_column($data['results'],'name');
    
    $a_pokemons = ['venusaur','Bea','Corphish','squirtle', 'Mr.Mime'];
    //arry_diff devuelve la diferencia que existe entre un array y el otro 
    //$a_results = array_diff($a_pokemons,$name  );

    //array_chunck dividir un array en array mas pequenos
    $a_results = array_chunk($name,3);
    echo '<pre>';
    print_r($a_results);
    echo '</pre>'

?>