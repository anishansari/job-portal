
@extends('layouts.app')
@section('content')
<div class="container">
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
                <a class="btn btn-primary" href="{{url('edit/')}}/{{$show->id}}">Edit</a>
                <button onclick=" view('{{$show->id}}')" class="btn btn-primary">View</button>
                <a class="btn btn-danger" href="{{url('delete/')}}/{{$show->id}}">Delete</a>
                <a class="btn btn-primary" href="{{url('/home')}}">Dashboard</a>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            {{$job2->render()}}
         </div>
            
            @endsection
   


 