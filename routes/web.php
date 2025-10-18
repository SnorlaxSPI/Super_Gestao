<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobre-nos');

Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::prefix('/app')->group(function () {
  Route::get('/clientes', function () {
    return 'Clientes';
  })->name('app.clientes');

  Route::get('/fornecedores', function () {
    return 'Fornecedores';
  })->name('app.fornecedores');

  Route::get('/produtos', function () {
    return 'Produtos';
  })->name('app.produtos');
});
