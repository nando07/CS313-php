<!DOCTYPE html>
<html>
<head>
	<title>stats</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
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


	<div class="container">
	<h1>Push-ups</h1>
	<div class="row">
	<table class="table table-striped">
	<thead>
	<tr>
			<th>Date</th>
			<th>Standard</th>
			<th>Wide</th>
			<th>Army</th>
			<th>Incline</th>
			</tr>
			</thead>
			<tbody>
			<?php 
			$statement = $db->query("SELECT date, username, standard, wide, army, incline                                                                              
			FROM workout.session, workout.user, workout.pushups      
			WHERE workout.session.user_id = workout.user.id                  
			AND workout.session.pushups_id = workout.pushups.id                                                      
		    AND workout.user.username = '$username'");
			while ($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
			  echo '<tr><td>' . $row['date'] . '</td>' . '<td>' . $row['standard'] . '</td>' . '<td>' . $row['wide'] . '</td>' . '<td>' . $row['army'] . '</td>' . '<td>' . $row['incline'] . '</td></tr>';
			}
			?>
			</tbody>
			</table>
			</div>
			</div>

<div class="container">
	<h1>Crunches</h1>
	<div class="row">
	<table class="table table-striped">
	<thead>
	<tr>
			<th>Date</th>
			<th>Standard</th>
			<th>Reverse</th>
			<th>Twisting</th>
			<th>Tuck</th>
			</tr>
			</thead>
			<tbody>
			<?php 
			$statement = $db->query("SELECT date, username, standard, reverse, twisting, tuck                                                                              
			FROM workout.session, workout.user, workout.crunches      
			WHERE workout.session.user_id = workout.user.id                  
			AND workout.session.crunches_id = workout.crunches.id                                                      
		    AND workout.user.username = '$username'");
			while ($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
			  echo '<tr><td>' . $row['date'] . '</td>' . '<td>' . $row['standard'] . '</td>' . '<td>' . $row['reverse'] . '</td>' . '<td>' . $row['twisting'] . '</td>' . '<td>' . $row['tuck'] . '</td></tr>';
			}
			?>
			</tbody>
			</table>
			</div>
			</div>




</body>
</html>


