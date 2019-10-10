<?php
//require_once './Model/DAO/connexion.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="../style/css/style.css">
<head>
  <title>Connexion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<img src="../style/images/rosemont.jpg" style="height:200px; display: block; margin:auto; margin-top: 5%;">
	<form id="form-signin">
		<h1>Connexion</h1>
		<hr/>
		<input type="text" id="utilisateur" class="form-control" placeholder="Numéro de DA" required autofocus>
		<input type="password" id="password" class="form-control" placeholder="Mot de passe" required autofocus>
		<hr/>
		<button id="btn_connect" type="submit" >Se connecter</button>
	</form>
</div>

</body>
</html>