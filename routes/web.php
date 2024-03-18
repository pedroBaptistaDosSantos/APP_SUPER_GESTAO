<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\ContatoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PrincipalController::class, 'principal'])->name('site.index');
Route::get('sobre-nos', function(){
    return view('site.sobre-nos');
})->name('site.sobrenos');
Route::get('contato',[ContatoController::class, 'contato'])->name('site.contato');
Route::post('contato',[ContatoController::class, 'contato'])->name('site.contato');
Route::prefix('app')->group(function() {
    Route::get('/fornecedores', [FornecedorController::class, 'index']);
});
Route::get('teste/{p1}/{p2}', [TesteController::class, 'teste']);
Route::fallback(function(){
    echo 'Não foi possível abrir o link. <a href="'.route('site.index').'"> Clique aqui para retornar </a> ';
});