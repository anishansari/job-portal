
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
                
                <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('delete/')}}/{{$show->id}}"><i class="fa fa-trash"></i></a>
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



            
            @endsection
   


 