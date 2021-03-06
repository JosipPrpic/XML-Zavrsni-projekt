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
            document.getElementById("mySidenav").style.width = "100%";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

    
<?php
if(file_exists('file.json'))
{
     $final_data=fileWriteAppend();
     if(file_put_contents('file.json', $final_data))
     {
          $message = "<label class='text-success'>Data added Success fully</p>";
     }
}
else
{
     $final_data=fileCreateWrite();
     if(file_put_contents('file.json', $final_data))
     {
          $message = "<label class='text-success'>File createed and  data added Success fully</p>";
     }

}
function fileWriteAppend(){
		$current_data = file_get_contents('file.json');
		$array_data = json_decode($current_data, true);
		$extra = array(
			 'Ime'               =>     $_POST['name'],
			 'Prezime'          =>     $_POST["surname"],
			 'E-mail'          =>     $_POST["email"],
			 'Poruka'     =>     $_POST["msg"]
			 

		);
		$array_data[] = $extra;
		$final_data = json_encode($array_data);
		return $final_data;
}
function fileCreateWrite(){
		$file=fopen("file.json","w");
		$array_data=array();
		$extra = array(
            'Ime'               =>     $_POST['name'],
            'Prezime'          =>     $_POST["surname"],
            'E-mail'          =>     $_POST["email"],
            'Poruka'     =>     $_POST["msg"]

		);
		$array_data[] = $extra;
		$final_data = json_encode($array_data);
		fclose($file);
		return $final_data;
        
}
?>

    <header class="header" style="background-color: black;">
        <div id="header-cont">
            <div id="banner">
                <img src="IMG/banner.png" title="banner" alt="banner">
            </div>
            <nav>
                <a href="index.php">Home</a>
                <a href="configurator.php">Configurator</a>
                <a href="about.php">About</a>
                <a href="login.php">Log in/Register</a>
            </nav>
        </div>
        <span onclick="openNav()"><i class="fa-solid fa-bars-staggered"></i></span>
    </header>
    <div id="main-about">
        <div id="main-about-cont">
            <h1>About</h1>
            <div id="about-p-cont">
                <p>This page was made as final project for XML programming class at <a href="https://www.tvz.hr/" target="_blank">Zagreb University of Applied Sciences.</a> All images and videos used to make this website are property of their respective
                    owners. More info about multimedia content used here can be found hovering over the photo. For any questions or requests, contact information is listed below.</p>
                <div id="form-wrapper">
                    <form method="POST">
                        Your name:<br>
                        <input name="name" type="text"><br> Your surname:<br>
                        <input name="surname" type="text"><br> Your E-mail address:<br>
                        <input name="email" type="email"><br> Message:<br>
                        <textarea name="msg"></textarea><br>
                        <input type="submit" id="submit" value="Submit">
                        <input type="reset" id="submit" value="Reset" style="margin-left: 137px;">
                    </form>
                </div>
            </div>

        </div>
    </div>
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
                        <h2>Website nav</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <br>
                        <p>Copyright &copy; May 2022<br> XML Programming - Final Project<br><a href="https://www.tvz.hr/" target="_blank">Zagreb University of Applied Sciences.</a><br>All rights reserved.<br>Designed and developed by: <a href="https://www.instagram.com/josip_prpic/"
                                target="blank">Josip Prpi??</a></p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <br>
                        <p>Contact: <a href="mailto:jprpic@tvz.hr">Jprpic@tvz.hr</a><br>Instagram: <a href="https://www.instagram.com/josip_prpic/" target="blank">Fast Lane</a><br>LinkedIn: <a href="#">Josip Prpi??</a></p>
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
                        <h3>Designed and developed by: <a href="https://www.instagram.com/josip_prpic/" target="blank">Josip Prpi??</a></h3>
                    </div>
                </div>

            </div>
        </div>
    </footer>

</body>

</html>