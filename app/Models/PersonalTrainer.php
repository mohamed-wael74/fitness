<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalTrainer extends Model
{
    use HasFactory;
    protected $table = "trainers";
    protected $fillable = ['name','email','phone','feedback'];
}
