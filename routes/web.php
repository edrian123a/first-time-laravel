<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;

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

Route::get('/', function () {
    return view('welcome');
});



Route::resource('student', studentcontroller::class);
Route::get('destroy/{id}', [studentcontroller::class,'destroy']);

// Route::resource('student/{id}/destroy', [studentcontroller::class,'destroy']);




