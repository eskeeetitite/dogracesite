<?php require 'header.php'; ?>
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

</div>
    </div>

    </form>
</div>


<?php require 'footer.php'; ?>

