
<?php
// Start the session
session_start();
	if(!isset($_SESSION["mavicQ"])){
		$_SESSION["mavicQ"] = 0;
	}
	if(!isset($_SESSION["sparkQ"])){
		$_SESSION["sparkQ"] = 0;
	}
	if(!isset($_SESSION["ph4Q"])){
		$_SESSION["ph4Q"] = 0;
	}
	if(!isset($_SESSION["ph3Q"])){
		$_SESSION["ph3Q"] = 0;
	}
	if(!isset($_SESSION["inspire2Q"])){
		$_SESSION["inspire2Q"] = 0;
	}
	if(!isset($_SESSION["m600Q"])){
		$_SESSION["m600Q"] = 0;
	}
if(!isset($_SESSION["m100Q"])){
		$_SESSION["m100Q"] = 0;
	}
if(!isset($_SESSION["dGogglesQ"])){
		$_SESSION["dGogglesQ"] = 0;
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Drones</title>
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="FontAwesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="cart-style.css">
</head>
<body>
<div id="wrapper">

<div id="info">	
<img src="https://d30y9cdsu7xlg0.cloudfront.net/png/103844-200.png" height="80px" alt="" />
</div>

<div id="header">	
	<ul>
        <li><a href="">Home</a></li>

        <li><a href="">CONTACT</a></li>                                              
    </ul>		
</div>

<!-- <div id="sidebar">
<form method="post" action="c"
	<h3>CART</h3>
   <div id="quantity">0</div>
    <div id="cart">
    	<span class="empty">No items in cart.</span> 
    </div>
</div> 
-->

<div id="grid-selector">
<div class="cart-icon-bottom">
<a href="myCart.php"><i class="fas fa-cart-plus fa-3x"></i><?php
$totalQuantity = $_SESSION["mavicQ"] + $_SESSION["sparkQ"] + $_SESSION["ph4Q"] + $_SESSION["ph3Q"] + $_SESSION["inspire2Q"] + $_SESSION["m600Q"] + $_SESSION["m100Q"] + $_SESSION["dGogglesQ"];
echo $totalQuantity;
?></a>

</div>
</div>

<div id="grid">
    <div class="product">

        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <img src="https://product2.djicdn.com/uploads/photos/33967/medium_a7f3e87a-e907-4eef-8755-4a704155b682.jpg" alt="" />
                <div class="image_overlay"></div>
                <a class="add_to_cart" id="m" href="javascript:delay('cartData.php?cartInfo=m')">Add to cart</a>
<!--                <div class="view_gallery">View gallery</div>                -->
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_price">$399</span>
                        <span class="product_name">MAVIC AIR</span>    
                        <p>Standard</p>                                            
                        
                        <div class="product-options">
                        <strong>DESCRIPTION</strong>
                        <span>The ultraportable Mavic Air features high-end flight performance and functionality for limitless exploration.</span>

                    </div>                       
                    </div>                         
                </div>
            </div>
            

        </div>	
    </div>
    
    
    <div class="product">

        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <img src="https://product2.djicdn.com/uploads/photos/34841/medium_960b93a7-044f-49f6-b450-6d57b9afd829.jpg" alt="" />
                <div class="image_overlay"></div>
                <a class="add_to_cart" href="cartData.php?cartInfo=s">Add to cart</a>
<!--                <div class="view_gallery">View gallery</div>-->
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_price">$399</span>
                        <span class="product_name">SPARK</span>    
                        <p>Standard</p>                                            
                        
                        <div class="product-options">
                        <strong>DESCRIPTION</strong>
                        <span>Spark is a mini drone that features all of DJI's signature technologies, allowing you to seize the moment whenever you feel inspired.</span>

                    </div>                       
                    </div>                         
                </div>
            </div>
            

        </div>	
    </div>
    
    <div class="product">

        <div class="make3D">        
            <div class="product-front">
                <div class="shadow"></div>
                <img src="https://product2.djicdn.com/uploads/photos/34734/medium_baada688-b74f-4bee-9a2d-9ff2e9782b7d.jpg" alt="" />
                <div class="image_overlay"></div>
                <a class="add_to_cart" href="cartData.php?cartInfo=ph4">Add to cart</a>
<!--                <div class="view_gallery">View gallery</div>-->
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_price">$1,499</span>
                        <span class="product_name">PHANTOM 4</span>    
                        <p>Professional</p>                                            
                        
                        <div class="product-options">
                        <strong>DESCRIPTION</strong>
                        <span>1-inch 20MP Exmor R CMOS sensor, longer flight time and smarter features.</span>

                    </div>                       
                    </div>                         
                </div>
            </div>
            

        </div>	
    </div>
    
    
    <div class="product">

        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <img src="https://product2.djicdn.com/uploads/photos/6711/medium_P3C_01.jpg" alt="" />
                <div class="image_overlay"></div>
                <a class="add_to_cart" href="cartData.php?cartInfo=ph3">Add to cart</a>
<!--                <div class="view_gallery">View gallery</div>-->
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_price">$499</span>
                        <span class="product_name">PHANTOM 3</span>    
                        <p>Standard</p>                                            
                        
                        <div class="product-options">
                        <strong>DESCRIPTION</strong>
                        <span>An intelligent flight system automatically keeps your Phantom 3 Standard in the air and under your control.</span>

                    </div>                       
                    </div>                         
                </div>
            </div>
            

        </div>	
    </div>
    
    <div class="product">

        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <img src="https://product1.djicdn.com/uploads/photos/405/medium_9351802d-9e88-4bb6-979c-48fe81748a33.png" alt="" />
                <div class="image_overlay"></div>
                <a class="add_to_cart" href="cartData.php?cartInfo=in2">Add to cart</a>
<!--                <div class="view_gallery">View gallery</div>-->
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_price">$2,999</span>
                        <span class="product_name">INSPIRE 2</span>    
                        <p>Standard</p>                                            
                        
                        <div class="product-options">
                        <strong>DESCRIPTION</strong>
                        <span>Image quality, power and intelligence to meet the needs of professional filmmakers and enterprises around the globe.</span>

                    </div>                       
                    </div>                         
                </div>
            </div>
            

        </div>	
    </div>
    
    
    <div class="product">

        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <img src="https://product4.djicdn.com/uploads/photos/260/medium_f013bf4e-ba1d-4833-88b3-2d3ba62251dd.jpg" alt="" />
                <div class="image_overlay"></div>
                <a class="add_to_cart" href="cartData.php?cartInfo=m600">Add to cart</a>
<!--                <div class="view_gallery">View gallery</div>-->
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_price">$4,999</span>
                        <span class="product_name">MATRICE 600 PRO</span>    
                        <p>Professional</p>                                            
                        
                        <div class="product-options">
                        <strong>DESCRIPTION</strong>
                        <span>Professional HD Transmission and Aerial Imaging Solution.</span>

                    </div>                       
                    </div>                         
                </div>
            </div>
            

        </div>	
    </div>
    
    <div class="product">

        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <img src="https://product2.djicdn.com/uploads/photos/3521/medium_p1.jpg" alt="" />
                <div class="image_overlay"></div>
                <a class="add_to_cart" href="cartData.php?cartInfo=m100">Add to cart</a>
<!--                <div class="view_gallery">View gallery</div>-->
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_price">$3,299</span>
                        <span class="product_name">MATRICE 100</span>    
                        <p>Professional</p>                                            
                        
                        <div class="product-options">
                        <strong>DESCRIPTION</strong>
                        <span>he DJI Matrice 100 is a fully customizable and programmable flight platform that lets you to turn your ideas and dreams into reality.</span>

                    </div>                       
                    </div>                         
                </div>
            </div>
            

        </div>	
    </div>
    
    <div class="product">

        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <img src="https://product1.djicdn.com/uploads/photos/33591/medium_64d4667d-431c-4285-9675-2dfe75f7404d.jpg" alt="" />
                <div class="image_overlay"></div>
                <a class="add_to_cart" href="cartData.php?cartInfo=dg">Add to cart</a>
<!--                <div class="view_gallery">View gallery</div>-->
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_price">$549</span>
                        <span class="product_name">DJI GOGGLES</span>    
                        <p>Racing Edition</p>                                            
                        
                        <div class="product-options">
                        <strong>DESCRIPTION</strong>
                        <span>DJI Goggles RE support Sphere pano viewing and local video playback, offering an upgraded FPV experience.</span>

                    </div>                       
                    </div>                         
                </div>
            </div>
            

        </div>	
    </div>    
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="cart.js"></script>
    
</body>
</html>