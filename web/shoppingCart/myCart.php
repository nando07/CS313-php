<?php
// Start the session
session_start();

array_push($_SESSION['cart'], $_POST['item']);

echo "Number of Items in the cart = ".sizeof($_SESSION['cart'])." <a href=cart-remove-all.php>Remove all</a><br>";

echo '<pre>'; print_r($_SESSION['cart']); echo '</pre>';
}
?>