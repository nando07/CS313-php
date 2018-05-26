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
			
			
			$query = $db->query("SELECT username, password FROM workout.user AS u WHERE u.username = '$username' AND u.password = '$password'");
			
			$nice = $query->fetch(PDO::FETCH_ASSOC);

			if ($nice['username'] == $username && $nice['password'] == $password) {
				echo 'user exists!';
			} else {
				echo 'Please check username or passowrd';
			}
			// echo $nice['username'];
		//$results = pg_query($query) or die('Query Failed '. preg_last_error());	
			
		// $myRow = pg_fetch_assoc($results);
		// $value = $myRow[username];
		// echo $value;
			// $valid = ($db->query("SELECT EXISTS (SELECT 1 FROM workout.user WHERE username='$username'"));

			// echo $valid;

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


