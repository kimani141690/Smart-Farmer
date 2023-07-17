<!DOCTYPE html>
<html>
<head>
    <title>View Profile</title>
    <link rel="stylesheet" href="{{ asset('css/customer.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body>

@include('customer.sidebar')


<h1 id="profilepagetitle">Profile
    <h1>
        <br>
        <div class="profilepage">
            <div class="viewprofilecontainer">

                <h2 style="text-decoration: underline;">My Profile</h2>

                     <div style="align-content: center">
                         <img width="80px" height="80px" src="{{ asset('storage/profiles/' . $customer->profile_pic) }}" alt="Profile Picture">

                     </div>


                <p><strong>Username:</strong> {{ $user->username }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Location:</strong> {{ $customer->location }}</p>
                <p><strong>Address:</strong> {{ $customer->address }}</p>
                <p><strong>Contact:</strong> {{ $customer->phone_number }}</p>
                <textarea readonly maxlength="30">{{ $customer->profile }}</textarea>
                <button id="updateBtn">Update</button>

                <button id="updateBtn">Update</button>

            </div>

            <div class="updateprofilemodal" id="updateModal">
                <div class="modal-content">

                    <h3>Update Profile</h3>

                    <form id="updateForm">
                        <input type="text" name="username" placeholder="Username" required value="{{ $user->username }}">
                        <input type="email" name="email" placeholder="Email" required value="{{ $user->email }}">
                        <input type="text" name="location" placeholder="Location" required value="{{ $customer->location }}">
                        <input type="text" name="address" placeholder="Address" required value="{{ $customer->address }}">
                        <input type="text" name="contact" placeholder="Contact" required value="{{ $customer->phone_number }}">
                        <textarea name="profile" placeholder="Profile" maxlength="30" required>{{ $customer->profile }}</textarea>
                        <button type="submit">Save</button>

                        <button type="submit">Save</button>
                    </form>
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
