<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterForncedoresSoftdelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::table('fornecedores', function (Blueprint $table) {
        $table->softDeletes();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fornecedores', function (Blueprint $table) {
            //para remover colunas
            // $table->dropColumn('uf');
            // $table->dropColumn('email');
            //::withTrashed -> mostra os dados excluidos com o softdelete
            $table->dropSoftDeletes();
        });
    }
}
