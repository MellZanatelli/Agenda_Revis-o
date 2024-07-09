<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/contatos', [App\Http\Controllers\controllerContato::class, 'index'])->name('indexContatos');
Route::get('/contatos/novo', [App\Http\Controllers\controllerContato::class, 'create'])->name('novoContato');
Route::post('/contatos', [App\Http\Controllers\controllerContato::class, 'store'])->name('gravaNovoContato');
Route::get('/contatos/apagar/{id}', [App\Http\Controllers\controllerContato::class, 'destroy'])->name('deletaContato');
Route::get('/contatos/editar/{id}', [App\Http\Controllers\controllerContato::class, 'edit'])->name('editaContato');
Route::post('/contatos/{id}', [App\Http\Controllers\controllerContato::class, 'update'])->name('atualizaContato');
Route::get('/contatos/pesquisa', [App\Http\Controllers\controllerContato::class, 'pesquisarContato'])->name('pesquisarContato');
Route::get('/contatos/procurar', [App\Http\Controllers\controllerContato::class, 'procurarContato'])->name('procurarContato');
