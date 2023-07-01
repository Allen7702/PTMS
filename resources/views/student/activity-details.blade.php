@extends('layouts.navbar')

@section('content')
<table class="w-2/3 mx-auto md:m-16 border border-black mb-4 table-auto border-collapse border">
    <thead>
      <tr>
        <td class="border border-black px-4 py-2">
          WEEK NO: {{ $activities[0]->week_number }}
        </td>
        <td class="border border-black px-4 py-2 text-center">
        FROM: &nbsp;&nbsp;{{ $activities->first()->date }}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TO: &nbsp;&nbsp;{{ $activities->last()->date }}
        </td>
      </tr>
      <tr>
        <th class="border border-black px-4 py-2">DAY / DATE</th>
        <th class="border border-black px-4 py-2">ACTIVITY</th>
      </tr>
    </thead>
    <tbody>
      @foreach($activities as $activity)
        <tr>
          <th class="border border-black px-4 py-2 text-center">{{ date('l', strtotime($activity->date)) }} </br> {{ $activity->date }}</th>
          <td class="border border-black px-4 py-2">{{ $activity->activity }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
  @if($weeklyActivity)
  
    <h3 class="text-lg font-bold w-2/3 mx-auto">Details Of the Main Job of the Week</h3>
    <div class="operation mb-4">
      <table class="w-2/3 mx-auto border border-black">
        <tr>
          <th class="border border-black px-4 py-2">Operation</th>
          <th class="border border-black px-4 py-2">Machinery/Tools Used</th>
        </tr>
        <tr>
          <td class="border border-black px-4 py-2 w-3/4">{{ $weeklyActivity->weekly_description }}</td>
          <td class="border border-black px-4 py-2">{{ $weeklyActivity->tools_used }}</td>
        </tr>
      </table>
      <div class="w-2/3 mx-auto mt-4">
      <h2 class="text-lg font-bold">Image</h2>
        @if($weeklyActivity->image)
            <img src="{{ asset('img/'.$weeklyActivity->image) }}" alt="Weekly Activity Image" style="width: 100%; height: auto;">
        @else
            <p>No image provided.</p>
        @endif
      </div>
    </div>
  @endif
  
</div>
@endsection
