<?php

use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/home', function () {
//    return view('welcome');
// });

//Route::view('/jogos', 'jogos');



//Route::view('/jogos', 'jogos',['name'=>'StarWars Force Unleash I']); parametro estático

//Route::get('/jogos/{id?}/{name?}', function($id = null, $name = null){
//    return view('jogos', [ 'idJogo' =>$id, 'nomeJogo' =>$name]); //parametro dinâmico
// }) ->where(['id'=>'[0-9]+', 'name'=>'[a-z]+']);

Route::get('/jogos', [JogosController::class, 'index']);

Route::get('/home', function(){
    return view('welcome');
})->name('home-index');

Route::fallback(function(){
    return view('erro ao localizar a rota');
});