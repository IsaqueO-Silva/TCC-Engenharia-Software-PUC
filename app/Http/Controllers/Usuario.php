<?php

namespace App\Http\Controllers;

use App\Models\Usuario as ModelUsuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Usuario extends Controller
{
    public function login(Request $request)
    {
        $usuario = $request->input('login');
        $senha = $request->input('password');

        if(empty($usuario) || empty($senha)) {
            dd('sem dados');
        }

        // Busque o usuário pelo nome de usuário
        $user = DB::table('usuarios')->where('usuario', $usuario)->first();

        // Verifique se o usuário existe
        if ($user) {
            // Verifique se a senha MD5 fornecida corresponde à senha no banco de dados
            if (Hash::check(md5($senha), $user->senha)) {
                // Autenticação bem-sucedida
                Auth::loginUsingId($user->id_usuario);
                return redirect('/principal'); // Redirecionar para a página após o login
            }
        }

        // Autenticação falhou
        //return redirect()->route('login')->with('error', 'Credenciais inválidas.');
        dd('Autenticação falhou');
    }
}
