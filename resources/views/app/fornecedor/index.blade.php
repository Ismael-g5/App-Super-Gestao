<h3> Fornecedor</h3>
@php
    
    /*
    if(isset($variavel)){} //  retorna se a variavel estiver definida
     */
    /*
     if(empty($variavel)){} //  retorna true se a variavel estiver vazia
     */
/*
ternarios 

*/
// para user o dd no .blade = @dd()
// somente entrara no @for caso o @isset seja verdadeiro
// o @ antes das "{{}}" avisa pro blade apenas imprimir o bloco
@endphp


@isset($fornecedores)

@foreach ($fornecedores as $indice => $fornecedor )
Interação atual: {{$loop->iteration}}   
<br>
Fornecedor: {{ $fornecedor['nome']}}

<br>
Status: {{ $fornecedor['status']}}
<br>
CNPJ: {{ $fornecedor['cnpj']?? ''}}
<br>
Telefone: {{ $fornecedor['ddd']}} {{ $fornecedor['telefone'] ?? ''}}
<br>
@if($loop->first)
    Primeira iteração do loop
@endif
@if($loop->last)
<hr>
    Total de Registro: {{$loop->count}}
@endif

<hr>
@endforeach
@endisset
