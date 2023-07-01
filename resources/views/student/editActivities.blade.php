@extends('layouts.navbar')

@section('content')
<div class="m-10">
<form method="post" action="{{ route('student.updateActivities', $activities[0]->week_number) }}" enctype="multipart/form-data">
    @csrf
    <table class="w-2/3 mx-auto table table-bordered border-black text-center">
        <thead>
            <tr>
                <th>Date</th>
                <th>Activity</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activities as $activity)
            <tr>
                
                <td>
                    <input type="hidden" name="activities[{{ $loop->index }}][date]" value="{{ $activity->date }}">
                    
                    {{ date('l', strtotime($activity->date)) }}<br>{{ $activity->date }}
                </td>

                <td>
                    <textarea id="activity-{{ $loop->index }}" name="activities[{{ $loop->index }}][activity]" class="form-control">{{ $activity->activity }}</textarea>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="form-group w-2/3 mx-auto">
        <label for="weekly_description">Weekly Description:</label>
        <textarea id="weekly_description" name="weekly_description" class="form-control">{{ $weeklyActivity->weekly_description }}</textarea>
    </div>

    <div class="form-group w-2/3 mx-auto">
        <label for="tools_used">Tools Used:</label>
        <textarea id="tools_used" name="tools_used" class="form-control">{{ $weeklyActivity->tools_used }}</textarea>
    </div>


    <div class="form-group w-2/3 mx-auto">
        <label for="image">Image:</label>
        <input type="file" id="image" name="image" class="form-control-file">
        <button type="submit" class="btn btn-primary bg-blue-400 mt-4">Update</button>
    </div>

    
</form>
</div>

@endsection