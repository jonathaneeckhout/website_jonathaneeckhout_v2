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
                <a href="about.php" class="active">About</a>
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

    <div class="grey_background">
        <div class="wrapper">
            <header>
                <img id="logo" src="../images/logo.png" alt="logo">
                <h1>Jonathan Eeckhout</h1>
            </header>
        </div>

    </div>

    <div class="grey_background">
        <div class="wrapper">
            <div class="whoIAm">
                <img id="profilePicture" class="paragraph_image_right" src="../images/jonathaneeckhout.png" alt="profile picture of jonathan eeckhout">
                <p class="aboutText">
                    If you do what you love, you will never work a day in your life. Well that is what I am doing.
                    Hello my name is Jonathan Eeckhout and I love making things. Since I was young I loved the idea of making my creations come to life with simple elements.
                    Toys like Lego of even simple sticks and leaves from the forest would let me create my wildest creation. Later on I discovered electronics and programming.
                    Never was it so easy to make anything that could do everything. The sky was the limit.
                    Today I still enjoy programming and electronics and everyday I try to improve my skills so I could create even more.
                    Next I will give you some background information about me<br>
                    <br>
                    <br>
                </p>
                <p class="aboutText">
                    I have a master degree as an industrial engineer with the specialization in intelligent electronics.
                    In October 2015 I started working at Alcatel-Lucent (now Nokia) as a FPGA/ASIC designer.
                    Here I was involved in designing code for a FPGA chip which converted fiber signals to vdsl or better known copper signals.
                    In May 2016, I joined VeroTech as a Software/ Embedded consultant.
                    My first project was at SoftAtHome as an embedded linux c developer.
                    Since April 2018 I started working as an employee at SoftAtHome.
                    First I developed features for the Internet of Things component on home gateways or setup boxes.
                    Now I am developing networking features.<br>
                </p>
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
