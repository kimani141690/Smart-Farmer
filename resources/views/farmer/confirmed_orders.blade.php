<!-- confirmed_orders.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Confirmed Orders</title>
    <link rel="stylesheet" href="{{ asset('css/farmer.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
@include('farmer.sidebar')


<h2 id="confirmedorderstitle">Confirmed Orders</h2>
<br>
<!-- Add the search bar -->
<form action="confirmed_orders.php" method="GET" class="searchbarbyorder">
    <input type="text" name="search" placeholder="Search by Order ID">
    <input type="submit" value="Search" id="searchbarbyordersubmit">
</form>
<br>
<div class="confirmedordercontainer">
<!-- Render the confirmed orders table -->
<br>
<table>
    <thead>
    <tr>
        <th>Order ID</th>
        <th>Customer ID</th>
        <th>Date Confirmed</th>
    </tr>
    </thead>
    <tbody>

    <td>order 1</td>
    <td>23</td>
    <td> 23/23/04</td>
    <!-- Loop through the confirmed orders and render each row -->

        <tr>
            -
            <td>   confirmedOrder->id</td>
            <td>   confirmedOrder->customer_id</td>
            <td>   confirmedOrder->date_confirmed</td>
      </tr>

    </tbody>
    <br>
</table>
<br>
</body>
</html>
