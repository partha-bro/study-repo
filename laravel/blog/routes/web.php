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

Route::get('/', function () {
    return view('welcome');
});

Route::get('show/{id}', [UserController::class,'show'] );

// load page

Route::get('user/{name}',[UserController::class,'loadpage']);

Route::view('user1/{name}','user');

Route::get('user2/{name}',function($name,$file = 'get method from Route'){
	return view('user',['name'=>$name,'file'=>$file]);
});