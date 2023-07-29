<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');

       // print_r($contato->getAttributes());
       $contato->save();

       //outro metodo 
       /*$contato2 = new SiteContato();
       $contato2->fill($request->all());
       pra que de certo, precisameos add o protected fillable la na model
       
       ou

       ->create ou inves de ->fill
       */

        return view('site.contato', ['titulo' => 'Contato (teste)']);
    }
}
