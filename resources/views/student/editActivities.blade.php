<form method="post" action="{{ route('student.updateActivities', $activities[0]->week_number) }}" enctype="multipart/form-data">
    @csrf
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
                <!-- Hidden input for the date -->
                <td>
                    <input type="hidden" name="activities[{{ $loop->index }}][date]" value="{{ $activity->date }}">
                    <!-- Display date -->
                    {{ date('l', strtotime($activity->date)) }}<br>{{ $activity->date }}
                </td>

                <!-- Fill the activity field with current value -->
                <td>
                    <textarea id="activity-{{ $loop->index }}" name="activities[{{ $loop->index }}][activity]" class="form-control">{{ $activity->activity }}</textarea>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Fill the weekly description field with current value -->
    <div class="form-group">
        <label for="weekly_description">Weekly Description:</label>
        <textarea id="weekly_description" name="weekly_description" class="form-control">{{ $weeklyActivity->weekly_description }}</textarea>
    </div>

    <!-- Fill the tools used field with current value -->
    <div class="form-group">
        <label for="tools_used">Tools Used:</label>
        <textarea id="tools_used" name="tools_used" class="form-control">{{ $weeklyActivity->tools_used }}</textarea>
    </div>

    <!-- File input for the image -->
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" id="image" name="image" class="form-control-file">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

