<?php
// Declaring session array
array_push($_SESSION['cart'],'apple','mango','banana');
array_push($_SESSION['cart'], $_POST['item']); // Items added to cart

echo "Number of Items in the cart = ".sizeof($_SESSION['cart'])." <a href=cart-remove-all.php>Remove all</a><br>";
?>