@extends('backend.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Client Review</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Client Review</li>
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
                <h2>Add Client Review</h2>
                <a href="{{route('clients.view')}}" class="float-right btn btn-success btn-sm"> <i class="fas fa-eye"></i> Client Review List</a>
              </div>
                <div class="card-body">
                <form class="" method="post" id="myForm" action="{{route('clients.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                             
                                 <div class ="form-group col-md-6">
                                    <label for="image">image</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                                  <div class ="form-group col-md-4">
                                    <img id = "showImage" src ="{{url('public/upload/no_images.png')}}" style="width:150px; height:160px; border:1px solid #ddd"/>
                               </div>
                               <div class ="form-group col-md-4">
                                    <label for="description">Description</label>
                                    <input type="text" name="description" class="form-control">
                                </div>
                                <div class ="form-group col-md-4">
                                    <label for="description">Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                               
                                    <div class ="form-group col-md-4">
                                    <label for="heading">Company</label>
                                    <input type="text" name="company" class="form-control">
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
    </section>
    <!-- /.content -->
  </div>
  @endsection