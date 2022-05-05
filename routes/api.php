<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SucursalController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('sucursal', [SucursalController::class, 'index']);

Route::get('sucursal/{sucursal}', [SucursalController::class, 'show']);

Route::post('sucursal', [SucursalController::class, 'create']);

Route::put('sucursal/{sucursal}', [SucursalController::class, 'update']);

Route::delete('sucursal/{sucursal}', [SucursalController::class, 'delete']);

