<?php


Route::get('/', function () {
    return view('index');
});

<<<<<<< HEAD
Route::get('Inicio', function () {
    return view('index');
})->name('inicio');

=======
>>>>>>> master
Route::get('/Produtos', function (){
    return view('produtos');
})->name('produtos');

Route::get('cadastro', 'Auth\RegisterController@index')->name('cadastrar');
Route::post('cadastro', 'Auth\RegisterController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
