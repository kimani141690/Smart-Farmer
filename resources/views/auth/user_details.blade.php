<!DOCTYPE html>
<html>
<head>
    <title>{{$account_type}} Details Page</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body>
<br><br><br><br><br>
<div class="userdetailscontainer">
    <br>
    <h2>{{$account_type}} Details</h2>
    <form action="" method="POST" enctype="multipart/form-data" class="usdcont">
        @csrf
        <input type="text" name="location" placeholder="Location" required><br>
        <input type="text" name="address" placeholder="Address" required><br>
        <input type="tel" name="contact" placeholder="Contact" required><br>
        <input type="file" name="profile-picture" accept="image/*" required><br>
        <textarea id="userdesc" name="description" placeholder="Description"></textarea><br><br>
        <input type="hidden" name="account_type" value="{{$account_type}}">
        <input type="submit" value="Save Details" id="savedetailsbutton">
    </form>
</div>

@if($errors->has('error'))
    <div id="modal_fail" class="modal" style="display: block;">
        <div class="modal-content" style="margin: 20px auto;">
            <span class="close" onclick="closeModal()" style="cursor: pointer">&times;</span>
            <h2>Warning</h2>
            <p class="modal__text">{{ $errors->first('error') }}</p>
        </div>
    </div>
@endif
<script>
    function closeModal() {
        document.getElementById('modal_fail').style.display = 'none';
    }
</script>
</body>
</html>
