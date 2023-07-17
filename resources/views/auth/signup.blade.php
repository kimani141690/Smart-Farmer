<!DOCTYPE html>
<html>
<head>
    <title>{{$account_type}} Signup Page</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body>
<br><br><br><br><br><br>
<div class="signcontainer">
    <br>
    <h2>{{$account_type}} Signup</h2>
    <form action="/auth/registration" method="POST" class="signcont">
        @csrf
        <input type="text" name="username" placeholder="Username" required>
        <input type="text" name="email" placeholder="Email" required>
        <input type="hidden" name="type" value="{{$account_type}}">
        <input type="submit" value="Signup" id="sgnbutton">
    </form>
    <br>
</div>
</body>
</html>
