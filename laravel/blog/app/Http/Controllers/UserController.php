<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show($id='Not provided.')
    {
    	# code...
    	return $id;
    }

    public function loadPage($name='Not provided.',$file = 'Controller')
    {
    	# code...
    	return view('user',['name'=>$name,'file'=>$file]);
    }
}
