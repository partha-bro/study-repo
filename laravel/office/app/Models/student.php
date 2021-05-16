<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function getStudentnameAttribute($value)
    {
    	# code...
    	return ucfirst($value);
    }

    public function getCityAttribute($value)
    {
    	# code...
    	return $value.' ,India';
    }
}
