<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
// call wellcome view page
Route::get('/', function () {
    return view('welcome');
});

// call controller method
Route::get('show/{id}', [UserController::class,'show'] );

// call view
Route::get('user/{name}',[UserController::class,'loadpage']);

Route::get('user2/{name}',function($name,$file = 'get method from Route'){
	return view('user',['name'=>$name,'file'=>$file]);
});

// call component
Route::view('home','home');
// Route::view('about','about');
Route::get('about',function(){
	return view('about',['names' => ['lipu','sipu','ram','hari']]);
});