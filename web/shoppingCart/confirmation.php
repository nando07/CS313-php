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
  echo "<br>";
  echo "<br>";
  $totalM  = $_SESSION["mavicQ"] * 399;
  $totalS  = $_SESSION["sparkQ"] * 399;
  $totalPh4  = $_SESSION["ph4Q"] * 1499;
  $totalPh3  = $_SESSION["ph3Q"] * 499;
  $totalI2  = $_SESSION["inspire2Q"] * 2999;
  $totalM600  = $_SESSION["m600Q"] * 4999;
  $totalM100  = $_SESSION["m100Q"] * 3299;
  $totalDg  = $_SESSION["dGogglesQ"] * 549;
  $total = $totalM + $totalS + $totalPh4 + $totalPh3 + $totalI2 + $totalM600 + $totalM100 + $totalDg;

  if ($_SESSION["mavicQ"] > 0) {
      
    echo '<span>Mavic Air</span><strong> $399 </strong>' . '  x  ' . $_SESSION["mavicQ"] . ' = $' . $totalM;

    echo "<br>"; 
}

    if ($_SESSION["sparkQ"] > 0) {

        echo '<span>Spark Air</span><strong> $399 </strong>' . '  x  ' . $_SESSION["sparkQ"] . ' = $' . $totalS;
        echo "<br>";    
    }

        if ($_SESSION["ph4Q"] > 0) {

            echo '<span>Phantom 4</span><strong> $1,499 </strong>' . '  x  ' . $_SESSION["ph4Q"] . ' = $' . $totalPh4;
            echo "<br>";           
        }

            if ($_SESSION["ph3Q"] > 0) {

    
                echo '<span>Phantom 3</span><strong> $499 </strong>' . '  x  ' . $_SESSION["ph3Q"] . ' = $' . $totalPh3;
        echo "<br>";   
            }

                if ($_SESSION["inspire2Q"] > 0) {

                    echo '<span>Inspire 2</span><strong> $2,999 </strong>' . '  x  ' . $_SESSION["inspire2Q"] . ' = $' . $totalI2;
        echo "<br>";  
               
                }

                    if ($_SESSION["m600Q"] > 0) {

                        echo '<span>Inspire 2</span><strong> $4,999 </strong>' . '  x  ' . $_SESSION["m600Q"] . ' = $' . $totalM600;
        echo "<br>";
                      
                    }

                        if ($_SESSION["m100Q"] > 0) {

                            echo '<span>Matrice 100</span><strong> $3,299 </strong>' . '  x  ' . $_SESSION["m100Q"] . ' = $' . $totalM100;
        echo "<br>";                        
                        }

                            if ($_SESSION["dGogglesQ"] > 0) {
                                echo '<span>DGI Goggles</span><strong> $549 </strong>' . '  x  ' . $_SESSION["dGogglesQ"] . ' = $' . $totalDg;
                                echo "<br>";                  
                            }
                            echo "<br>"; 
                            echo "<br>"; 
                            echo 'Total = ' . $total; 

  echo "They will arrive to you shortly at the following address:
   $streetAddress $city $state $zip";
   ?>


</h2>

</div>
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="cart.js"></script>
</body>
</html>