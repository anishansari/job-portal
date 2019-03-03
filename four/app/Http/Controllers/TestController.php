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
    'status'=>0,
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

    public function jobapplied(Request $request)
   {
     $job=DB::table('tests')->where('status','1')->get();
       
       return view('jobs.jobapplied',compact('job'));
     }

public function applyjob(Request $request)
{
 
$id=DB::table('tests')->where('id')->get();
DB::table('tests')->update(['status' => 1]);
return redirect()->back();
            
            
}

  // public function count{

  //   $users = DB::table('users')->count();
  //   return view('jobs.userlist',compact('users'));
  // }  
   

// public function profile(Request $request)
// {
//  $id=Auth::user();
//   return view('jobs.profile',compact('id'));

// }

public function view1(Request $request)
    {
        $second =Test::where('id',$request->id)->first();
        return response()->json($second);
    }

    public function response(Request $request, Test $second)
    {
      $this->validate($request,['response' =>'required|max:2250']);
        Test::where('id',$second->id)->update(['response' => $request['response'],'updated_by' => Auth::User()->user_id,]);
     return redirect()->back();
    }
   


    public function delete(Request $request)
    {
        $id =User::where('id',$request->id)->delete();
          return view('welcome');
    }
    
    
}

