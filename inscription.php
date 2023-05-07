<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=devise-widht, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="insc.css">
	<link rel="stylesheet" type="text/css" href="jet.css">

	<title>"Twiter" - Inscription</title>
</head>
<body>
	<main>
		<form method="post" action="new-user.php">
			<label>Nom de compte</label><br>
				<input type="text" name="username" placeholder="pas despace ou de caractères spéciaux" required><br><br>
			<label>Mot de passe</label>
				<input type="password" name="password1" minlength="6" required placeholder="6 caracteres min. dont un chiffre" maxlength="15"><br><br>
			<label>Confirmation de mot de passe</label><br>
				<input type="password" name="password2" minlength="6" maxlength="25" required placeholder="6 carecteres min. dont un chiffre"><br><br>
			<label>Description/Biographie</label><br>
			<textarea name="bio" maxlength="255" placeholder="Description de votre compte"></textarea><br>
				<input type="submit" name="inscription" value="inscription"><br>
			
		</form>
	</main>

</body>
</html>