<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gymnastics extends Model
{
    use HasFactory;
    protected $table = "gymnastics";
    protected $fillable = ['exercise_name','exercise_category','exercise_description','exercise_image','exercise_video'];
}
