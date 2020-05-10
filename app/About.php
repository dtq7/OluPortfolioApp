<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
  
    protected $fillable = ['site', 'phone', 'state', 'email', 'degree'];
}
