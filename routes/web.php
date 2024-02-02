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



// Route::view('/jogos', 'jogos');

// Route::get("/jogos", function () {
//     return 'Teste';
// });

// Route::view('/jogos', 'jogos',['name'=>'GTA']);

// Route::get("/jogos/{name?}", function ($name = null) {
//     return view("jogos", ["nomeJogo"=> $name]);
// })->where('name', '[A-Za-z]+');

Route::get("/jogos", [JogosController::class, 'index']);

Route::get('/home', function () {
    return view('welcome');
})->name('home-index');

Route::fallback(function () {
    return "Erro";
});