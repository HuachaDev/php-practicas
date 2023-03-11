<?php

//require('Clases/usuario.php');
 
// $vengador = new Usuario(0); 
// echo $vengador;
// echo "<br>";
// echo $vengador->search_user(3);
// echo "<br>";
// echo $vengador->getname_user();
// echo "<br>";
// echo $vengador->list_user();

// require('Clases/depedencia.php');

// $database = new Database();
// $new_users = new User($database);

// //echo $new_users->listUser();
// echo $new_users;

//$new_users = new User();
// require('Clases/claseAbstracta.php');

//  $tiktokNew = new TiktokMedia(['users','users_deletes']);
//  echo $tiktokNew->trends(1);
//  echo "<br>";
//  echo $tiktokNew->comments();
//echo $tiktokNew->post();
 
 require('Clases/anonima.php');
 
 $newUser = new User(
    new class
    {
        public function selectUsuarios(): string
        {
            return "SELECT * FROM usuarios";
        }
    }
 );

 echo $newUser->listUser();

?>