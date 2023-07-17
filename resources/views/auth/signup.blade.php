<!DOCTYPE html>
<html>
<head>
    <title>Signup Page</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body>
    <br><br><br><br><br><br>
<div class="signcontainer">
<br>
    <h2>Signup</h2>
    <form action="" method="POST" class="signcont">
        @csrf
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="submit" value="Signup" id="sgnbutton">
    </form>
    <br>
</div>
</body>
</html>
