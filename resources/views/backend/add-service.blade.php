@extends('backend.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Service</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Service</li>
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
                <h2>Add Service</h2>
                <a href="{{route('services.view')}}" class="float-right btn btn-success btn-sm"> <i class="fas fa-eye"></i> Services List</a>
              </div>
                <div class="card-body">
                <form class="" method="post" id="myForm" action="{{route('services.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                     
                         <div class ="form-group col-md-4">
                            <label for="">Title Heading</label>
                            <input type="text" name="first_heading" class="form-control">
                       </div>
                           <div class ="form-group col-md-4">
                            <label for="">Title Description</label>
                            <input type="text" name="first_description" class="form-control">
                       </div>
                           <div class ="form-group col-md-4">
                            <label for="">Heading</label>
                            <input type="text" name="second_heading" class="form-control">
                       </div>
                           <div class ="form-group col-md-4">
                            <label for="">Description</label>
                            <input type="text" name="second_description" class="form-control">
                       </div>
                           <div class ="form-group col-md-4">
                            <label for="text">Icon</label>
                            <input type="text" name="icon" class="form-control">
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