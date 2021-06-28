<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('produtos/inserir', [ProdutosController::class, 'create'])->name('produtos.inserir');
Route::post('produtos', [ProdutosController::class, 'insert'])->name('produtos.insert');
Route::get('produtos/{produto}/edit', [ProdutosController::class, 'edit'])->name('produtos.edit');  /*construir a pagina*/ 
Route::put('produtos/{produto}', [ProdutosController::class, 'editar'])->name('produtos.editar'); /*guardar na basa de dados */
Route::get('produtos/', [ProdutosController::class, 'index'])->name('produtos');
Route::get('produtos/{produto}/delete', [ProdutosController::class, 'modal'])->name('produtos.modal');
Route::delete('produtos/{produto}', [ProdutosController::class, 'delete'])->name('produtos.delete'); 

Route::get('prod/', ProdutosController::class);
Route::get('produtos/{nome}/{valor?}', [ProdutosController::class, 'show']);

Route::post('painel', [UsersController::class, 'login'])->name('utilizadores.login');
Route::get('painel', [UsersController::class, 'logout'])->name('utilizadores.logout');

