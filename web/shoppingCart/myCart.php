<?php
// Declaring session array
$_SESSION['pName'] = $_POST['name'];
$_SESSION['pImage'] = $_POST['image'];
// $_SESSION['pQuantity'] = $_POST['img'];
$_SESSION['pPrice'] = $_POST['price'];

echo "Favorite animal is " . $_SESSION["pName"] . ".";
?>