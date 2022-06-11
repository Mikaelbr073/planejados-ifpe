<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){

        return view('login.login');

    }

    public function autenticar(Request $request){
        
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'

        ];

        $feedback = [
            'usuario.email' => 'O campo usuário (e-mail) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório'
        ];
       
        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $senha = $request->get('senha');

        $user = new User();
        $existe = $user->where('email', $email)->where('senha', $senha)->get()->first();
        dd($existe);

    }
}
