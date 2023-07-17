<!-- cart.blade.php -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Cart</title>
    <link rel="stylesheet" href="{{ asset('css/customer.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body>

@include('customer.sidebar')

<br>
<div class="cartcontainer">
    <h2>Cart</h2>
    <div class="cart-items" style="display: flex; justify-content: space-between ">
        <!-- Loop through the cart items and render each item -->
        <br>
        <div style="display: flex">
        <div>
            <img src="{{ asset('images/homepage.png') }} " style="height:100px;width: 100px; " alt="product image">
        </div>
        <div class="cart-item">

            <p>Product:name</p>
            <p>Quantity:quantity</p>
            <p>Price:price</p>

        </div>
        </div>

        <div> <button> Remove </button></div>

    </div>
    <div class="checkout-button-container">
        <button onclick="location.href='#'>Checkout</button>
    </div>
</div>
</body>
</html>
