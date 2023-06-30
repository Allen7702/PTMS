@extends('layouts.navbar')

@section('content')
<div class="container">
    <h2>Activities for Week {{ $activities[0]->week_number }}</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Date</th>
                <th>Activity</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activities as $activity)
                <tr>
                    <td>{{ $activity->date }}</td>
                    <td>{{ $activity->activity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

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
