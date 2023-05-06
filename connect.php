<?php
		$base = new mysqli("localhost", "root", "root", "bts 5");
		if ($base->connect_error) {
			exit("erreur de connexion");
		}
			/*on verifie si on reçoit le bon formulaire*/
				if (isset($_POST['connexion'])) {
					/*comme on va envoyer les valeurs tapées dans input via une commande SQL, on utilisera real escape_string avant pour empecher les conflits*/
					$compte = $base->real_escape_string($_POST['compte']);
					$mdp = $base->real_escape_string($_POST['mdp']);
					/*WHERE nous permet de filtrer ce que l'on va recuperer dans la table utilisateur rt AND permet d'enchainer les conditions*/
					$sql = "SELECT * FROM utilisateurs WHERE compte='$compte' AND mdp='$mdp'";
					$resultat = $base->query($sql);//on recupère le résultat de la rechere sql
					/*Si la requete à 1 RESULTAT*/
				if ($resultat->num_rows == 1) {
					session_start();//on se connecte à la session
					$_SESSION['account'] = $compte; //on stocke le compte connecté dans la session
					$redirect = "Projet.php";
				}
				else{
					$redirect="connexion.php?erreur=TRUE";
				}
			}
	$base->close();
	header("location: $redirect");

?>