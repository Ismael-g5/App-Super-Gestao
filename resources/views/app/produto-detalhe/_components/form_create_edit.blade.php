
@if(isset($produto_detalhe->id))
<form method="post" action="{{ route('produto.update', ['produto' => $produto_detalhe->id]) }}">
    @csrf
    @method('PUT')
@else
<form method="post" action="{{ route('produto.store') }}">
    @csrf
@endif
<input type="text" name="nome" value="{{ $produto_detalhe->nome ?? old('nome') }}" placeholder="Nome" class="borda-preta">
{{ $errors->has('nome') ? $errors->first('nome') : '' }}

<input type="text" name="descricao" value="{{ $produto_detlahe->descricao ?? old('descricao') }}" placeholder="Descrição" class="borda-preta">
{{ $errors->has('descricao') ? $errors->first('descricao') : '' }}

<input type="text" name="peso" value="{{ $produto_detalhe->peso ?? old('peso') }}"  placeholder="peso" class="borda-preta">
{{ $errors->has('peso') ? $errors->first('peso') : '' }}

<select name="unidade_id">
    <option>-- Selecione a Unidade de Medida --</option>

    @foreach($unidades as $unidade)
        <option value="{{ $unidade->id }}" {{ ($produto_detalhe->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : '' }} >{{ $unidade->descricao }}</option>
    @endforeach
</select>
{{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}

<button type="submit" class="borda-preta">Cadastrar</button>
<form>
