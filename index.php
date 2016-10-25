<!DOCTYPE html>
<html>

<head>
	<title>M2L</title>
	<meta charset="UTF-8">
	<link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>

	<img id="logo" src="img/commun/logo.png">

<!-- 	<h1>MAISON DES LIGUES DE LORRAINE</h1>
	<h2>GESTIONNAIRE DE FORMATIONS</h2>
 -->
	
	<div id="modal-connexion" class="active">
		<form>
			<h3>SE CONNECTER</h3>
			<label for="connexion-id"><input type="text" name="connexion-id" placeholder="Identifiant"></label>
			<label for="connexion-password"><input type="text" name="connexion-password" placeholder="Password"></label>
			<p class="text-align-right">mot de passe oublié ?</p>
			<input type="submit" value="connexion" class="btn-cta">
		</form>
	</div>

	<div id="modal-password">
		<form>
			<h3>Mot de passe oublié ?</h3>
			<p class="text-modal">Veuillez entrer votre email ci-dessous, un email vous sera envoyer afin de modifier votre mot de passe.</p>
			<label for="connexion-id"><input type="text" name="connexion-id" placeholder="Entrer votre email"></label>
			<p class="text-align-right">Oups, revenir en arrière</p>
			<input type="submit" value="Envoyer" class="btn-cta">
		</form>
	</div>


<script src="script/app.js"></script>	
</body>

</html>