@extends('backend.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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
                <h2>Edit Profile</h2>
                <a href="{{route('profiles.view')}}" class="float-right btn btn-success btn-sm"> <i class="fas fa-eye"></i> Your Profile</a>
              </div>
                <div class="card-body">
                <form class="" method="POST" id="myForm" action="{{route('profiles.update')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
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
                          <div class="form-group col-md-4">
                            <label for="address">Address</label>
                            <input type="text" name="address" value="{{$editData->address}}" class="form-control">
                             <font style="color:red">{{($errors->has('address'))?($errors->first('address')):''}}</font>
                        </div>
                          <div class="form-group col-md-4">
                            <label for="mobile">Phone</label>
                            <input type="text" name="mobile" value="{{$editData->mobile}}" class="form-control">
                             <font style="color:red">{{($errors->has('mobile'))?($errors->first('mobile')):''}}</font>
                        </div>
                        
                        <div class ="form-group col-md-4">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="">Select Gender</option>
                                <option value="male" {{($editData->gender=="male")?"selected":""}}>Male</option>
                                <option value="female" {{($editData->gender=="female")?"selected":""}}>Female</option>
                            </select>
                        </div>
                         <div class ="form-group col-md-4">
                            <label for="image">image</label>
                            <input type="file" name="image" id="image" class="form-control">
                       </div>
                          <div class ="form-group col-md-4">
                            <img id = "showImage" src ="{{(!empty($editData->image))?url('public/upload/user_images/'.$editData->image):url('public/upload/no_images.png')}}" style="width:150px; height:160px; border:1px solid #ddd"/>
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