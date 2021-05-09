<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Http_responeController extends Controller
{
    //
    public function index( Request $req )
    {
    	# code...
    	return $req->input();
    }
}
