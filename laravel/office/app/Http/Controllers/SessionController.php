<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function index(Request $req)
    {
    	# code...
    	$user = $req->input('username');
    	// to store the value in session
    	$req->session()->put('user',$user);
    	$req->session()->flash('message','Success');
    	return redirect('profile');
    }
}
