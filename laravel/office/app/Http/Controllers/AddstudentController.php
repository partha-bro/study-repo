<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class AddstudentController extends Controller
{
    //
    public function addStudent(Request $rst)
    {
    	# code...
    	$student = new student;
    	$student->student_name = $rst->student_name;
    	$student->age = $rst->age;
    	$student->city = $rst->city;
    	if($student->save()){
    		$rst->session()->flash('message','Data Saved.');
    		$rst->session()->flash('status',true);	
    	}else{
    		$rst->session()->flash('message','Data is not save!');
    		$rst->session()->flash('status',false);
    	}
    	
    	return redirect('add');
    }
}
