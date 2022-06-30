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

Route::get('/', function () {
    return view('index');
});
Route::get('/agenda', function () {
    return view('Agenda');
});

route::post('/', function () {
    $datos = request()->only('email','password');
    if (Auth::attempt($datos)){
        return view('Agenda');
        
    }
    return 'contraseñas invalidas';
});
