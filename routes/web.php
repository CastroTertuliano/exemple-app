<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $idade = 29;

    $nome = "Matheus";

    $arr = [10,20,30,40,50];

    $nomes = ["Matheus", "Maria", "João", "Saulo"];

    return view('welcome', 
    [
        'nome' => $nome, 
        'idade' => $idade, 
        'profissão' => "programador",
        'arr' => $arr,
        'nomes' => $nomes

    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);

});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});
