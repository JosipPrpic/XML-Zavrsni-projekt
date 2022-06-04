<?php
$error = 0;

if(isset($_POST['login'])){
    //prihvati samo slova
    $username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
    $password = md5($_POST['password']);
    //provjeri postoji li korisnik
    if(file_exists('users/' . $username . '.xml')){
        $xml = new SimpleXMLElement('users/' . $username . '.xml', 0, true);
        //ako user postoji onda je login uspješan i skače se na index.php stranicu
        if($username == 'admin' && $password == $xml->password) {
            session_start();
            $_SESSION['username'] = $username;
            header('Location: index.php');
            die;
        }else{
            if($password == $xml->password){
                session_start();
                $_SESSION['username'] = $username;
                header('Location: index.php');
                die;
            }else{
                $error = 4;
            }
        }
    }
    elseif(!file_exists('users/' . $username . '.xml')){
        $error = 1;
    }
    if(!file_exists('users/' . $username . '.xml')){
        $error = 2;
    }
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

        <link rel="stylesheet" href="CSS/style.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://kit.fontawesome.com/ecbdcc5fc9.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Days+One&family=Montserrat&family=Poppins&family=Raleway&family=Vazirmatn&display=swap" rel="stylesheet">
    </head>

    <body>
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
                <h1>Log in:</h1>
                <div id="about-p-cont">
                    <div id="form-wrapper">
                        <form method="post" action="">
                            <div id="form-content">
                                <p> Username:<br><input type="text" name="username" size="20" /></p>
                                <p> Password:<br><input type="password" name="password" size="20" /></p>
                                <p><input id="submit" type="submit" value="Login" name="login" /> </p>
                                <br><br>
                                <a href="register.php">Register instead?</a>
                                <?php
                                //provjeri ima li errora i ispiši ih ako ih ima
                                if($error == 1){
                                    echo '<p id="error-msg">Invalid username and/or password!</p>';
                                }
                                elseif ($error == 2) {
                                    echo '<p id="error-msg">Username does not exist! Please register before logging in.</p>';
                                }
                                elseif ($error == 4) {
                                    echo '<p id="error-msg">Invalid username and/or password!</p>';
                                }
                                
                            ?>
                            </div>
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
                    <h3>Designed and developed by: <a href="https://www.instagram.com/josip_prpic/"
                                target="blank">Josip Prpić</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    </body>

    </html>