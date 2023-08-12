@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Adicionar Produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{route('produto.index')}}">Voltar</a></li>
                <li><a href="#">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">

            @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}

        @endif

           </div>
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form method="post" action="{{route('produto.store')}}">
                    @csrf
                    <input type="text" name="nome" value="{{ old('nome') }}" placeholder="Nome" class="borda-preta">
                    {{ $errors->has('nome') ? $errors->first('nome') : '' }}

                    <input type="text" name="descricao" value="{{ old('descricao') }}" placeholder="descricao" class="borda-preta">
                    {{$errors->has('descricao') ? $errors->first('descricao') : ''}}


                    <input type="number" name="peso" value="{{ old('peso') }}" placeholder="peso" class="borda-preta">
                    {{$errors->has('peso') ? $errors->first('peso') : ''}}

                    <select name="unidade_id">
                        <option>--Selecione a Unidade--</option>
                    @foreach ($unidades as $unidade )
                        <option value="{{$unidade->id}}" {{ old('unidade_id') == $unidade->id ? 'selected' : '' }}>{{ $unidade->descricao }}</option>
                    </select>
                    @endforeach
                    {{$errors->has('unidade_id') ? $errors->first('unidade_id') : ''}}



                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>

    </div>

@endsection
