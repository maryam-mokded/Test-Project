<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\FileController;
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

Route::get('employees',[EmployeController::class,'index']);
Route::get('employee/{id}',[EmployeController::class,'show']);
Route::post('employee',[EmployeController::class,'store']);
Route::put('employee/{id}',[EmployeController::class,'update']);
Route::delete('employee/{id}',[EmployeController::class,'destroy']);

Route::post('upload/{id}',[FileController::class,'uploadFile']);
Route::post('download/{id}',[FileController::class,'downloadFile']);
