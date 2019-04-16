<?php

$dbHost = "localhost";
$dbName = "tournament_planner";
$dbUser = "root";
$dbPass = "";

$db = new PDO("mysql:host=$dbhost;dbname=$dbname",
    $dbuser,
    $dbpass
);
$db->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION
);
