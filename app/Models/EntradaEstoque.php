<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EntradaEstoque extends Model
{
    use HasFactory;
    protected $connection   = 'mysql';
    protected $table        = 'entradas_estoque';

    public static function listar() {
        return DB::table('entradas_estoque')
        ->join('produtos', 'entradas_estoque.id_produto', '=', 'produtos.id_produto')
        ->join('fornecedores', 'entradas_estoque.id_fornecedor', '=', 'fornecedores.id_fornecedor')
        ->join('estoques', 'entradas_estoque.id_estoque', '=', 'estoques.id_estoque')
        ->select('id_entrada_estoque', 'produtos.nome AS produto', 'fornecedores.nome_fantasia AS fornecedor', 'quantidade', 'data_entrada_estoque', 'estoques.nome AS estoque')
        ->get();
    }
}
