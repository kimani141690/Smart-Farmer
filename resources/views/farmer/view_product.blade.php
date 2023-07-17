<!DOCTYPE html>
<html>
<head>
    <title>Product Management</title>
    <link rel="stylesheet" href="{{ asset('css/farmer.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body>
@include('farmer.sidebar')

<br>
<div class="prodmancontainer">

<br>
    <h2>Product Management</h2>
    <br>
    <div class="prodsearch-bar">
        <input type="text" id="searchInput" placeholder="Search by Product Name">
    </div>
    <table id="productTable">
        <thead>
        <tr>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Product1 image</td>
            <td>Product 1</td>
            <td>Description 1</td>
            <td>10</td>
            <td>
                <button class="updateBtn">Update</button>
                <button class="deleteBtn">Delete</button>
            </td>
        </tr>
        <tr>
        <td>Product1 image</td>
            <td>Product 2</td>
            <td>Description 2</td>
            <td>5</td>
            <td>
                <button class="updateBtn">Update</button>
                <button class="deleteBtn">Delete</button>
            </td>
        </tr>
        </tbody>
    </table>
    <br>
    <div class="button-container">
        <button id="addBtn">Add Product</button>
    </div>
    <br>
</div>

<div class="addnewproductmodal" id="addModal">
    <div class="modal-content">
        <h3>Add New Product</h3>
        <form id="addForm">
            <input type="text" name="product_name" placeholder="Product Name" required>
            <textarea name="product_description" placeholder="Product Description" rows="4" required></textarea>
            <input type="number" name="product_quantity" placeholder="Product Quantity" required>
            <input type="file" name="product_image" placeholder="Product Image" required>

            <button type="submit">Add Product</button>
        </form>
    </div>
</div>

<div class="updateproductmodal" id="updateModal">
    <div class="modal-content">
        <h3>Update Product</h3>
        <form id="updateForm">
            <input type="text" name="product_name" placeholder="Product Name" required>
            <textarea name="product_description" placeholder="Product Description" rows="4" required></textarea>
            <input type="number" name="product_quantity" placeholder="Product Quantity" required>
            <button type="submit">Update Product</button>
        </form>
        <br>
    </div>
</div>

<div class="deleteproductmodal" id="deleteModal">
    <div class="modal-content">
        <h3>Delete Product</h3>
        <p>Are you sure you want to delete this product?</p>
        <button id="confirmDelete">Delete</button>
    </div>
    <br>
</div>

<script>
    const addBtn = document.getElementById('addBtn');
    const addModal = document.getElementById('addModal');
    const addForm = document.getElementById('addForm');
    const updateButtons = document.querySelectorAll('.updateBtn');
    const updateModal = document.getElementById('updateModal');
    const updateForm = document.getElementById('updateForm');
    const deleteButtons = document.querySelectorAll('.deleteBtn');
    const deleteModal = document.getElementById('deleteModal');
    const confirmDeleteBtn = document.getElementById('confirmDelete');
    const searchInput = document.getElementById('searchInput');
    const productTable = document.getElementById('productTable');
    const rows = productTable.getElementsByTagName('tr');

    addBtn.addEventListener('click', openAddModal);
    addForm.addEventListener('submit', handleAddFormSubmit);
    updateButtons.forEach(btn => btn.addEventListener('click', openUpdateModal));
    updateForm.addEventListener('submit', handleUpdateFormSubmit);
    deleteButtons.forEach(btn => btn.addEventListener('click', openDeleteModal));
    confirmDeleteBtn.addEventListener('click', handleDelete);
    searchInput.addEventListener('keyup', searchProducts);

    function openAddModal() {
        addModal.style.display = 'block';

    }
</script>
</body>
</html>
