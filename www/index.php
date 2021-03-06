<?php
require_once('php/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jonathan Eeckhout</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <div class="black_background">
        <div class="wrapper">
            <div class="topnav" id="myTopnav">
                <a href="index.php" class="active">Home</a>
                <a href="html/projects.php">Projects</a>
                <a href="html/about.php">About</a>
                <a href="html/contact.php">Contact</a>
                <?php
                    if($user->is_logged_in()) {
                        echo '<a id="loginLinkIndex" href="html/userIndex.php">' . $_SESSION['username'] .'</a>';
                    } else {
                        echo '<a id="loginLinkIndex" href="html/login.php">Login</a>';
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="grey_background">
        <div class="wrapper">
            <header>
                <img id="logo" src="images/logo.png" alt="logo">
                <h1>Software developer</h1>
            </header>
        </div>
    </div>

    <div class="black_background">
        <div class="wrapper">
            <div class="what_i_do">
                <h1>
                    Have a look at my
                </h1>
                <h2>skills</h2>
                <ul>
                    <li><a href="html/projects.php?filter=embedded,c-programming,fpga,vhdl#projects">Embedded software/ hardware</a></li>
                    <li><a href="html/projects.php?filter=html,css,javascript,php#projects">Web design</a></li>
                    <li><a href="html/projects.php?filter=php,nodejs,python#projects">Backend server api</a></li>
                    <li><a href="html/projects.php?filter=automation,python#projects">Automation scripts</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="grey_background">
        <div class="wrapper">
            <div class="slides">
                <a class="mySlides" href="html/projects.php?project=butcher_shop#projects">
                    <h2>Butcher web shop</h2>
                    <img src="images/index_1.jpg" alt="project image">
                </a>
                <a class="mySlides" href="html/projects.php?project=rbpi_dj_player#projects">
                    <h2>Raspberry Pi Dj audio player</h2>
                    <img src="images/rbpi_dj_player.jpg" alt="project image">
                </a>
                <a class="mySlides" href="html/projects.php?project=portfolio_website#projects">
                    <h2>Portfolio website</h2>
                    <img src="images/jonathaneeckhout_website.png" alt="project image">
                </a>
                <a class="mySlides" href="html/projects.php?project=arduino_sensors_to_i2c#projects">
                    <h2>Arduino sensors to i2c module</h2>
                    <img src="https://raw.githubusercontent.com/jonathaneeckhout/arduino_sensors_to_i2c/master/i2c_sensors_arduino_bb.jpg" alt="project image">
                </a>
                <a class="mySlides" href="html/projects.php?project=real_estate_scraper#projects">
                    <h2>Real estate website scraper</h2>
                    <img src="images/real_estate_scraper.gif" alt="project image">
                </a>
                <a class="mySlides" href="html/projects.php?project=nodejs_web_server#projects">
                    <h2>Nodejs web server</h2>
                    <img src="images/nodejs_web_server.gif" alt="project image">
                </a>
                <a class="mySlides" href="html/projects.php?project=price_scraper_of_mountainbike_parts#projects">
                    <h2>Price scraper</h2>
                    <img src="images/mtb_scraper.gif" alt="project image">
                </a>
                <a class="mySlides" href="html/projects.php?project=soc_fpga_music_player#projects">
                    <h2>SOC/ FPGA music player</h2>
                    <img src="images/zybo.jpg" alt="project image">
                </a>
                <button class="slide_button slide_button_left" onclick="plusDivs(-1)">&#10094;</button>
                <button class="slide_button slide_button_right" onclick="plusDivs(1)">&#10095;</button>
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

<script>
var slideIndex = 0;
var timeoutTimer;
var timeoutTime = 5000;

carousel();

function plusDivs(n) {
    slideIndex = slideIndex + n;
    showDivs(slideIndex);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
    clearTimeout(timeoutTimer);
    timeoutTimer = setTimeout(carousel, timeoutTime);
}

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
    x[slideIndex-1].style.display = "block";
    timeoutTimer = setTimeout(carousel, timeoutTime);
}
</script>

</body>
</html>
