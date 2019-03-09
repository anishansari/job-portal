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
<table class="table table-striped table table-bordered">
	
	<th> S.N </th>
	<th> Job Title </th>
	<th> Skill Required </th>
	<th> Company </th>
	<th> Qualifications </th>
	<th> Experiance </th>
	<th> Location</th>
	<th> Action</th>
	@foreach ($res as $users)
	<tr>
		<td>{{$users->id}}</td>
		<td>{{$users->jobtitle}}</td>
		<td>{{$users->skillneed}}</td>
		<td>{{$users->company}}</td>
		<td>{{$users->qualification}}</td>
		<td>{{$users->experiance}}</td>
		<td>{{$users->location}}</td>
		<td>
			 <button onclick=" " class="btn btn-primary" title="View Profile"><i class="far fa-eye"></i></button>
			  <button onclick="window.location='{{ url("/status") }}'" class="btn btn-primary" title="Hire"><i class="fa fa-check" aria-hidden="true"></i></button>


			 <a class="btn btn-primary" href="{{url('/home')}}" title="Dashboard"><i class="fas fa-tachometer-alt"></i></a>

		</td>
	</tr>
	@endforeach

</table>
</div>
</body>
</html>
@endsection