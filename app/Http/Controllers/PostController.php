<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{


    //! READ

    public function index(){

        //* convencion mostrar listados es un metodo index

        //* fastapp - DB:: method table y (la tabla que usaremos) y el metodo get o post
        $posts = Post::get();
         //! laravel se encagar de abrir y cerrar la conexio y hacerla segura
        return view('posts.index', ['posts' => $posts]);

    }

    public function show(Post $post){
        // $Post es el id del post

        // $blog = Post::findOrFail($post);
        // metodo findOrFail si existe muestra sino error
       // return "$blog->title detalle del post";
        return view('posts.show', ['post'=> $post]);

    }

//! CREATE

    public function create(){

        return view('posts.create');

    }


    public function store(Request $request){

        //acceder a los campos de entrada title y body del form
        //* para eso tenemos el metodo request() y la clase importada por artisan Request
        //acceder indivualmente a los valores $request->input('title');

        $request->validate([
            //array con las reglas de validación
            'title' => ['required','min:4'],
            'body' => ['required']

        ],[
            'title.required' => 'Error diferente :attribute',
            'body.required' => 'Error diferente :attribute'

        ]);

        //! como en el tinker se añaden los datos en un registro
        $post= new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        //variable y mensaje
        session()->flash('status', 'Post Created!');

        //! para redireccionar se puede hacer con
        //* return redirect('/blogTres');
        //* return redirect()->route('posts.index'); para usar nombres de rutas
        //* el helper de return to_route('posts.index');

        return to_route('posts.index');

    }


    //! UPDATE EDIT

    public function edit(Post $post){

        return view('posts.edit', ['post' => $post]);

    }

    public function update(Request $request, Post $post){


        $request->validate([

            'title' => ['required', 'min:4'],
            'body' => ['required'],
        ]);

        /* $post = Post::find($post); */ //! añadiendo Post como parametro ya no necesitas esta linea
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();


        session()->flash('status', 'Blog post Actualizado!');

      /*   return to_route('posts.index'); */
        return to_route('posts.show', $post);

    }


}
