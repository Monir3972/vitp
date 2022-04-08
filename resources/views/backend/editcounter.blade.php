@extends('backend.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Counter Plugins</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Counter Plugins</li>
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
                <h2>Update Item</h2>
                <a href="{{route('counters.view')}}" class="float-right btn btn-success btn-sm"> <i class="fas fa-eye"></i> Infos List</a>
              </div>
                <div class="card-body">
                <form class="" method="post" id="myForm" action="{{route('counters.update',$editData->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                          <div class ="form-group col-md-4">
                            <label for="">Icon</label>
                            <input type="text" name="social_icon" value ="{{$editData->social_icon}}" class="form-control">
                         </div>
                           <div class ="form-group col-md-4">
                            <label for="">Background Color</label>
                            <input type="text" name="bgColor" value ="{{$editData->bgColor}}" class="form-control">
                         </div>
                           <div class ="form-group col-md-4">
                            <label for="">Count Start </label>
                            <input type="text" name="dataForm" value ="{{$editData->dataForm}}" class="form-control">
                         </div>
                           <div class ="form-group col-md-4">
                            <label for="">Count End </label>
                            <input type="text" name="dataTo" value ="{{$editData->dataTo}}" class="form-control">
                         </div>
                         <div class ="form-group col-md-4">
                            <label for="">Refresh Value </label>
                            <input type="text" name="dataRefresh" value ="{{$editData->dataRefresh}}" class="form-control">
                         </div>
                            <div class ="form-group col-md-4">
                            <label for="">Data Speed</label>
                            <input type="text" name="dataSpeed" value ="{{$editData->dataSpeed}}" class="form-control">
                         </div>
                           <div class ="form-group col-md-4">
                            <label for="">Description</label>
                            <input type="text" name="description" value ="{{$editData->description}}" class="form-control">
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