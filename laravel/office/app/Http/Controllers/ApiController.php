<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    //
    public function apiCall()
    {
    	# code...
    	$data = Http::get('https://reqres.in/api/users?page=1');
    	return view('api',['collection'=>$data['data']]);
    }
}
