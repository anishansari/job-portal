<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Four;
use App\Test;
use Storage;
class TestController extends Controller
{
    public function post( Request $request)
{
    



    Test::create([
'jobtitle'=>$request['jobtitle'],
'company'=>$request['cname'],
'jdesc'=>$request['jdesc'],
'skillneed'=>$request['Skills'],
'duration'=>$request['duration'],
'qualification'=>$request['qualification'],
'experiance'=>$request['experiance'],
'location'=>$request['location'],
]);
return view('/home');
}

public function jobview(){
    //$job = Test::get();
    $job1=Test::Paginate(5);
    return view('jobs.joblist',compact('job1'));
   }


}
