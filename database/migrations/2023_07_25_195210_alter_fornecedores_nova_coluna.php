<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresNovaColuna extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fornecedores', function (Blueprint $table){
            $table->string('site',150)->after('nome'); 
            // comandos uteis para migrations -> status(Mostra as migrations), reset(reverte todas a migrações), refresh(executo o rollback das migrations e as recria), fresh(drop todos os obejtos e recria o BD)
            //->after indica onde sera inserida a coluna, apos qual no caso
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fornecedores', function (Blueprint $table){
            $table->dropColumn('site'); 
        
    });
    }
}