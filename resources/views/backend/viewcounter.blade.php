@extends('backend.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Counter Plugin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Counter Plugin</li>
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
                <h2>Infos list</h2>
                <a href="{{route('counters.add')}}" class="float-right btn btn-success btn-sm"> <i class="fas fa-plus"></i> Add Data</a>
              </div>
                <div class="card-body">
              <table id="table_id" class="table table-bordered table-hover table-responsive">
              <thead>
                <tr>
                  <th scope="col">SL</th>
                  <th scope="col">Icon</th>
                  <th scope="col">Background Color</th>
                  <th scope="col">Count Start</th>
                  <th scope="col">Count End</th>
                  <th scope="col">Refresh Value</th>
                  <th scope="col">Data Speed</th>
                  <th scope="col">Description</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
             <tbody>
              @foreach($alldata as $key => $counter)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$counter->social_icon}}</td>
                  <td>{{$counter->bgColor}}</td>
                  <td>{{$counter->dataForm}}</td>
                  <td>{{$counter->dataTo}}</td>
                  <td>{{$counter->dataRefresh}}</td>
                  <td>{{$counter->dataSpeed}}</td>
                  <td>{{$counter->description}}</td>
                  <td>
                      <a title="edit" class="btn-sm btn btn-primary" href="{{route('counters.edit', $counter->id)}}"><i class="far fa-edit"></i></a>
                      <a title="Delete" id="delete" class="btn-sm btn btn-danger" href="{{route('counters.delete', $counter->id)}}"><i class="far fa-trash-alt"></i></a>
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