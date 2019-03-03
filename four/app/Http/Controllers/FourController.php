<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Four;
use App\User;
use App\Test;
use Storage;
use DB;
use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;


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

  public function deleteuser(){
    // $job = User::get();
    $job2=User::paginate(5);
    return view('jobs.deleteuser',compact('job2'));
   }
    public function deletejob(){
    // $job = User::get();
    //$job = Test::get();
    $job1=Test::Paginate(5);
    return view('jobs.deletejob',compact('job1'));
   }

   public function edit($id){
        $third=Four::get();
        $third1=Four::FindorFail($id);
        
        return view('jobs.candidate',compact('third','third1'));

   }

   public function profile(Request $request)
{
 $id=Auth::user();
  return view('jobs.profile',compact('id'));

}

   // public function userupdate( Request $request)
   //  {
        
   //      Four::where('id',$request['id'])->update([
   //          'name'=>$request['name'],
   //          'email'=>$request['email'],
   //          'mobile'=>$request['mobile'],
   //          'age'=>$request['age'],
   //          'location'=>$request['location'],
   //          'skills'=>$request['skills'],
   //          'course'=>$request['course'],
   //          'college'=>$request['college'],


   //      ]);
   //      return redirect()->back();
   //  }
   //  public function jobupdate( Request $request)
   //  {
        
   //      Four::where('id',$request['id'])->update([
   //          'jobtitle'=>$request['jobtitle'],
   //          'company'=>$request['company'],
   //          'jdesc'=>$request['jdesc'],
   //          'skillneed'=>$request['skillneed'],
   //          'duration'=>$request['duration'],
   //          'qualification'=>$request['qualification'],
   //          'experiance'=>$request['experiance'],
   //          'location'=>$request['location'],
            


   //      ]);
   //      return redirect()->back();
   //  }

public function view(Request $request)
    {
        $second =User::where('id',$request->id)->first();
        return response()->json($second);
    }

    public function response(Request $request, User $second)
    {
      $this->validate($request,['response' =>'required|max:2250']);
        User::where('id',$second->id)->update(['response' => $request['response'],'updated_by' => Auth::User()->user_id,]);
      return redirect()->back();
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


