
@extends('layouts.app')
@section('content')
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
            {{$job1->render()}}
         </div>
            
            @endsection
   


 