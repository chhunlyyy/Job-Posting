<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobController;

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

///
Route::post('/job',[JobController::class,'listing']);// list jobs
Route::post('/job_create',[JobController::class,'createJob']);// create a job

//
Route::post('/submission_list',[JobController::class,'listSubmission']); //list submission
Route::post('/submission',[JobController::class,'submission']);// add sumission





Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
