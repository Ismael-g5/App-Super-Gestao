@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')
<div class="conteudo-pagina">

    <div class="titulo-pagina-2">
        <h1>Adicionar Fornecedor</h1>
    </div>

<div class="menu">
    <a href="{{route('app.fornecedor.adicionar')}}">Novo</a>
    <a href="{{route('app.fornecedor')}}">Consulta</a>
</div>

<div class="informacao-pagina">
    {{$msg}}
    <div style="width: 30%; margin-left: auto; margin-right: auto;">
        <form action="{{route('app.fornecedor.adicionar')}}" method="post">
            @csrf
            <input type="text" name="nome" value="{{old('nome')}}" placeholder="nome" class="borda-preta">
            {{$errors->has('nome') ? $errors->first('nome') : ''}}

            <input type="text" name="site" value="{{old('site')}}" placeholder="site" class="borda-preta">
            {{$errors->has('site') ? $errors->first('site') : ''}}

            <input type="text" name="uf" value="{{old('uf')}}" placeholder="uf" class="borda-preta">
            {{$errors->has('uf') ? $errors->first('uf') : ''}}

            <input type="text" name="email" value="{{old('email')}}" placeholder="email" class="borda-preta">
            {{$errors->has('email') ? $errors->first('email') : ''}}

            <button type="submit" class="borda-preta">Pesquisar</button>
        </form>

    </div>

</div>


@endsection

