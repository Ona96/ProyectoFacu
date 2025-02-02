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

Route::get('', function () {
    return view('welcome');
})->name('login');

Route::get('/facturas', function () {
    return view('facturas');
});

Route::get('/Stock', function() {
    return view('Stock');
});

Route::get('/Pedidos', function() {
    return view('Pedidos');
});
