<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Virtual It | Dashboard</title>

<!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{asset('public/backend')}}/dist/css/style.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.css">
  
  <!--sweet alert-->
  <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <script src="{{asset('public/backend')}}/plugins/jquery/jquery.min.js"></script>
  <style>
      .notifyjs-cornner{
          z-index:10000!important;
      }
  </style>
  <!--notify js cdn-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{"../home"}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
    
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          
          <span class="">{{ Auth::user()->name }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();" class="dropdown-item dropdown-footer">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{asset('public/backend')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Virtual IT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
        </div>
        <div class="info">
          <a href="#" class="d-block">  <span class="">{{ Auth::user()->name }}</span></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      
      <nav class="mt-2">
          
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            @if(Auth::user()->usertype=='Admin')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Users
                <i class="fas fa-angle-left right"></i>
                <span class=""></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('userview') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Users</p>
                </a>
              </li>
            </ul>
          </li>
        @endif
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Profile
                <i class="fas fa-angle-left right"></i>
                <span class=""></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('profiles.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Your Profile</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="{{ route('profiles.changepassword')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul>
          </li>
        
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Employee
                <i class="fas fa-angle-left right"></i>
                <span class=""></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('employee.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Employee</p>
                </a>
              </li>
            </ul>
          </li>
     
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Logo
                <i class="fas fa-angle-left right"></i>
                <span class=""></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('logos.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Logo</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Slider
                <i class="fas fa-angle-left right"></i>
                <span class=""></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('sliders.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Slider</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage About
                <i class="fas fa-angle-left right"></i>
                <span class=""></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('about.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View About</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Service
                <i class="fas fa-angle-left right"></i>
                <span class=""></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('services.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service Details</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Counter Plugin
                <i class="fas fa-angle-left right"></i>
                <span class=""></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('counters.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Counter Plugin Details</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Portfolio
                <i class="fas fa-angle-left right"></i>
                <span class=""></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('portfolios.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Portfolio Details</p>
                </a>
              </li>
            </ul>
          </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Pacakge
                <i class="fas fa-angle-left right"></i>
                <span class=""></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('pacakges.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pacakge Details</p>
                </a>
              </li>
            </ul>
          </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Clients Review
                <i class="fas fa-angle-left right"></i>
                <span class=""></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('clients.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clients Review Details</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
      </aside>
    @yield('content')
    
    @if(session()->has('success'))
    <script type="text/javascript">
        $(function(){
            $.notify("{{session()->get('success')}}",{
                globalPosition:'top right',className:'success'
            });
        });
    </script>
    @endif
    
     @if(session()->has('error'))
    <script type="text/javascript">
        $(function(){
            $.notify("{{session()->get('error')}}",{
                globalPosition:'top right',className:'error'
            });
        });
    </script>
    @endif
     
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://www.virtualitprofessional.net/">Virtual It Professonal</a></strong>
        All rights reserved.
      </footer>
    
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('public/backend')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('public/backend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="{{asset('public/backend')}}/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{asset('public/backend')}}/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{asset('public/backend')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{asset('public/backend')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('public/backend')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{asset('public/backend')}}/plugins/moment/moment.min.js"></script>
    <script src="{{asset('public/backend')}}/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('public/backend')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="{{asset('public/backend')}}/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('public/backend')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('public/backend')}}/dist/js/adminlte.js"></script>
    <!-- jquery-validation -->
    <script src="{{asset('public/backend')}}/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="{{asset('public/backend')}}/plugins/jquery-validation/additional-methods.min.js"></script>
    <!--datatable-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.js"></script>
     <script>
      $(document).ready( function () {
        $('#table_id').DataTable();
    } );
    </script>
    
    <script  type="text/javascript">
         $(function(){
     $(document).on('click','#delete',function(e){
     e.preventDefault();
     var link = $(this).attr("href");
        Swal.fire({
          title: 'Are you sure?',
         text: "Delete this Data!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
              window.location.href = link;
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          }
        })
     });
     });
    </script>
    
    <script type="text/javascript">
        $(document).ready(function(){
        $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload = function (e){
        $('#showImage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
        });
        });
    </script>
     <script type="text/javascript">
        $(document).ready(function(){
        $('#image2').change(function(e){
        var reader = new FileReader();
        reader.onload = function (e){
        $('#showImage2').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
        });
        });
    </script>
    </body>
    </html>
