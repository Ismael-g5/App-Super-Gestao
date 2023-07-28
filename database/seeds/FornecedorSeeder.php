<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();

            $fornecedor->nome = 'Ismael';
            $fornecedor->site = 'site.com.br';
            $fornecedor->uf = 'CE';
            $fornecedor->email = 'teste1@gmail.com';

        $fornecedor->save();        
        
        //create
        Fornecedor::create(['nome'=>"Miguel", 'site'=>"site2.com", 'uf'=>"CE", 'email'=>"teste2@gmail.com"]);

        //insert
        DB::table('fornecedores')->insert([
            'nome'=>'Isabel',
            'site'=>'site3.com.br',
            'uf'=>'CE',
            'email'=>'teste3@gmail.com'
        ]);
    }
}
