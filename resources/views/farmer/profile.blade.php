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
    <h2>View Profile</h2>
    <p><strong>Username:</strong> JohnDoe</p>
    <p><strong>Email:</strong> johndoe@example.com</p>
    <p><strong>Location:</strong> New York</p>
    <p><strong>Address:</strong> 123 Main St</p>
    <p><strong>Contact:</strong> 123-456-7890</p>
    <p><strong>Profile:</strong></p>
    <textarea readonly maxlength="30">I am a web developer.</textarea>
    <button id="updateBtn">Update</button>
</div>

<div class="farmerprofilemodal" id="updateModal">
    <div class="modal-content">
        <h3>Update Profile</h3>
        <form id="updateForm">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="location" placeholder="Location" required>
            <input type="text" name="address" placeholder="Address" required>
            <input type="text" name="contact" placeholder="Contact" required>
            <input type="file" name="profile" placeholder="Profile Pic" required contenteditable="true">
            <textarea name="profile" placeholder="Profile" maxlength="30" required contenteditable="true"></textarea>
            <button type="submit">Save</button>
        </form>
    </div>
</div>
</div>

<script>
    const updateBtn = document.getElementById('updateBtn');
    const updateModal = document.getElementById('updateModal');
    const updateForm = document.getElementById('updateForm');
    const profileTextarea = document.querySelector('.container textarea');

    updateBtn.addEventListener('click', openUpdateModal);
    updateForm.addEventListener('submit', handleFormSubmit);

    function openUpdateModal() {
        updateModal.style.display = 'block';

        const profileText = profileTextarea.value;
        const modalTextarea = document.querySelector('.modal textarea');
        modalTextarea.value = profileText;
    }

    function handleFormSubmit(event) {
        event.preventDefault();

        // Perform your form submission logic here
        // You can access the updated profile values using `event.target`
        // Example:
        const formData = new FormData(event.target);
        const updatedProfile = Object.fromEntries(formData.entries());
        console.log(updatedProfile);

        // Close the modal after form submission
        updateModal.style.display = 'none';
    }
</script>
</body>
</html>
