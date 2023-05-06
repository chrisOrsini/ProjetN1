<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="jet.css">
	<meta name="viewport" content="width=devise-widht, initial-scale=1">
	<title>Twiter</title>
</head>
<body>
	<?php
		session_start();//on se connecte à la session?>

		<?php
		if (isset($_SESSION['account'])) {
			echo "<p>Connecté en tant que {$_SESSION['account']}</p>";
			//si on est connecté, on affiche un petit paragraphe
		}
	?>


	<nav id="menu-top">

		<?php
			if (isset($_SESSION['account'])) {
				echo "<a href='#'>{$_SESSION['account']}</a>";
				echo "<a href='disconnect.php'>Deconnecty</a>";
			}
				else{
					echo "<a href='connexion.php' id='connexion'>Connexion</a><br><br>";
					echo "<a href='inscription.php' id='inscription'>Inscription</a>";
				}
		?>
		<!--<a href="connexion.php" id="connexion">
			connexion
		</a><br><br>
		<a href="inscription.php" id="inscription">
			Inscription
		</a>-->

	</nav>
	

		<!--<a href="disconnect.php" id="oui1">Se deconnecty</a>-->

</body>
</html>