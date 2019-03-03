@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div><h2>Company dashboard</div>
        <hr>


 <div class="col-xl-3 col-sm-6 mb-3" style="float: left;">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-briefcase" aria-hidden="true"></i>
                </div>
                <div class="mr-5">Post Job</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{url('postjob')}}">
                <span class="float-left">Post new</span>
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
                <div class="mr-5">View All Jobs</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{url('matching')}}">
                <span class="float-left">View Details</span>
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
                <div class="mr-5">View Candidates</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{url('deleteuser')}}">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3" style="float: right;">
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
        </div>

   
</body>
</html>

     
  
@endsection
