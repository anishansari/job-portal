<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Four;

class Four extends Model
{
     protected $fillable = [
       'name','email','password','mobile','age','location','resume','skills','course','college',
    ];
    
}
