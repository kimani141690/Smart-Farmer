<!DOCTYPE html>
<html>
<head>
    <title>View Profile</title>
    <link rel="stylesheet" href="{{ asset('css/farmer.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body>
    <br><br> <br><br>
    <div class="fullfarmerprofilecontainer">
<div class="farmerprofilecontainer">

    <div style="align-content: center">
        <img width="80px" height="80px" src="{{ asset('storage/profiles/' . $farmer->profile_pic) }}" alt="Profile Picture">

    </div>

    <p><strong>Username:</strong> {{ $user->username }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Location:</strong> {{ $farmer->location }}</p>
    <p><strong>Address:</strong> {{ $farmer->address }}</p>
    <p><strong>Contact:</strong> {{ $farmer->phone_number }}</p>
    <p><strong>Profile:</strong></p>
    <textarea readonly maxlength="30">{{ $farmer->profile }}</textarea>
    <button id="updateBtn">Update</button>

<div class="farmerprofilemodal" id="updateModal">
    <div class="modal-content">
        <h3>Update Profile</h3>
        <form id="updateForm">

            @method('PUT')
            <input type="text" name="username" placeholder="Username" required value="{{ $user->username }}">
            <input type="email" name="email" placeholder="Email "  contenteditable="true" required value="{{ $user->email }}">
            <input type="text" name="location" placeholder="Location"  contenteditable="true" required value="{{ $farmer->location }}">
            <input type="text" name="address" placeholder="Address"  contenteditable="true" required value="{{ $farmer->address }}">
            <input type="text" name="contact" placeholder="Contact"  contenteditable="true" required value="{{ $farmer->phone_number }}">
            <textarea name="profile" placeholder="Profile" maxlength="30"  contenteditable="true" required>{{ $farmer->profile }}</textarea>
            <button type="submit">Save</button>

        </form>
    </div>
</div>
</div>

    <!-- Success Message Modal -->
    <div id="successModal" class="modal">
        <div class="modal-content">
            <h4>Profile Update Successful</h4>
            <p>Your profile has been updated.</p>
        </div>
    </div>


    <script>
        const updateBtn = document.getElementById('updateBtn');
        const updateModal = document.getElementById('updateModal');
        const updateForm = document.getElementById('updateForm');
        const profileTextarea = document.querySelector('.farmerprofilecontainer textarea');
        const successModal = document.getElementById('successModal');

        updateBtn.addEventListener('click', openUpdateModal);

        // Check if the success message exists in the session
        @if(session('success'))
        // Show the success modal
        successModal.style.display = 'block';
        @endif

        function openUpdateModal() {
            updateModal.style.display = 'block';

            const profileText = profileTextarea.value;
            const modalTextarea = document.querySelector('.modal textarea');
            modalTextarea.value = profileText;
        }

        // Close the success modal after 3 seconds
        setTimeout(function() {
            successModal.style.display = 'none';
        }, 3000);
    </script>

</body>



