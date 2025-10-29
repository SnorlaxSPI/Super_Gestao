<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobre-nos');
Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::prefix('/app')->group(function () {
  Route::get('/clientes', function () {
    return 'Clientes';
  })->name('app.clientes');

  Route::get('/fornecedores', [App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedores');

  Route::get('/produtos', function () {
    return 'Produtos';
  })->name('app.produtos');
});

Route::get('/rota1', function () {
  //return redirect()->route('site.index');
  echo 'Rota 1';
})->name('site.rota1');

Route::get('/rota2', function () {
  return redirect()->route('site.rota1');
  //echo 'Rota 2';
})->name('site.rota2');

Route::get('/teste/{p1}/{p2}', [App\Http\Controllers\TesteController::class, 'teste'])->name('teste');

Route::fallback(function () {
  echo 'A rota acessada não existe. <a href="' . route('site.index') . '">Clique aqui</a> para ir para a página inicial.';
});
