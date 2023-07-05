<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PTMS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  
  <!-- Theme styles -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">

  <!-- summernote css -->
  <link rel="stylesheet" href="{{asset('summernote/summernote-bs4.min.css')}}">


 {{-- toastr --}}
 <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />


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
        <li><a href="#" class="text-lg mx-4">Student</a></li>
        <li><a href="#">Location Preference</a></li>
        <li><a href="#">PT Allocation</a></li>
        <li><a href="#">Resources</a></li>
       </ul>
    </div>
      
   

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
               
                  <p class="mb-1 text-white"> {{ Auth::user()->name }}</p>
               
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <form id="logout-form" method='POST' action="{{route('logout')}}" >
                  @csrf
                <a class="dropdown-item" id="logout-button" href="{{ route('logout') }}">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                  </form>
              </div>
            </li>
    
      
    </ul>
 
  </nav> 
  <!--Navbar-->




@yield('content')





<script>
    const daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    
    function setWeekDates() {
        var startDate = new Date(document.getElementById('start_date').value);
        for (var i = 0; i < 5; i++) {
            var dateInput = document.getElementById(`activities[${i}].date`);
            var dayInput = document.getElementById(`day[${i}]`);
            var newDate = new Date(startDate);
            newDate.setDate(newDate.getDate() + i);
            dateInput.value = newDate.toISOString().slice(0, 10);
            dayInput.innerHTML = `<h1 class="text-center mb-4 text-sm">${daysOfWeek[newDate.getDay()]} </h1>  <h1 class="text-center mb-2">${dateInput.value} </h1>`;
        }
    }
</script>
 <script>
  $(document).ready(function(){
 $('#logout-button').click(function(){
$('#logout-form').submit();
  });
});
 </script>
  <script>
    $(function () {
      // Summernote
      $('#summernote').summernote()
    })
  </script>

  {{-- toastr js --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

  <script>
      $(document).ready(function() {
          toastr.options.timeOut = 10000;
          @if (Session::has('error'))
              toastr.error('{{ Session::get('error') }}');
          @elseif(Session::has('success'))
              toastr.success('{{ Session::get('success') }}');
          @endif
      });

  </script>

<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/demo.js')}}"></script>
<script src="{{asset('js/pop-up.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<!-- JQuery Library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- summernote js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="{{asset('summernote/summernote-bs4.min.js')}}"></script>



<!--Bootstrap Javascript-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>