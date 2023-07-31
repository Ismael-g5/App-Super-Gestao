<?php

namespace App\Http\Middleware;

use App\LogAcesso;
use Closure;
class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //remote_addr retorna o ip da maquina que fez a requisição, assim como getRequestUri retorna a rota buscada
        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();

        LogAcesso::create(['log'=>"Ip $ip requisitou a rota $rota"]);
        return $next($request);

       // $resposta = $next($request);

      // dd($resposta); retorna um dd de todo o html da pagina que é retornada pelo middleware
    }
}
