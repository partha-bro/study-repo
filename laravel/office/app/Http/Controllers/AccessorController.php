<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class AccessorController extends Controller
{
    //
    public function index()
    {
    	# code...
    	return student::all();
    }
}
