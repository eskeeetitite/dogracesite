<?php
require 'config.php';
/*
 * Dit is een webserver only script, waar je alleen mag komen als je via een form
 * data verstuurd, en niet als je via de url hier naar toe komt. Iedereen die dat doet
 * sturen we terug naar index.php
 *
 */


function pwdCheckUpper($string) {
    if(preg_match("/[A-Z]/", $string)===0) {
        return true;
    }
    return false;
}


function pwdCheckSpecial($string) {
    if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $string)=== 0) {
        return true;
    }
    return false;
}

function emailcheck($db, $email) {
    $sql = "SELECT * FROM users WHERE email=:email";
    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':email'     => $email
    ]);
    return  (bool)$prepare->fetchColumn();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST' ) {
    header('location: index.php?error=wrongpage');
    exit;
}
if ($_POST['type'] === 'logout'){
    session_destroy();
    header('location: index.php?success=logout');
    exit;
}

if ( $_POST['type'] === 'login' ) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email=:email";
    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':email'     => $email
    ]);
    $result = $prepare->fetch();




    if(password_verify($password,$result['password'])){
        $_SESSION['id'] = $result['id'];

    }
    else{



    }
    header('location: index.php?success=login');

    /*
     * Hier komen we als we de login form data versturen.
     * things to do:
     * 1. Checken of gebruikersnaam EN email in de database bestaat met de ingevoerde data
     *
     * 2. Indien ja, een $_SESSION['id'] vullen met de id van de persoon die probeert in te loggen.
     * 3. gebruiker doorsturen naar de admin pagina
     *
     * 3. Indien nee, gebruiker terugsturen naar de login pagina met de melding dat gebruikersnaam en/of
     * wachtwoord niet in orde is.
     *
     */
    exit;
}

if ($_POST['type'] === 'register') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $emailcheck = filter_var($email, FILTER_VALIDATE_EMAIL);

    if (pwdCheckUpper($password) == true && pwdCheckSpecial($password) == false){
        header('location: register.php?error=charcheck');
        exit;
    } else if (strlen($password) < 7)
    {
        header('location: register.php?error=pwdlength');
        exit;
    } else if ($password_confirm != $password){
        header('location: register.php?error=pwdmatch');

        exit;
    } else if($emailcheck == false){
        header('location: register.php?error=invalidmail');
        exit;
    } else if (emailcheck($db, $email)) {
        header('location: register.php?error=emailexists');
        exit;
    }
    if(!$_POST['accept_TOS']) {
        header('location: register.php?error=tos');
        exit;
    }

    $cleanpwd = trim($password);
    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users(email, password) VALUES( :email, :password)";
    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':email'     => $email,
        ':password'  => $hashedpwd
    ]);


    /*
     * Hier komen we als we de register form data versturen
     * things to do:
     *
     * 1. Checken of er al iemand met dit emailadres of username bestaat
     * 2. Indien nee, eerst checken of de password en password_confirm inderdaad hetzelfde ingevoerde is.
     * 3. Dan gebruiker inserten in de database, zodat deze kan gaan inloggen.
     * 4. Gebruiker doorsturen naar de nieuwe inlog pagina.
     *
     * 5. Indien ja, gebruiker terugsturen naar register form met de melding dat gebruikersnaam en/of wachtworod niet op
     * orde is.
     *
     *
     */
    header('location: index.php?success=register');
    exit;
}





