<!DOCTYPE html>
<html>
<head>
	<title>stats</title>
</head>
<body>

	<?php 

		require_once('connectToDB.php');
		
		// get from form
		if (isset($_POST['Username']) && isset($_POST['Password'])){
			$username = $_POST['Username'];
            $password = $_POST['Password'];
		}
		

		if ($username){
			echo $username . "<br />";
            echo $password . "<br />";	
            
            foreach ($db->query('SELECT username, password FROM workout.user') as $row)
{
  echo 'user: ' . $row['username'];
  echo ' password: ' . $row['password'];
  echo '<br/>';
}

$statement = $db->query('SELECT date, id FROM workout.session');
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
  echo 'This is the date: ' . $row['date'] . ' Session ID: ' . $row['id'] . '<br/>';
}
		}
	?>
</body>
</html>


