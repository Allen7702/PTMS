 <!-- Scripts -->
 @vite(['resources/css/app.css', 'resources/js/app.js'])
<!-- Add the necessary CSS styles for PDF styling -->
<style>
    .container {
        font-family: Arial, sans-serif;
        text-align: center;
        margin-top: 20px;
    }
    
    .logo {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    
    .header {
        font-size: 16px;
        margin-bottom: 10px;
    }
    
    .sub-header {
        font-size: 14px;
        margin-bottom: 10px;
    }
    
    .info-row {
        display: flex;
        justify-content: space-between;
        width: 60%;
        margin: 0 auto;
        margin-bottom: 10px;
    }
    
    .info-label {
        font-size: 12px;
    }
    
    .table {
        width: 60%;
        margin: 0 auto;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    
    .table th,
    .table td {
        border: 1px solid #000;
        padding: 8px;
        font-size: 12px;
    }
    
    .operation-table {
        width: 60%;
        margin: 0 auto;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    
    .operation-table th,
    .operation-table td {
        border: 1px solid #000;
        padding: 8px;
        font-size: 12px;
        width: 85%;
    }
    
    .image-container {
        width: 60%;
        margin: 0 auto;
        margin-bottom: 20px;
    }
    
    .image-container img {
        width: 100%;
        height: auto;
    }
</style>

<!-- Add the HTML code with the required styling -->
<div class="container">
    <div class="logo">UNIVERSITY OF DAR ES SALAAM</div>
    <div class="header">COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES</div>
    <div class="sub-header">DEPARTMENT OF ………………………………………………………….</div>
    <div class="sub-header">PRACTICAL TRAINING LOG - BOOK</div>
    
    <div class="info-row">
        <p class="info-label">STUDENTS NAME:{{ Auth::user()->name }} REG. NO: …………………………………</p>
        <p class="info-label">COMPANY/INSTITUTION: ………………………………………………………………</p>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>WEEK NO: {{ $activities[0]->week_number }}</th>
                <th>FROM: &nbsp;&nbsp;{{ $activities->first()->date }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TO:&nbsp;&nbsp; {{ $activities->last()->date }}</th>
            </tr>
            <tr>
                <th>DAY / DATE</th>
                <th>ACTIVITY</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activities as $activity)
            <tr>
                <td>{{ date('l', strtotime($activity->date)) }}<br>{{ $activity->date }}</td>
                <td>{{ $activity->activity }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @if($weeklyActivity)
    <h3 class="sub-header">Details Of the Main Job of the Week</h3>
    <table class="operation-table">
        <tr>
            <th>Operation</th>
            <th>Machinery/Tools Used</th>
        </tr>
        <tr>
            <td>{{ $weeklyActivity->weekly_description }}</td>
            <td>{{ $weeklyActivity->tools_used }}</td>
        </tr>
       
    </table>
    <table class="operation-table" style="margin-top: 10px;">
        <tr>
            <td class="info-label" colspan="2">Comments from Industrial Supervisor</td>
        </tr>
        <tr>
            <td class="info-label" colspan="2">Name: ………………………………………………… Signature: ………………</td>
        </tr>
    </table>

    <div class="image-container">
        <h2 class="sub-header">Image</h2>
        @if($weeklyActivity->image)
        <img src="{{ asset('img/'.$weeklyActivity->image) }}" alt="Weekly Activity Image">
        @else
        <p>No image provided.</p>
        @endif
    </div>
    @endif
</div>
