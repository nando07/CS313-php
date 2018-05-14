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
<body class="f-check">
<div id="info">	
<img src="https://d30y9cdsu7xlg0.cloudfront.net/png/103844-200.png" height="80px" alt="" />
</div>
<div id="header">	
	<ul>
        <li><a href="https://blooming-journey-48310.herokuapp.com/shoppingCart/myCart.php">My Cart</a></li>

        <li><a href="">CHECKOUT</a></li>                                              
    </ul>		
</div>
<h1>Here is your purchase! Come back again!</h1>
<h2> 
  <?php 
  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $streetAddress = $_POST["streetAddress"];
  $city = $_POST["city"];
  $state = $_POST["state"];
  $zip = $_POST["zip"];
  $email = $_POST["email"];
  echo "Thank you, ";
  echo $firstName;
  echo '! Your items are: ';
  if ($_SESSION["mavicQ"] > 0) {

            
    echo '<div class="cart-item">';
    echo '<div class="img-wrap">';
    echo '<img src="https://product2.djicdn.com/uploads/photos/33967/medium_a7f3e87a-e907-4eef-8755-4a704155b682.jpg" alt="mavicAir" /></div>';
    echo '<span>Mavic Air</span><strong>$399</strong>' . '  x  ' . $_SESSION["mavicQ"];
    echo '<div class="cart-item-border"></div>';
   
}

    if ($_SESSION["sparkQ"] > 0) {

    
        echo '<div class="cart-item">';
        echo '<div class="img-wrap">';
        echo '<img src="https://product2.djicdn.com/uploads/photos/34841/medium_960b93a7-044f-49f6-b450-6d57b9afd829.jpg" alt="spark" /></div>';
        echo '<span>Spark</span><strong>$399</strong>' . '  x  ' . $_SESSION["sparkQ"];
        echo '<div class="cart-item-border"></div>';
        
    }

        if ($_SESSION["ph4Q"] > 0) {

    
            echo '<div class="cart-item">';
            echo '<div class="img-wrap">';
            echo '<img src="https://product2.djicdn.com/uploads/photos/34734/medium_baada688-b74f-4bee-9a2d-9ff2e9782b7d.jpg" alt="ph4" /></div>';
            echo '<span>Phantom 4</span><strong>$399</strong>' . '  x  ' . $_SESSION["ph4Q"];
            echo '<div class="cart-item-border"></div>';
           
        }

            if ($_SESSION["ph3Q"] > 0) {

    
                echo '<div class="cart-item">';
                echo '<div class="img-wrap">';
                echo '<img src="https://product2.djicdn.com/uploads/photos/6711/medium_P3C_01.jpg" alt="ph3" /></div>';
                echo '<span>Phantom 3</span><strong>$399</strong>' . '  x  ' . $_SESSION["ph3Q"];
                echo '<div class="cart-item-border"></div>';
               
            }

                if ($_SESSION["inspire2Q"] > 0) {

    
                    echo '<div class="cart-item">';
                    echo '<div class="img-wrap">';
                    echo '<img src="https://product1.djicdn.com/uploads/photos/405/medium_9351802d-9e88-4bb6-979c-48fe81748a33.png" alt="in2" /></div>';
                    echo '<span>Inspire 2</span><strong>$399</strong>' . '  x  ' . $_SESSION["inspire2Q"];
                    echo '<div class="cart-item-border"></div>';
                   
                }

                    if ($_SESSION["m600Q"] > 0) {

    
                        echo '<div class="cart-item">';
                        echo '<div class="img-wrap">';
                        echo '<img src="https://product4.djicdn.com/uploads/photos/260/medium_f013bf4e-ba1d-4833-88b3-2d3ba62251dd.jpg" alt="m600" /></div>';
                        echo '<span>Matrice 600</span><strong>$399</strong>' . '  x  ' . $_SESSION["m600Q"];
                        echo '<div class="cart-item-border"></div>';
                        
                    }

                        if ($_SESSION["m100Q"] > 0) {

    
                            echo '<div class="cart-item">';
                            echo '<div class="img-wrap">';
                            echo '<img src="https://product2.djicdn.com/uploads/photos/3521/medium_p1.jpg" alt="m100" /></div>';
                            echo '<span>Matrice 100</span><strong>$399</strong>' . '  x  ' . $_SESSION["m100Q"];
                            echo '<div class="cart-item-border"></div>';
                            
                        }

                            if ($_SESSION["dGogglesQ"] > 0) {

    
                                echo '<div class="cart-item">';
                                echo '<div class="img-wrap">';
                                echo '<img src="https://product1.djicdn.com/uploads/photos/33591/medium_64d4667d-431c-4285-9675-2dfe75f7404d.jpg" alt="dG" /></div>';
                                echo '<span>DJI Goggles</span><strong>$399</strong>' . '  x  ' . $_SESSION["dGogglesQ"];
                                echo '<div class="cart-item-border"></div>';
                              
                            }
  echo "They will arrive to you shortly at the following address:
   $streetAddress $city $state $zip";
   ?>


</h2>

</div>
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="cart.js"></script>
</body>
</html>