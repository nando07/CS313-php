<?php

$pStandard = $_POST['pStandard'];
$pWide = $_POST['pWide'];
$pArmy = $_POST['pArmy'];
$pIncline = $_POST['pIncline'];

require("connectToDB.php");
$db = get_db();

try {

$query = 'INSERT INTO workout.pushups(standard, wide, army, incline) VALUES(:standard, :wide,  :army, :incline)';
$statement = $db->prepare($query);


$statement->bindValue(':standard', $pStandard);
$statement->bindValue(':wide', $pWide);
$statement->bindValue(':army', $pArmy);
$statement->bindValue(':incline', $pIncline);

$statement->execute();

} catch (Exception $ex) {
    echo "Error in database. Details: $ex";
	die();
}

header("Location: stats.php");
die();
?>