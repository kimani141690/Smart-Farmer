<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body>

<br><br><br><br><br><br>
<div class="logincontainer">
<br>

    <h1>Login</h1>

    <form id="loginForm">
        @csrf
        <div class="input-group">
            <input type="email" placeholder="Email" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Password" required>
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

        <a href="#">Sign in with Google</a>
    </div>
    <br>
    <div class="input-group" id="signpass">


        <button id="myModal" onclick="openModal()">Don't have an account?</button>
    </div>




    <!-- Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Choose your user type:</h2>
        <button onclick="registerAsFarmer()">Farmer</button>
        <button onclick="registerAsCustomer()">Customer</button>
    </div>
</div>

<script>
    // JavaScript functions for the modal
    function openModal() {
        document.getElementById('myModal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('myModal').style.display = 'none';
    }

    // JavaScript functions for user registration
    function registerAsFarmer() {
        // TODO: Handle farmer registration logic
        console.log('Register as a farmer');
    }

    function registerAsCustomer() {
        // TODO: Handle customer registration logic
        console.log('Register as a customer');
    }

    // JavaScript function for Google sign-in
    function loginWithGoogle() {
        // TODO: Handle Google sign-in logic
        console.log('Sign in with Google');
    }

    // JavaScript function for form submission
    document.getElementById('loginForm').addEventListener('submit', function (event) {
        event.preventDefault();
        // TODO: Handle login form submission logic
        console.log('Form submitted');
    });
</script>
<br><br>
</div>
</body>
</html>
