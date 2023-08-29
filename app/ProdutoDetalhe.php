<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoDetalhe extends Model
{
    //protected $table = ;;; indica o nome da tabela que vai ser modelada, pode ser usada caso seja diferente do nome da model

    protected $fillable = ['produto_id', 'comprimento', 'largura', 'altura', 'unidade_id'];

    public function produto(){
        return $this->belongsTo('App\Produto');
    }// mostra as caracteristicas de produtosDetalhes que tem relação com produtos
    /*return $this->belongsTo('App\Produto', 'fk_id', 'id');
    fk = foreign key que deve ser mapeada pelo belongsTo,
    ja que o o Eloquent busca por uma fk com o nome igual ao namespace
    id = primary key */
}
