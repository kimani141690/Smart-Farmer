<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>

<div class="logincontainer">
    <br>

    <h1>Login</h1>

    <form id="loginForm" method="POST">
        @csrf
        <div class="input-group">
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-group">
            <input type="password" name="password" placeholder="Password" required minlength="8">
        </div>
        <br>
        <div class="input-group">
            <button type="submit">Login</button>
        </div>
    </form>
    <br>
    <div class="input-group" id="signpass">

        <a href="/auth/reset">Forgot password?</a>
    </div>

    <br>
    <div class="input-group" id="signpass">

        <a href="/auth/google/">Sign in with Google</a>
    </div>
    <br>
    <div class="input-group" id="signpass">
        <button id="myModal" onclick="openModal()" style="cursor: pointer;">Don't have an account?</button>
    </div>


    <!-- Modal -->
    <div id="chooseUserType" class="modal">
        <div class="modal-content" style="margin: 20px auto;">
            <span class="close" onclick="closeModal()" style="cursor: pointer">&times;</span>
            <h2>Choose your user type:</h2>
            <button onclick="registerAsFarmer()">Farmer</button>
            <button onclick="registerAsCustomer()">Customer</button>
        </div>
    </div>

    <script>
        // JavaScript functions for the modal
        function openModal() {
            document.getElementById('chooseUserType').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('chooseUserType').style.display = 'none';
        }

        // JavaScript functions for user registration
        function registerAsFarmer() {
            window.location.href = 'http://127.0.0.1:8000/auth/farmer';
        }

        function registerAsCustomer() {
            window.location.href = 'http://127.0.0.1:8000/auth/customer';
        }
    </script>
</div>
</body>
</html>
