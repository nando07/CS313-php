 
<?php

session_start();
if (isset($_POST['username'])) {
	$_SESSION['username_session'] = $_POST['username'];
}
if (isset($_POST['password'])) {
	$_SESSION['password_session'] = $_POST['password'];
}

$username = $_POST['username'];
$password = $_POST['password'];
$success = NULL;
$error = NULL;

require_once('connectToDB.php');
$db = get_db();

if(isset($_POST['submit'])) {
$query = "SELECT username, password FROM workout.user AS u WHERE u.username = '$username'";	
    
    $statement = $db->prepare($query);

    $statement->execute();

    $row = $statement->fetch(PDO::FETCH_ASSOC);

    $hashedPasswordFromDB = $row['password'];
    if (($row['username'] == $username) && (password_verify($password, $hashedPasswordFromDB)))
    {
      // if ($row['username'] == $username && $row['password'] == $password) {
      $success = "Username and Password are valid!";
      header("Location: stats.php");
      die();
    } else {
      $error = "Invalid username or password"; 
    }
  
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Form</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="styles.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">
  </head>

  <body>
    <form class="form-signin" action="form.php" method="POST">
      <div class="text-center mb-4">

        <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Let's authenticate you!</h1>
        <p>Input your username and password to see your current stats! Test with 'Fego' and 'pass'</p>
<!--  
        <p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a></p>-->
        <?php 

      if(isset($error)) {
      echo '<p class="alert alert-danger">' . $error . '</p>';
      }
      if(isset($success)) {
      echo '<p class="alert alert-success">' . $success . '</p>';
      }
      ?>

      </div>

      <div class="form-label-group">
        <input type="text" id="inputEmail" class="form-control"   name="username" placeholder="Email address" required autofocus>
        <label for="inputEmail">username</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
        <label for="inputPassword">password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign In</button><br>
      <p class="text-center mb-4">or <a  href="signUp.php">Sign Up</a></p>
      <p class="mt-5 mb-3 text-muted text-center">&copy; Created by: Fernando Gomez 2018</p>
    </form>



     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>
  </body>
</html>
