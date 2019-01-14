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
                <a href="projects.php" class="active">Projects</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
                <?php
                    if($user->is_logged_in()) {
                        echo '<a id="loginLinkIndex" href="userIndex.php">' . $_SESSION['username'] .'</a>';
                    } else {
                        echo '<a id="loginLinkIndex" href="login.php">Login</a>';
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="grey_background">
        <div class="wrapper">
            <header>
                <img id="logo" src="../images/logo.png" alt="logo">
                <h1>Projects</h1>
            </header>
        </div>
    </div>

    <div class="black_background">
        <div class="wrapper">
            <div class="selection">
                <ul>
                    <li><input class="filterField" type="checkbox" name="checkbox" value="all"> all</li>
                    <li><input class="filterField" type="checkbox" name="checkbox" value="html"> html</li>
                    <li><input class="filterField" type="checkbox" name="checkbox" value="css"> css</li>
                    <li><input class="filterField" type="checkbox" name="checkbox" value="javascript"> javascript</li>
                    <li><input class="filterField" type="checkbox" name="checkbox" value="php"> php</li>
                    <li><input class="filterField" type="checkbox" name="checkbox" value="http"> http</li>
                    <li><input class="filterField" type="checkbox" name="checkbox" value="nodejs"> nodejs</li>
                    <li><input class="filterField" type="checkbox" name="checkbox" value="mysql"> mysql</li>
                    <li><input class="filterField" type="checkbox" name="checkbox" value="c-programming"> c</li>
                    <li><input class="filterField" type="checkbox" name="checkbox" value="embedded"> embedded</li>
                    <li><input class="filterField" type="checkbox" name="checkbox" value="fpga"> fpga</li>
                    <li><input class="filterField" type="checkbox" name="checkbox" value="vhdl"> vhdl</li>
                    <li><input class="filterField" type="checkbox" name="checkbox" value="python"> python</li>
                    <li><input class="filterField" type="checkbox" name="checkbox" value="automation"> automation</li>
                    <li><input class="filterField" type="checkbox" name="checkbox" value="audio"> audio</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="grey_background">
        <div class="wrapper">
            <div id="projects">
                <div class="project" id="butcher_shop">
                    <h2>Butcher web shop</h2>
                    <img src="../images/index_1.jpg" alt="project image">
                    <p>
                        A basic web shop for a butcher/traiteur. The shop is able to show news posts, services, products.
                        The news posts can contain anything what the butcher would like to tell to his customers like special offers/deals.
                        The services and products can be anything and filtered and searched on the designated page.
                        The butcher can login into an admin page and update/add/delete all the contect on the site.
                        Click the link below to see the site live.
                    </p>
                    <h3>Link:</h3>
                    <a href="https://www.jonathaneeckhout.com/html/projects/butchershop/index.php" target="_blank">Live demo</a>
                    <a href="https://github.com/jonathaneeckhout/website_butcher_shop" target="_blank">Github page</a>
                    <h3>Skills:</h3>
                    <p class='tags'>html, css, php, javascript</p>
                </div>
                <div class="project" id="rbpi_dj_player">
                    <h2>Raspberry Pi Dj audio player</h2>
                    <img src="../images/rbpi_dj_player.jpg" alt="project image">
                    <p>
                        A basic audio player that plays songs on a Raspberry pi with basic controls such as play/pause stop and speed control.
                        It is based on the gstreamer plugin and controller by external devices which are converted to i2c signals.
                        This player is just basic but with easy to expand.
                    </p>
                    <h3>Link:</h3>
                    <a href="https://github.com/jonathaneeckhout/rbpi_dj_player" target="_blank">Github page</a>
                    <a href="https://www.instructables.com/id/Raspberry-Pi-DJ-Audio-Player/" target="_blank">Instructables</a>
                    <h3>Skills:</h3>
                    <p class='tags'>rbpi, gstreamer, c-programming, embedded, i2c, audio</p>
                </div>
                <div class="project" id="portfolio_website">
                    <h2>Portfolio website</h2>
                    <img src="../images/jonathaneeckhout_website.png" alt="project image">
                    <p>
                        This site is an example of a portfolio website. The goal of this site is to be visible on the web.
                        You can find information about me, contact me and find links to projects I've done.
                        It also gives more explanation about my skills.
                        People can see projects related with certain skills and therefor have a more clear view of what I am cabable to make.
                    </p>
                    <h3>Link:</h3>
                    <a href="https://www.jonathaneeckhout.com" target="_blank">Live demo</a>
                    <a href="https://github.com/jonathaneeckhout/website_jonathaneeckhout_v2" target="_blank">Github page</a>
                    <h3>Skills:</h3>
                    <p class='tags'>html, css, php, javascript</p>
                </div>
                <div class="project" id="arduino_sensors_to_i2c">
                    <h2>Arduino sensors to i2c module</h2>
                    <img src="https://raw.githubusercontent.com/jonathaneeckhout/arduino_sensors_to_i2c/master/i2c_sensors_arduino_bb.jpg" alt="project image">
                    <p>
                        When working with a raspberry pi you'll notice it lacks an ADC. However it does have a I2c interface. That is why
                        I wanted to use my arduino mega 2560 as an ADC to I2C converter so the raspberry pi could read the analog values.
                    </p>
                    <h3>Link:</h3>
                    <a href="https://github.com/jonathaneeckhout/arduino_sensors_to_i2c" target="_blank">Github page</a>
                    <h3>Skills:</h3>
                    <p class='tags'>arduino, c-programming, embedded, i2c</p>
                </div>
                <div class="project" id="real_estate_scraper">
                    <h2>Real estate website scraper</h2>
                    <img src="../images/real_estate_scraper.gif" alt="project image">
                    <p>
                        There are thousands of houses on a real estate website and you only get a news update once a day with new posts.
                        With this scraper you can get all the houses of a real estate site at once. So you can keep track if there are any new ones.
                        The scraper collects alls the data of the houses and stores it in a csv file which can be read by a program like excel.
                    </p>
                    <h3>Link:</h3>
                    <a href="https://github.com/jonathaneeckhout/real_estate_website_scraper" target="_blank">Github page</a>
                    <h3>Skills:</h3>
                    <p class='tags'>automation, javascript, csv</p>
                </div>
                <div class="project" id="nodejs_web_server">
                    <h2>Nodejs web server</h2>
                    <img src="../images/nodejs_web_server.gif" alt="project image">
                    <p>
                        This is a basic http server written in nodejs. Nodejs is a server backend api which uses javascript as its programming language.
                        This project was made to get in touch with the basics of nodejs and javascript.
                        It is a simple server but this projects shows the endless possibilities of nodejs and javascript
                    </p>
                    <h3>Link:</h3>
                    <a href="https://github.com/jonathaneeckhout/nodejs_http_server" target="_blank">Github page</a>
                    <h3>Skills:</h3>
                    <p class='tags'>javascript, nodejs, http</p>
                </div>
                <div class="project" id="price_scraper_of_mountainbike_parts">
                    <h2>Price scraper of mountainbike parts</h2>
                    <img src="../images/mtb_scraper.gif" alt="project image">
                    <p>
                        Did you ever wanted to keep track of a price of a product on multiple sites? Well that is exactly what this scraper does.
                        I am a mountainbike enthousiast and I wanted to keep track of certain parts I need.
                        This scraper will fetch all the prices of the parts on predefined sites and store them into a databse.
                    </p>
                    <h3>Link:</h3>
                    <a href="https://github.com/jonathaneeckhout/mtb_parts_web_scraper" target="_blank">Github page</a>
                    <h3>Skills:</h3>
                    <p class='tags'>automation, python, mysql</p>
                </div>
                <div class="project" id="soc_fpga_music_player">
                    <h2>SOC/ FPGA music player</h2>
                    <img src="../images/zybo.jpg" alt="project image">
                    <p>
                        A music player made on the zybo board. This is a SOC (system on chip) which is a combination of a processor and a FPGA.
                        The music player reads songs from a sd card and plays them. You can also control the song's playback speed and make cue points.
                        This all makes it possible to use it as a DJ music player. A demo of the music player can be found by clicken the youtube link below.
                    </p>
                    <h3>Link:</h3>
                    <a href="https://www.youtube.com/watch?v=Ciywejz02qcr" target="_blank">Youtube project demo video</a>
                    <h3>Skills:</h3>
                    <p class='tags'>embedded, fpga, vhdl, c-programming, xilinx, vivado, audio</p>
                </div>
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

    <script src="../js/get_projects.js"></script>
</body>
</html>
