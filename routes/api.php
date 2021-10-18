<?php

use App\Http\Controllers\DataClientController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::post('login', [UserController::class, 'login']);
// Route::post('register', [UserController::class, 'register']);

// Route::group(['middleware' => 'auth:api'], function () {
//     Route::get('users/{user}', [UserController::class, 'show']);
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::middleware('auth:sanctum')->get('/athenticated', function () {
//     return true;
// });
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);
Route::resource('/client', DataClientController::class)->except(['create', 'edit']);
Route::get("/baru", [DataClientController::class, 'baru']);
Route::get("/deal", [DataClientController::class, 'deal']);
Route::get("/dealfull", [DataClientController::class, 'dealfull']);
Route::get("/client/search/{name}", [DataClientController::class, 'search']);
