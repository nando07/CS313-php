<?php 
session_start();
$data = $_GET["cartInfo"];

switch ($data) {
    case 'm':
    unset($_SESSION["mavicQ"]);
    // $_SESSION["mavicQ"] = $_SESSION["mavicQ"] + 1;  
		break;
	case 's':
    unset($_SESSION["sparkQ"]);
		break;
	case 'ph4':
    unset($_SESSION["ph4Q"]);
		break;
	case 'ph3':
    unset($_SESSION["ph3Q"]);
		break;
	case 'in2':
    unset($_SESSION["inspire2Q"]);
        break;  
    case 'm600':
    unset($_SESSION["m600Q"]);
        break;
    
    case 'm100':
    unset($_SESSION["m100Q"]);
        break;

    case 'dg':
    unset($_SESSION["dGogglesQ"]);
        break;
	default:
		echo "Default - No option found";
		break;
}
$_SESSION["totalProducts"] = $_SESSION["mavicQ"] + $_SESSION["sparkQ"] + $_SESSION["ph4Q"] + $_SESSION["ph3Q"] + $_SESSION["inspire2Q"] + $_SESSION["m600Q"] + $_SESSION["m100Q"] + $_SESSION["dGogglesQ"];
header("location:myCart.php");
die();
?>

