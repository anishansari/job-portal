<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
  use App\Four;

class Test extends Model
{
  protected  $fillable = [
       'jobtitle','company','jdesc','skillneed','duration','qualification','experiance','location','status',
    ];
    

}
