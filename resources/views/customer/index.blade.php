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
            <div class="farmer-card">
                <img src="{{asset('images/homepage.png')}}" style=" width: 80px; height:80px " alt="farmer profile">
                <div>Farmer:username</div>
                <div>Farmer:contact</div>
                <div>Farmer:description</div>


            </div>
      <br>
    </div>
    <br>

</div>


</body>
</html>
