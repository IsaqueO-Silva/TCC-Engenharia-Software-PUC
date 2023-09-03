<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Estoque as ModelEstoque;
use App\Models\Produto as ModelProduto;
use Symfony\Component\HttpFoundation\Request;
use App\Models\EntradaEstoque as ModelEntradaEstoque;
use App\Http\Controllers\EntradaEstoque as ControllerEntradaEstoque;
use App\Http\Controllers\Usuario as ControllerUsuario;


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
})->name('/');

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

Route::get('/entrada-estoque-alterar/{id_entrada_estoque}', function ($id) {
    $entradaEstoque = ModelEntradaEstoque::get($id);

    return view('entrada-estoque-alterar', array(
        'id'                        => $entradaEstoque[0]->id_entrada_estoque,
        'produto'                   => $entradaEstoque[0]->produto,
        'estoque'                   => $entradaEstoque[0]->estoque,
        'quantidade'                => $entradaEstoque[0]->quantidade,
        'data_entrada_estoque'      => $entradaEstoque[0]->data_entrada_estoque,
        'observacoes'               => $entradaEstoque[0]->observacoes
        
    ));
})->name('entrada-estoque-alterar');

Route::post('/entrada-estoque-alterar-2', function (Request $request) {

    DB::table('entradas_estoque')->where('id_entrada_estoque', $request->query('id'))->update(array(
        'quantidade'=>$request->quantidade,
        'observacoes'=>$request->observacoes
    ));

    return redirect()->route('entrada-estoque-listar');
})->name('entrada-estoque-alterar-2');

Route::get('/entrada-estoque-excluir/{id_entrada_estoque}', [ControllerEntradaEstoque::class, 'delete'])->name('entrada-estoque-excluir');

Route::post('/login', [ControllerUsuario::class, 'login'])->name('login');