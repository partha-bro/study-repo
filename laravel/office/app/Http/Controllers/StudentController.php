<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    //
    public function getData()
    {
    	# code...
    	return student::all();
    }
}
