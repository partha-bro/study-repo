<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //
    public function getData(Request $rst)
    {
    	# code...
    	return $rst;
    }

    public function database()
    {
    	# code...
    	return DB::select("select * from student");
    }
}
