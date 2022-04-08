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
                <h2>Portfolio List</h2>
              
                <a href="{{route('portfolios.add')}}" class="float-right btn btn-success btn-sm"> <i class="fas fa-plus"></i> Add Portfolio</a>
              
              </div>
                <div class="card-body">
              <table id="table_id" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th scope="col">SL</th>
                  <th scope="col">Project Link</th>
                  <th scope="col">Large Image</th>
                  <th scope="col">Small Image</th>
                  <th scope="col">Project Title</th>
                  <th scope="col">Small Description</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($alldata as $key => $portfolio)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$portfolio->project_link}}</td>
                  <td><img src ="{{(!empty($portfolio->large_image))?url('public/upload/portfolio_images/'.$portfolio->large_image):url('public/upload/no_images.png')}}"></td>
                  <td><img src ="{{(!empty($portfolio->small_image))?url('public/upload/portfolio_images/'.$portfolio->small_image):url('public/upload/no_images.png')}}"></td>
                  <td>{{$portfolio->project_title}}</td>
                  <td>{{$portfolio->small_description}}</td>
                 <td> 
                <a title="edit" class="btn-sm btn btn-primary" href="{{route('portfolios.edit', $portfolio->id)}}"><i class="far fa-edit"></i></a>
                <a title="Delete" id="delete" class="btn-sm btn btn-danger" href="{{route('portfolios.delete', $portfolio->id)}}"><i class="far fa-trash-alt"></i></a>
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