<?php

include 'db.php';

$product_name =
trim($_POST['product_name']);

$price =
$_POST['price'];

$quantity =
$_POST['quantity'];

$stmt =
$conn->prepare(
"INSERT INTO products
(product_name,price,quantity)
VALUES(?,?,?)"
);

$stmt->bind_param(
"sdi",
$product_name,
$price,
$quantity
);

$stmt->execute();

header("Location:index.php");
exit();

?>