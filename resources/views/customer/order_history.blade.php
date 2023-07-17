<!-- order_history.blade.php -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order History</title>
    <link rel="stylesheet" href="{{ asset('css/customer.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>

    @include('customer.sidebar')


<div class="orderhistorycontainer">
<br>
    <h2>Order History</h2>
    <div class="search-bar">
        <input type="text" id="searchInput" placeholder="Search...">
    </div>
    <br>
    <table class="order-table">
        <thead>
        <tr>
            <th>Date</th>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Cost</th>
        </tr>


        </thead>
        <tbody>
        <!-- Loop through the order history and render each order -->

            <tr>
                <td> order['date'] </td>
                <td> order['product'] </td>
                <td> order['price'] </td>
                <td> order['quantity'] </td>
                <td> order['total_cost'] </td>
            </tr>
            <tr>
                <td> order['date'] </td>
                <td> order['product'] </td>
                <td> order['price'] </td>
                <td> order['quantity'] </td>
                <td> order['total_cost'] </td>
            </tr>
            <tr>
                <td> order['date'] </td>
                <td> order['product'] </td>
                <td> order['price'] </td>
                <td> order['quantity'] </td>
                <td> order['total_cost'] </td>
            </tr>
            <tr>
                <td> order['date'] </td>
                <td> order['product'] </td>
                <td> order['price'] </td>
                <td> order['quantity'] </td>
                <td> order['total_cost'] </td>
            </tr>
            <tr>
                <td> order['date'] </td>
                <td> order['product'] </td>
                <td> order['price'] </td>
                <td> order['quantity'] </td>
                <td> order['total_cost'] </td>
            </tr>

        </tbody>

    </table>
    <br>
</div>

<script>
    // Filter the order table based on the search input
    document.getElementById("searchInput").addEventListener("keyup", function () {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.querySelector(".order-table");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1]; // Filter based on the product column (index 1)
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    });
</script>
</body>
</html>
