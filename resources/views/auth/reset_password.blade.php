<!DOCTYPE html>
<html>
<head>
    <title>Reset Password Page</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body>
    <br><br><br><br><br>
<div class="resetcontainer">
<br>
    <h2>Reset Password</h2>
    <form action="" method="POST" onsubmit="return validateForm();" class="resetcont">
        @csrf
        <input type="email" id="email" name="email" placeholder="Email" required><br>
        <input type="password" id="new-password" name="new-password" placeholder="New Password" required><br>
        <input type="password" id="confirm-new-password" name="confirm-new-password" placeholder="Confirm New Password" required><br>
        <input type="submit" value="Reset Password" id="rstbutton">
        <div id="error-container" class="error-message"></div>
    </form>
    <br><br>
</div>

<!-- java script -->
<script>
    function validateForm() {
        var email = document.getElementById('email').value;
        var newPassword = document.getElementById('new-password').value;
        var confirmNewPassword = document.getElementById('confirm-new-password').value;

        var errorMessages = [];

        // Check if the new password and confirm new password match
        if (newPassword !== confirmNewPassword) {
            errorMessages.push("New password and confirm new password don't match");
        }

        // Check if the new password meets the required conditions
        if (newPassword.length < 8) {
            errorMessages.push("Password should have a minimum of 8 characters");
        }

        if (newPassword.toLowerCase().includes(email.toLowerCase())) {
            errorMessages.push("Password should not contain the email");
        }

        if (!/[a-z]/.test(newPassword)) {
            errorMessages.push("Password should contain lowercase letters");
        }

        if (!/[A-Z]/.test(newPassword)) {
            errorMessages.push("Password should contain uppercase letters");
        }

        if (!/[0-9]/.test(newPassword)) {
            errorMessages.push("Password should contain numbers");
        }

        if (!/[!@#$%^&*]/.test(newPassword)) {
            errorMessages.push("Password should contain symbols");
        }

        // Display error messages
        var errorContainer = document.getElementById('error-container');
        errorContainer.innerHTML = '';

        if (errorMessages.length > 0) {
            for (var i = 0; i < errorMessages.length; i++) {
                var errorMessage = document.createElement('p');
                errorMessage.textContent = errorMessages[i];
                errorContainer.appendChild(errorMessage);
            }
            return false; // Prevent form submission
        }

        return true; // Allow form submission
    }
</script>
</body>
</html>
