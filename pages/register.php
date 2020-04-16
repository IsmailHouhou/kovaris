<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--FONT AWESOME-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/8230536e66.js" crossorigin="anonymous"></script>
        <!--CSS file-->
        <link rel="stylesheet" href="../css/register.css">
    </head>
    <body>

        <!--LOG IN-->
        <div class="register-wrapper">
            <a href="../index.php"><i class="fas fa-arrow-circle-left"></i></a>
            <div class="register-container">
                <div class="logo vl">
                    <img src="../img/logo2.png" alt="">
                </div>
                <div class="register-form">
                    <?php
                        if(isset($_GET['error'])) {
                            if ($_GET['error'] == "invalidmailuid") {
                                echo '<p class="registererror"> Invalid username and email! </p>';
                            }
                            else if ($_GET['error'] == "invalidmail") {
                                echo '<p class="registererror"> Invalid email! </p>';
                            }
                            else if ($_GET['error'] == "invaliduid") {
                                echo '<p class="registererror"> Invalid Username! </p>';
                            }
                            else if ($_GET['error'] == "passwordcheck") {
                                echo '<p class="registererror"> Your passwords do not match! </p>';
                            }
                            else if ($_GET['error'] == "usertaken") {
                                echo '<p class="registererror"> Username is already taken! </p>';
                            }
                        }
                        else if(isset($_GET['register'])) {
                            if ($_GET['register'] == "success") {
                                echo '<p class="registersuccess"> Register successful! </p>';
                            }
                        }
                    ?>
                    <form action="../includes/register.inc.php" method="post" autocomplete="off">
                        <input type="text" name="uid" placeholder="Username" required>
                        <input type="email" name="mail" placeholder="Email" required>
                        <input type="password" name="pwd" placeholder="Password" id="password" required>
                        <input type="password" name="pwd-repeat" placeholder="Confirm password" id="confirm_password" required>
                        <input type="submit" name="register-submit" value="REGISTER">
                        <p>Already a memeber? &nbsp;<a href="login.php">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>