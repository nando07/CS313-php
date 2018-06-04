<?php
session_start();
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
	<link href="styles.css" rel="stylesheet">
</head>
<body>

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
<input type="text" class="input" id="ePStandard" name="ePStandard"/>

<br /><br />
<label for="pWide">Wide</label>
<input type="text" class="input" id="ePWide" name="ePWide"/>

<br /><br />
<label for="pArmy">Army</label>
<input type="text" class="input" id="ePArmy" name="ePArmy"/>

<br /><br />

<label for="pIncline">Incline</label>
<input type="text" class="input" id="ePIncline" name="ePIncline"/>
<br /><br /><br />


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