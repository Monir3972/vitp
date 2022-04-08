@extends('backend.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
                <h2>Add User</h2>
                <a href="{{route('userview')}}" class="float-right btn btn-success btn-sm"> <i class="fas fa-eye"></i> View User</a>
              </div>
                <div class="card-body">
                <form class="" method="post" id="myForm" action="{{route('users.store')}}">
                    @csrf
                    <div class="form-row">
                        <div class ="form-group col-md-4">
                            <label for="usertype">User Role</label>
                            <select name="usertype" id="usertype" class="form-control">
                                <option value="">Select Role</option>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control">
                            <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                        </div>
                         <div class="form-group col-md-4">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control">
                             <font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                        </div>
                           <div class="form-group col-md-4">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                          <div class="form-group col-md-4">
                            <label for="password">Confirm Password</label>
                            <input type="password" name="password2" class="form-control">
                        </div>
                          <div class="form-group col-md-6"> 
                            <input type="submit" value="Save" class="btn btn-primary btn-sm">
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
              email: {
                required: true,
                email: true,
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
              email: {
                required: "Please enter a email address",
                email: "Please enter a valid email address"
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