<?php
session_start();
require '../includes/dbh.inc.php';

if(!empty($_GET["action"])) {
	switch($_GET["action"]) {
		case "add":
			if(!empty($_POST["quantity"])) {
				$code = $_GET['code'];
				$sql = "SELECT * FROM tblproduct WHERE code='$code'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				
				$name		 = $row['name'];
                $code		 = $row['code'];
                $quantity	 = $_POST['quantity'];
                $price		 = $row['price'];
                $image 		 = $row['image'];

                
                $cartArray = array(
					$code=>array(
                        'name' => $name,
                        'code' => $code,
                        'quantity' => $quantity,
                        'price' => $price,
                        'image' => $image
                    )
				);
				
				if(!empty($_SESSION["cart_item"])) {
                    $array_keys = array_keys($_SESSION["cart_item"]);
					if(in_array($code,$array_keys)) {
						foreach($_SESSION["cart_item"] as $k => $v) {
								if($code == $k) {
									if(empty($_SESSION["cart_item"][$k]["quantity"])) {
										$_SESSION["cart_item"][$k]["quantity"] = 0;
									}
									$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
								}
						}
					} else {
						$_SESSION["cart_item"] = array_merge(
                            $_SESSION["cart_item"],
                            $cartArray
                        );
					}
				} else {
					$_SESSION["cart_item"] = $cartArray;
				}
			}


		break;
		case "remove":
			if(!empty($_SESSION["cart_item"])) {
				foreach($_SESSION["cart_item"] as $k => $v) {
						if($_GET["code"] == $k)
							unset($_SESSION["cart_item"][$k]);				
						if(empty($_SESSION["cart_item"]))
							unset($_SESSION["cart_item"]);
				}
			}


		break;
		case "empty":
			unset($_SESSION["cart_item"]);
		break;	
	}
}
?>