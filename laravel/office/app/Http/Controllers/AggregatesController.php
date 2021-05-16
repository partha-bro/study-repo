<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AggregatesController extends Controller
{
    //
    public function sum()
    {
    	# code...
    	return "Sum: ".DB::table('students')->sum('id');
    }

    public function max()
    {
    	# code...
    	return "Max: ".DB::table('students')->max('id');
    }

    public function min()
    {
    	# code...
    	return "Min: ".DB::table('students')->min('id');
    }

    public function avg()
    {
    	# code...
    	return "Avg: ".DB::table('students')->avg('id');
    }

}
