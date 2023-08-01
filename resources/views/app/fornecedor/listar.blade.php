@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')
<div class="conteudo-pagina">

    <div class="titulo-pagina-2">
        <h1>Lista de Fornecedores</h1>
    </div>

<div class="menu">
    <a href="{route('app.fornecedor.adicionar')}}">Novo</a>
    <a href="{route('app.fornecedor')}}">Consulta</a>
</div>

<div class="informacao-pagina">
    <div style="width: 30%; margin-left: auto; margin-right: auto;">
       ....Lista de fornecedores
    </div>

</div>


@endsection

