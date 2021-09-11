<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\http_responeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\AddstudentController;
use App\Http\Controllers\PeginationController;
use App\Http\Controllers\DeletestudentController;
use App\Http\Controllers\EditstudentController;
use App\Http\Controllers\QuerybuilderController;
use App\Http\Controllers\AggregatesController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\AccessorController;

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

// save data into database
Route::view('add','addstudent');
Route::post('add',[AddstudentController::class,'addStudent']);

// Pegination list

Route::get('pegination',[PeginationController::class,'index']);

// delete data from database
Route::get('delete_data',[DeletestudentController::class,'list']);
Route::get('delete/{id}',[DeletestudentController::class,'delete']);

// update data in database
Route::get('edit/{id}',[EditstudentController::class,'showdata']);
Route::post('update',[EditstudentController::class,'updatedata']);

// Query Builder 
Route::get('fetch',[QuerybuilderController::class,'showData']);
Route::get('where',[QuerybuilderController::class,'where']);
Route::get('find',[QuerybuilderController::class,'find']);
Route::get('count',[QuerybuilderController::class,'count']);
Route::get('insert',[QuerybuilderController::class,'insert']);
Route::get('update',[QuerybuilderController::class,'update']);
Route::get('delete',[QuerybuilderController::class,'delete']);

// Aggregates Controller
Route::get('sum',[AggregatesController::class,'sum']);
Route::get('max',[AggregatesController::class,'max']);
Route::get('min',[AggregatesController::class,'min']);
Route::get('avg',[AggregatesController::class,'avg']);

//join two tables
Route::get('join',[JoinController::class,'join']);

// Accessor 
Route::get('accessor',[AccessorController::class,'index']);