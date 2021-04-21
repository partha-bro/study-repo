<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

//user controller connection
Route::post('user_controller',[UsersController::class,'getData']);

// apply global middleware
// Route::view('login','user');
// Route::view('noaccess','noaccess');

// apply group middleware
// Route::group(['middleware'=>'agecheck'],function(){
// 	Route::view('login','user');
	// Route::get('/', function () {
	//     return view('welcome');
	// });
// });
// Route::view('noaccess','noaccess');

// apply route middleware
Route::view('login','user')->middleware('agecheck');
Route::view('noaccess','noaccess');