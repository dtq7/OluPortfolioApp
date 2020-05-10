<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{

    protected $fillable = ['position', 'year', 'company', 'responsibilities'];
}
