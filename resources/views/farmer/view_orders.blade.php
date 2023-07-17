<!-- view_orders.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>View Orders</title>
    <link rel="stylesheet" href="{{ asset('css/farmer.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
@include('farmer.sidebar')

<h2 id="farmer_view_order_title" >View Orders</h2>
<!-- Add the search bar -->

<form action="view_orders.php" method="GET" class="farmer_view_order_title_searchbar">
    <input type="text" name="search" placeholder="Search by Order ID">
    <input type="submit" value="Search" id="farmer_view_order_title_searchbar_button">
</form>

<!-- Render the orders table -->
<div class="farmervieworderstable">
    <br>
<table>
    <thead>
    <tr>
        <th>Order ID</th>
        <th>Customer Name</th>
        <th>Delivery Address</th>
        <th>Date Ordered</th>
        <th>Payment Status</th>
        <th>Action</th>
        <th>Confirmation</th>
    </tr>
    </thead>
    <tbody>

<!--dummy data to be used in css styling-->
        <tr>
            <td>123</td>
            <td>Jude</td>
            <td>Nyanza</td>
            <td>78787yala</td>
            <td> Paid</td>
            <td>
                <a href="order_details.blade.php">Order Info</a>
            </td>
            <td>
                <!-- Render the order status checkbox -->
                <form action="update_order_status.php" method="POST">
                    @csrf
                    <input type="checkbox" name="order_status" value="confirmed"> Confirm Order
                    <input type="hidden" name="order_id" value="order->id">
                    <input type="submit" value="Save">
                </form>
            </td>
        </tr>
    <!-- Loop through the orders and render each row -->

       <tr>
            <td> order->id </td>
            <td> order->customer_name </td>
            <td> order->delivery_address </td>
            <td> order->date_ordered </td>
            <td> order->payment_status </td>
            <td>
                <a href="orde_details.blade.php?id=order->id">View Order</a>
            </td>
           <td>
                <!-- Render the order status checkbox -->
                <form action="update_order_status.php" method="POST">
                    @csrf
                    <input type="checkbox" name="order_status" value="confirmed">
                    <input type="hidden" name="order_id" value="order->id">
                                       <input type="submit" value="Save">
                </form>
            </td>
        </tr>

    </tbody>
</table>
<br>
</div>
</body>
</html>
