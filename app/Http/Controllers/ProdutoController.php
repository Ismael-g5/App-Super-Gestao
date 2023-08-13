<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Unidade;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $produtos= Produto::paginate(10); // o paginate cria a paginação na exibição do conteudo, limitando a exibição por pagina
        return view('app.produto.index', ['produtos'=>$produtos, 'request'=>$request->all() ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidades = Unidade::all();

        return view('app.produto.create',['unidades' => $unidades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras=[
            'nome'=>'required|min:3|max:40',
            'descricao'=>'required|min:3|max:2000',
            'peso'=>'required|integer',
            'unidade_id'=>'exists:unidades,id', // a validação exists reques a<tabela>, <coluna>

        ];
        $feedback=[
            'required'=>'o campo :attribute deve ser preenchido',
            'nome.min'=>'o campo nome deve ter no minimo 3 caracteres',
            'nome.max'=>'o campo nome deve ter no máximo 40 caracteres',
            'descricao.min'=>'o campo descrição deve ter no minimo 3 caracteres',
            'descricao.max'=>'o campo descrição deve ter no máximo 2000 caracteres',
            'peso.integer'=>'o campo peso deve ser um numero inteiro',
            'unidade_id.exists'=>'a unidade de medida informada não existe'
        ];

        $request->validate($regras, $feedback);



        Produto::create($request->all());
        /*ou
        $produto = new Produto();
        $nome = $request->get('nome');
        .
        .
        . e aconselhavel usar esse metodo caso necessite de tratativas
        */
       return redirect()->route('produto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
       // dd($produto);
        return view('app.produto.show',['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        $unidades = Unidade::all();

       return view('app.produto.edit',['produto' => $produto, 'unidades' => $unidades]);
       //return view('app.produto.create',['produto' => $produto, 'unidades' => $unidades]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        /*print_r($request->all()); //payload
        echo '<br><br><br><br>';
        print_r($produto->getAttributes());*/


        //joga para o update|v

        $produto->update($request->all());
        //dd($produto);
        return redirect()->route('produto.show', ['produto' => $produto->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
       $produto->delete();

       return redirect()->route('produto.index');

    }
}
