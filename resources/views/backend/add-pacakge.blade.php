@extends('backend.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Pacakge</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pacakge</li>
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
                <h2>Add Pacakge</h2>
                <a href="{{ route('pacakges.view')}}" class="float-right btn btn-success btn-sm"> <i class="fas fa-eye"></i> Pacakge List</a>
              </div>
                <div class="card-body">
                <form class="" method="post" id="myForm" action="{{ route('pacakges.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        
                            <div class ="form-group col-md-4">
                                <label for="">Course Title</label>
                                <input type="text" name="course_title" class="form-control">
                          </div>
                           <div class ="form-group col-md-4">
                                <label for="">Course Price</label>
                                <input type="text" name="course_price" class="form-control">
                          </div>
                          
                           <div class ="form-group col-md-4">
                                <label for="">Delivery Mode</label>
                                <input type="text" name="delivery_mode" class="form-control">
                          </div>
                          
                             <div class ="form-group col-md-4">
                                <label for="">Course Start</label>
                                <input type="text" name="course_start" class="form-control">
                            </div>
                               <div class ="form-group col-md-4">
                                <label for="">Course End</label>
                                <input type="text" name="course_end" class="form-control">
                             </div>
                             
                              <div class ="form-group col-md-4">
                                <label for="">Support</label>
                                <input type="text" name="support" class="form-control">
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