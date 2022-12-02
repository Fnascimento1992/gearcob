<?php

use App\Http\Controllers\AcordosController;
use App\Http\Controllers\DividasController;
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
    return view('welcome');
});

Route::get('/acordos',[AcordosController::class,'index']);
Route::get('/dividas',[DividasController::class, 'inde']);