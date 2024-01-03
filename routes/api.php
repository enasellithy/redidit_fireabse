<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('movies', [\App\Http\Controllers\API\DataController::class,'fetchAllDataMovies']);
Route::get('tv', [\App\Http\Controllers\API\DataController::class,'fetchAllDataTv']);
Route::get('firebase',[\App\Http\Controllers\API\FirebaseController::class,'index']);
