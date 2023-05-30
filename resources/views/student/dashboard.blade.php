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



<!-- Upper Section -->

    <div class="upper mt-2">
      <span class=" px-3">
     <a href="#">Application </a> 
      <a href="#">/ {{ Auth::user()->name }} (Udicti-Coict)</a></span>
      <div class="item-flex">
       <div > 
        <button type="submit" class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold mt-2"><i class="fa-regular fa-pen-to-square"></i>Edit</button>
       </div>
       <div>
        <a href="#">2 Attachments</a>
        <a href="#"> Action</a>
       </div>
       <div> <a href="#">1/1</a></div>
      </div>
    </div>
    


<!--Lower Section -->
  <div class="flex">
      <!--Left section-->
    <div class=" w-large ">

      <div class="relative ">
      
        <div class="flex justify-end ">
          <p class="mr-4 py-2 ">DRAFT</p>
          <p class="mr-4 py-2 ">SUBMITTED</p>
          <p class="mr-4 py-2 px-2 bg-gray-300">ACCEPTED</p>
          <p class="mr-4 py-2 ">REJECTED</p>
        </div>
      </div>

    <div class="bg-gray-300 vh-100 container ">
     {{-- fist --}}
     <div class="pt-3 bg-gray-300">
       
     <div class="col-12 col-sm-6 container ">
      <div class="card card-primary card-outline card-outline-tabs">
      <div class="flex justify-between px-4 mt-4">
        <div>
          <p class="mr-4 mb-4">Application date</p>
          <p class="mr-4 mb-2">Company</p>
          <p class="mr-4 mb-5">Confirmation Letter</p>
        </div>
        <div>
          <p class="mr-72 mb-4 text-gray-600">|  06/23/2022 </p>
          <p class="mr-4 mb-2 text-gray-600">|  Udicti-Coict </p>
          <p class="mr-4 mb-5 text-gray-600">|  <i class="fa-solid fa-download" style="color: #a7aaaf;"></i></p>
        </div>
        </div>
        <div class="card-header p-0 border-bottom-0">
          <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false">Arrival note</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Supervisor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Final Report</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="true">Logbook</a>
            </li>
          </ul>
        </div>
        <div class="card-body ">
          <div class="tab-content" id="custom-tabs-four-tabContent">
            <div class="tab-pane fade" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
             Arrival note      | <i class="fa-solid fa-download" style="color: #a7aaaf;"></i>
            </div>
            <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
            Supervisor         |  Diana 
          </div> 
            <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
            Final Report        |  <i class="fa-solid fa-download" style="color: #a7aaaf;"></i>
            </div>
            <div class="tab-pane fade active show" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab" >
              {{-- ****** --}}
            <div class="flex justify-between px-4 my-4 ">
        <div >
          <p class="mr-4 text-lg">Logbook report Submission</p>
          <p class="mr-4 text-base text-gray-600">Manage all your existing logbooks or add new logbook</p>
        </div>
        <div>
          <p class="mr-4"><button type="submit" id="linkModal" class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold mt-2">+ Add new submission</button></p>
        </div>
        </div>
       <!-- /.card-header -->
       <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>File Submission</th>
                      <th>Last Modified</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-widget="expandable-table" aria-expanded="false">

                      @foreach($activities as $activity)
                      <tr data-widget="expandable-table" aria-expanded="false">
                      <td>1</td>
                      <td>{{ $formData['weekNumber'] }}</td>
                      <td>{{ $formData['lastModifiedDate'] }}</td>
                          <td>
                              <h1>{{ $formData['dateRange'] }}</h1>
                          </td>
                          <td>
                              <p>Submitted</p>
                          </td>
                          <td><i class="fa-solid fa-download" style="color: #a7aaaf;"></i></td>
                        </tr>
                  @endforeach
                     
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            {{-- ******* --}}
            {{-- @@@@@@@@@ --}}
           
            <div id="modalpop" class="offmodal">
        <div class="modal-container mx-5">
      
      <div class="flex justify-end">
         <button type="button" class="closet" data-dismiss="modalpop" aria-label="Close"><span aria-hidden="true">&times;</span></button>  
        </div>
        <div id="step1" class="mx-5">
        <form method="post" action="{{ route('dashboard.store') }}" enctype="multipart/form-data">
        @csrf

                        <label class="my-2">Week</label>
                        <select name="week_number" class="formclassy mb-4">
                          <option value="1">Week 1</option>
                          <option value="2">Week 2</option>
                          <option value="3">Week 3</option>
                          <option value="4">Week 4</option>
                          <option value="5">Week 5</option>
                          <option value="6">Week 6</option>
                          <option value="7">Week 7</option>
                          <option value="8">Week 8</option>
                        </select>
        
                        <label for="start-date" class="ml-5"><i class="fas fa-calendar-alt"></i> Start Date:
                        </label>
                        <input type="date" id="start_date" name="start_date" onchange="setWeekDates()">

                       
                        
                <div class="card-body table-responsive p-0" style="height: 450px;">       
                <table class="table table-bordered table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>DAY/DATE</th>
                      <th>ACTIVITY</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tbody id="activity-table">
                      @for ($i = 0; $i < 5; $i++)
                          <tr data-widget="expandable-table" aria-expanded="false">
                              <td>
                                <h1 id="day[{{ $i }}]"></h1>
                                <input class="text-center mb-2" type="hidden" name="activities[{{ $i }}][date]" id="activities[{{ $i }}].date" class="form-control">                              </td>
                              <td>
                                  <textarea  placeholder="Enter description" name="activities[{{ $i }}][activity]" id="activities[{{ $i }}].activity" class="form-control"></textarea>
                              </td>
                          </tr>
                      @endfor
                  </tbody>
                 </table>
               
                        
                    
                        </div>
                        <center>
                          <button type="submit" class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold mt-2">Save Submission</button>
                          <input type="submit" id="linkModal" class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold mt-2" value="cancel">
                          <button type="button" class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold mt-2" onclick="nextStep()">Next</button>
                          {{-- <input type="submit" class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold mt-2" value="Main Job"> --}}
                          </center>
                        </form>        
        </div>

        <div id="step2" class="form-container hidden">
         
          <div class=" table-responsive px-5">
            <h2>Activity Description</h2>
            <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
              @csrf

            <table class="table table-bordered table-head-fixed text-nowrap " style="height: 300px;">
             <thead>
              <tr>
                <th>DESCRIPTION</th> <th>TOOLS</th>
              </tr>
             </thead>
             <tbody>
              <tr>
                <td><textarea id="summernote" name="weekly_description" class="form-control" required></textarea></td>
                 <td><textarea id="tools" name="tools_used" class="form-control"></textarea>
                </td>
              </tr>
              <tbody>
            </table>
            <input type="file" id="image" name="image" class="form-control">

           </div>
            <button type="submit" class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold mt-2">Submit</button>
            <button type="button" class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold mt-2" onclick="prevStep()">Back</button>
          </form> 
        </div>
        
      
       
   </div>
</div>
            {{-- @@@@@@@@@ --}}
           
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>
        </div>
     {{-- fist --}}
    </div>
    
     

    </div>
     
   <!--Right section-->
  <div class=" w-small">
  <div class="flex justify-between px-4 mt-4 mb-4">
    <div>
    <a  class="mr-2" href="#">Send message </a>
    <a href="#">Log note </a>
   </div>
    <div>
      <a href="#">2 </a>
      <a href="#">Following </a>
      <a href="#">1 </a>
    </div>
  </div>

   <div class="flex items-center justify-center">
    <div class="border-t  border-gray-500 h-1 w-20 mr-2"></div>
    <div class="text-center   whitespace-no-wrap">June 24,2022</div>
    <div class="border-t  border-gray-500 h-1 w-20 ml-2"></div>
   </div>

   <div class="bg-gray-200 m-2 p-2 border-radius">
    <div class="flex ml-2">
      <div>
      <i class="fa-solid fa-camera fa-xl" style="color: #919eb6;margin-top:8px;margin-right:2px;"></i></div>
    <div class="ml-2"> <h1 class="text-gray-500"> Note by Allen A Mgeyekwa</h1>  
      <h1 class="ml-2"> <li>PT Allocation created</li></h1> </div>  
                 
       </div>

   </div>

  </div>




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