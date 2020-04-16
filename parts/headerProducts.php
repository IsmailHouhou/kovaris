<!DOCTYPE html>
<html>
	<head>
		<title>ourProducts</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<!--JQuery-->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<!--Bootstrap-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<!--FONT AWESOME-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/8230536e66.js" crossorigin="anonymous"></script>
		<!--CSS FILE-->
		<link rel="stylesheet" type="text/css" href="../css/product.css">
	</head>
	<body>


		<!--NEW HEADER-->
		<nav class="navbar navbar-expand-lg">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav" id="menu1">
					<li class="nav-item">
						<a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="products.php">Products</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact Us</a>
					</li>
                </ul>
                <?php
                    if(isset($_SESSION['userId'])) {
                        echo    '<ul class="navbar-nav" id="menu3">
									<li class="nav-item">
										<a class="nav-link" href="cart.php">Cart</a>
									</li>
                                    <li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'
										. $_SESSION["userUid"] . '
										</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="../includes/logout.inc.php">Logout</a>
										</div>
									</li>
                                </ul>';
                    }
                    else {
                        echo    '<ul class="navbar-nav" id="menu3">
                                    <li class="nav-item">
                                        <a class="nav-link" href="login.php">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="register.php">Register</a>
                                    </li>
                                </ul>';
                    }
                ?>
				
			</div>
		</nav>