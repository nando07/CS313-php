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
<div id="header">	
	<ul>
        <li><a href="">Home</a></li>

        <li><a href="">CONTACT</a></li>                                              
    </ul>		
</div>
    <div id="sidebar">
<!--<form method="post" action="c"-->
	<h3>CART</h3>
    <div id="cart">
    <?php
// Start the session
session_start();

array_push($_SESSION['cart'], $_POST['item']);
$trimmedArray = array_map('trim', $_SESSION['cart']);
$emptyRemoved = array_filter($_SESSION['cart']);

foreach($emptyRemoved as $result) {
    echo $result, '<br />';
}

// echo "Number of Items in the cart = ".sizeof($_SESSION['cart'])." <a href=cart-remove-all.php>Remove all</a><br>";
// echo '<pre>'; 
// print_r($emptyRemoved); 
// echo '</pre>';
// 
?>

    	<span class="empty">No items in cart.</span>       
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="cart.js"></script>
</body>
</html>