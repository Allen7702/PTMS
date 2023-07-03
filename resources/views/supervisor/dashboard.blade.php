@extends('layouts.supervisor')

@section('content')
<!-- Upper Section -->

<div class="upper mt-2">
  <span class=" px-3">
    <a href="#">Application </a>
    <a href="#">/ Supervisor</a></span>
  <div class="item-flex">
    <div>
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

      <!-- <div class="flex justify-end ">
          <p class="mr-4 py-2 ">DRAFT</p>
          <p class="mr-4 py-2 ">SUBMITTED</p>
          <p class="mr-4 py-2 px-2 bg-gray-300">ACCEPTED</p>
          <p class="mr-4 py-2 ">REJECTED</p>
        </div> -->
    </div>

    <div class="bg-gray-300 vh-100 container ">
      {{-- fist --}}
      <div class="pt-3 bg-gray-300">

        <div class="col-12 col-sm-6 container ">
          <div class="card card-primary card-outline card-outline-tabs">
            <div class="flex justify-between px-4 mt-4">

            </div>
            <div class="card-header p-0 border-bottom-0">
              <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false">Arrival notes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Assigned Students</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Final Reports</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="true">Logbooks</a>
                </li>
              </ul>
            </div>
            <div class="card-body ">
              <div class="tab-pane fade active show" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                {{-- ****** --}}
                <div class="flex justify-between px-4 my-4 ">
                  <div>
                    <p class="mr-4 text-lg">Logbook report Submission</p>
                    <p class="mr-4 text-base text-gray-600">Manage logbook submission from assigned students</p>
                  </div>
                  <!-- <div>
          <p class="mr-4"><button type="submit" id="linkModal" class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold mt-2">+ Add new submission</button></p>
        </div> -->
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">


                  @foreach ($activitiesByUsers as $user => $activities)
                  <h3>{{ $user }}</h3>
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>File Submission</th>
                        <th>Last Modified</th>

                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($activities as $index => $activity)
                      <tr data-widget="expandable-table" aria-expanded="false">
                        <td>{{ $index + 1 }}</td>
                        <td>Log book week {{ $activity->week_number }}</td>
                        <td>{{ $activity-> last_modified }}</td>
                        <td>
                          <a href="{{ url('/activity-details/'.$activity->week_number) }}" class="  btn btn-info mr-2">
                            <i class="fa fa-eye"></i>
                          </a>
                        </td>

                        <!-- Other columns and actions for each activity -->
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  @endforeach

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

                    </div>

                    <div id="step2" class="form-container hidden">

                      <div class=" table-responsive px-5">
                        <h2>Activity Description</h2>
                        
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
        <a class="mr-2" href="#">Send message </a>
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
      <div class="text-center   whitespace-no-wrap">July 01,2023</div>
      <div class="border-t  border-gray-500 h-1 w-20 ml-2"></div>
    </div>

    <div class="bg-gray-200 m-2 p-2 border-radius">
      <div class="flex ml-2">
        <div>
          <i class="fa-solid fa-camera fa-xl" style="color: #919eb6;margin-top:8px;margin-right:2px;"></i>
        </div>
        <div class="ml-2">
          <h1 class="text-gray-500"> Notifications</h1>
          <h1 class="ml-2">
            <li>Allen has submitted the logbook for week 1</li>
            <li>Valence has submitted the logbook for week 2</li>
          </h1>
        </div>

      </div>

    </div>

  </div>


  @endsection