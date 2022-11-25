<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;
use GuzzleHttp\Middleware;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['middleware'=>'auth'],function(){
    Route::get('/produtos',[ProdutoController::class, 'index'])->name('produtos.index');
    Route::get('/produtos/adicionar',[ProdutoController::class, 'adicionar'])->name('produtos.adicionar');
    Route::post('/produtos/salvar',[ProdutoController::class, 'salvar'])->name('produtos.salvar');
    Route::get('/produtos/editar/{id}',[ProdutoController::class, 'editar'])->name('produtos.editar');
    Route::put('/produtos/atualizar/{id}',[ProdutoController::class, 'atualizar'])->name('produtos.atualizar');
    Route::get('/produtos/deletar/{id}',[ProdutoController::class, 'deletar'])->name('produtos.deletar');
});

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login/entrar',[LoginController::class, 'entrar'])->name('login.entrar');
Route::get('/sair',[LoginController::class, 'sair'])->name('login.sair');
