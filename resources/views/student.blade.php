<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>Student Management System</title>
  </head>
  <body>
  @include("navbar");
   <div class="row header-container justify-content-center">
       <div class="header">
           <h1>Student Management System</h1>
       </div>
       </div>

   @if($layout == 'index')
    <div class="container-
    fluid mt-4">
      <center>  <div>
       <section class="col-md-7">
           @include("studentslist");
       </section>
       <section class="col-md-5"></section>
       </div></center>
       </div>
   @elseif($layout == 'create')
   <div class="container-fluid mt-4">
       <div class="row">
       <section class="col">
           @include("studentslist");
       </section>
       <section class="col-md-5">

        <div class="card mb-3">
            <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Enter the information of the new student</h5>
                
            <form  action="{{url('/store')}}" method="post">
                    @csrf
                <div class="form-group">
                    <label>CNE</label>
                    <input name="cns" type="text" class="form-control"  placeholder="Enter Cne">
                </div>
                <div class="form-group">
                    <label>First Name</label>
                    <input name="firstName" type="text" class="form-control"  placeholder=" Enter First Name">
                </div>
                <div class="form-group">
                    <label>Second Name</label>
                    <input name="secondName" type="text" class="form-control"  placeholder="Enter Second Name">
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input name="age" type="text" class="form-control"  placeholder=" Enter Age">
                </div>
                <div class="form-group">
                    <label>Speciality</label>
                    <input name="speciality" type="text" class="form-control"  placeholder="Enter Speciality">
                </div>
                <input type="submit" class="btn btn-info" value="save">
                <input type="reset" class="btn btn-warning" value="Reset">
                
                </form>
           
            </div>
            </div>

      
       </section>
       </div>
       </div>
   @elseif($layout == 'show')

   <div class="container-fluid mt-4">
       <div class="row">
       <section class="col">

           @include("studenstlist");
       </section>
       <section class="col">
                      
        </section>
       </div>
       </div>
   @elseif($layout == 'edit')
   <div class="container-fluid mt-4">
       <div class="row">
       <section class="col">
           @include("studentslist");
       </section>
       <section class="col-md-5">
       <div class="card mb-3">
  <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
            <div class="card-body">
    <h5 class="card-title">Update Students Information</h5>
    <form  action="{{url('/update/'.$student->id)}}" method="post">
       @csrf
  <div class="form-group">
    <label>CNE</label>
    <input value="{{$student->cns}}" name="cns" type="text" class="form-control"  placeholder="Enter Cne">
  </div>
  <div class="form-group">
    <label>First Name</label>
    <input value="{{$student->firstName}}" name="firstName" type="text" class="form-control"  placeholder=" Enter First Name">
  </div>
  <div class="form-group">
    <label>Second Name</label>
    <input value="{{$student->secondName}}" name="secondName" type="text" class="form-control"  placeholder="Enter Second Name">
  </div>
  <div class="form-group">
    <label>Age</label>
    <input value="{{$student->age}}"name="age" type="text" class="form-control"  placeholder=" Enter Age">
  </div>
  <div class="form-group">
    <label>Speciality</label>
    <input value="{{$student->speciality}}"name="speciality" type="text" class="form-control"  placeholder="Enter Speciality">
  </div>
  <input type="submit" class="btn btn-info" value="Update">
  <input type="reset" class="btn btn-warning" value="Reset">
  
</form>
    
  </div>
</div>

       
       </section>
       </div>
       </div>
   @endif
    <footer class="footer"></footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>