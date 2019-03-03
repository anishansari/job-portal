
@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Candidates</title>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
   
<table class="table table-striped table-bordered">
    
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
             <th> Applied For </th>
             <th> Action </th>

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
                
                <button onclick=" view('{{$show->id}}')" class="btn btn-primary" title="View Profile"><i class="far fa-eye"></i></button>
                <button onclick=" view('{{$show->id}}')" class="btn btn-primary" title="Hire"><i class="fa fa-check" aria-hidden="true"></i></button>
                <button onclick=" view('{{$show->id}}')" class="btn btn-primary" title="Reject"><i class="fa fa-times" aria-hidden="true"></i></button></a>
                  <a class="btn btn-primary" href="{{url('/home')}}" title="Dashboard"><i class="fas fa-tachometer-alt"></i></a>
            </td>
        </tr>
            @endforeach

           
</table>

 <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            {{$job2->render()}}
         </div>
}
}
</body>
</html>
@endsection