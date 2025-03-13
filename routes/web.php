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


Auth::routes();



Route::prefix('/produto')->name('prd')->group(function () {

    Route::controller('App\Http\Controllers\Produto\ProdutoController')->group(function () {
        Route::get('/list/{tipo}', 'index')->name('.home');
        Route::get('/categoria', 'categoria')->name('.categoria');
        Route::get('/copila', 'copila')->name('.copila');
        Route::get('/create/{tipo}', 'create')->name('.create');
        Route::get('/{id}/show', 'show')->name('.show');
        Route::get('/{id}/show/{pai}', 'clone')->name('.clone');
        Route::get('/{id}/conf', 'conf')->name('.conf');
        Route::get('/import', 'import')->name('.import');
        Route::get('/etiqueta', 'etiqueta')->name('.etiqueta');



    });
});
Route::prefix('/pedido')->name('ped')->group(function () {

    Route::controller('App\Http\Controllers\Pedido\PedidoController')->group(function () {
        Route::get('/import', 'import')->name('.import');
        Route::get('/copila', 'copila')->name('.copila');
        Route::get('', 'home')->name('.home');



    });
});
Route::prefix('/')->name('des')->group(function () {

    Route::controller('App\Http\Controllers\DashboardController')->group(function () {
        Route::get('', 'index')->name('.index');
        Route::get('/home', 'index')->name('.index');



    });
});
