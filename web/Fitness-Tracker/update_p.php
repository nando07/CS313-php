<?php
session_start();

$id = $_REQUEST['id'];

$ePStandard = $_POST['ePStandard'];
$ePWide = $_POST['ePWide'];
$ePArmy = $_POST['ePArmy'];
$ePIncline = $_POST['ePIncline'];

require("connectToDB.php");
$db = get_db();

try {

$query = "UPDATE workout.pushups SET 
standard = '$ePStandard',
wide = '$ePWide',
army = '$ePArmy',
incline = '$ePIncline'
WHERE p_id = $id";


$statement = $db->prepare($query);
$statement->execute();

} catch (Exception $ex) {
    echo "Error in database. Details: $ex" . "this is the id: " . $id;
	die();
}



header("Location: stats.php");
die();
?>