<?php
    require 'config.php';

?>


<html>
<head>
    <title>Dogracegame</title>
    <link rel="stylesheet" href="../CSS/main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito" rel="stylesheet">
</head>
<body>
<header>

    <div class="container">
        <div class="logo">
            <img src="../images/image0.png" alt="dogracegameimg">
        </div>

        <nav class="nav">
            <?php
            if ( isset($_SESSION['id']) ) {
<<<<<<< Updated upstream
                echo "<form action='loginController.php' method='post'><input type='hidden' name='type' value='logout'>You are currently logged in. Want to <input class='logout' href='index.php' type='submit' value='Logout'></form>";
            } else {
                echo "<a class='login_register' href='login.php'>Login</a> &nbsp;  Or &nbsp; <a class='login_register' href='register.php'> register </a>";
=======
                echo "<p>You are currently logged in. Want to <input href='index.php'>logout?</input></p>";
            } else {
                echo "<a href='login.php'>Login</a> &nbsp; or &nbsp; <a href='register.php'> register </a>";
>>>>>>> Stashed changes
            }
            ?>
        </nav>
    </div>


</header>