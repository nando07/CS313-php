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

			$query = $db->query("SELECT username, password FROM workout.user AS u WHERE u.username = '$username' AND u.password = '$password'");	
			$validation = $query->fetch(PDO::FETCH_ASSOC);

			if ($validation['username'] == $username && $validation['password'] == $password) {
				echo 'user exists!';

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
			} else {
				echo 'Please check username or password';
			}
			// echo $nice['username'];
		//$results = pg_query($query) or die('Query Failed '. preg_last_error());	
			
		// $myRow = pg_fetch_assoc($results);
		// $value = $myRow[username];
		// echo $value;
			// $valid = ($db->query("SELECT EXISTS (SELECT 1 FROM workout.user WHERE username='$username'"));

			// echo $valid;
	?>
</body>
</html>


