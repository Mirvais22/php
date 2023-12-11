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

Route::get("/GetAllUsers", [App\Http\Controllers\UserController::class, 'GetAllUsers']);
Route::get("/GetUserById/{id}", [App\Http\Controllers\UserController::class, 'GetUserById']);

Route::put("/UpdateUser/{id}", [App\Http\Controllers\UserController::class, 'UpdateUser']);

Route::post("/CreateUser", [App\Http\Controllers\UserController::class, 'CreateUser']);
Route::delete("/DeleteUser/{id}", [App\Http\Controllers\UserController::class, 'DeleteUser']); 

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
