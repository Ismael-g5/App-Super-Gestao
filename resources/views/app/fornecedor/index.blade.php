@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')
<div class="conteudo-pagina">

    <div class="titulo-pagina-2">
        <h1>Fornecedor</h1>
    </div>

<div class="menu">
    <a href="{{route('app.fornecedor.adicionar')}}">Novo</a>
    <a href="{{route('app.fornecedor')}}">Consulta</a>
</div>

<div class="informacao-pagina">
    <div style="width: 30%; margin-left: auto; margin-right: auto;">
        <form action="{{route('app.fornecedor.listar')}}" method="post">
            @csrf
            <input type="text" name="nome" placeholder="nome" class="borda-preta">
            <input type="text" name="site" placeholder="site" class="borda-preta">
            <input type="text" name="uf" placeholder="uf" class="borda-preta">
            <input type="text" name="email" placeholder="email" class="borda-preta">
            <button type="submit" class="borda-preta">Pesquisar</button>
        </form>

    </div>

</div>


@endsection

