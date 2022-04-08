@extends('backend.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Employee</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Employee</li>
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
                <h2>Employee List</h2>
                <a href="{{route('employee.add')}}" class="float-right btn btn-success btn-sm"> <i class="fas fa-plus"></i> Add Employee</a>
              </div>
                <div class="card-body">
              <table id="table_id" class="table table-bordered table-hover table-responsive">
              <thead>
                <tr>
                  <th scope="col">SL</th>
                  <th scope="col">Name</th>
                  <th scope="col">Designation</th>
                  <th scope="col">Facebook</th>
                  <th scope="col">Linkedin</th>
                  <th scope="col">Github</th>
                  <th scope="col">Image</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
             <tbody>
              @foreach($alldata as $key => $employee)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$employee->name}}</td>
                  <td>{{$employee->designation}}</td>
                  <td>{{$employee->facebook}}</td>
                  <td>{{$employee->linkedin}}</td>
                  <td>{{$employee->github}}</td>
                  <td><img src ="{{(!empty($employee->image))?url('public/upload/employee_images/'.$employee->image):url('public/upload/no_images.png')}}" style="width:150px; height:160px; border:1px solid #ddd"></td>
                  <td>
                      <a title="edit" class="btn-sm btn btn-primary" href="{{route('employee.edit', $employee->id)}}"><i class="far fa-edit"></i></a>
                      <a title="Delete" id="delete" class="btn-sm btn btn-danger" href="{{route('employee.delete', $employee->id)}}"><i class="far fa-trash-alt"></i></a>
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