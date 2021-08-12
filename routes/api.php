<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

Route::prefix('/articles')->group(function(){
   Route::get('/index', [ArticleController::class, 'index']);
   Route::post('/store', [ArticleController::class, 'store']);
   Route::get('/show/{id}', [ArticleController::class, 'show']);
   Route::put('/update/{id}', [ArticleController::class, 'update']);
   Route::delete('/delete/{id}', [ArticleController:: class, 'destroy']);
});
