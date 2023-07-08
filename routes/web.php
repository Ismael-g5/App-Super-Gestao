<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/login', function(){return 'Login';})->name('site.login');


Route::prefix('/app')->group(function(){
    Route::get('/cliente', 'ClienteController@cliente')->name('app.clientes');
    Route::get('/fornecedores', 'FornecedoresController@fornecedores')->name('app.fornecedores');
    Route::get('/produtos', 'ProdutosController@produtos')->name('app.produtos');
});

Route::get('/rota1', function(){
    echo "rota 1";
})->name('site.rota1');

Route::get('/rota2', function(){
    echo "rota 2";
})->name('site.rota2');





//laravel 8^ -> Route::get('/' [\App\Http\Controller\NomeDoController::class, 'nome da função']);
//  {nome do parametro ?}, o "?" torna o paramentro opcional
/*Route::get('/contato/{nome}/{categoria_id}', function (string $xyz) {
    echo 'estamos aqui:'.$xyz;
})->where('categoria_id', '[0-9]+') -- define que a variavel categoria_id
so recebera inteiros de 0 a 9
-> Route:prefix = define o prefixo de determinadas rotas
Route::get('/contato/{nome}', function (string $xyz) {
    echo 'estamos aqui:'.$xyz;
});

Route::redirect('rota de remetente', 'rota de destino');
*/

