<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\http_responeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UploadController;

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
Route::view('access','user')->middleware('agecheck');
Route::view('noaccess','noaccess');

// For db page
Route::get('db',[UsersController::class,'database']);

// model of database
Route::get('db_model',[StudentController::class,'getData']);

//make a path for API
Route::get('API',[ApiController::class,'apiCall']);

// for http request
Route::view('login','http_response');
// Route::get('submit',[Http_responeController::class,'index']);
// Route::post('submit',[Http_responeController::class,'index']);
// Route::put('submit',[Http_responeController::class,'index']);
// Route::delete('submit',[Http_responeController::class,'index']);

Route::any('submit',[Http_responeController::class,'index']);

// for session
// Route::view('session','session');
Route::view('profile','profile');
Route::get('session',function(){
	if(session()->has('user')){
		return redirect('profile');
	}
	return view('session');	
	
});
Route::any('session_2',[SessionController::class,'index']);
// for logout 
Route::get('logout',function(){
	if(session()->has('user')){
		session()->pull('user',null);
	}
	return redirect('session');
});

// upload file
Route::view('upload','upload');
Route::post('upload',[UploadController::class,'index']);

// localization
Route::get('lang/{lang}',function($lang){
	App::setlocale($lang);
	return view('language');
});