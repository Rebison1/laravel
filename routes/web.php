<?php

use App\Http\Controllers\studentinsert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [studentinsert::class,"insert_form"]);
Route::post("create",[studentinsert::class,"insert"]);
Route::get('list', [studentinsert::class,"list"]);

// Route::get('name/{name}', function ($name) {
//     return $name;
// });
// Route::get('/home', function () {
//     return view('home');
// });
// Route::post('/home', function (Request $request) {
//     dd($request->all());
// });
//  route::view("welcome",'welcome');
//  route::view("insert_form",'insert_form');



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
