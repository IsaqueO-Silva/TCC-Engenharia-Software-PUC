<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntradaEstoque as ControllerEntradaEstoque;
use App\Models\Produto as ModelProduto;
use App\Models\Estoque as ModelEstoque;

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

Route::get('/entrada-estoque-listar', [ControllerEntradaEstoque::class, 'list'])->name('entrada-estoque-listar');

Route::get('/entrada-estoque-cadastrar', function () {
    $produtos       = ModelProduto::list();
    $estoques       = ModelEstoque::list();

    return view('entrada-estoque-cadastrar', array(
        'produtos'      => $produtos,
        'estoques'      => $estoques,
    ));
})->name('entrada-estoque-cadastrar');

Route::post('/entrada-estoque-cadastrar-2', [ControllerEntradaEstoque::class, 'insert'])->name('entrada-estoque-cadastrar-2');

Route::get('/entrada-estoque-alterar', function () {
    return view('entrada-estoque-alterar');
});

Route::get('/entrada-estoque-excluir/{id_entrada_estoque}', [ControllerEntradaEstoque::class, 'delete'])->name('entrada-estoque-excluir');