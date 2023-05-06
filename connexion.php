<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=devise-widht, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="insc.css">
	<link rel="stylesheet" type="text/css" href="jet.css">
	<title>"Twiter" - Connexion</title>
</head>
<body>
	<main>
		<form method="post" action="connect.php">
			<label>Nom de compte</label><br>
				<input type="text" name="compte" placeholder="votre nom de compte" required><br><br>
			<label>Mot de passe</label><br>
				<input type="password" name="mdp" minlength="6" required placeholder="6 caracteres min." maxlength="15"><br><br>
			<!--<label>Confirmation de mot de passe</label><br>
				<input type="password" name="password2" minlength="6" maxlength="25" required placeholder="6 carecteres min. dont un chiffre"><br><br>-->
				<input id="ok" type="submit" name="connexion" value="connexion"><br>
			
		</form>
		<a href="Projet.php" id="ok1">retour</a>
	</main>

</body>
</html>