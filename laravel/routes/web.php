<?php

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

    return view('index');
});



#se��o salas abaixo \/\/\/

Route::get('/salas/cadastro', function () {

    return view('salas/cadastroSalas');
});


Route::get('/salas/listar', function () {
    return view('salas/listarSalas');});

#se��o salas acima /\/\/\

