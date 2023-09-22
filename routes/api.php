<?php

use App\Http\Controllers\apicontroller;
use App\Http\Controllers\patientcontroller;
use App\Http\Controllers\studentinsert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sampleapi;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|//
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/register',[apicontroller::class,'register']);
Route::post('/login',[apicontroller::class,'login']);
Route::get('/details',[apicontroller::class,'details'])->middleware('auth:sanctum');
Route::get('/data',[sampleapi::class,'get']);
Route::post('store',[patientcontroller::class,'insert']);
Route::put('update',[patientcontroller::class,'update']);
Route::get('search/{name}',[patientcontroller::class,'search']);
Route::delete('delete/{id}',[patientcontroller::class,'delete']);




