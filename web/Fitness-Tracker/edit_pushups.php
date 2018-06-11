<?php
session_start();
if (!isset($_SESSION['username_session'])) {
  header("Location: form.php");
  die();
}
$id = $_REQUEST['id'];
?>


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
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

	<link href="styles.css" rel="stylesheet">
</head>
<body>
<header>
      <div class="collapse bg-dark" style="background-color:black;" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 style="font-family: 'Permanent Marker', cursive;" class="text-white">About</h4>
              <p class="text-muted">This is a site that will help you track your fitness goals!</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 style="font-family: 'Permanent Marker', cursive;" class="text-white">Contact</h4>
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
          <a href="stats.php" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong style="font-family: 'Permanent Marker', cursive;">Go to Stats</strong>
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
		  <img class="card-img-top" src="img/pushups.jpg" alt="Card image cap">
		  <div class="card-body">
			  <h3>Push-ups</h3><br />
		   <form id="pForm" action="update_p.php?id=<?php echo $id;?>" method="POST">

<label for="pStandard">Standard</label>
<input type="number" min="0" max="1000" class="form-control" id="ePStandard" name="ePStandard" required/>


<label for="pWide">Wide</label>
<input type="number" min="0" max="1000" class="form-control" id="ePWide" name="ePWide" required/>


<label for="pArmy">Army</label>
<input type="number" min="0" max="1000" class="form-control" id="ePArmy" name="ePArmy" required/>



<label for="pIncline">Incline</label>
<input type="number" min="0" max="1000" class="form-control" id="ePIncline" name="ePIncline" required/>
<br />


		   <input type="submit" class="btn btn-sm btn-outline-secondary" value="Update" />
		   </form>
		  </div>
		</div>
	  </div>

      </main>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>
</body>
</html>