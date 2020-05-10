<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
  
    protected $fillable = ['qualification', 'date', 'course', 'institution'];
}
