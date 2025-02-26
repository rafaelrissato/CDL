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
    return view('welcome');
});

Auth::routes();



Route::prefix('/produto')->name('prd')->group(function () {

    Route::controller('App\Http\Controllers\Produto\ProdutoController')->group(function () {
        Route::get('/list/{tipo}', 'index')->name('.home');
        Route::get('/categoria', 'categoria')->name('.categoria');
        Route::get('/create/{tipo}', 'create')->name('.create');
        Route::get('/{id}/show', 'show')->name('.show');
        Route::get('/{id}/show/{pai}', 'clone')->name('.clone');
        Route::get('/{id}/conf', 'conf')->name('.conf');



    });
});
