<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<!--Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!--FONT AWESOME-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/8230536e66.js" crossorigin="anonymous"></script>
	<!--CSS FILE-->
	<link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>
<body>

	<!--CONTACT-->
	<div class="wrapper">
		<a href="../index.php"><i class="fas fa-arrow-circle-left"></i></a>
		<div class="contact-container">
			<div class="logo vl">
				<img src="../img/logo2.png" alt="">
			</div>
			<div class="contact-form">
				<form action="" method="POST" autocomplete="off">
					<input class="holder" type="text" name="uid" placeholder="Username" autocomplete="nada">
					<input class="holder" type="email" name="mail" placeholder="Email">
					<textarea class="holder" name="comment" placeholder="Comment"></textarea>
					<input type="submit" value="ENVOYER">
				</form>
			</div>
		</div>
	</div>
</body>
</html>