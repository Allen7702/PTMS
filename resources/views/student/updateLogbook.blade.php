

<h1>Week {{ $activities[0]->week_number }}</h1>

@foreach($activities as $activity)
<form action="{{ route('student.dashboard.updateActivity', ['id' => $activity->id]) }}" method="POST">
    @csrf
    @method('patch')

    <div>
        <label>Date</label>
        <input type="date" name="date" value="{{ $activity->date }}" disabled>
    </div>

    <div>
        <label>Activity</label>
        <textarea name="activity">{{ $activity->activity }}</textarea>
    </div>

    <button type="submit">Update</button>
</form>
@endforeach

<form method="post" action="{{ route('student.dashboard.updateWeeklyActivity', $weeklyActivity->id) }}">
    @csrf
    @method('patch')

    <div>
        <label>Weekly Description</label>
        <textarea name="weekly_description">{{ $weeklyActivity->weekly_description }}</textarea>
    </div>

    <div>
        <label>Tools Used</label>
        <textarea name="tools_used">{{ $weeklyActivity->tools_used }}</textarea>
    </div>

    <div>
        <label>Image</label>
        <input type="file" name="image">
        <img src="/storage/{{ $weeklyActivity->image }}">
    </div>

    <button type="submit">Update</button>
</form>

