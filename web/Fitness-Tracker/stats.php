<!DOCTYPE html>
<html>
<head>
	<title>stats</title>
</head>
<body>

	<?php 

		require_once('connectToDB.php');
		
		// select exists(select 1 from contact where id=12)
		// get from form
		if (isset($_POST['username']) && isset($_POST['password'])){
			$username = $_POST['username'];
            $password = $_POST['password'];
		}
		

		if ($username){
			echo $username . "<br />";
            echo $password . "<br />";	
			
			$valid = ($db->query('SELECT 1 FROM workout.user WHERE username=$username'));

			echo $valid;

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


