<?php
session_start();

$id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

$eAbStandard = $_POST['eAbStandard'];
$eAbReverse = $_POST['eAbReverse'];
$eAbTwisting = $_POST['eAbTwisting'];
$eAbTuck = $_POST['eAbTuck'];

require("connectToDB.php");
$db = get_db();

try {

$query = "UPDATE workout.crunches SET 
standard = '$eAbStandard',
reverse = '$eAbReverse',
twisting = '$eAbTwisting',
tuck = '$eAbTuck'
WHERE workout.crunches.c_id = $id RETURNING id";


$statement = $db->prepare($query);
$statement->execute();

} catch (Exception $ex) {
    echo "Error in database. Details: $ex" . "this is the id: " . $id;
	die();
}



header("Location: stats.php");
die();
?>