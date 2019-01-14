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
                <a id="loginLink" href="login.php" class="active">Login</a>
            </div>
        </div>
    </div>

    <div class="grey_background">
        <div class="wrapper">
            <div class="loginForm">
                <form name="loginform" method="post" action="../php/login.php">
                    <label for="username">Username *</label><br>
                    <input  type="text" name="username" maxlength="50" size="30"><br>
                    <br>
                    <label for="password">Password *</label><br>
                    <input  type="text" name="password" maxlength="50" size="30"><br>
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
