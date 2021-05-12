<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class PeginationController extends Controller
{
    //
    public function index()
    {
    	# code...
    	$data = student::paginate(2);
    	return view('pegination',compact('data'));
    }
}
