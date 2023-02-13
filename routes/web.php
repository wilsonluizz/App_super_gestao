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

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'index'])->name('site.index');

Route::get('/sobre-nos', [App\Http\Controllers\SobreNosController::class, 'index'])->name('site.sobre-nos');

Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'index'])->name('site.contato');
Route::post('/contato', [App\Http\Controllers\ContatoController::class, 'index'])->name('site.contato');

Route::get('/login', function(){return 'Login';});

Route::get('/teste/{n1}/{n2}', [App\Http\Controllers\TesteController::class, 'teste']);

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){ return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', [App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});





/*
 *verbos http
 get
 post
 put
 patch
 delete
 options
 */