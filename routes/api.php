<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ScategorieController;
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

Route::middleware('api')->group(function () {
    Route::resource('categories', CategorieController::class);
});
Route::middleware('api')->group(function () {
    Route::resource('scategories', ScategorieController::class);
});

Route::get('/scat/{idcat}', [ScategorieController::class, 'showSCategorieByCAT']);
