<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostDosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {

    return view('welcome');
}); */



/* Route::get('/blogdos', function(){

  $posts = [
    ['title' => 'First Post'],
    ['title' => 'Second Post'],
    ['title' => 'Third Post'],
    ['title' => 'Fourth Post'],
  ];

  return view('blogdos', ['posts' => $posts]);

})->name('blogDos'); */


Route::get('/blogdos', [PostDosController::class, 'index'])->name('blogDos');


// url y view -> nombre a las rutas
Route::view("/","welcome")->name('home');

Route::view("/contacto", "contact" )->name('contact');

$posts = [
    ['title' => 'First Post'],
    ['title' => 'Second Post'],
    ['title' => 'Third Post'],
    ['title' => 'Fourth Post'],
];
Route::view('/blog', "blog", ['posts' => $posts])->name('blog');

Route::view('about',"about")->name('about');

//index mostrar un listado de recursos
Route::get('/blogTres', [PostController::class, 'index'])->name('posts.index');

//! ruta para crear
Route::get('/blogTres/create', [PostController::class, 'create'])->name('posts.create');

//! route:post para poder usar el metodo post de formulario
Route::post('/blogTres', [PostController::class, 'store'])->name('posts.store');


//! rutas del blog
Route::get('/blogTres/{post}', [PostController::class , 'show'] )->name('posts.show');
// metodo show para mostrar el detalle de un recurso

//! rutas de EDIT del formulario
Route::get('/blogTres/{post}/edit', [PostController::class , 'edit'] )->name('posts.edit');


//! ruta para UPDATE
Route::patch('/blogTres/{post}', [PostController::class, 'update'])->name('posts.update');
