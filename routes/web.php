<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/puntosRecoleccion', function() {
    return view('puntosRecoleccion');} 
)->name('irPuntosRecoleccion');

Route::get('/misRecolecciones', function() {
    return view('misRecolecciones');} 
)->name('irMisRecolecciones');

Route::get('/listaEmpresas', function() {
    return view('listaEmpresas');} 
)->name('irListaEmpresas');

Route::get('/listaUsuarios', function() {
    return view('listaUsuarios');} 
)->name('irListaUsuarios');

