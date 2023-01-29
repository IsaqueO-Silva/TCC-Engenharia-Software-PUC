<?php

namespace App\Http\Controllers;

use App\Models\EntradaEstoque as ModelEntradaEstoque;
use Illuminate\Http\Request;

class EntradaEstoque extends Controller
{
    public static function listar() {
        $resultado = ModelEntradaEstoque::listar();

        return view('entrada-estoque-listar', array('resultados' => $resultado));
    }
}
