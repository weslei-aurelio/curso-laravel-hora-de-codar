<?php

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

Route::get('/', function () {
    $nome = 'Weslei';

    $arr = [10,20,30,40,50,60,70,80,90,100];
    $nomes = ['Matheus, Maria, Weslei, Alice'];

    return view('welcome',  
        [    
            'nome' => $nome,
            'arr' => $arr,
            'nomes' => $nomes
        ]);
});

Route::get('/contatos', function () {
    return view('contacts');
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produto/{id?}', function ($id = null) {

    return view('product', ['id' => $id]);
});