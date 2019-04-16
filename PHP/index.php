<?php require 'header.php';

if(isset ($_GET['success'])) {
    if($_GET['success'] == 'register') {
        echo "<p class='message' style='color: green;'>Succesvol geregistreerd!</p>";
    }
    if($_GET['success'] == 'login') {
        echo "<p class='message' style='color: green;'>Succesvol ingelogd!</p>";
    }
    if($_GET['success'] == 'logout') {
        echo "<p class='message' style='color: green;'>Succesvol uitgelogd! </p>";
    }
}?>
<div class="container-index-body">
    <div class="index_welcome">

        <h1>Welcome to the Dogracegame website!</h1>

    </div>
    <div class="index_informational">
        <p> buy our game because we good lorem ipsum dolor sit amet
            buy our game because we good lorem ipsum dolor sit amet
            buy our game because we good lorem ipsum dolor sit amet
            buy our game because we good lorem ipsum dolor sit amet
            buy our game because we good lorem ipsum dolor sit amet
            buy our game because we good lorem ipsum dolor sit amet
            buy our game because we good lorem ipsum dolor sit amet
            buy our game because we good lorem ipsum dolor sit amet
            buy our game because we good lorem ipsum dolor sit amet
            buy our game because we good lorem ipsum dolor sit amet

        </p>

        <div class="download_ifelse">
            <?php if (!isset($_SESSION['id'])) {
                echo "<p>Please <a href='register.php'>Register</a> or <a href='login.php'>Login</a> before downloading</p>";
            }
            else{
                echo "<a class='download' href='../download/' download='DogRacingSimulator.rar'>Download</a>";
            }?>

        </div>







    </div>
</div>
<?php require 'footer.php'; ?>