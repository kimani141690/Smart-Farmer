<!-- products.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Products Section</title>
    <link rel="stylesheet" href="{{ asset('css/customer.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>

@include('customer.sidebar')

<br>
<div class="allproductscontainer">

    <h2>Products</h2>

    <div class="product-container">
        <br>
        <!-- Loop through the products and render each product card -->
        @foreach($products as $product)
            <div class="oneproduct-card">
                <img src="{{ asset('images/'.$product->image) }}" style="width:80px; height:80px;" alt="product image">
                <h3>{{ $product->name }}</h3>
                <p>Quantity in Stock: {{ $product->quantity }}</p>
                <button onclick="addToCart({{ $product->id }})">Add to Cart</button>
                <br>
            </div>
            <br>
        @endforeach
    </div>
    <br>
</div>

<script>
    function addToCart(productId) {
        // Perform the logic to add the product to the cart
        // You can make an AJAX request to the server-side code to handle the cart functionality
        console.log("Product added to cart:", productId);
    }


    function addToCart(productId) {
        // Make an AJAX request to add the item to the cart
        var url = "{{ route('addToCart') }}";
        var data = {
            product_id: productId
        };

        // Send the AJAX request
        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify(data)
        })
            .then(response => response.json())
            .then(result => {
                console.log("Item added to cart:", result);
                // Handle any UI updates or notifications
            })
            .catch(error => {
                console.error("Error adding item to cart:", error);
                // Handle any error scenarios
            });
    }
</script>
<!-- ... -->

</body>
</html>
