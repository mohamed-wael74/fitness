<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calories extends Model
{
    protected $table = "calories";
    protected $fillable = ['weight','heigh','age'];
    use HasFactory;
}
