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
                <h2>Pacakge List</h2>
                <a href="{{route('pacakges.add')}}" class="float-right btn btn-success btn-sm"> <i class="fas fa-plus"></i> Add Pacakge</a>
              </div>
                <div class="card-body">
              <table id="table_id" class="table table-bordered table-hover table-responsive">
              <thead>
                <tr>
                  <th scope="col">SL</th>
                  <th scope="col">Course Title</th>
                  <th scope="col">Course Price</th>
                  <th scope="col">Delevery Mode</th>
                  <th scope="col">Course Start</th>
                  <th scope="col">Course End</th>
                  <th scope="col">Support</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
             <tbody>
                  @foreach($alldata as $key => $course)
                 <tr>
                 <th scope="row">{{$key+1}}</th>
                 <td>{{$course->course_title}}</td>
                 <td>{{$course->course_price}}</td>
                 <td>{{$course->delivery_mode}}</td>
                 <td>{{$course->course_start}}</td>
                 <td>{{$course->course_end}}</td>
                 <td>{{$course->support}}</td>
                 <td>
                   <a title="edit" class="btn-sm btn btn-primary" href="{{route('pacakges.edit', $course->id)}}"><i class="far fa-edit"></i></a>
                   <a title="Delete" id="delete" class="btn-sm btn btn-danger" href="{{route('pacakges.delete', $course->id)}}"><i class="far fa-trash-alt"></i></a>
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