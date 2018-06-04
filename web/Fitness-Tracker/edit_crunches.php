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
		  <img class="card-img-top" src="img/abs.jpg" alt="Card image cap">
		  <div class="card-body">
		   <h3>Crunches</h3><br />
		   <form id="editAbForm" action="update_c.php?id=<?php echo $id;?>" method="POST">

<label for="abStandard">Standard</label>
<input type="text" class="form-control" id="eAbStandard" name="eAbStandard" required/>


<label for="abReverse">Reverse </label>
<input type="text" class="form-control" id="eAbReverse" name="eAbReverse" required/>


<label for="abTwisting">Twisting</label>
<input type="text" class="form-control" id="eAbTwisting" name="eAbTwisting" required/>



<label for="abTuck">Tuck:</label>
<input type="text"  class="form-control" id="eAbTuck" name="eAbTuck" required/>
<br /><br />


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