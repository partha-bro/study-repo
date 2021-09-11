<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinController extends Controller
{
    //
    public function join()
    {
    	# code...
    	return DB::table('students')
    	->join('colleges','students.id','=','colleges.s_id')
    	->select('student_name','age','city','c_name')
    	->get();
    }
}
