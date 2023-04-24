<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Ionicons -->
  {{-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> --}}
  <!-- Tempusdominus Bootstrap 4 -->
  {{-- <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> --}}
  <!-- iCheck -->
  {{-- <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"> --}}
  <!-- JQVMap -->
  {{-- <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css"> --}}
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">

  <!-- overlayScrollbars -->
  {{-- <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> --}}
  <!-- Daterange picker -->
  {{-- <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css"> --}}
  <!-- summernote -->
  {{-- <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css"> --}}

   <!-- Scripts -->
   @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="hold-transition sidebar-mini layout-fixed">


  <!-- Navbar -->
 <nav class=" navbar navbar-expand color-blue navbar-light">
    <!-- Left navbar links -->

      <div class="d-flex ">
        <a href="pages/widgets.html" class="nav-link" role="button">
          <i class="fa-solid fa-grip fa-xl" style="color: #ffffff;"></i>
        </a>
      </div>
        <div class="menu-icon" onclick="toggleMenu()">      
              <i class="fas fa-bars fa-xl" style="color: #ffffff;"></i>
        </div>
        <div class="dropdown-main">
       <ul class="nav-links">
           <li><a href="#">Student</a></li>
           <li><a href="#">Home</a></li>
       </ul>
    </div>
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars fa-xl" style="color: #ffffff;"></i>
      </button>
  </div>
  <div class="collapse navbar-collapse bg-green" id="navbarNav">
      <ul class="navbar-nav">
          <li class="nav-item">
              <a href="index3.html" class="nav-link text-white">Home</a>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link text-white">Contact</a>
          </li>
      </ul>
      </div> --}}
   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto d-flex ">
      

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa-sharp fa-solid fa-comments" style="color: #d2d5da;"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
          <i class="fa-regular fa-clock" style="color: #c1cde2;"></i>
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
      <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" style="display:flex;" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                
                <i class="fa-solid fa-camera fa-xl" style="color: #919eb6;margin-top:8px;margin-right:2px;"></i>
               
                  <p class="mb-1 text-white">David Greymaax</p>
               
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>
    
      
    </ul>
 
  </nav> 
  <!--Navbar-->



<!-- Upper Section -->
<div class="container-item">
    <div class="upper mt-2">
      <span class=" px-3">
     <a href="#">Application </a> 
      <a href="#">/ Allen A Mgeyekwa (Udicti-Coict)</a></span>
      <div class="item-flex">
       <div > 
        <button>Edit</button>
       </div>
       <div>
        <a href="#">2 Attachments</a>
        <a href="#"> Action</a>
       </div>
       <div> <a href="#">1/1</a></div>
      </div>
    </div>
    


<!--Lower Section -->
    <div class="item-flex ">
      <!--Left section-->
    <div class="bg-blue ">
     <div class="item-flex ">
      <p class="">DRAFT</p>
      <p>DRAFT</p>
      <p>DRAFT</p>
      <p>DRAFT</p>
    </div>


    <div>
      
    </div>


      </div>
<!--Right section-->
<div class="bg-green">
  <div class="flex">
    <div>
    <a href="#">Send message </a>
    <a href="#">Log note </a> </div>
    <div>
      <a href="#">2 </a>
      <a href="#">Following </a>
      <a href="#">1 </a>
    </div>
  </div>

  <div class="flex items-center justify-center">
    <div class="border-t border-b border-gray-500 h-1 w-20 mr-2"></div>
    <div class="text-center text-2xl font-bold">CENTER</div>
    <div class="border-t border-b border-gray-500 h-1 w-20 ml-2"></div>
  </div>

</div>

    </div>





  <section class="content py-5 px-5">
    <div class="container-fluid">

  <div class="card">
    <div class="card-header header-elements-inline">
        <h6 class="card-title">Manage Dorms</h6>
        {{-- {!! Qs::getPanelOptions() !!} --}}
    </div>

    <div class="card-body">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="nav-item"><a href="#all-dorms" class="nav-link active" data-toggle="tab">Manage Dorms</a></li>
            <li class="nav-item"><a href="#new-dorm" class="nav-link" data-toggle="tab"><i class="icon-plus2"></i> Create New Dorm</a></li>
        </ul>

        <div class="tab-content">
                <div class="tab-pane fade show active" id="all-dorms">
                    <table class="table datatable-button-html5-columns">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>

            <div class="tab-pane fade" id="new-dorm">

                <div class="row">
                    <div class="col-md-6">
                        <form class="ajax-store" method="post" action="">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label font-weight-semibold">Name <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input name="name" value="" required type="text" class="form-control" placeholder="Name of Dormitory">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label font-weight-semibold">Description</label>
                                <div class="col-lg-9">
                                    <input name="description" value=""  type="text" class="form-control" placeholder="Description of Dormitory">
                                </div>
                            </div>

                            <div class="text-right">
                                <button id="ajax-btn" type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 </div>
</section>

</div>
{{--Dorm List Ends--}}


<script src="{{asset('js/script.js')}}"></script>
<!--Bootstrap Javascript-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>