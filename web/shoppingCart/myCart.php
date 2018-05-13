<?php
// Start the session
session_start();

// Declaring session array
// $_SESSION['pName'] = $_POST['name'];
// $_SESSION['pImage'] = $_POST['image'];
// // $_SESSION['pQuantity'] = $_POST['img'];
// $_SESSION['pPrice'] = $_POST['price'];
$_POST['img'];
array_push($_SESSION['cart'], $_POST['item']; );

echo "Number of Items in the cart = ".sizeof($_SESSION['cart'])." <a href=cart-remove-all.php>Remove all</a><br>";
?>