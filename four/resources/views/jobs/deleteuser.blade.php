
@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <title></title>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
<div >
    <table class="table table-hover">
        <tr>
            
            <th>
               Name
            </th>
            <th>
                Email
            </th>
          
            <th>
               Mobile
            </th>
            <th>
                Age
            </th>
            <th>Location </th>
             <th>Resume</th>
             <th> Skills </th>
             <th> Course </th>
             <th> College </th>
             

        </tr>
        @foreach($job2 as $show)
        <tr>
            <td>
                {{$show->name}}
            </td>
            <td>
                {{$show->email}}
            </td>
           
            <td>
                {{$show->mobile}}
            </td>
            <td>
                {{$show->age}}
            </td>
            <td>
                {{$show->location}}
            </td>
            <td>
                {{$show->resume}}
            </td>
            <td>
                {{$show->skills}}
            </td>
             <td>
                {{$show->course}}
            </td>
             <td>
                {{$show->college}}
            </td>
             
            <td>
                 <td>
                
                <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('delete/')}}/{{$show->id}}"><i class="fa fa-trash"></i></a>
               <!--  <a class="btn btn-danger" href="{{url('delete/')}}/{{$show->id}}" title="Delete"><i class="fas fa-trash-alt"></i></a> -->
                  <a class="btn btn-primary" href="{{url('/home')}}" title="Dashboard"><i class="fas fa-tachometer-alt"></i></a>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            {{$job2->render()}}
         </div>
</body>
</html>

            
            @endsection
   


 