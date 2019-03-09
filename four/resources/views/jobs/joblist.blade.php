
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
              <th> Action </th>

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
                <a class="btn btn-primary" onclick="edit('{{$show->id}}')" title="Edit"> <i class="fas fa-edit"></i></a>
                <button onclick=" view('{{$show->id}}')" class="btn btn-primary" title="View"><i class="far fa-eye"></i></button>
             
                  <a class="btn btn-primary" href="{{url('/home')}}" title="Dashboard"><i class="fas fa-tachometer-alt"></i></a>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            {{$job1->render()}}
         </div>

         
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         
          <h4 class="modal-title">Job Details</h4>
           <button type="button" class="close" data-dismiss="modal"></button>
        </div>
        <div class="modal-body">
        <form  action="{{ url('jobupdate')}}" method="post">
            <div class="form-group"> 
                <label>Jobtitle:</label>
            <input type="text" name="jobtitle" id="jobtitle1" disabled class="form-control" width="500px">
            </div>
             <div class="form-group"> 
                <label>Company:</label>
            <input type="text" name="company" id="company1" disabled class="form-control" width="500px">
            </div>
             <div class="form-group"> 
                <label>Description:</label>
            <input type="text" name="jdesc" id="jdesc1" disabled class="form-control" width="500px">
            </div>

              <div class="form-group">
                <label>Skill Required:</label>
                <input type="text" name="skillneed" id="skillneed1" disabled class="form-control">
               </div>
               <div class="form-group"> 
                <label>Duration</label>
                <input type="text" name="duration" id="duration1" disabled class="form-control">
                </div>
               <div class="form-group">
                <label>Qualifications</label>
                <input type="text" name="qualification" id="qualification1" disabled class="form-control">
               </div>
                <div class="form-group"> 
                <label>Experiance:</label>
            <input type="text" name="experiance" id="experiance1" disabled class="form-control" width="500px">
            </div>
            <div class="form-group"> 
                <label>Location:</label>
            <input type="text" name="location" id="location1" disabled class="form-control" width="500px">
            </div>
             <!-- <div class="form-group"> 
                <label>Resume:</label>
            <input type="text" name="resume" id="resume1" disabled class="form-control" width="500px">
            </div> -->
          </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default btn-primary" data-dismiss="modal">Update</button>
          <button type="button" class="btn btn-default btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!--Edit  Modal -->
  <div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Edit Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         
          <h4 class="modal-title">Edit Job Details</h4>
           <button type="button" class="close" data-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form action="{{ url('jobupdate')}}" method="post">
            @csrf
            <div class="form-group"> 
                <label>Jobtitle:</label>
            <input type="text" name="jobtitle" id="jobtitle11"  class="form-control" width="500px">
            </div>
             <div class="form-group"> 
                <label>Company:</label>
            <input type="text" name="company" id="company11"  class="form-control" width="500px">
            </div>
             <div class="form-group"> 
                <label>Description:</label>
            <input type="text" name="jdesc" id="jdesc11"  class="form-control" width="500px">
            </div>

              <div class="form-group">
                <label>Skill Required:</label>
                <input type="text" name="skillneed" id="skillneed11"  class="form-control">
               </div>
               <div class="form-group"> 
                <label>Duration</label>
                <input type="text" name="duration" id="duration11"  class="form-control">
                </div>
               <div class="form-group">
                <label>Qualifications</label>
                <input type="text" name="qualification" id="qualification11"  class="form-control">
               </div>
                <div class="form-group"> 
                <label>Experiance:</label>
            <input type="text" name="experiance" id="experiance11"  class="form-control" width="500px">
            </div>
            <div class="form-group"> 
                <label>Location:</label>
            <input type="text" name="location" id="location11"  class="form-control" width="500px">
            </div>
             <!-- <div class="form-group"> 
                <label>Resume:</label>
            <input type="text" name="resume" id="resume1" disabled class="form-control" width="500px">
            </div> -->
            <div class="modal-footer">
            <button type="submit" class="btn btn-default btn-primary" >Update</button>
          <button type="button" class="btn btn-default btn-primary" data-dismiss="modal">Close</button>
        </div>
          </form>
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
            url: "{{ route('view1.emp')}}",
            data: {
                id: id
            },
            success: function(data)
            { console.log(data);
               $('#jobtitle1').val(data.jobtitle);
                $('#company1').val(data.company);
                $('#jdesc1').val(data.jdesc);
                $('#skillneed1').val(data.skillneed);
                 $('#duration1').val(data.duration);
                  $('#qualification1').val(data.qualification);
                   $('#experiance1').val(data.experiance);
                    $('#location1').val(data.location);
                $('#myModal').modal('show');
            }
        })
    }

    function edit(id)
    {
        $.ajax({
            method: 'GET',
            url: "{{ route('view1.emp')}}",
            data: {
                id: id
            },
            success: function(data)
            { console.log(data);
               $('#jobtitle11').val(data.jobtitle);
                $('#company11').val(data.company);
                $('#jdesc11').val(data.jdesc);
                $('#skillneed11').val(data.skillneed);
                 $('#duration11').val(data.duration);
                  $('#qualification11').val(data.qualification);
                   $('#experiance11').val(data.experiance);
                    $('#location11').val(data.location);
                $('#editModal').modal('show');
            }
        })
    }
</script>
   


 