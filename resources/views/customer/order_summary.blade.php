<!-- order_summary.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Order Summary</title>
    <link rel="stylesheet" href="{{ asset('css/customer.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
<div id="sidebar">
    @include('customer.sidebar')
</div>
    <br><br><br><br>
<div class="order-summarycontainer">
<br>
    <h2>Order Summary</h2>
    <br>
    <div class="order-summary">
        <p>Name: John Doe</p>
        <p>Email: john@example.com</p>
        <p>Phone: 1234567890</p>
        <p>Date Orderd: 23/04/2014</p>
        <p>Total Amount Paid : $100</p>
    </div>
    <br>
    <p>Thank you for your order!</p>
    <br>
</div>
</body>
</html>
