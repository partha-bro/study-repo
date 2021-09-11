<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class EditstudentController extends Controller
{
    //
    public function showdata($id)
    {
    	# code...
    	$data = student::find($id);
    	return view('editstudent',compact('data'));
    }

    public function updatedata(Request $req)
    {
    	# code...
    	$data = student::find($req->id);
    	$data->student_name = $req->student_name;
    	$data->age = $req->age;
    	$data->city = $req->city;
    	$data->save();
    	return redirect('delete_data');
    }
}
