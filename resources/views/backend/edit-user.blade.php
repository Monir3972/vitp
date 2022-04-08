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
                <h2>Edit User</h2>
                <a href="{{route('userview')}}" class="float-right btn btn-success btn-sm"> <i class="fas fa-eye"></i> View User</a>
              </div>
                <div class="card-body">
                <form class="" method="POST" id="myForm" action="{{route('users.update',$editData->id)}}">
                    @csrf
                    <div class="form-row">
                        <div class ="form-group col-md-4">
                            <label for="usertype">User Role</label>
                            <select name="usertype" id="usertype" class="form-control">
                                <option value="">Select Role</option>
                                <option value="Admin" {{($editData->usertype=="Admin")?"selected":""}}>Admin</option>
                                <option value="User" {{($editData->usertype=="User")?"selected":""}}>User</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{$editData->name}}" class="form-control">
                            <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                        </div>
                         <div class="form-group col-md-4">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{$editData->email}}" class="form-control">
                             <font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
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
    </section>
    <!-- /.content -->
  </div>
  @endsection