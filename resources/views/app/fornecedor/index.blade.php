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


@endphp
@isset($fornecedores)

Fornecedor1: {{ $fornecedores[2]['nome']}}

<br>
Status: {{ $fornecedores[0]['status']}}
<br>
CNPJ: {{ $fornecedores[0]['cnpj']?? ''}}
<br>
Telefone: {{ $fornecedores[0]['ddd']}} {{ $fornecedores[0]['telefone'] ?? ''}}
<br>
@switch($fornecedores[0]['ddd']) 
    @case('11')
        São Paulo - SP
        @break

        @case('32')
        Juiz De Fora - MG
        @break

        @case('85')
        Fortaleza - CE
        @break
    @default
    Estado não endentificado
        
@endswitch

<!-- se a variavel testada não estiver definida (isset)
    ou estiver nula ?? '' -> operador default -->

@endisset