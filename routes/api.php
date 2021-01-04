<?php

use App\Http\Controllers\MatrixController2;
use App\Http\Controllers\MatrixController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
// Types CRUD
Route::get('/matrix', [MatrixController::class, 'generate']);
Route::get('/matrix2', [MatrixController2::class, 'generate']);
// Route::post('/types', 'MatrixController@store');
// Route::put('/types/{id}', 'MatrixController@update');
// Route::delete('/types/{id}', 'MatrixController@destroy');
// Route::get('/types/{id}', 'MatrixController@retrieveOne');
