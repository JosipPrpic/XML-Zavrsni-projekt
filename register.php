<?php
//polje sa errorima 
$errors = array();
if(isset($_POST['login'])){
    //preg_replace služi da se uzimaju u obzir samo slova A-Z i a-z
    $username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];
    //provjeri postoji li već username
    if(file_exists('users/' . $username . '.xml')){
        $errors[] = 'Username already exists';
    }
    //errori - poruka svakog errora objašnjava sama sebe
    if($username == ''){
        $errors[] = 'Username is blank';
    }
    if($email == ''){
        $errors[] = 'Email is blank';
    }
    if($password == '' || $c_password == ''){
        $errors[] = 'Passwords are blank';
    }
    if($password != $c_password){
        $errors[] = 'Passwords do not match';
    }
    /*ako nema errora, onda dodaj usera u xml file sa strukturom 
    <username>
        <password></password>
        <email></email>
    </username>
    pomožu SimpleXMLElement i addChild
    */
    if(count($errors) == 0){
        $xml = new SimpleXMLElement('<user></user>');
        $xml->addChild('password', md5($password));
        $xml->addChild('email', $email);
        $xml->asXML('users/' . $username . '.xml');
        header('Location: login.php');
        die;
    }
}
?>


<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>

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
                <h1>Register:</h1>
                <div id="about-p-cont">
                    <div id="form-wrapper">
                        <form method="post" action="">
                            <div id="form-content">
                            <p>Username: <br><input type="text" name="username" size="20"  /></p>
                            <p>Email: <br><input type="text" name="email" size="20" /></p>
                            <p>Password: <br><input type="password" name="password" size="20" /></p>
                            <p>Confirm Password: <br><input type="password" name="c_password" size="20" /></p>
                            <p><input id="submit" type="submit" value="Register" name="login" /> </p>
                            <?php
                                //ispis errora
                                if(count($errors) > 0){
                                    echo '<ul id="error-msg">';
                                    foreach($errors as $e){
                                        echo '<li id="error-msg" style="list-style-type: none; margin-left: 150px;"> - ' . $e . '!</li>';
                                    }
                                    echo '</ul>';
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