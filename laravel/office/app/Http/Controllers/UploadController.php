<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    public function index(Request $req)
    {
    	# code...
    	echo 'File uploaded.';
    	// return $req->file('file')->store('img');
    	return $req->file('file')->storeAs('img', time().'.jpg');
    	
    }
}
