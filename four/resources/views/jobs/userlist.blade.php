
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
              <th> Action </th>
             

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
                <a class="btn btn-primary" onclick=" edit('{{$show->id}}')"  title="Edit"> <i class="fas fa-edit"></i></a>
                <button onclick=" view('{{$show->id}}')" class="btn btn-primary" title="View"><i class="far fa-eye"></i></button>
              
                  <a class="btn btn-primary" href="{{url('/home')}}" title="Dashboard"><i class="fas fa-tachometer-alt"></i></a>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            {{$job2->render()}}
         </div>

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
            <input type="text" name="mobile" id="phone1" disabled class="form-control" width="500px">
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
             <!-- <div class="form-group"> 
                <label>Resume:</label>
            <input type="text" name="resume" id="resume1" disabled class="form-control" width="500px">
            </div> -->
          </form>
        </div>
        <div class="modal-footer">
            
          <button type="button" class="btn btn-default btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog">
    
      <!--  Edit Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         
          <h4 class="modal-title"> Edit User Details</h4>
           <button type="button" class="close" data-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group"> 
                <label>Name:</label>
            <input type="text" name="name" id="name11"  class="form-control" width="500px">
            </div>
             <div class="form-group"> 
                <label>Email:</label>
            <input type="text" name="email" id="email11"  class="form-control" width="500px">
            </div>
             <div class="form-group"> 
                <label>Phone:</label>
            <input type="text" name="mobile" id="phone11"  class="form-control" width="500px">
            </div>

              <div class="form-group">
                <label>Age:</label>
                <input type="text" name="age" id="age11"  class="form-control">
               </div>
               <div class="form-group"> 
                <label>Skill</label>
                <input type="text" name="skills" id="skills11"  class="form-control">
                </div>
               <div class="form-group">
                <label>Course</label>
                <input type="text" name="course" id="course11"  class="form-control">
               </div>
                <div class="form-group"> 
                <label>College:</label>
            <input type="text" name="college" id="college11"  class="form-control" width="500px">
            </div>
             <!-- <div class="form-group"> 
                <label>Resume:</label>
            <input type="text" name="resume" id="resume1" disabled class="form-control" width="500px">
            </div> -->
             <button type="button" class="btn btn-default btn-primary" onclick="url('{{'/home'}}')">Update</button>
             <button type="button" class="btn btn-default btn-primary" data-dismiss="modal">Close</button>

          </form>
        </div>
        <div class="modal-footer">
           
         
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
                $('#phone1').val(data.mobile);
                $('#age1').val(data.age);
                 $('#skills1').val(data.skills);
                  $('#course1').val(data.course);
                   $('#college1').val(data.college);
                    $('#resume1').val(data.resume);
                $('#myModal').modal('show');
            }
        })
    }
    function edit(id)
    {
        $.ajax({
            method: 'GET',
            url: "{{ route('view.emp')}}",
            data: {
                id: id
            },
            success: function(data)
            { console.log(data);
               $('#name11').val(data.name);
                $('#email11').val(data.email);
                $('#phone11').val(data.mobile);
                $('#age11').val(data.age);
                 $('#skills11').val(data.skills);
                  $('#course11').val(data.course);
                   $('#college11').val(data.college);
                    $('#resume11').val(data.resume);
                $('#editModal').modal('show');
            }
        })
    }
</script>
   


 