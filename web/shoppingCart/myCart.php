<?php
// Declaring session array
$_SESSION['pName'] = $_POST['name'];
$_SESSION['pImage'] = $_POST['image'];
// $_SESSION['pQuantity'] = $_POST['img'];
$_SESSION['pPrice'] = $_POST['price'];

echo "Number of Items in the cart = "($_SESSION['name'])." <a href=cart-remove-all.php>Remove all</a><br>";
?>