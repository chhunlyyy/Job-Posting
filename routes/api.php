<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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


Route::get('/auth',[AuthController::class,'index']);// list users
Route::post('/auth',[AuthController::class,'store']); // register account
Route::post('/auth/login',[AuthController::class,'login']); // login


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
