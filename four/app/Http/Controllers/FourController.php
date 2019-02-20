<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Four;
use App\User;
use App\Test;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Storage;

class FourController extends Controller
{
	    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
	public function emp( Request $request)
{
    




    Four::create([
'name'=>'Anish',
'email'=>'ansarianish4@gmail.com',
'password'=>'123456',
'mobile'=>'906606705',
'age'=>'20',
'location'=>'Bangalore',
'resume'=>'a.doc',
'skills'=>'abc',
'course'=>'BE',
'college'=>'SaiT',
]);
return view('/home');
}

public function jobview(){
    $job = Test::get();
    $job1=Test::Paginate(5);


   
    return view('jobs.joblist',compact('job1'));
   }
   public function userview(){
    // $job = User::get();
    $job2=User::paginate(5);
    return view('jobs.userlist',compact('job2'));
   }

    public function candidate(){
    // $job = User::get();
        if (request()->has('skills'))
{
    $job2=User::where('skills',request('skills'))->paginate(5)->appends('skills',request('skills'));
}
else{
    $job2=User::paginate(5);
}
return view('jobs.candidates',compact('job2'));
   }

   

}


