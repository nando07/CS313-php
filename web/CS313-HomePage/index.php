<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home Page</title>

    <!-- css stylesheets -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lilita+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Italiana" rel="stylesheet">

    <link rel="stylesheet" href="css/FontAwesome/css/fontawesome-all.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/responsive-tabs/responsive-tabs.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <!-- add white space with &nbsp; -->
        <div id="status">&nbsp;</div>
    </div>
    <!-- Home Page -->
    <section id="home">
        <!-- Background Video -->
        <video id="home-background-video" poster="video/space.jpg" autoplay loop muted>
            <source src="video/space.mp4" type="video/mp4">
            <source src="video/space.ogg" type="video/ogg">
            <source src="video/space.webm" type="video/webm">
        </video>

        <div id="home-overlay"></div>

        <div id="home-content">
            <div id="home-inner" class="text-center">
                <div id="home-heading">
                    <h1 id="home-heading-first">Fernando Gomez</h1><br>
                    <h1 id="home-heading-second">iOS <span id="engineer">Engineer</span></h1>
                </div>

                <div id="home-text">
                    <p>Designer + Developer + Creative</p>
                </div>

                <div id="home-btn">
                    <a class="btn btn-general btn-home smooth-scroll" href="#my-work-tab" title="See My Work" role="button">See My Work</a>
                </div>

            </div>
        </div>

        <!-- Go Down -->
        <a href="#interests" id="arrow-down" class="smooth-scroll">
            <i class="fas fa-arrow-circle-down"></i>
        </a>
    </section>

    <div id="divider"></div>

    <!-- My Interests  -->
    <section id="interests">
        <div id="interests-01">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="horizontal-heading">
                                <h5>About me</h5>
                                <h2>My Interests</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <img src="img/mybrain2.png" alt="development" class="img-fluid">
                        </div>
                        <div class="col-md-5">
                            <!-- First Interest  -->
                            <div class="interest">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="icon text-center">
                                            <i class="far fa-futbol"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h4>Soccer</h4>
                                        <p>I play soccer at least once a week!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="interest">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="icon text-center">
                                            <i class="fas fa-mobile-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h4>Mobile App Development</h4>
                                        <p>This is a new passion. My dream is to become a professional Mobile Application Developer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="interest">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="icon text-center">
                                            <i class="fas fa-camera-retro"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h4>Photography/Videography</h4>
                                        <p>I love shooting photos and videos. I also enjoy editing my work.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="interest">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="icon text-center">
                                            <i class="fab fa-xbox"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h4>Gaming</h4>
                                        <p>Ocassionally, I play videogames with my brother.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="interest">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="icon text-center">
                                            <i class="fas fa-space-shuttle"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h4>Space/Physics</h4>
                                        <p>I love to read about space and astronomy. My favorite movie is Interstellar.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="my-work-tab">
            <!--<h2 class="display-4  py-5 my-4">My Work</h2>-->
            <div class="content-box-md">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="horizontal-heading">
                                <h5>Learning</h5>
                                <h2>My Work</h2>
                            </div>
                        </div>
                    </div>
                    <ul id="tabs" class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a id="tab-A" href="#w1" class="nav-link active" data-toggle="tab" role="tab">Week 1</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-B" href="#w2" class="nav-link" data-toggle="tab" role="tab">Week 2</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-C" href="#w3" class="nav-link" data-toggle="tab" role="tab">Week 3</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-D" href="#w4" class="nav-link" data-toggle="tab" role="tab">Week 4</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-E" href="#w5" class="nav-link" data-toggle="tab" role="tab">Week 5</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-F" href="#w6" class="nav-link" data-toggle="tab" role="tab">Week 6</a>
                        </li>

                    </ul>


                    <div id="content" class="tab-content" role="tablist">
                        <div id="w1" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                            <div class="card-header" role="tab" id="heading-A">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#collapse-A" data-parent="#content" aria-expanded="true" aria-controls="collapse-A">
                Information
              </a>
                                </h5>
                            </div>


                            <div id="collapse-A" class="collapse show" role="tabpanel" aria-labelledby="heading-A">
                                <div class="card-body">
                                    <div id="t1" class="work-tab">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="img/heroku.png" alt="heroku">

                                                </div>

                                                <div class="col-md-6">
                                                    <div class="tab-backg">
                                                        <h2>01</h2>
                                                        <h3>Heroku</h3>
                                                        <p>This week I created a Heroku cloud space and pushed my first "Hello World" code in html and php.
                                                        </p>

                                                        <div id="link-btns">
                                                            <div id="work-btn-heroku">
                                                                <a class="btn btn-general btn-work-1" href="https://blooming-journey-48310.herokuapp.com/hello.html" target="_blank" title="Show Work" role="button">Heroku</a>
                                                            </div>
                                                            <div id="work-btn-github">
                                                                <a class="btn btn-general btn-work-2" href="https://blooming-journey-48310.herokuapp.com/hello.html" target="_blank" title="Show Work" role="button">GitHub</a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="w2" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                            <div class="card-header" role="tab" id="heading-B">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse-B" data-parent="#content" aria-expanded="false" aria-controls="collapse-B">
                Information
              </a>
                                </h5>
                            </div>
                            <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
                                <div class="card-body">
                                    <div id="t1" class="work-tab">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="img/btrap.png" alt="heroku">

                                                </div>

                                                <div class="col-md-6">
                                                    <div class="tab-backg">
                                                        <h2>02</h2>
                                                        <h3>Bootstrap Home Page</h3>
                                                        <p>This week I created this great home page using JQuery, Bootstrap, and PHP.
                                                        </p>
                                                        <div id="link-btns">
                                                            <div id="work-btn-heroku">
                                                                <a class="btn btn-general btn-work-1" href="https://blooming-journey-48310.herokuapp.com/hello.html" target="_blank" title="Show Work" role="button">Heroku</a>
                                                            </div>
                                                            <div id="work-btn-github">
                                                                <a class="btn btn-general btn-work-2" href="https://blooming-journey-48310.herokuapp.com/hello.html" target="_blank" title="Show Work" role="button">GitHub</a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="w3" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
                            <div class="card-header" role="tab" id="heading-C">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse-C" data-parent="#content" aria-expanded="false" aria-controls="collapse-C">
                Information
              </a>
                                </h5>
                            </div>
                            <div id="collapse-C" class="collapse" role="tabpanel" aria-labelledby="heading-C">
                                <div class="card-body">
                                    Coming Soon...
                                </div>
                            </div>
                        </div>

                        <div id="w4" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-D">
                            <div class="card-header" role="tab" id="heading-D">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse-D" data-parent="#content" aria-expanded="false" aria-controls="collapse-D">
                Information
              </a>
                                </h5>
                            </div>
                            <div id="collapse-D" class="collapse" role="tabpanel" aria-labelledby="heading-D">
                                <div class="card-body">
                                    Coming Soon...
                                </div>
                            </div>
                        </div>
                        <div id="w5" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-E">
                            <div class="card-header" role="tab" id="heading-E">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse-E" data-parent="#content" aria-expanded="false" aria-controls="collapse-E">
                Information
              </a>
                                </h5>
                            </div>
                            <div id="collapse-E" class="collapse" role="tabpanel" aria-labelledby="heading-E">
                                <div class="card-body">
                                    Coming Soon...
                                </div>
                            </div>
                        </div>
                        <div id="w6" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-F">
                            <div class="card-header" role="tab" id="heading-F">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse-F" data-parent="#content" aria-expanded="false" aria-controls="collapse-F">
                Information
              </a>
                                </h5>
                            </div>
                            <div id="collapse-F" class="collapse" role="tabpanel" aria-labelledby="heading-F">
                                <div class="card-body">
                                    Coming Soon...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<div>
	  <div class="text-center">
            <?php 
            $cRight = "Copyright © " . date("Y") . " Fernando Gomez</p>";
            $serverTime = date("D M d, Y G:i a");
            echo $cRight;
            echo "Server Time: " . $serverTime;
            ?>
        </div>
    </section>

    <section><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></section>

    <!-- js Libraries -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.responsiveTabs.js"></script>
    <script src="js/script.js"></script>
    

</body>

</html>
           
