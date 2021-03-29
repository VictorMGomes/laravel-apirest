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
Route::get('rifa', [RifaController::class, 'index']);
Route::post('rifa/post', [RifaController::class, 'store']);
Route::get('rifa/{id}', [RifaController::class, 'show']);
Route::put('rifa/{id}', [RifaController::class, 'update']);
Route::delete('rifa/{id}', [RifaController::class, 'destroy']);
