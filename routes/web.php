<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/sobrenos', [SobreNosController::class, 'sobrenos'])->name('site.sobrenos');
Route::get ('/login', function(){return 'Login';})->name('site.login');


Route::prefix('/app')->group(function(){
    Route::get ('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get ('/fornecedores', function(){return 'Fornecedores';})->name('app.fornecedores');
    Route::get ('/produtos', function(){return 'Produtos';})->name('app.produtos');

});

Route::get('/rota1', function() {
    echo 'Rota 1';
})->name('site.rota1');


Route::get('/rota2', function() {
    return redirect()->route('site.rota1');
})->name('site.rota2');


//Route::redirect('/rota2','/rota1');
