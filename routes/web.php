<?php

use     Illuminate\Support\Facades\Route;
use     App\Http\Controllers\ProdutoController;
use     App\Http\Controllers\ClienteController;
use     App\Http\Controllers\UtilizadorController;

Route::match(['get', 'post'], '/', [ ClienteController::class, 'index'])->name('home');

Route::match(['get', 'post'], '/produtos', [ ProdutoController::class, 'produt'])->name('layout');

Route::match(['get', 'post'], '/categoria', [ ProdutoController::class, 'categoria2'])
        ->name('categoria');

Route::match(['get', 'post'], '/{idcategoria}/categoria', [ ProdutoController::class, 'categoria'])
        ->name('categoria_por_id');
Route::match(['get', 'post'], '/registar', [ ClienteController::class, 'registar'])
        ->name('registar');
Route::match(['get', 'post'], '/cliente/registar', [ ClienteController::class, 'registarCliente'])
        ->name('registar_cliente');

Route::match(['get', 'post'], '/login', [ UtilizadorController::class, 'login'])
        ->name('login');

Route::get('/sair', [ UtilizadorController::class, 'sair'])
        ->name('sair');
        
Route::match(['get', 'post'], '/{idproduto}/carrinho/adicionar', [ ProdutoController::class, 'adicionarCarrinho'])
        ->name('adicionar_carrinho');
Route::match(['get', 'post'], '/carrinho', [ ProdutoController::class, 'verCarrinho'])
        ->name('ver_carrinho');

Route::match(['get', 'post'], '/{indice}/excluircarrinho', [ ProdutoController::class, 'excluirCarrinho'])
        ->name('carrinho_excluir');

Route::post('/carrinho/finalizar', [ ProdutoController::class, 'finalizar'])
        ->name('carrinho_finalizar');

Route::match(['get', 'post'], 'compras/historico', [ ProdutoController::class, 'historico'])
        ->name('compra_historico');

Route::post('compras/detalhes', [ ProdutoController::class, 'detalhes'])
        ->name('compra_detalhes');

Route::post('compras/detalhes', [ ProdutoController::class, 'detalhes'])
        ->name('compra_detalhes');

Route::match(['get', 'post'], '/{idproduto}/avaliar/produto', [ProdutoController::class, 'avaliarProduto'])    
        ->name('avaliar_produto');

Route::match(['get', 'post'], '/compras/pagar', [ProdutoController::class, 'pagar'])    
        ->name('pagar');


