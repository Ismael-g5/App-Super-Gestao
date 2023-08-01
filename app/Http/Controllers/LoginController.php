<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $erro = '';
         if($request->get('erro') == 1)
         {
            $erro = 'Usuário e ou senha inválidos!';
         };

         if($request->get('erro') == 2)
         {
            $erro = 'Necessario realizar Logon para ter acesso a página!';
         };

        return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
    }
    public function autenticar(Request $request)
    {
        //regras de validação
       $regras =
       ['usuario' => 'email',
        'senha' => 'required',
    ];

    $feedback = [
        'usuario.email' => 'O campo usuário deve conter um email válido',
      'senha.required' => 'O campo senha é obrigatório'
    ];
    $request->validate($regras, $feedback);

    $email = $request->get('usuario');
    $password = $request->get('senha');

    echo "Usuário = $email | Senha = $password";
    echo '<br>';

    // vamos aproveitar o model users que ja veio por padrão no laravel

    $user = new User();

    $usuario = $user->where('email', $email)->where('password', $password)->get()->first(); // quando é comparado igualdade, não precisamos passar o paramentro ao meio
        if(isset($usuario->name))
        {
           session_start();
           $_SESSION['nome'] = $usuario->name;
           $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.home');
        }else{
            return redirect()->route('site.login', ['erro'=> 1]);
        }

}
public function sair()
{
    session_destroy();
    return redirect()->route('site.index');
}
}
