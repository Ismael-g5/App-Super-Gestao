@extends('app.layouts.basico')

@section('titulo', ' Editar Detalhes do Produto')

@section('conteudo')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Editar Detalhes do Produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="#">Voltar</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">

            <h4>Produto</h4>
            <div>Nome do Produto: <strong>{{$produto_detalhe->produto->nome}}</strong></div>
            <br>
            <div>Descrição:<strong>{{$produto_detalhe->produto->descricao}}</strong></div>
                <div style="width: 30%; margin-left: auto; margin-right: auto;">
                @component('app.produto_detalhe._components.form_create_edit', ['produto_detalhe' => $produto_detalhe, 'unidades' => $unidades])
                @endcomponent
            </div>
        </div>

    </div>

@endsection

