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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome You can Post a Job Here</div>

               

                    You may choose an action to get started!!<br><br>

    <a  href="{{url('postjob')}}" name="post" id="post" value="Post Job" class="btn btn-primary" >Post Job <i class="fas fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a  href="{{url('jobview')}}" name="post" id="post" value="Post Job" class="btn btn-primary" >View Job</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a  href="{{url('userview')}}" name="post" id="post" value="Post Job" class="btn btn-primary" >View Candidates </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a  href="{{url('jobview')}}" name="post" id="post" value="Post Job" class="btn btn-danger" >Delete Job</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
    
                </div>
            </div>
        </div>
    </div>
</div><br>
<div class="container col-md-2 col-md-offset-5">

   
</body>
</html>

     
  
@endsection
