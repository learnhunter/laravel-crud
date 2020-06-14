<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
     <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('public/template/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('public/template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('public/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('public/template/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('public/template/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('public/template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('public/template/plugins/daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('public/template/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('public/template/plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('public/template/plugins/toaster/toastr.css')}}">
   <link rel="stylesheet" href="{{ asset('public/template/plugins/bootstrap-sweetalert/dist/sweetalert.css')}}">
    <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('public/template/plugins/summernote/summernote-bs4.css')}}">
   
</head>
<body >


  @guest
  @else
  <div class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
     <!-- Navbar -->
     <nav class="main-header navbar navbar-expand navbar-white navbar-light">
       <!-- Left navbar links -->
       <ul class="navbar-nav">
         <li class="nav-item">
           <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
         </li>
       
       </ul>

     

       <!-- Right navbar links -->
       <ul class="navbar-nav ml-auto">
         <!-- Messages Dropdown Menu -->
         <li class="nav-item dropdown">
           <a class="nav-link" data-toggle="dropdown" href="#">
             <i class="far fa-comments"></i>
             <span class="badge badge-danger navbar-badge">3</span>
           </a>
           <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
             <a href="#" class="dropdown-item">
               <!-- Message Start -->
               <div class="media">
                 <img src="{{ asset('public/template/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                 <div class="media-body">
                   <h3 class="dropdown-item-title">
                     Brad Diesel
                     <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                   </h3>
                   <p class="text-sm">Call me whenever you can...</p>
                   <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                 </div>
               </div>
               <!-- Message End -->
             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item">
               <!-- Message Start -->
               <div class="media">
                 <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                 <div class="media-body">
                   <h3 class="dropdown-item-title">
                     John Pierce
                     <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                   </h3>
                   <p class="text-sm">I got your message bro</p>
                   <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                 </div>
               </div>
               <!-- Message End -->
             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item">
               <!-- Message Start -->
               <div class="media">
                 <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                 <div class="media-body">
                   <h3 class="dropdown-item-title">
                     Nora Silvester
                     <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                   </h3>
                   <p class="text-sm">The subject goes here</p>
                   <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                 </div>
               </div>
               <!-- Message End -->
             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
           </div>
         </li>
         <!-- Notifications Dropdown Menu -->
         <li class="nav-item dropdown">
           <a class="nav-link" data-toggle="dropdown" href="#">
             <i class="far fa-bell"></i>
             <span class="badge badge-warning navbar-badge">15</span>
           </a>
           <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
             <span class="dropdown-item dropdown-header">15 Notifications</span>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item">
               <i class="fas fa-envelope mr-2"></i> 4 new messages
               <span class="float-right text-muted text-sm">3 mins</span>
             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item">
               <i class="fas fa-users mr-2"></i> 8 friend requests
               <span class="float-right text-muted text-sm">12 hours</span>
             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item">
               <i class="fas fa-file mr-2"></i> 3 new reports
               <span class="float-right text-muted text-sm">2 days</span>
             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
           </div>
         </li>
         <li class="nav-item">
           <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
             <i class="fas fa-th-large"></i>
           </a>
         </li>
       </ul>
     </nav>
     <!-- /.navbar -->

     <!-- Main Sidebar Container -->
     <aside class="main-sidebar sidebar-dark-primary elevation-4">
       <!-- Brand Logo -->
       <a href="index3.html" class="brand-link">
         <img src="{{ asset('public/template/dist/img/AdminLTELogo.png') }}" alt="" class="brand-image img-circle elevation-3"
              style="opacity: .8">
         <span class="brand-text font-weight-light">LearnHunter</span>
       </a>

       <!-- Sidebar -->
       <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
           <div class="image">
             <img src="{{ asset('public/template/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
           </div>
           <div class="info">
             <a href="#" class="d-block">{{ Auth::user()->name }}</a>
           </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
           <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
             <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
             <li class="nav-item ">
               <a href="{{ route('home') }}" class="nav-link active">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>
                   Dashboard
                 
                 </p>
               </a>
             </li>
        

             <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-copy"></i>
                 <p>
                 Categories
                   <i class="fas fa-angle-left right"></i>
                 </p>
               </a>
               <ul class="nav nav-treeview">
                 <li class="nav-item">
                   <a href="{{ route('categories') }}" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Category</p>
                   </a>
                 </li>
                 <li class="nav-item">
                   <a href="{{ route('subcategories') }}" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Subcategory</p>
                   </a>
                 </li>
               </ul>
             </li>

              <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-copy"></i>
                 <p>
                 District
                   <i class="fas fa-angle-left right"></i>
                 </p>
               </a>
               <ul class="nav nav-treeview">
                 <li class="nav-item">
                   <a href="{{ route('district') }}" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>District</p>
                   </a>
                 </li>
                 <li class="nav-item">
                   <a href="{{ route('subdistrict') }}" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Sub-District</p>
                   </a>
                 </li>
               </ul>
             </li>

              <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-copy"></i>
                 <p>
                 Posts
                   <i class="fas fa-angle-left right"></i>
                 </p>
               </a>
               <ul class="nav nav-treeview">
                 <li class="nav-item">
                   <a href="{{ route('insert.post') }}" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Add Post</p>
                   </a>
                 </li>
                 <li class="nav-item">
                   <a href="{{ route('all.post') }}" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>All Post</p>
                   </a>
                 </li>
               </ul>
             </li>

               <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-copy"></i>
                 <p>
                 Settings
                   <i class="fas fa-angle-left right"></i>
                 </p>
               </a>
               <ul class="nav nav-treeview">
                 <li class="nav-item">
                   <a href="{{ route('social.setting') }}" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Social Setting</p>
                   </a>
                 </li>
                 <li class="nav-item">
                   <a href="{{ route('seo.setting') }}" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>SEO Setting</p>
                   </a>
                 </li>
                  <li class="nav-item">
                   <a href="{{ route('namaz.setting') }}" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Prayer Time</p>
                   </a>
                 </li>
                  <li class="nav-item">
                   <a href="{{ route('livetv.setting') }}" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>LiveTV Setting</p>
                   </a>
                 </li>
                   <li class="nav-item">
                   <a href="{{ route('notice.setting') }}" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Notice Setting</p>
                   </a>
                 </li>
                 <li class="nav-item">
                   <a href="{{ route('important.website') }}" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Important Website</p>
                   </a>
                 </li>
               </ul>
             </li>

               <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-copy"></i>
                 <p>
                 Gallery
                   <i class="fas fa-angle-left right"></i>
                 </p>
               </a>
               <ul class="nav nav-treeview">
                 <li class="nav-item">
                   <a href="{{ route('photos.gallery') }}" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Photo Gallery</p>
                   </a>
                 </li>
                 <li class="nav-item">
                   <a href="{{ route('video.gallery') }}" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Video gallery</p>
                   </a>
                 </li>
                
                
               </ul>
             </li>


          
          
             <li class="nav-header">LABELS</li>
             <li class="nav-item">
               <a href="{{ route('user.logout') }}" class="nav-link">
                 <i class="nav-icon far fa-circle text-danger"></i>
                 <p class="text">logout</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('password.change') }}" class="nav-link">
                 <i class="nav-icon far fa-circle text-warning"></i>
                 <p>Passowrd Change</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="#" class="nav-link">
                 <i class="nav-icon far fa-circle text-info"></i>
                 <p>Informational</p>
               </a>
             </li>
           </ul>
         </nav>
         <!-- /.sidebar-menu -->
       </div>
       <!-- /.sidebar -->
     </aside>
   </div>
 </div>

  @endguest



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('public/template/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('public/template/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('public/template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('public/template/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{ asset('public/template/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
<script  src="{{ asset('public/template/plugins/toaster/toastr.min.js')}}"></script>
<script  src="{{ asset('public/template/plugins/bootstrap-sweetalert/dist/sweetalert.min.js')}}"></script>

<!-- ChartJS -->
<script src="{{ asset('public/template/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('public/template/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('public/template/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('public/template/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('public/template/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('public/template/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('public/template/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('public/template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('public/template/plugins/summernote/summernote-bs4.min.js') }}"></script>

<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

<!-- overlayScrollbars -->
<script src="{{ asset('public/template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/template/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('public/template/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('public/template/dist/js/demo.js') }}"></script>
 

 <script>
     @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
  </script>

    <script>
            $(document).on("click", "#delete", function(e){
                e.preventDefault();
                 var link = $(this).attr("href");
                 swal({
                  title: "Are you sure?",
                  text: "You will not be able to recover this imaginary file!",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Yes, delete it!",
                  cancelButtonText: "No, cancel!",
                },
                function(isConfirm) {
                  if (isConfirm) {
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                    window.location.href = link;
                  } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                  }
                });
               });
       </script>


</body>
</html>
