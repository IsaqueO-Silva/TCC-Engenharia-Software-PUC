<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EntradaEstoque extends Model
{
    use HasFactory;
    protected $connection   = 'mysql';
    protected $table        = 'entradas_estoque';

    public static function list() {
        return DB::table('entradas_estoque')
        ->join('produtos', 'entradas_estoque.id_produto', '=', 'produtos.id_produto')
        ->join('estoques', 'entradas_estoque.id_estoque', '=', 'estoques.id_estoque')
        ->select('id_entrada_estoque', 'produtos.nome AS produto', 'quantidade', 'data_entrada_estoque', 'estoques.nome AS estoque')
        ->get();
    }

    public static function get($id) {
        return DB::table('entradas_estoque')
        ->join('produtos', 'entradas_estoque.id_produto', '=', 'produtos.id_produto')
        ->join('estoques', 'entradas_estoque.id_estoque', '=', 'estoques.id_estoque')
        ->select('id_entrada_estoque', 'produtos.nome AS produto', 'quantidade', 'data_entrada_estoque', 'estoques.nome AS estoque', 'entradas_estoque.observacoes')
        ->where('id_entrada_estoque', $id)
        ->get();
    }

    public static function create(Request $request) {

        return self::insert(array(
            'id_produto'            => $request->input('produto'),
            'id_estoque'            => $request->input('estoque'),
            'quantidade'            => $request->input('quantidade'),
            'data_entrada_estoque'  => $request->input('data').' '.$request->input('hora')
        ));
    }

    public static function destroy($idEntradaEstoque) {
        return self::where('id_entrada_estoque', $idEntradaEstoque)->delete();
    }
}
