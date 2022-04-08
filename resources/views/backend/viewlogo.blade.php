@extends('backend.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Logo</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Logo</li>
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
                <h2>Logo List</h2>
                @if($logoCount<1)
                <a href="{{route('logos.add')}}" class="float-right btn btn-success btn-sm"> <i class="fas fa-plus"></i> Add Logo</a>
                @endif
              </div>
                <div class="card-body">
              <table id="table_id" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th scope="col">SL</th>
                  <th scope="col">Logo</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($alldata as $key => $logo)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td><img src ="{{(!empty($logo->image))?url('public/upload/logo_images/'.$logo->image):url('public/upload/no_images.png')}}" style="width:150px; height:160px; border:1px solid #ddd"></td>
                  <td>
                      <a title="edit" class="btn-sm btn btn-primary" href="{{route('logos.edit', $logo->id)}}"><i class="far fa-edit"></i></a>
                      <a title="Delete" id="delete" class="btn-sm btn btn-danger" href="{{route('logos.delete', $logo->id)}}"><i class="far fa-trash-alt"></i></a>
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