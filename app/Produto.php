<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id'];

    public function produtoDetalhe(){
        return $this->hasOne('App\ProdutoDetalhe');
    } // informa que  1 produto tem 1 proodutoDetalhe 1 -> 1 se baseando na fk
    /*
    return $this->hasOne('App\ProdutoDetalhe', 'fk_id', 'pk'); fk = no caso do hasOne, devemos indicar a fk do protected table
    */
}
