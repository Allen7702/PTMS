@extends('organization.layout')

@section('content')
<div class="w-full px-6 py-6 mx-auto">
  <!-- Student Statistics -->
  <div class="flex flex-wrap -mx-3">
    <!-- Total Students -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans text-sm font-semibold leading-normal">Total Students</p>
                <h5 class="mb-0 font-bold">
                  5,000
                  <span class="text-sm leading-normal font-weight-bolder text-lime-500">+10%</span>
                </h5>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Organizations Offering Training -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans text-sm font-semibold leading-normal">Organizations Offering Training</p>
                <h5 class="mb-0 font-bold">
                  50
                  <span class="text-sm leading-normal font-weight-bolder text-lime-500">+25%</span>
                </h5>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                <i class="ni leading-none ni-briefcase-24 text-lg relative top-3.5 text-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Available Training Opportunities -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full.
            px-3">
            <div>
            <p class="mb-0 font-sans text-sm font-semibold leading-normal">Available Training Opportunities</p>
            <h5 class="mb-0 font-bold">
            100
            <span class="text-sm leading-normal font-weight-bolder text-lime-500">+15%</span>
            </h5>
            </div>
            </div>
            <div class="px-3 text-right basis-1/3">
            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
            <i class="ni leading-none ni-laptop text-lg relative top-3.5 text-white"></i>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <!-- Training Completion Rate -->
<div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
  <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
    <div class="flex-auto p-4">
      <div class="flex flex-row -mx-3">
        <div class="flex-none w-2/3 max-w-full px-3">
          <div>
            <p class="mb-0 font-sans text-sm font-semibold leading-normal">Training Completion Rate</p>
            <h5 class="mb-0 font-bold">
              85%
              <span class="text-sm leading-normal font-weight-bolder text-lime-500">+5%</span>
            </h5>
          </div>
        </div>
        <div class="px-3 text-right basis-1/3">
          <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
            <i class="ni leading-none ni-chart-bar-32 text-lg relative top-3.5 text-white"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

     
       <!-- cards row 2 -->
<div class="flex flex-wrap mt-6 -mx-3">
  <!-- About University Card -->
  <div class="w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
      <div class="flex-auto p-4">
        <div class="flex flex-wrap -mx-3">
          <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
            <div class="flex flex-col h-full">
              <p class="pt-2 mb-1 font-semibold">About Us</p>
              <h5 class="font-bold">University of Dar es Salaam</h5>
              <p class="mb-12">The University of Dar es Salaam is the oldest and biggest public university in Tanzania. It's about people making a difference in the world.</p>
              <a class="mt-auto mb-0 text-sm font-semibold leading-normal group text-slate-500" href="javascript:;">
                Learn More
                <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
              </a>
            </div>
          </div>
          <div class="max-w-full px-3 mt-12 ml-auto text-center lg:mt-0 lg:w-5/12 lg:flex-none">
            <div class="h-full rounded-xl">
              <img class="relative z-20 w-full pt-6 rounded-lg" src="{{asset('img/login.png')}}" alt="University" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Upcoming Events Card -->
  <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
    <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
      <div class="relative h-full overflow-hidden bg-cover rounded-xl" style="background-image: url('./assets/img/events.jpg')">
        <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80"></span>
        <div class="relative z-10 flex flex-col flex-auto h-full p-4">
          <h5 class="pt-2 mb-6 font-bold text-white">Upcoming Events</h5>
          <p class="text-white">CALL FOR PARTICIPATIONS; THE DAR ES SALAAM METHODOLOGY SCHOOL: SOURCES AND METHODS ON SLAVERY AND POST-SLAVERY IN EAST AFRICA!</p>
          <a class="mt-auto mb-0 text-sm font-semibold leading-normal text-white group" href="javascript:;">
            Learn More
            <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- cards row 3 -->
<div class="flex flex-wrap mt-6 mx-5">
  <!-- Calendar Card -->
  <div class="w-full px-3 mb-6 lg:mb-0 lg:w-full lg:flex-none">
    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
      <div class="flex-auto p-4">
        <div class="flex flex-wrap -mx-3">
          <div class="w-full px-3 lg:flex-none">
            <div class="flex flex-col h-full">
              <p class="pt-2 mb-1 font-semibold">University Calendar</p>
              <h5 class="font-bold">Upcoming Events and Deadlines</h5>
              <div class="mb-12">
                
                <iframe src="https://calendar.google.com/calendar/embed?src=781c29de505a642ed4ba0807b39abbcde5f96e4f46e5101959e548730faac356%40group.calendar.google.com&ctz=Africa%2FNairobi" style="border: 0" width="1550" height="800" frameborder="0" scrolling="no"></iframe>              </div>
                <a class="mt-auto mb-0 text-sm font-semibold leading-normal group text-slate-500" href="javascript:;">
                Full Calendar
                <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>







 
@endsection