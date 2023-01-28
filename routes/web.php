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
    return view('login');
});

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/entrada-estoque-listar', function () {
    return view('entrada-estoque-listar');
});

Route::get('/entrada-estoque-cadastrar', function () {
    return view('entrada-estoque-cadastrar');
});

Route::get('/entrada-estoque-alterar', function () {
    return view('entrada-estoque-alterar');
});