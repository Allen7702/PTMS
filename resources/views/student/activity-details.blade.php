@extends('layouts.navbar')

@section('content')
<table class="w-full border border-black mb-4 table-auto border-collapse border">
    <thead>
      <tr>
        <td class="border border-black px-4 py-2">
          WEEK NO: {{ $activities[0]->week_number }}
        </td>
        <td class="border border-black px-4 py-2">
        FROM: {{ $activities->first()->date }} TO: {{ $activities->last()->date }}
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
  
    <h3 class="text-lg font-bold mb-2">Details Of the Main Job of the Week</h3>
    <div class="operation mb-4">
      <table class="w-full border border-black">
        <tr>
          <th class="border border-black px-4 py-2">Operation</th>
          <th class="border border-black px-4 py-2">Machinery/Tools Used</th>
        </tr>
        <tr>
          <td class="border border-black px-4 py-2 w-3/4">{{ $weeklyActivity->weekly_description }}</td>
          <td class="border border-black px-4 py-2">{{ $weeklyActivity->tools_used }}</td>
        </tr>
        <tr>
          <td class="flex border border-black px-4 py-2">Comments from Industrial Supervisor</td>
          <td class="border border-black px-4 py-2"></td>
        </tr>
        <tr>
          <td class="border border-black px-4 py-2 w-3/4">Name: …………………………………………………</td>
          <td>Signature: ………………</td>
        </tr>
      </table>
    </div>
  @endif
  
    @if($weeklyActivity)
        <h2>Weekly Activity Description</h2>
        <p>{{ $weeklyActivity->weekly_description }}</p>

        <h2>Tools Used</h2>
        <p>{{ $weeklyActivity->tools_used }}</p>

        <h2>Image</h2>
        @if($weeklyActivity->image)
            <img src="{{ asset('storage/'.$weeklyActivity->image) }}" alt="Weekly Activity Image" style="width: 100%; height: auto;">
        @else
            <p>No image provided.</p>
        @endif
    @endif
</div>
@endsection
