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

    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">
  </head>

  <body>
    <form class="form-signin" action="stats.php" method="POST">
      <div class="text-center mb-4">
        <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Let's authenticate you!</h1>
        <p>Input your username and password to see your current stats! Test with 'Fego' and 'pass'</p>
<!--        <p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a></p>-->
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
      <button class="btn btn-lg btn-primary btn-block" type="submit">See Your Stats!</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; Created by: Fernando Gomez 2018</p>
    </form>
  </body>
</html>
