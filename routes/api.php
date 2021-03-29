<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RifaController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*-------------------------------------------------------------------------|
| Rotas para Rifa
|--------------------------------------------------------------------------*/
Route::get('rifa/listall', [RifaController::class, 'index']);
Route::post('rifa/save', [RifaController::class, 'store']);
Route::get('rifa/listbyid/{id}', [RifaController::class, 'show']);
Route::put('rifa/update/{id}', [RifaController::class, 'update']);
Route::delete('rifa/delete/{id}', [RifaController::class, 'destroy']);
