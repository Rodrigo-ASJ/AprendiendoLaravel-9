<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostDosController extends Controller
{
    public function index(){
    
        //* convencion mostrar listados es un metodo index

        //* fastapp - DB:: method table y (la tabla que usaremos) y el metodo get o post
        $posts = DB::table('postmake')->get();
         //! laravel se encagar de abrir y cerrar la conexio y hacerla segura 
        return view('blogdos', ['posts' => $posts]);
        
    }
}