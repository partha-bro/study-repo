<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class DeletestudentController extends Controller
{
    //
    public function list()
    {
    	# code...
    	$data = student::all();
    	return view('deletestudent',compact('data'));
    }

    public function delete($id)
    {
    	# code...
    	$data = student::find($id);
    	$data->delete();
    	return redirect('delete_data');
    }
}
