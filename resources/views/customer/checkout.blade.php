<!-- checkout.blade.php -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Checkout</title>
    <link rel="stylesheet" href="{{ asset('css/customer.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body>
<div id="sidebar">
    @include('customer.sidebar')
</div>
    <br><br><br>
<div class="checkoutcontainer">
<br>
    <h2>Checkout</h2>
    <form action="" method="POST" class="coutcont">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="amount">Total Amount:</label>
            <input type="text" id="amount" name="amount" required>
        </div>
        <div class="coutbutton-container">
            <button type="button" id="confirmPaymentButton">Confirm Payment</button>
        </div>
    </form>
    <br>
</div>
<br><br>

<div id="paymentModal" class="modal">
<br>
    <div class="modal-content">
        <h3>Total Cost of Payment</h3>
        <p id="paymentAmount"></p>
        <button id="payButton">Pay Now</button>
    </div>
    <br>
</div>

<script>
    // Open the payment modal when the Confirm Payment button is clicked
    document.getElementById("confirmPaymentButton").addEventListener("click", function() {
        var amount = document.getElementById("amount").value;
        document.getElementById("paymentAmount").textContent = "Total Amount: " + amount;
        document.getElementById("paymentModal").style.display = "block";
    });

    // Close the payment modal when the Pay Now button is clicked
    document.getElementById("payButton").addEventListener("click", function() {
        // Perform the logic to make the payment via the M-Pesa API
        // You can make an AJAX request to the server-side code to handle the payment process
        console.log("Payment made successfully");
        // Redirect to the order summary page
        window.location.href = "";
    });
</script>
</body>
</html>
