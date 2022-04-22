<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/students',function () {
//      return 'Hello from API';
// });

// Public routes

// Route::get('/students',[StudentController::class,'index']);
// Route::get('/students/{id}',[StudentController::class,'show']);
// Route::post('/students',[StudentController::class,'store']);
// Route::put('/students/{id}',[StudentController::class,'update']);
// Route::delete('/students/{id}',[StudentController::class,'destroy']);
// Route::get('/students/search/{city}',[StudentController::class,'search']);

Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);

//protected routes
// Route::middleware('auth:sanctum')->get('/students',[StudentController::class,'index']);
// Route::middleware('auth:sanctum')->get('/students/{id}',[StudentController::class,'show']);

Route::middleware(['auth:sanctum'])->group(function(){
    // Route::get('/students',[StudentController::class,'index']);
    // Route::get('/students/{id}',[StudentController::class,'show']);
    Route::post('/students',[StudentController::class,'store']);
    Route::put('/students/{id}',[StudentController::class,'update']);
    Route::delete('/students/{id}',[StudentController::class,'destroy']);
    // Route::get('/students/search/{city}',[StudentController::class,'search']);
    Route::post('/logout',[UserController::class,'logout']);

});

//Partially Protected 

Route::get('/students',[StudentController::class,'index']);
Route::get('/students/{id}',[StudentController::class,'show']);
Route::get('/students/search/{city}',[StudentController::class,'search']);

