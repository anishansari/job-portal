@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	 <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
	

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="https://www.reduceimages.com/img/image-after.jpg" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h2>
                            {{$id->name}}</h2>
                        <h3 > <span class="glyphicon glyphicon-envelope"></span>  {{$id->email}}</h3>
                         <h3 > <span class="glyphicon glyphicon-phone"></span>   {{$id->mobile}}</h3>
                          <h3 > <span class="glyphicon glyphicon-calendar"></span>  {{$id->age}}</h3>
                           <h3 > <span class="glyphicon glyphicon-tree-conifer"></span> {{$id->location}}</h3>
                            <h3 > <span class="glyphicon glyphicon-briefcase"></span> {{$id->skills}}</h3>
                             <h3 > <span class="glyphicon glyphicon-book"></span>  {{$id->course}}</h3>
                             <h3 > <span class="glyphicon glyphicon-book"></span>  {{$id->college}}</h3>
                              <h3 > <span class="glyphicon glyphicon-book"></span>  {{$id->resume}}</h3>
                        <!-- Split button -->
                        <div >
                           
                                 <button type="button" class="btn btn-primary btn-lg" onclick=" view('{{$id->id}}'")>
                                Edit</button>
                                <a class="btn btn-danger btn-lg" href="{{url('delete/')}}/{{$id->id}}">Delete</a>
                                 <a class="btn btn-primary btn-lg" href="{{url('/home')}}">Dashboard</a>
                                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         
          <h4 class="modal-title">User Details</h4>
           <button type="button" class="close" data-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group"> 
                <label>Name:</label>
            <input type="text" name="name" id="name1" disabled class="form-control" width="500px">
            </div>
             <div class="form-group"> 
                <label>Email:</label>
            <input type="text" name="email" id="email1" disabled class="form-control" width="500px">
            </div>
             <div class="form-group"> 
                <label>Phone:</label>
            <input type="text" name="phone" id="phone1" disabled class="form-control" width="500px">
            </div>

              <div class="form-group">
                <label>Age:</label>
                <input type="text" name="age" id="age1" disabled class="form-control">
               </div>
               <div class="form-group"> 
                <label>Skill</label>
                <input type="text" name="skills" id="skills1" disabled class="form-control">
                </div>
               <div class="form-group">
                <label>Course</label>
                <input type="text" name="course" id="course1" disabled class="form-control">
               </div>
                <div class="form-group"> 
                <label>College:</label>
            <input type="text" name="college" id="college1" disabled class="form-control" width="500px">
            </div>
             <div class="form-group"> 
                <label>Resume:</label>
            <input type="text" name="resume" id="resume1" disabled class="form-control" width="500px">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
@endsection
@section('js')

<script type="text/javascript">
    function view(id)
    {
        $.ajax({
            method: 'GET',
            url: "{{ route('view.emp')}}",
            data: {
                id: id
            },
            success: function(data)
            { console.log(data);
               $('#name1').val(data.name);
                $('#email1').val(data.email);
                $('#phone1').val(data.phone);
                $('#age1').val(data.age);
                 $('#skills1').val(data.skills);
                  $('#course1').val(data.course);
                   $('#college1').val(data.college);
                    $('#resume1').val(data.resume);
                $('#myModal').modal('show');
            }
        })
    }
</script>