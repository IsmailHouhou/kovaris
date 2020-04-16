<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Log in</title>
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--FONT AWESOME-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/8230536e66.js" crossorigin="anonymous"></script>
        <!--CSS file-->
        <link rel="stylesheet" href="../css/login.css">
    </head>
    <body>

        <!--LOGIN-->
        <div class="login-wrapper">
            <a href="../index.php"><i class="fas fa-arrow-circle-left"></i></a>
            <div class="login-container">
                <div class="logo vl">
                    <img src="../img/logo2.png" alt="">
                </div>
                <div class="login-form">
                <?php
                    if(isset($_GET['error'])) {
                        if ($_GET['error'] == "wrongpwd") {
                            echo '<p class="loginerror"> Invalid password! </p>';
                        }
                        else if ($_GET['error'] == "nouser") {
                            echo '<p class="loginerror"> User doesn\'t exist! </p>';
                        }
                    }
                ?>
                    <form action="../includes/login.inc.php" method="post" autocomplete="off">
                        <input type="text" name="mailuid" placeholder="Email/Username" required>
                        <input type="password" name="pwd" placeholder="Password" required>
                        <input type="submit" name="login-submit" value="CONNECT">
                        <a href="#">Forgot your password?</a>
                        <p>Not a member? &nbsp;<a href="register.php">Register</a></p>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>