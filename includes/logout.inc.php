<?php
require 'dbh.inc.php';

session_start();


/*WRITE*/

$serialized_cart = serialize($_SESSION["cart_item"]);
$userId = $_SESSION['userId'];

$search_query = "SELECT idCart FROM user_carts WHERE idUser = '$userId'";
$result = mysqli_query($conn, $search_query);

if(mysqli_num_rows($result) == 0) {
    $insert_query = "INSERT INTO user_carts (idUser, cartContent) VALUES ('" . $userId . "', '" . mysqli_real_escape_string($conn, $serialized_cart) . "')";
    mysqli_query($conn, $insert_query) or die("Query to store cart failed");
}
else {
    $update_query = "UPDATE user_carts SET cartContent = '" . mysqli_real_escape_string($conn, $serialized_cart) . "' WHERE idUser = '$userId' ";
    mysqli_query($conn, $update_query) or die("Query to store cart failed");
}


session_unset();
session_destroy();


header("Location: ../index.php");