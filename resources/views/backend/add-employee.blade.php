@extends('backend.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Employee</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Employee</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
      <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-md-12">
               <div class="card">
              <div class="card-header">
                <h2>Add Employee</h2>
                <a href="{{route('employee.view')}}" class="float-right btn btn-success btn-sm"> <i class="fas fa-eye"></i> View Employee</a>
              </div>
                <div class="card-body">
                <form class="" method="post" id="myForm" action="{{route('employee.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                      
                        <div class="form-group col-md-4">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control">
                            <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                        </div>
                         <div class="form-group col-md-4">
                            <label for="Designation">Designation</label>
                            <input type="text" name="designation" class="form-control">
                           
                        </div>
                           <div class="form-group col-md-4">
                            <label for="facebook">Facebook</label>
                            <input type="text" name="facebook" class="form-control">
                           </div>
                            <div class="form-group col-md-4">
                            <label for="linkedin">Linkedin</label>
                            <input type="text" name="linkedin" class="form-control">
                           </div>
                              <div class="form-group col-md-4">
                            <label for="github">Github</label>
                            <input type="text" name="github" class="form-control">
                           </div>
                            <div class ="form-group col-md-4">
                            <label for="image">image</label>
                            <input type="file" name="image" id="image" class="form-control">
                       </div>
                          <div class ="form-group col-md-4">
                            <img id = "showImage" src ="{{url('public/upload/no_images.png')}}" style="width:150px; height:160px; border:1px solid #ddd"/>
                        </div>
                          <div class="form-group col-md-6"> 
                            <input type="submit" value="Submit" class="btn btn-primary btn-sm">
                        </div>
                    </div>
                </form>
               </div>
          
            </div>
          </div>
         
      </div>
        <!-- /.row -->
        <!-- Main row -->
    
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
      <script>
        $(function () {
          $('#myForm').validate({
            rules: {
              name: {
                required: true,
              },
               usertype: {
                required: true,
              },
           
              password: {
                required: true,
                minlength:6,
              },
               password2: {
                required: true,
                equalTo: '#password'
              }
            },
            messages: {
                name: {
                required: "Please enter a username",
              },
               usertype: {
                required: "Please select user role",
              },
              designation: {
                required: "Please enter a designation address",
                email: "Please enter a valid designation address"
              },
              password: {
                required: "Please provide password",
                minlength: "Your password must be at least 5 characters long"
              },
               password2: {
                required: "Please provide password",
                equalTo: "confirm password does not match",
              }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
              error.addClass('invalid-feedback');
              element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
              $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
              $(element).removeClass('is-invalid');
            }
          });
        });
        </script>
    </section>
  
    <!-- /.content -->
  </div>
  @endsection