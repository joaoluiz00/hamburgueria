<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente', function () {
    return view('cliente');
});

// Route::get('/cliente', function () {
//     $numero = -1;
//     return view('cliente',['numero' => $numero]);
// });

Route::get('/cliente', function () {
    $numero = -1;
    $nome = "Admin";
    $codigo = 12;
    $lanches = ["X-Salada","X-Bacon","X-Tudo"];
    return view('cliente',[
    'numero' => $numero,
    'nome' => $nome,
    'codigo' => $codigo,
    'lanches' => $lanches]);
    });
