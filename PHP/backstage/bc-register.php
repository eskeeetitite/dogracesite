<?php
/**
 * Created by PhpStorm.
 * User: School
 * Date: 18/03/2019
 * Time: 14:18
 */
if (isset($_POST['register-submit'])) {
    require config.php;
}


else {
    header("Location: ../register.php?error=unkwn");
    exit();
}
