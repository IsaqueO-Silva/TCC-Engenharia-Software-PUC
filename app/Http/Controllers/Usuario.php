<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Usuario extends Controller
{
    public function login(Request $request)
    {
        $usuario    = $request->input('login');
        $senha      = $request->input('password');

        if(empty($usuario) || empty($senha)) {
            return redirect()->route('/')->with('error', 'Por favor, informe usuário e senha.');
        }

        // Busque o usuário pelo nome de usuário
        $user = DB::table('usuarios')->where('usuario', $usuario)->first();

        // Verifique se o usuário existe
        if ($user) {
            // Verifique se a senha MD5 fornecida corresponde à senha no banco de dados
            if (md5($senha) == $user->senha) {
                Auth::loginUsingId($user->id);
                return redirect('/principal'); // Redirecionar para a página após o login
            }

        }

        // Autenticação falhou
        return redirect()->route('/')->with('error', 'Credenciais inválidas.');
    }
}
