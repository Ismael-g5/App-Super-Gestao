<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores'; // o protected $table informa qual o nome o Eloquent vai usar como sendo o da tabela, sobrescrevendo a regra do ORM
    protected $fillable = ['nome', 'site', 'uf', 'email']; // informa para o ORM quais as tabelas podem ser passadas por array
}
