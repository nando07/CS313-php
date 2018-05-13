<?php
// Start the session
session_start();
$_SESSION['cart']=array();
array_push($_SESSION['cart'], $_POST['item']);

// echo "Number of Items in the cart = ".sizeof($_SESSION['cart'])." <a href=cart-remove-all.php>Remove all</a><br>";
echo '<pre>'; 
print_r($_SESSION['cart']); 
echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="FontAwesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="cart-style.css">
    
</head>
<body>
    <div id="sidebar">
<!--<form method="post" action="c"-->
	<h3>CART</h3>
    <div id="cart">
    	<span class="empty">No items in cart.</span>       
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="cart.js"></script>
</body>
</html>