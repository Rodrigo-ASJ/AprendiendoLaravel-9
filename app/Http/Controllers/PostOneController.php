<?php
namespace App\Http\Controllers;

class PostController{
    
/* public function __invoke(){
 
    //TODO: Implement __invoke() method.
    // controlador auto invocable 1 sola accion o solo metodo

    $posts = [
        ['title' => 'First Post'],  
        ['title' => 'Second Post'],  
        ['title' => 'Third Post'],  
        ['title' => 'Fourth Post'],  
      ];
      
      return view('blogdos', ['posts' => $posts]);
    
} */


public function index(){
    
    //* convencion mostrar listados es un metodo index
    //TODO: Implement __invoke() method.
    // controlador auto invocable 1 sola accion o solo metodo

    $posts = [
        ['title' => 'First Post'],  
        ['title' => 'Second Post'],  
        ['title' => 'Third Post'],  
        ['title' => 'Fourth Post'],  
      ];
      
      return view('blogdos', ['posts' => $posts]);
    
}
    
}


?>