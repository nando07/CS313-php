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

        <div class="text-center">
            <?php 
            $cRight = "Copyright © " . date("Y") . " Fernando Gomez</p>";
            $serverTime = date("D M d, Y G:i a");
            echo $cRight;
            echo "Server Time: " . $serverTime;
            ?>
        </div>
    </section>

    <!-- js Libraries -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.responsiveTabs.js"></script>
    <script src="js/script.js"></script>


</body>

</html>