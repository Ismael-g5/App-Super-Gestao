<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao, $perfil)
    {
        echo $metodo_autenticacao. ' - '.$perfil.'<br>';
        //verifica se o user tem acesso a rota
        if(true){
            return $next($request);
        }else{
            return Response('Acesso negado! Rota exige autenticação');
        }

        if($perfil == 'visitante'){
            echo 'Exibir apenas alguns recursos';
        }else{
            echo 'Carregar o perfil do banco de dados';
        }
    }
}
