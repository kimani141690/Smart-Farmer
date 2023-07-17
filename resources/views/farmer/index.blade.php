<!-- report_index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
    <link rel="stylesheet" href="{{ asset('css/farmer.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<body>
@include('farmer.sidebar')

<h2 style="color: black; margin-left: 18%" >Reports</h2>


<div class="reportscontainer"  >



    <div class="report-container" >
        <div class="report-card">
            <label> Orders Today</label>
            <h1>3 </h1>
        </div>

        <div class="report-card">
            <label> Monthly Orders</label>
            <h1>6 </h1>
        </div>
        <div class="report-card">
            <label>Pending Orders </label>
            <p>7 </p>
        </div>
        <div class="report-card">
            <label>Confirmed Orders </label>
            <h1> 6</h1>
        </div>

        <div class="report-card">
            <h3>My products </h3>
            <p> 7 </p>
        </div>

        <div class="report-card">
            <label>Number of Customers</label>
            <h1> 5 </h1>
        </div>
    </div>
    <br>
</div>
</body>
</html>
