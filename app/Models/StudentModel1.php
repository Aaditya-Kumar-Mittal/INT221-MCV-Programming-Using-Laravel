<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class StudentModel1 extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'students';
    protected $fillable = ['name', 'email', 'age'];
}
