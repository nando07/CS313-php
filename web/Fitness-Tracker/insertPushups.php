<?php
session_start();

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

$username = $_SESSION['username_session'];
$password = $_SESSION['password_session'];

$statement = $db->prepare("SELECT id FROM workout.user 
WHERE workout.user.username = '$username'
AND workout.user.password = '$password'");
$statement->execute();

$row = $statement->fetch(PDO::FETCH_ASSOC);

$userId = $row['id'];
$t = time();
$formattedT = date("M-d-Y h:i:s",$t);

$pushupsId = $db->lastInsertId("workout.pushups_id_seq");
echo  "this is the crunches id: $pushupsId";

$statement = $db->prepare('INSERT INTO workout.session(date, user_id, pushups_id, crunches_id) 
VALUES (:ctime, :user, :pushupsID, :crunchesID)');

$statement->bindValue(':ctime', $formattedT);
$statement->bindValue(':user', $userId);
$statement->bindValue(':pushupsID', $pushupsId);
$statement->bindValue(':crunchesID', null);

$statement->execute();

} catch (Exception $ex) {
    echo "Error in database. Details: $ex";
	die();
}

header("Location: stats.php");
die();
?>