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
    <a  href="{{url('jobview')}}" name="post" id="post" value="Post Job" class="btn btn-primary" >View All Jobs</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a  href="{{url('userview')}}" name="post" id="post" value="Post Job" class="btn btn-primary" >Your  Profile </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a  href="{{url('jobview')}}" name="post" id="post" value="Post Job" class="btn btn-primary" >Job Applied</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a  href="{{url('jobview')}}" name="post" id="post" value="Post Job" class="btn btn-primary" >Selected</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a  href="{{url('jobview')}}" name="post" id="post" value="Post Job" class="btn btn-danger" >Danger Jone</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
                </div>
            </div>
        </div>
    </div>
</div><br>
<div class="container col-md-2 col-md-offset-5">
     
  
@endsection
