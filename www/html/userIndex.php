<?php
//include config
require_once('../php/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }

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
                <a href="contact.php">Contact</a>
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
