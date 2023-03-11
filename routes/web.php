<?php

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
/* 
Route::get('/', function () {
    return view('welcome');
});
*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () { return view('dashboard'); })->name('dashboard');
    Route::view('lista-alumnos','alumnos.index')->name('alumnos.index');
    Route::view('lista-escuelas','escuelas.index')->name('escuelas.index');
    Route::view('lista-camiones','camiones.index')->name('camiones.index');
    Route::view('lista-empleados','empleados.index')->name('empleados.index');

    //Route::view('dashboard-administracion','tableros.administracion')->name('tableros.admin');
    //Route::view('clasificadores/{catalogo}/{tipo}/general','clasificadores.index')->name('clasificadores.index');
});
