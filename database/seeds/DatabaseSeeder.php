<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class); -> é o metodo executado por db:seeder
       // $this->call(FornecedorSeeder::class); ao inves de comentar podemos setar a classe desejada 
       // -> php artisan db:seed -class=SiteContato
        $this->call(SiteContatoSeeder::class);

    }
}
