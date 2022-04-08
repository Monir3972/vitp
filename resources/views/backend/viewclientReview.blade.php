@extends('backend.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Client Review</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Client Review</li>
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
                <h2>Client Review List</h2>
                <a href="{{route('clients.add')}}" class="float-right btn btn-success btn-sm"> <i class="fas fa-plus"></i> Add Client Review</a>
              </div>
                <div class="card-body">
              <table id="table_id" class="table table-bordered table-hover table-responsive">
              <thead>
                <tr>
                  <th scope="col">SL</th>
                  <th scope="col">Image</th>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Company</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                    @foreach($alldata as $key => $review)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                   <td><img src ="{{(!empty($review->image))?url('public/upload/clientReview_images/'.$review->image):url('public/upload/no_images.png')}}" style="width:150px; height:160px; border:1px solid #ddd"></td>
                  <td>{{$review->name}}</td>
                  <td>{{$review->description}}</td>
                  <td>{{$review->company}}</td>
                  <td>
                      <a title="edit" class="btn-sm btn btn-primary" href="{{route('clients.edit', $review->id)}}"><i class="far fa-edit"></i></a>
                      <a title="Delete" id="delete" class="btn-sm btn btn-danger" href="{{route('clients.delete', $review->id)}}"><i class="far fa-trash-alt"></i></a>
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