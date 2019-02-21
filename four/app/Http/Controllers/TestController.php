<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Four;
use App\Test;
use App\User;
use Storage;
use DB;

use Auth;

use Illuminate\Foundation\Auth\RegistersUsers;
class TestController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

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

    if (request()->has('company'))
{
	$user=Test::where('company',request('company'))->paginate(5);
}
else{
	$job1=Test::Paginate(5);
}
    
    return view('jobs.joblist',compact('job1'));
   }

public function candidate(){
    //$job = Test::get();

    if (request()->has('company'))
{
	$job1=Test::where('company',request('company'))->paginate(5);
}
else{
	$job1=Test::Paginate(5);
}
    
    return view('jobs.joblist',compact('job1'));
   }


public function match(Request $request)
   {
           $skill = Auth::user()->skills;
        $res= DB::table('tests')->where('skillneed',$skill)->get();
         return view('jobs.jobmatching',compact('res'));
    }
   

public function profile(Request $request)
{
 $id=Auth::user();
  return view('jobs.profile',compact('id'));

}
   public function view(Request $request)
    { 
        $id1 =User::where('id',$request->id)->first();
        return response()->json($id1);
    }
    public function delete(Request $request)
    {
        $id =User::where('id',$request->id)->delete();
          return view('welcome');
    }
}

