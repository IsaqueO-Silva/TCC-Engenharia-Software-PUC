<?php

namespace App\Http\Controllers;

use App\Models\EntradaEstoque as ModelEntradaEstoque;
use Illuminate\Http\Request;

class EntradaEstoque extends Controller
{
    public static function list() {
        $resultado = ModelEntradaEstoque::list();

        return view('entrada-estoque-listar', array('resultados' => $resultado));
    }

    public static function insert(Request $request) {

        ModelEntradaEstoque::create($request);

        return redirect()->route('entrada-estoque-cadastrar');
    }

    public function delete($idEntradaEstoque) {
        ModelEntradaEstoque::destroy($idEntradaEstoque);

        return redirect()->route('entrada-estoque-listar');
    }
}
