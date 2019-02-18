<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/register';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
    //      $name=$data['name'];
    //   $resume=$data->file('resume');
    //   echo $resume;
    //   $filename=$name.'.pdf';
    //   Storage::put('resumes/'.$filename,file_get_contents($data->file('resume')->getRealPath()));

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'mobile' => $data['mobile'],
            'age' => $data['age'],
            'location' => $data['location'],
            'resume' => $data['resume'],
            'skills' => $data['skills'],
            'course' => $data['course'],
            'college' => $data['college'],
            'role_id'=>$data['role_id'],
           
        ]);
    }
   //  public function userview(){
   //  // $job = User::get();
   //  $job2=User::paginate(5);
   //  return view('jobs.userlist',compact('job2'));
   // }
}
