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

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/', 'Main@index');

Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/reservas', function () {
    return view('reservas');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/contacto', function () {
    return view('contacto');
});
