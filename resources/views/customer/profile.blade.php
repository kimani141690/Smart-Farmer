<!DOCTYPE html>
<html>
<head>
    <title>View Profile</title>
    <link rel="stylesheet" href="{{ asset('css/customer.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body>

    @include('customer.sidebar')


    <h1 id="profilepagetitle">Profile<h1>
    <br>
    <div class="profilepage">
<div class="viewprofilecontainer">

    <h2 style="text-decoration: underline;">My Profile</h2>

    <p><strong>Username:</strong> JohnDoe</p>
    <p><strong>Email:</strong> johndoe@example.com</p>
    <p><strong>Location:</strong> New York</p>
    <p><strong>Address:</strong> 123 Main St</p>
    <p><strong>Contact:</strong> 123-456-7890</p>
    <p><strong>Profile:</strong></p>

    <button id="updateBtn">Update</button>

</div>

{{--<div class="updateprofilemodal" id="updateModal">--}}
{{--    <div class="modal-content">--}}

{{--        <h3>Update Profile</h3>--}}

{{--        <form id="updateForm">--}}
{{--            <input type="text" name="username" placeholder="Username" required contenteditable="true">--}}
{{--            <input type="email" name="email" placeholder="Email" required contenteditable="true">--}}
{{--            <input type="text" name="location" placeholder="Location" required contenteditable="true">--}}
{{--            <input type="text" name="address" placeholder="Address" required contenteditable="true">--}}
{{--            <input type="text" name="contact" placeholder="Contact" required contenteditable="true">--}}
{{--            <input type="file" name="profile" placeholder="Profile Pic" required contenteditable="true">--}}

{{--            <button type="submit">Save</button>--}}
{{--        </form>--}}
{{--    </div>--}}

{{--</div>--}}

<div>

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
