@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title></title>
   

   
</head>
<body>
<div class="container col-md-2 col-md-offset-5">
     
    <form method="post" action="{{url('postjob')}}" class="form-group">
   
     {{csrf_field()}}
        <label class="form-group">   
         Job Title   <input type="text" name="jobtitle" class="form-control" placeholder="Enter Job Title">
        </label><br>
         <label class="form-group">   
         Company Name   <input type="text" name="cname" class="form-control" placeholder="company name">
        </label><br>
         <label class="form-group">   
         Job Description Hello   <textarea name="jdesc" class="form-control" placeholder="Job Description"></textarea>
        </label><br>
         <label class="form-group">   
         Skills Required  <select class="form-control" name="Skills">
             
             <option>C</option>
              <option>C++</option>
               <option>Java</option>
                <option>Kotlin</option>
                 <option>PHP</option>
                  <option>Laravel</option>
                   <option>CSS</option>
                    <option>ASP</option>
                     <option>C#</option>
                      <option>Python</option>
         </select>
        </label><br>
        <label class="form-group">   
         Duration  <input type="text" name="duration" class="form-control" placeholder="Duration of the job">
        </label><br>
        <label class="form-group">   
         Qualification  <select class="form-control" name="qualification">
             
             <option>PUC</option>
              <option>Diploma</option>
              <option>B.E</option>
               <option>MSTER</option>
                <option>PHD</option>
         </select>
        </label><br>
         <label class="form-group">   
         Experiance  <input type="text" name="experiance" class="form-control" placeholder="Experiance Required">
        </label><br>
 <label class="form-group">   
        Location  <input type="text" name="location" class="form-control" placeholder="Location City">
        </label><br>
        <button type="submit" class="btn btn-primary">Submit</button> &nbsp; &nbsp;&nbsp;&nbsp;
         <a  href="{{url('jobview')}}" name="post" id="post" value="Post Job" class="btn btn-primary" >View Job</a>
  
</form>
</div>

</body>
</html>


@endsection
