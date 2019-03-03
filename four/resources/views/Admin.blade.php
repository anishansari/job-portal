@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome You are the Boss!!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You may choose an action to get started!!<br><br>
<!-- 
    <a  href="{{url('userview')}}" name="post" id="post" value="Post Job" class="btn btn-primary" >View Users</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a  href="{{url('jobview')}}" name="post" id="post" value="Post Job" class="btn btn-primary" >View Jobs</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a  href="{{url('userview')}}" name="post" id="post" value="Post Job" class="btn btn-danger" >Delete Candidates </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a  href="{{url('jobview')}}" name="post" id="post" value="Post Job" class="btn btn-danger" >Delete Job</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="row"> -->
      <!DOCTYPE html>
      <html>
      <head>
        <title></title>
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      </head>
      <body>
       </body>
      </html>
          <div class="col-xl-3 col-sm-6 mb-3" style="float: left;">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">View Users</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{url('userview')}}">
                <span class="float-left">View Details</span>
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
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">View Jobs</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{url('jobview')}}">
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
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">Delete users</div>
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
