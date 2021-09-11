<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuerybuilderController extends Controller
{
    //
    public function showData()
    {
    	# code...
    	return DB::table('students')
    	->get();
    }

    public function where()
    {
    	# code...
    	return DB::table('students')
    	->where('id',6)
    	->get();
    }

    public function find()
    {
    	# code...
    	return (array)DB::table('students')->find(6);	
    }

    public function count()
    {
    	# code...
    	return DB::table('students')->count();	
    }

    public function insert()
    {
    	# code...
    	return DB::table('students')->insert([
    		'student_name' => 'Ram',
    		'age' => 35,
    		'city' => 'Kolkata'
    	]);
    }

    public function update()
    {
    	# code...
    	return DB::table('students')
    	->where('id',32)
    	->update([
    		'city' => 'Mumbai'
    	]);
    }

    public function delete()
    {
    	# code...
    	return DB::table('students')
    	->where('id',33)
    	->delete();
    }
}
