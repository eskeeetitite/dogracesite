<?php require 'header.php';

if(isset ($_GET['error'])){
    echo '<p style="color: red;">';
    if($_GET['error'] == 'charcheck') {
        echo 'Je moet minimaal 1 hoofdletter en minimaal 1 speciale letter in je wachtwoord hebben!';
    }
    if($_GET['error'] == 'pwdlength') {
        echo 'Wachtwoord moet minimaal 7 tekens hebben!';
    }
    if($_GET['error'] == 'pwdmatch') {
        echo 'Wachtwoord is niet hetzelfde!';
    }
    if($_GET['error'] == 'invalidemail') {
        echo 'Onjuist emailadres!';
    }
    if($_GET['error'] == 'emailexists') {
        echo 'Er bestaat al een account op dat emailadres!';
    }
    if($_GET['error'] == 'tos') {
        echo 'Je moet akkoord gaan met de algemene voorwaarden!';
    }
    echo '</p>';
}
if(isset ($_GET['success'])) {
    if($_GET['success'] == 'register') {
        echo "<p style='color: green;'>Succesvol geregistreerd!</p>";
    }
    if($_GET['success'] == 'login') {
        echo "<p style='color: green;'>Succesvol ingelogd!</p>";
    }
    if($_GET['success'] == 'logout') {
        echo '<p style="color: green;">Succesvol uitgelogd! </p>';
    }
}
?>

<form action="loginController.php" method="post">
    <input type="hidden" name="type" value="register">
    <div class="form-group">
        <label for="email">email</label>
        <input type="email" name="email" id="email">
    </div>

    <div class="form-group">
        <label for="password">password</label>
        <input type="password" name="password" id="password">
    </div>

    <div class="form-group">
        <label for="password_confirm">Please confirm your password</label>
        <input type="password" name="password_confirm" id="password_confirm">
    </div>

    <div class="form-group">
        <label for="accept_TOS">Ik ga akkoord met de algemene voorwaarden</label>
        <input type="checkbox" name="accept_TOS" id="accept_TOS">
    </div>

    <input type="submit" value="Register" name="register-submit">
</form>

<?php require 'footer.php'; ?>

