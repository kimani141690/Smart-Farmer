<!-- view_order.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>View Order</title>
    <link rel="stylesheet" href="{{ asset('css/farmer.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
@include('farmer.sidebar')

<div class="vieworderscontainerfarmer">

    <div>
        <!-- Add a back button to navigate back to the orders list -->
        <a href="view_orders.bladde.php" id="viewordertitle">Back to Orders</a>
    </div>
    <br>
    <h2 id="viewordertitle">View Order</h2>

    <!-- Render the order information -->

    <p><strong>Order ID:</strong> 1</p>
    <p><strong>Customer Name:</strong> were</p>
    <p><strong>Delivery Address:</strong> 234John street</p>
    <p><strong>Date Ordered:</strong>23/23/4</p>
    <p><strong>Payment Status:</strong> paid</p>
</div>
<br>
<div class="vieworderscontainerfarmer">
    <br>
    <h3 id="viewordertitle">Order Information</h3>

    <!-- Render the product information -->
    <p><strong>Product Ordered:</strong> Minji</p>
    <p><strong>Quantity:</strong>2kg</p>
    <p><strong>Total Order Amount:</strong> 200</p>
    <p><strong>Paid Amount:</strong> 200</p>

</div>
<br>
<div class="vieworderscontainerfarmer">
    <br>
    <h3 id="viewordertitle">Order Information</h3>


</div>
<br>


</body>
</html>
