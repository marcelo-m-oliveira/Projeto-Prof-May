<?php

use App\Http\Controllers\RegisterEndController;

Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::get('/cadastroEndereco', 'RegisterEndController@index')->name('cadastroEnd');
Route::post('/cadastroEndereco', 'RegisterEndController@store');

Route::get('/produtos', 'HomeController@index')->name('index');
Route::get('/produto/{id}', 'HomeController@produto')->name('produto');
Route::get('/carrinho', 'CarrinhoController@index')->name('carrinho.index');
Route::get('/carrinho/adicionar', function() {
    return redirect()->route('index');
});
Route::post('/carrinho/adicionar', 'CarrinhoController@adicionar')->name('carrinho.adicionar');
Route::delete('/carrinho/remover', 'CarrinhoController@remover')->name('carrinho.remover');
Route::post('/carrinho/concluir', 'CarrinhoController@concluir')->name('carrinho.concluir');
Route::get('/carrinho/compras', 'CarrinhoController@compras')->name('carrinho.compras');
Route::post('/carrinho/cancelar', 'CarrinhoController@cancelar')->name('carrinho.cancelar');
Route::post('/carrinho/desconto', 'CarrinhoController@desconto')->name('carrinho.desconto');
Route::get('/home', 'HomeController@index')->name('home');
