<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SucursalController;
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

//Route::get('sucursal', 'SucursalController@index');
//Route::get('sucursal', 'App\Http\Controllers\SucursalController@index');
/*Route::get('sucursal', [SucursalController::class, 'index']);

Route::get('sucursal/{sucursal}', [SucursalController::class, 'show']);

Route::post('sucursal', [SucursalController::class, 'create']);

Route::put('sucursal/{sucursal}', [SucursalController::class, 'update']);

Route::delete('sucursal/{sucursal}', [SucursalController::class, 'delete']);*/
