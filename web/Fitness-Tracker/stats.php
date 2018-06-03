<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>stats</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="styles.css" rel="stylesheet">
</head>
<body>
<header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">This is a site that will help you track your fitness goals!</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Fit Tracker</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>
	<main role="main">

<div class="album py-5 bg-light">
  <div class="container">

	<div class="row">
	  <div class="col-md-4">
		<div class="card mb-4 box-shadow">
		  <img class="card-img-top" src="img/abs.jpg" alt="Card image cap">
		  <div class="card-body">
		   <h3>Crunches</h3><br />
		   <form id="abForm" action="" method="POST">

<label for="abStandard">Standard</label>
<input type="text" class="input" id="abStandard" name="abStandard"/>

<br /><br />
<label for="abReverse">Reverse </label>
<input type="text" class="input" id="abReverse" name="abReverse"/>

<br /><br />
<label for="abTwisting">Twisting</label>
<input type="text" class="input" id="abTwisting" name="abTwisting"/>

<br /><br />

<label for="abTuck">Tuck:</label>
<input type="text"  class="input" id="abTuck" name="abTuck"/>
<br /><br /><br />


		   <input type="submit" class="btn btn-sm btn-outline-secondary" value="Save" />
		   </form>
		 
		  </div>
		</div>
	  </div>
	  <div class="col-md-4">
		<div class="card mb-4 box-shadow">
		  <img class="card-img-top" src="img/pushups.jpg" alt="Card image cap">
		  <div class="card-body">
			  <h3>Push-ups</h3><br />
		   <form id="abForm" action="" method="POST">

<label for="abStandard">Standard</label>
<input type="text" class="input" id="abStandard" name="abStandard"/>

<br /><br />
<label for="abReverse">Wide</label>
<input type="text" class="input" id="abReverse" name="abReverse"/>

<br /><br />
<label for="abTwisting">Army</label>
<input type="text" class="input" id="abTwisting" name="abTwisting"/>

<br /><br />

<label for="abTuck">Incline</label>
<input type="text" class="input" id="abTuck" name="abTuck"/>
<br /><br /><br />


		   <input type="submit" class="btn btn-sm btn-outline-secondary" value="Save" />
		   </form>
		  </div>
		</div>
	  </div>
	  
	  <div class="col-md-4">
		<div class="card mb-4 box-shadow">
		  <img class="card-img-top" src="img/running.jpg" alt="Card image cap">
		  <div class="card-body">
			  <h3>Running</h3><br />
		   <form id="abForm" action="" method="POST">

<label for="abStandard">Time</label>
<input type="text" class="input" id="time" name="time"/><br />

<br /><br />


		   <input type="submit" class="btn btn-sm btn-outline-secondary" value="Save" />
		   </form>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</div>

</main>


<h1 style="text-align:center;">Your Stats!</h1>
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
				echo '<p style="text-align:center;">user exists!</p>';
				

				foreach ($db->query('SELECT username, password FROM workout.user') as $row)
				{
				  echo '<p style="text-align:center;">user: ' . $row['username'] . ' password: ' . $row['password'] . '</p>';
				//   echo ' password: ' . $row['password'];
				//   echo '<br/>';
				}
				
				// $statement = $db->query('SELECT date, id FROM workout.session');
				// while ($row = $statement->fetch(PDO::FETCH_ASSOC))
				// {
				//   echo 'This is the date: ' . $row['date'] . ' Session ID: ' . $row['id'] . '<br/>';
				// }
			} else {
				echo 'Please check username or password';
			}
	?>

	<div class="container">
	<h1>Push-ups</h1>
	<div class="row">
	<table class="table table-striped">
	<thead>
	<tr>
			<th>Date</th>
			<th>Username</th>
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
			AND workout.user.username = '$username'
			AND workout.user.password = '$password'
			ORDER BY date");
			while ($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
			  echo '<tr><td>' . $row['date'] . '</td>' . '<td>' . $row['username'] . '<td>' . $row['standard'] . '</td>' . '<td>' . $row['wide'] . '</td>' . '<td>' . $row['army'] . '</td>' . '<td>' . $row['incline'] . '</td></tr>';
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
			<th>Username</th>
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
		    AND workout.user.username = '$username'
			AND workout.user.password = '$password'
			ORDER BY date");
			while ($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
			  echo '<tr><td>' . $row['date'] . '</td>' . '<td>' . $row['username'] . '</td>' .'<td>' . $row['standard'] . '</td>' . '<td>' . $row['reverse'] . '</td>' . '<td>' . $row['twisting'] . '</td>' . '<td>' . $row['tuck'] . '</td></tr>';
			}
			?>
			</tbody>
			</table>
			</div>
			</div>

			<footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Fit Tracker &copy; by Fernando Gomez</p>
        
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>
</body>
</html>


