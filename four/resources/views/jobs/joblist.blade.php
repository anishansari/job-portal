
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
    <table class="table table-hover">
        <tr>
            
            <th>
                Job Title
            </th>
            <th>
                Company Name
            </th>
            <th>
                Job Description 
            </th>
            <th>
               Skills Required
            </th>
            <th>
                Duration 
            </th>
            <th>Qualification </th>
             <th>Experiance</th>
             <th> Location </th>

        </tr>
        @foreach($job1 as $show)
        <tr>
            <td>
                {{$show->jobtitle}}
            </td>
            <td>
                {{$show->company}}
            </td>
            <td>
                {{$show->jdesc}}
            </td>
            <td>
                {{$show->skillneed}}
            </td>
            <td>
                {{$show->duration}}
            </td>
            <td>
                {{$show->qualification}}
            </td>
            <td>
                {{$show->experiance}}
            </td>
            <td>
                {{$show->location}}
            </td>
            <td>
                <a class="btn btn-primary" href="{{url('edit/')}}/{{$show->id}}" title="Edit"> <i class="fas fa-edit"></i></a>
                <button onclick=" view('{{$show->id}}')" class="btn btn-primary" title="View"><i class="far fa-eye"></i></button>
                <a class="btn btn-danger" href="{{url('delete/')}}/{{$show->id}}" title="Delete"><i class="fas fa-trash-alt"></i></a>
                  <a class="btn btn-primary" href="{{url('/home')}}" title="Dashboard"><i class="fas fa-tachometer-alt"></i></a>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            {{$job1->render()}}
         </div>
</body>
</html>

 <div>
        <h3 class="form-group"> List of user with jobs </h3>
        <table class="table table-striped table-bordered">
            <th>Name</th>
            <th>Skills</th>
            @foreach($job1 as $users)
            <tr>
                <td>{{$users->company}} </td>
                <td> {{$users->company}}</td>
            </tr>
            @endforeach
        </table>

    </div>

            
            @endsection
   


 