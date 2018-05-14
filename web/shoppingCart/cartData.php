<?php 
session_start();
$data = $_GET["cartInfo"];

switch ($data) {
	case 'm':
    $_SESSION["mavicQ"] = $_SESSION["mavicQ"] + 1;  
		break;
	case 's':
    $_SESSION["sparkQ"] = $_SESSION["sparkQ"] + 1;
		break;
	case 'ph4':
    $_SESSION["ph4Q"] = $_SESSION["ph4Q"] + 1;
		break;
	case 'ph3':
    $_SESSION["ph3Q"] = $_SESSION["ph3Q"] + 1;
		break;
	case 'in2':
    $_SESSION["inspire2Q"] = $_SESSION["inspire2Q"] + 1;
        break;  
    case 'm600':
    $_SESSION["m600Q"] = $_SESSION["m600Q"] + 1;
        break;
    
    case 'm100':
    $_SESSION["m100Q"] = $_SESSION["m100Q"] + 1;
        break;

    case 'dg':
    $_SESSION["dGogglesQ"] = $_SESSION["dGogglesQ"] + 1;
        break;
	default:
		echo "Default - No option found";
		break;
}
$_SESSION["totalProducts"] = $_SESSION["mavicQ"] + $_SESSION["sparkQ"] + $_SESSION["ph4Q"] + $_SESSION["ph3Q"] + $_SESSION["inspire2Q"] + $_SESSION["m600Q"] + $_SESSION["m100Q"] + $_SESSION["dGogglesQ"];
header("location:browse.php");
die();
?>

