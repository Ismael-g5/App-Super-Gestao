<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        $motivo_contatos = MotivoContato::all();

        /*
        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        echo $request->input('nome');
        echo '<br>';
        echo $request->input('email');
        */

        /*
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');

        // print_r($contato->getAttributes());
        $contato->save();
        */

        // $contato = new SiteContato();
        // $contato->create($request->all());
        // $contato->save();
        // print_r($contato->getAttributes());

        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request) {

        //realizar a validação dos dados do formulário recebidos no request
        $request->validate([
            'nome' => 'required|min:3|max:40|unique:site_contatos', //o | separa os tipos de validação
            'telefone' => 'required',
            'email' => 'email', // a validação email verifica se o campo esta recebendo um formato de email valido
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ],
    [ // aqui é onde definimos as mensagens mostradas quando os respectivos erros estouram, tbm podemos passar so o 'tipo_de_validação' =>':atribute mensagem', o nome do campo ja entra como padrão
        'nome.required' => 'O campo nome é obrigatório',
        'nome.min' => 'O nome deve conter no mínimo 3 caracteres',
        'nome.max' => 'O nome deve conter no máximo 40 caracteres',
        'nome.unique' => 'esse nome ja esta em uso, escolha outro',
        'telefone.required' => 'O campo telefone é obrigatório',
        'email.email' => 'insira um email valido',
        'motivo_contatos_id.required' => 'O campo motivo do contato é obrigatório',
        'mensagem.required'=>'o campo mensagem é obrigatório'
    ]);
         SiteContato::create($request->all());
         return redirect()->route('site.index');
    }
}
