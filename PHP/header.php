<?php
    require 'config.php';

?>

<!-- Even heel easy html code, omdat de focus nu op het inlogsysteem ligt en niet op fancy looks :)  -->
<html>
<head>
    <title>Amo Login System homepage</title>
    <style>
        nav {
            display: flex;
            justify-content: flex-end;
        }
    </style>
</head>
<body>
<header>
    <nav>
        <?php
        /*
         * Hier checken we of we al ooit eens een 'id' key hebben opgeslagen in de
         * $_SESSION variabele. de ENIGE plek waar we dit doen is als we onszelf inloggen
         * en onze gegevens kloppen. Kijk maar in de logincontroller.php
         *
         * Als we dus al een id in onze session hebben (dus onze klant is al ingelogd) willen we niet dat onze
         * klanten zich nogmaals kunnen registreren of inloggen...
         *
         */

        if ( isset($_SESSION['id']) ) {
            echo "<form action='loginController.php' method='post'><input type='hidden' name='type' value='logout'>You are currently logged in. Want to <input href='index.php' type='submit' value='logout'></form>";
        } else {
            echo "<a href='login.php'>Login</a> &nbsp; or &nbsp; <a href='register.php'> register </a>";
        }
        ?>
    </nav>
</header>