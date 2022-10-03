<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\DataController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FileController;

// use App\Http\Controllers\dummyAPI;

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

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    
// Getting Data from Simple API 
// Route::get('data',[dummyAPI::class,'getData']);

// Get data from database using API
// Route::get('list/{id?}',[DataController::class,'dataList']);

// Adding data in database using API
Route::post('add',[DataController::class,'add']);

// Updating data in database using API
Route::put('update',[DataController::class,'update']);

// Deleting data from database using API
Route::delete('delete/{id}',[DataController::class,'delete']);

// Searching data in database using API
Route::get('search/{name}',[DataController::class,'search']);

// Validate data
// Route::post('validate',[DataController::class,'testData']);

Route::apiResource('member',MembersController::class); 

});

// Route::post('login',[UserController::class,'index']);

Route::post('upload',[FileController::class,'upload']);