<?php 
session_start();
if (!isset($_SESSION['username_session'])) {
  header("Location: form.php");
  die();
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

    <title>Fitness Tracker</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="styles.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="collapse" style="background-color:black;" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 style="font-family: 'Permanent Marker', cursive;" class="text-white">About</h4>
              <p class="text-muted">This is a site that will help you track your fitness goals!</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4  style="font-family: 'Permanent Marker', cursive;" class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="signOut.php" class="text-white">Sign Out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark" id="nav-style">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
          <p><i class="fal fa-chart-line"></i></p>
            <strong style="font-family: 'Permanent Marker', cursive;">Fit Tracker</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
        <video id="home-background-video" poster="img/home.jpg" autoplay loop muted>
            <source src="videos/homeMin.mp4" type="video/mp4">    
        </video>
        <div id="home-overlay"></div>
          <h1 style="font-family: 'Permanent Marker', cursive;" class="jumbotron-heading">Fitness Tracker</h1>
          <p class="lead text-light">Being fit means that you are able to push the limits of your body and not face any serious consequences as a result. This means that you can run long distances, lift heavy weights, go for brisk walks and do all the other things that place your body under stress.</p>
          <p>
            <a href="stats.php" class="btn btn-primary my-2">See Your Stats</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/abs.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Strengthening your entire core is not only crucial for sculpting a flat stomach, but these muscles also provide support for the entire body in everyday movements, reduce back pain, and improve posture.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="stats.php" class="btn btn-sm btn-outline-secondary" >View</a>
                   
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/pushups.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">By working on a large number of muscles in your body, push-ups help tremendously for a fitter you. Push-ups help you focus on your arms, abs and your lower body, all at the same time.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="stats.php" class="btn btn-sm btn-outline-secondary" >View</a>
                   
                    </div>
                  
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/running.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Running Is a Killer Leg Workout. Your body's biggest muscles are all in your legs, and running benefits all of them: your inner and outer thighs, your gluteus maximus, quads, hamstrings, and calves.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="stats.php" class="btn btn-sm btn-outline-secondary" >View</a>
                   
                    </div>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>

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