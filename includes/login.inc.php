<?php

if (isset($_POST['login-submit'])) {
    
    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../pages/login.php?error=sqlerror");
        exit();
    }
    else {

        mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            $pwdCheck = password_verify($password, $row['pwdUsers']);
            if ($pwdCheck == false) {
                header("Location: ../pages/login.php?error=wrongpwd&mailuid=".$mailuid);
                exit();
            }
            else if($pwdCheck == true) {
                session_start();
                $_SESSION['userId'] = $row['idUsers'];
                $_SESSION['userUid'] = $row['uidUsers'];

                /*READ*/
                $user_id = intval($_SESSION['userId']);
                $sql = "SELECT cartContent FROM user_carts WHERE idUser=" . $user_id;
                $result = mysqli_query($conn, $sql) or die("Query to retrieve cart failed!");
                if(mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_assoc($result);
                    $cart = unserialize( $row['cartContent'] );

                    if(!empty($_SESSION["cartContent"])) {
                        $_SESSION["cart_item"] = array_merge(
                            $_SESSION["cart_item"],
                            $cart
                        );
                    } else {
                        $_SESSION['cart_item'] = $cart;
                    }
                }
                

                header("Location: ../index.php?login=success");
                exit();
            }
            else {
                header("Location: ../pages/login.php?error=wrongpwd");
                exit();
            }
        }
        else {
            header("Location: ../pages/login.php?error=nouser");
            exit();
        }

    }
}
else {
    header("Location: ../pages/login.php");
    exit();
}