<!DOCTYPE html>
<html>
<head>
    <title>User Details Page</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body>
<br><br><br><br><br>
<div class="userdetailscontainer">
    <br>
    <h2>User Details</h2>
    <form action="" method="POST" enctype="multipart/form-data" class="usdcont">
        @csrf
        <input type="text" name="location" placeholder="Location" required><br>
        <input type="text" name="address" placeholder="Address" required><br>
        <input type="tel" name="contact" placeholder="Contact" required><br>
        <input type="file" name="profile-picture" accept="image/*" required><br>
        <textarea id="userdesc" name="description" placeholder="Description"></textarea><br><br>
        <input type="submit" value="Save Details" id="savedetailsbutton">
    </form>
</div>
</body>
</html>
