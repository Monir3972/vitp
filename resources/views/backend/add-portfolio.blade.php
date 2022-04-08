@extends('backend.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Portfolio</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Portfolio</li>
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
                <h2>Add Portfolio</h2>
                <a href="{{route('portfolios.view')}}" class="float-right btn btn-success btn-sm"> <i class="fas fa-eye"></i> Portfolio List</a>
              </div>
                <div class="card-body">
                <form class="" method="post" id="myForm" action="{{route('portfolios.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                     
                         <div class ="form-group col-md-4">
                            <label for="">Link</label>
                            <input type="text" name="project_link" class="form-control">
                       </div>
                      <div class ="form-group col-md-4">
                            <label for="image">Small image</label>
                            <input type="file" name="small_image" id="image" class="form-control">
                       </div>
                       <div class ="form-group col-md-4">
                            <label for="image">Large image</label>
                            <input type="file" name="large_image" id="image2" class="form-control">
                       </div>
                         <div class ="form-group col-md-4">
                            <label for="">Project Title</label>
                            <input type="text" name="project_title" class="form-control">
                       </div>
                         <div class ="form-group col-md-4">
                            <label for="">Small Description</label>
                            <input type="text" name="small_description" class="form-control">
                       </div>
                          <div class ="form-group col-md-4">
                            <img id = "showImage" src ="{{url('public/upload/no_images.png')}}"/>
                       </div>
                         <div class ="form-group col-md-4">
                            <img id = "showImage2" src ="{{url('public/upload/no_images.png')}}"/>
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