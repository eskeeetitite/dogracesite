<?php require 'header.php';

if(isset ($_GET['error'])){

    if($_GET['error'] == 'charcheck') {
        echo "<p class='message' >Je moet minimaal 1 hoofdletter en minimaal 1 speciale letter in je wachtwoord hebben!</p>";
    }
    if($_GET['error'] == 'pwdlength') {
        echo "<p class='message' > Wachtwoord moet minimaal 7 tekens hebben!</p>";
    }
    if($_GET['error'] == 'pwdmatch') {
        echo "<p class='message' >Wachtwoord is niet hetzelfde!</p>";
    }
    if($_GET['error'] == 'invalidemail') {
        echo "<p class=\'message\' >Onjuist emailadres!</p>";
    }
    if($_GET['error'] == 'emailexists') {
        echo "<p class='message' >Er bestaat al een account op dat emailadres!</p>";
    }
    if($_GET['error'] == 'tos') {
        echo "<p class='message' >Je moet akkoord gaan met de algemene voorwaarden!</p>";
    }
    echo '</p>';
}

?>
<div class="container">
    <div class="form">
<div class="form1">
            <form action="loginController.php" method="post" >
                <input type="hidden" name="type" value="register">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>

                <div class="form-group">
                    <label for="password_confirm">Please confirm your password</label>
                    <input type="password" name="password_confirm" id="password_confirm">
                </div>

                <input type="submit" value="Register" name="register-submit">

    <div class="form-group">
        <label for="accept_TOS">Ik ga akkoord met de <a href="termsofservice.php">algemene voorwaarden</a></label>
        <input type="checkbox" name="accept_TOS" id="accept_TOS">
    </div>

    </form>
     </div>
    </div>
</div>

<?php require 'footer.php'; ?>

