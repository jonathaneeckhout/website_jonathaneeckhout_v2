<?php
require_once('../php/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jonathan Eeckhout</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
    <div class="black_background">
        <div class="wrapper">
            <div class="topnav" id="myTopnav">
                <a href="../index.php">Home</a>
                <a href="projects.php">Projects</a>
                <a href="about.php">About</a>
                <a href="contact.php" class="active">Contact</a>
                <?php
                    if($user->is_logged_in()) {
                        echo '<a href="userIndex.php">' . $_SESSION['username'] .'</a>';
                    } else {
                        echo '<a href="login.php">Login</a>';
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="grey_background">
        <div class="wrapper">
            <header>
                <img id="logo" src="../images/logo.png" alt="logo">
                <h1>Contact</h1>
                <p>eeckhout.jonathan.info@gmail.com</p>
            </header>
        </div>
    </div>

    <div class="black_background">
        <div class="wrapper">
            <div class="contactForm">
                <form name="contactform" method="post" action="../php/send_form_email.php">
                    <label for="first_name">First Name *</label><br>
                    <input  type="text" name="first_name" maxlength="50" size="30"><br>
                    <br>
                    <label for="last_name">Last Name *</label><br>
                    <input  type="text" name="last_name" maxlength="50" size="30"><br>
                    <br>
                    <label for="email">Email Address *</label><br>
                    <input  type="text" name="email" maxlength="80" size="30"><br>
                    <br>
                    <label for="telephone">Telephone Number</label><br>
                    <input  type="text" name="telephone" maxlength="30" size="30"><br>
                    <br>
                    <label for="comments">Comments *</label><br>
                    <textarea  name="comments" maxlength="1000" cols="34" rows="6"></textarea><br>
                    <br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>

    <div class="black_background">
        <div class="wrapper">
            <footer>
                <p> Jonathan Eeckhout<br>
                    eeckhout.jonathan.info@gmail.com<br>
                    © 2019 Jonathan Eeckhout
                </p>
            </footer>
        </div>
    </div>

</body>
</html>
