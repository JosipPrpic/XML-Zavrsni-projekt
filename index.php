<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMW Configurator by JP</title>
    <link rel="icon" type="image/x-icon" href="IMG/favicon_logo.png">

    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow&family=Montserrat&family=Open+Sans&family=Playfair+Display&family=Poppins&family=Raleway&family=Ubuntu&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/ecbdcc5fc9.js" crossorigin="anonymous"></script>
    <script src="JS/bg_change.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>

<body>
    <script>
        AOS.init();
    </script>

    <script>
        /* Set the width of the side navigation to 250px */
        function openNav() {
            document.getElementById("mySidenav").style.width = "";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

    <header class="header">
        <div id="header-cont">
            <a href="index.php"><div id="banner">
                <img src="IMG/banner.png" title="banner" alt="banner">
            </div></a>
            <nav>
                <a href="index.php">Home</a>
                <a href="configurator.php">Configurator</a>
                <a href="about.php">About</a>
                <a href="login.php">Log in/Register</a>
            </nav>
        </div>
        <span onclick="openNav()"><?php 
        
        
        if($_SESSION['username'] == NULL) {
            echo ".";
        }else {
            echo "| " . $_SESSION['username'] . " | ";
        } ?><i class="fa-solid fa-bars-staggered"></i></span>
    </header>
    <main>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
        </div>
        <video autoplay muted loop>
            <source src="IMG/bg-vid-1.mp4" type="video/mp4" />
        </video>
        <div id="main-cont-first">

            <div id="main-content" data-aos="fade-up">
                <h1>Experience the M performance at its finest.<br>Try out the new configurator here:</h1>
                <a href="configurator.php"><button id="conf-btn">Configurator</button></a>
            </div>
        </div>
        <div id="main-sec">
            <div id="main-cont-sec">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <h1 data-aos="fade-right" data-aos-duration="600">Speed</h1>
                            <hr id="m-s-line" data-aos="fade-right" data-aos-duration="600">
                            <div id="sec-p" data-aos="fade-up" data-aos-duration="600">
                                <p>When speed gets in the blood, one must drive to live.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <h1 data-aos="fade-down" data-aos-duration="600">Power</h1>
                            <hr id="m-s-line" data-aos="zoom-in" data-aos-duration="600">
                            <div id="sec-p" data-aos="fade-up" data-aos-duration="600">
                                <p>It's not your average road princess, It's a f***ing Beamer.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <h1 data-aos="fade-left" data-aos-duration="600">Passion</h1>
                            <hr id="m-s-line" data-aos="fade-left" data-aos-duration="600">
                            <div id="sec-p" data-aos="fade-up" data-aos-duration="600">
                                <p>A love between a man and his car can only be understood by those who felt it.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="main-th">
            <div class="container-fluid" style="background-color: black;">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 padding-0">
                        <img src="IMG/bs-grid-img1 (1).png" width="100%" height="auto">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 padding-0">
                        <img src="IMG/bs-grid-img1 (2).png" width="100%" height="auto">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 padding-0">
                        <img src="IMG/bs-grid-img1 (3).png" width="100%" height="auto">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 padding-0">
                        <img src="IMG/bs-grid-img1 (4).png" width="100%" height="auto">
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 padding-0">
                        <img src="IMG/bs-grid-img1 (5).png" width="100%" height="auto">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 padding-0">
                        <img src="IMG/bs-grid-img1 (6).png" width="100%" height="auto">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 padding-0">
                        <img src="IMG/bs-grid-img1 (7).png" width="100%" height="auto">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 padding-0">
                        <img src="IMG/bs-grid-img1 (8).png" width="100%" height="auto">
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 padding-0">
                        <img src="IMG/bs-grid-img1 (9).png" width="100%" height="auto">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 padding-0">
                        <img src="IMG/bs-grid-img1 (10).png" width="100%" height="auto">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 padding-0">
                        <img src="IMG/bs-grid-img1 (11).png" width="100%" height="auto">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 padding-0">
                        <img src="IMG/bs-grid-img1 (12).png" width="100%" height="auto">
                    </div>
                </div>
            </div>

        </div>


    </main>
    <footer>
        <div class="footer-cont">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <h2>BMW M Configurator</h2>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <h2>Contact information</h2>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <h2>Website navigation</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <br>
                        <p>Copyright &copy; May 2022<br> XML Programming - Final Project<br><a href="https://www.tvz.hr/" target="_blank">Zagreb University of Applied Sciences.</a><br>All rights reserved.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <br>
                        <p>Contact page: <a href="about.html">Contact</a><br>E-mail: <a href="mailto:jprpic@tvz.hr">Jprpic@tvz.hr</a><br>Instagram: <a href="https://www.instagram.com/josip_prpic/" target="blank">@josip_prpic</a><br>LinkedIn: <a href="#">Josip Prpić</a></p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <br><a href="index.html">Home</a><br>
                        <a href="index.html">Configurator</a><br>
                        <a href="about.html">About & Contact</a><br>
                        <a href="login.php">Log In</a><br>
                        <a href="register.php">Register</a><br>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <hr style="border: 1px solid white; width: 50%;">
                    <h3>Designed and developed by: <a href="https://www.instagram.com/josip_prpic/"
                                target="blank">Josip Prpić</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>