<?php
// Start the session
session_start();
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
<div id="header">	
	<ul>
        <li><a href="">Home</a></li>

        <li><a href="">CONTACT</a></li>                                              
    </ul>		
</div>
<div id="cart-body">

<h1>Your Cart</h1>
<div id="sidebar">
        <div id="cart">

<!-- // $totalQuantity = $_SESSION["mavicQ"] + $_SESSION["sparkQ"] + $_SESSION["ph4Q"] + $_SESSION["mavicQ"] + $_SESSION["ph3Q"] + $_SESSION["inspire2Q"] + $_SESSION["m600Q"] + $_SESSION["m100Q"] + $_SESSION["dGogglesQ"] -->


        <?php
        if ($_SESSION["mavicQ"] > 0) {

            
            echo '<div class="cart-item">';
            echo '<div class="img-wrap">';
            echo '<img src="https://product2.djicdn.com/uploads/photos/33967/medium_a7f3e87a-e907-4eef-8755-4a704155b682.jpg" alt="mavicAir" /></div>';
            echo '<span>Mavic Air</span><strong>$399</strong>';
            echo '<span>X </span><strong>$_SESSION["mavicQ"]</strong>';
            echo '<div class="cart-item-border"></div>';
            echo '<div class="delete-item"></div></div>';
        }?>
        </div>
        </div>
        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="cart.js"></script>
</body>
</html>