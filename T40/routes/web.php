<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

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
    return view('welcome');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/cilindro', function(){
    return view('cilindro');
});

Route::get('/precio', function(){
    return view('precio');
});

Route::post('/comprueba', [loginController::class,'comprobar']);

Route::get('/calcula', [loginController::class,'calcular']);

Route::get('/precioMedio', [loginController::class,'precioMedio']);