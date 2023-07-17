<!-- landing_page.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Farmers' Market</title>
    <link rel="stylesheet" href="{{ asset('css/customer.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>


    @include('customer.sidebar')

<div class="farmersmarketcontainer">
<br>
    <h2>Farmers' Market</h2>

    <div class="farmer-container">
        <!-- Loop through the farmers and render each farmer card -->
        <br><br>
        @foreach($farmers as $farmer)
            <div class="farmer-card">
                <img src="{{ asset('images/'.$farmer->profile_pic) }}" style="width: 80px; height:80px" alt="farmer profile">
                <div>Farmer: {{ $farmer->username }}</div>
                <div>Contact: {{ $farmer->contact }}</div>
                <div>Description: {{ $farmer->description }}</div>
                <a href="{{ route('products', ['farmer_id' => $farmer->id]) }}">View Products</a>
            </div>
            <br>
        @endforeach

        <!-- Display pagination links -->
        {{ $farmers->links() }}
    </div>
    <br>

</div>


</body>
</html>
