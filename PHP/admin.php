<?php
/**
 * Created by PhpStorm.
 * User: fedje
 * Date: 17-3-2019
 * Time: 19:15
 */

/*
 * Hier checken we of de gebruiker inderdaad is ingelogd ( $_SESSION['id'] wordt alleen aangemaakt
 * als het inloggen in de logincontroller goed is gegaan, neem maar even een kijkje daar.
 * Is dat niet zo, dan helaasch, mag je niet deze site bekijken!
 */
require 'header.php';

if (!isset($_SESSION['id'])) {
    die("I'm sorry, this page is for logged in AMO students only.");
}
else {
    echo '<h1>Welcome to AMO Login system Admin Page </h1>';
echo '<p>Still nothing special to see here but thats not the point.</p>';
echo '<p>you can only get here while being logged in. Try to close your browser and youll that you are still logged in!</p>';

echo '<a href="#">Download</a>';
}



?>




<?php require 'footer.php'; ?>