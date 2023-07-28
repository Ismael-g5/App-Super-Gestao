<?php

use App\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* $contato = new SiteContato();
        $contato->nome = 'Ismael';
        $contato->telefone = '000000-000000';
        $contato->email = 'teste@gmail.com';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Estou gostando bastante do super gestão';

    $contato->save();    

    $contato2 = new SiteContato();
    $contato2->nome = 'Miguel';
    $contato2->telefone = '111111-000000';
    $contato2->email = 'teste2@gmail.com';
    $contato2->motivo_contato = 2;
    $contato2->mensagem = 'Tenho Criticas a fazer ao App super gestão';

$contato2->save();    

$contato3 = new SiteContato();
$contato3->nome = 'Isabel';
$contato3->telefone = '22222-000000';
$contato3->email = 'teste3@gmail.com';
$contato3->motivo_contato = 3;
$contato3->mensagem = 'Tenho sugestões a fazer sobre o super gestão';

$contato3->save();  */  
factory(SiteContato::class, 100)->create();

        
    }
}
