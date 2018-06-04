<?php
session_start();

$id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

$eAbStandard = $_POST['eAbStandard'];
$eAbReverse = $_POST['eAbReverse'];
$eAbTwisting = $_POST['eAbTwisting'];
$eAbTuck = $_POST['eAbTuck'];

require("connectToDB.php");
$db = get_db();

$query = "UPDATE workout.crunches SET 
standard = '$eAbStandard',
reverse = '$eAbReverse',
twisting = '$eAbTwisting',
tuck = '$eAbTuck'
WHERE c_id = $id RETURNING id";


$statement = $db->prepare($query);
$statement->execute();

header("Location: stats.php");
die();
?>