<?php

$standard = $_POST['abStandard'];
$reverse = $_POST['abReverse'];
$twisting = $_POST['abTwisting'];
$tuck = $_POST['abTuck'];

require("connectToDB.php");
$db = get_db();

try {

$query = 'INSERT INTO workout.crunches(standard, reverse, twisting, tuck) VALUES(:standard, :reverse,  :twisting, :tuck)';
$statement = $db->prepare($query);


$statement->bindValue(':standard', $standard);
$statement->bindValue(':reverse', $reverse);
$statement->bindValue(':twisting', $twisting);
$statement->bindValue(':tuck', $tuck);

$statement->execute();

} catch (Exception $ex) {
    echo "Error in database. Details: $ex";
	die();
}

header("Location: stats.php");
die();
?>