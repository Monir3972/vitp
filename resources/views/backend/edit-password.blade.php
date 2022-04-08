@extends('backend.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Change Password </h1>
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
                <h2>Edit User</h2>
                <a href="{{route('userview')}}" class="float-right btn btn-success btn-sm"> <i class="fas fa-eye"></i> View User</a>
              </div>
                <div class="card-body">
                <form class="" method="post" id="myForm2" action="{{route('profiles.passwordUpdate')}}">
                    @csrf
                    <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="current_password">Current Password</label>
                            <input type="password" name="current_password" class="form-control">
                             <font style="color:red">{{($errors->has('current_password'))?($errors->first('current_password')):''}}</font>
                        </div>
                         <div class="form-group col-md-4">
                            <label for="new_password">New Password</label>
                            <input type="password" name="new_password" id="new-password" class="form-control">
                             <font style="color:red">{{($errors->has('new_password'))?($errors->first('new_password')):''}}</font>
                        </div>
                          <div class="form-group col-md-4">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                             <font style="color:red">{{($errors->has('confirm_password'))?($errors->first('confirm_password')):''}}</font>
                        </div>
                          <div class="form-group col-md-6"> 
                            <input type="submit" value="Update" class="btn btn-primary btn-sm">
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
          $('#myForm2').validate({
            rules: {
             current_password: {
                required: true,
              },
            new_password: {
                required: true,
                minlength:6,
              },
             confirm_password: {
                required: true,
                equalTo: '#new-password'
              }
            },
            messages: {
              current_password: {
                required: "Please provide password",
              },
           new_password: {
                required: "Please provide New password",
                 minlength: "Your password must be at least 5 characters long"
              },
               confirm_password: {
                required: "Please provide password Again",
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