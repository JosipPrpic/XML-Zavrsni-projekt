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

        <link rel="stylesheet" href="CSS/config.css">
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
                document.getElementById("mySidenav").style.width = "300px";
            }

            /* Set the width of the side navigation to 0 */
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>

        


        <header class="header">
            <div id="header-cont">
                <a href="index.php">
                    <div id="banner">
                        <img src="IMG/banner.png" title="banner" alt="banner">
                    </div>
                </a>
                <nav>
                    <a href="index.php">Home</a>
                    <a href="configurator.php">Configurator</a>
                    <a href="about.html">About</a>
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
            <div id="main-cont-first">

                <div id="main-content" data-aos="fade-up">
                    <h1>Configurator:</h1>
                    <a href="#main-sec" style="transition: 0.2s ease-in-out;"><button id="conf-btn" style="width: 500px;">Start configuring your dream machine</button></a>
                </div>
                <div id="main-sec">
                    
                    <div id="form-wrapper">
                        <form method="POST">
                        <h2>Select color: </h2>
                            
                            <?Php
                                $obj_xml = new SimpleXMLElement('data.xml', NULL, TRUE);
                                // Total number of elements present ///
                                //$total = $obj_xml->count(); // total number of elements for PHP 5.3 and above
                                $total =count($obj_xml->children());  // for < php 5.3 version

                                $str="<select name='data'>";
                                for($i=0; $i<$total; $i++) { 
                                    $str= $str . "<option value=".$obj_xml->details[$i]->id.">".$obj_xml->details[$i]->name. "</option>";
                                }
                                $str = $str. "</select>";
                                echo $str;
                            ?><br><br><br>
                            <h2>Select equipment: </h2>
                            
                            <?Php
                                $obj_xml = new SimpleXMLElement('eq.xml', NULL, TRUE);
                                // Total number of elements present ///
                                //$total = $obj_xml->count(); // total number of elements for PHP 5.3 and above
                                $total =count($obj_xml->children());  // for < php 5.3 version

                                $str="<select name='eq'>";
                                for($i=0; $i<$total; $i++) { 
                                    $str= $str . "<option value=".$obj_xml->details[$i]->id.">".$obj_xml->details[$i]->name. "</option>";
                                }
                                $str = $str. "</select>";
                                echo $str;
                            ?>
                            <br><br><br>
                            <h2>Select Engine: </h2>
                            
                            <?Php
                                $obj_xml = new SimpleXMLElement('engine.xml', NULL, TRUE);
                                // Total number of elements present ///
                                //$total = $obj_xml->count(); // total number of elements for PHP 5.3 and above
                                $total =count($obj_xml->children());  // for < php 5.3 version

                                $str="<select name='engine'>";
                                for($i=0; $i<$total; $i++) { 
                                    $str= $str . "<option value=".$obj_xml->details[$i]->id.">".$obj_xml->details[$i]->name. "</option>";
                                }
                                $str = $str. "</select>";
                                echo $str;
                            ?>
                            <br><br><br>
                            <h2>Select Wheels: </h2>
                            
                            <?Php
                                $obj_xml = new SimpleXMLElement('wheels.xml', NULL, TRUE);
                                // Total number of elements present ///
                                //$total = $obj_xml->count(); // total number of elements for PHP 5.3 and above
                                $total =count($obj_xml->children());  // for < php 5.3 version

                                $str="<select name='wheels'>";
                                for($i=0; $i<$total; $i++) { 
                                    $str= $str . "<option value=".$obj_xml->details[$i]->id.">".$obj_xml->details[$i]->name. "</option>";
                                }
                                $str = $str. "</select>";
                                echo $str;
                            ?>
                            <br><br><br>
                            <h2>Select Upholstery: </h2>
                            
                            <?Php
                                $obj_xml = new SimpleXMLElement('upholstery.xml', NULL, TRUE);
                                // Total number of elements present ///
                                //$total = $obj_xml->count(); // total number of elements for PHP 5.3 and above
                                $total =count($obj_xml->children());  // for < php 5.3 version

                                $str="<select name='uph'>";
                                for($i=0; $i<$total; $i++) { 
                                    $str= $str . "<option value=".$obj_xml->details[$i]->id.">".$obj_xml->details[$i]->name. "</option>";
                                }
                                $str = $str. "</select>";
                                echo $str;
                            ?>
                            <br><br><br>
                            <h2>Select Interior Trim: </h2>
                            
                            <?Php
                                $obj_xml = new SimpleXMLElement('interior-trims.xml', NULL, TRUE);
                                // Total number of elements present ///
                                //$total = $obj_xml->count(); // total number of elements for PHP 5.3 and above
                                $total =count($obj_xml->children());  // for < php 5.3 version

                                $str="<select name='interior'>";
                                for($i=0; $i<$total; $i++) { 
                                    $str= $str . "<option value=".$obj_xml->details[$i]->id.">".$obj_xml->details[$i]->name. "</option>";
                                }
                                $str = $str. "</select>";
                                echo $str;
                            ?><br><br><br>
                            <a href="#main-sec" download="tmp/configuration.txt"  style="transition: 0.2s ease-in-out;"><button type="submit" id="conf-btn" style="width: 500px;">Finish!</button></a>
                        </form>
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
                            <br><a href="index.php">Home</a><br>
                            <a href="configurator.php">Configurator</a><br>
                            <a href="about.html">About & Contact</a><br>
                            <a href="login.php">Log In</a><br>
                            <a href="register.php">Register</a><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <hr style="border: 1px solid white; width: 50%;">
                            <h3>Designed and developed by: <a href="https://www.instagram.com/josip_prpic/" target="blank">Josip Prpić</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </body>

    </html>