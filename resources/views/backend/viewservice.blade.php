@extends('backend.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Sevicec</h1>
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
                <h2>Service List</h2>
                <a href="{{route('services.add')}}" class="float-right btn btn-success btn-sm"> <i class="fas fa-plus"></i> Add Service</a>
              </div>
                <div class="card-body">
              <table id="table_id" class="table table-bordered table-hover table-responsive">
              <thead>
                <tr>
                  <th scope="col">SL</th>
                  <th scope="col">Title Heading</th>
                  <th scope="col">Title Description</th>
                  <th scope="col">Heading</th>
                  <th scope="col">Description</th>
                  <th scope="col">Icon</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
             <tbody>
              @foreach($alldata as $key => $service)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$service->first_heading}}</td>
                  <td>{{$service->first_description}}</td>
                  <td>{{$service->second_heading}}</td>
                  <td>{{$service->second_description}}</td>
                  <td>{{$service->icon}}</td>
                 
                  <td>
                      <a title="edit" class="btn-sm btn btn-primary" href="{{route('services.edit', $service->id)}}"><i class="far fa-edit"></i></a>
                      <a title="Delete" id="delete" class="btn-sm btn btn-danger" href="{{route('services.delete', $service->id)}}"><i class="far fa-trash-alt"></i></a>
                  </td>
                </tr>
               @endforeach
          </tbody>
            </table>
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