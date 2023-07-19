<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => ['nome'=>'fornecedor 1', 'status'=>'N', 'cnpj' => '1000',
             'ddd'=>'32','telefone'=>'0000-0000'],

            1 => ['nome'=>'fornecedor 2', 'status'=>'S',
             'ddd'=>'11','telefone'=>'0000-0000'],
        
             2 => ['nome'=>'fornecedor 3', 'status'=>'M',
             'ddd'=>'85','telefone'=>'0000-0000']
        ];
        
            /*condicao ? se verdade : se falso;
            condicao ? se verdade : (condicao ? se verdade : se falso)*/ 

            echo isset($fornecedores[0]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';
        

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
