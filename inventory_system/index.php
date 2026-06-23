<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Inventory System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    


<h1>Product Inventory System</h1>

<form id="productForm" action="insert.php" method="POST">

    <div id="errorBox"></div>

    <input type="text"
           name="product_name"
           id="product_name"
           placeholder="Product Name">

    <input type="number"
           name="price"
           id="price"
           placeholder="Price">

    <input type="number"
           name="quantity"
           id="quantity"
           placeholder="Quantity">

    <button type="submit">
        Add Product
    </button>

</form>

<h2>Inventory Table</h2>

<table>

    <thead>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Date Added</th>
        </tr>
    </thead>
    <tbody>

<?php

$sql =
"SELECT * FROM products";

$result =
$conn->query($sql);

while($row =
$result->fetch_assoc()){

echo "<tr>";

echo "<td>"
.$row['id']
."</td>";

echo "<td>"
.$row['product_name']
."</td>";

echo "<td>"
.$row['price']
."</td>";

echo "<td>"
.$row['quantity']
."</td>";

echo "<td>"
.$row['date_added']
."</td>";

echo "</tr>";

}

?>

</tbody>

</table>

<script src="script.js"></script>

</body>
</html>