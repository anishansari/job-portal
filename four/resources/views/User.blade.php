@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome User!!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You may choose an action to get started!!<br><br>

   <!--  <a  href="{{url('userview')}}" name="post" id="post" value="Post Job" class="btn btn-primary" >View Users</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
   <!--  <a  href="{{url('matching')}}" name="post" id="post" value="Post Job" class="btn btn-primary" >View All Jobs</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a  href="{{url('profile')}}" name="post" id="post" value="Post Job" class="btn btn-primary" >Your  Profile </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a  href="{{url('jobapplied')}}" name="post" id="post" value="Post Job" class="btn btn-primary" >Job Applied</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a  href="{{url('jobapplied')}}" name="post" id="post" value="Post Job" class="btn btn-primary" >Selected</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
   

    <div class="col-xl-3 col-sm-6 mb-3" style="float: left;">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-briefcase" aria-hidden="true"></i>
                </div>
                <div class="mr-5">View All Jobs</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{url('matching')}}">
                <span class="float-left">View</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3" style="float: left;">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-briefcase" aria-hidden="true"></i>
                </div>
                <div class="mr-5">Your  Profile</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{url('profile')}}">
                <span class="float-left">View</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3" style="float: left;">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <div class="mr-5">Job Applied</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{url('jobapplied')}}">
                <span class="float-left">View</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

         <!--  <div class="col-xl-3 col-sm-6 mb-3" style="float: right;">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">Delete Job</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{url('deletejob')}}">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div> -->
    
                </div>
            </div>
        </div>
    </div>
</div><br>
<div class="container col-md-2 col-md-offset-5">
     
  
@endsection
