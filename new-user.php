<?php

if(isset($_POST['inscription'])){
	//connection a la base de donnéé
	$base =  new mysqli("localhost", "root", "root", "bts 5");

			if($base->connect_error){
				exit("erreur de connection");
			}
			//récuperation des valeurs du formulaire
	extract($_POST);
	$usernameOK = true; // valeur fause si le compte exite ou contient des espaces
	$passwordOk = false; // valeur vrai si le mdp est valide


		//gestion des caractères spéciaux problématiques
$username = $base->real_escape_string(htmlspecialchars($username));
  $password1 = $base->real_escape_string(htmlspecialchars($password1));
  $password2 = $base->real_escape_string(htmlspecialchars($password2));
   $bio = $base->real_escape_string(htmlspecialchars($bio));


//on recupère tout les noms de compte de la table
    $usernameTab = $base->query("SELECT compte FROM utilisateurs");
    foreach($usernameTab as $user){
    		if(strtolower($username) == strtolower($user['compte'])){
    				$usernameOK = FALSE; //si on trouve le meme nom de compte dans la base celui ci est incorrect
    			}
    }
    if((strpos($username, " ") != FALSE)){
    	$usernameOK = FALSE; // si les 2 mots de passe ne sont pas équivalents ou si l'un contient un espace, on change la valeur de password
    }

    for($i=0; $i <10 ; $i++){ 
  			if(strpos($password1, "$i") != false){
  				$passwordOk = TRUE; // si on trouve un chiffre dans le mdp on passe passwordOk en TRUE
  			}
    }
   if(($password1 != $password2) || (strpos($password1, " ") != FALSE)){
    	$passwordOk = FALSE;//si les 2 mots de passe ne sont pas équivalent ou si il contient un espace, on change la valeur de passwordOk
    }


    	if($passwordOk && $usernameOK){
    		//insertion dans la table des utilisatuers
    		$sql="INSERT INTO utilisateurs (compte, mdp, bio) VALUES ('$username', '$password1', '$bio')";
    	
	//$sql="ISERT INTO utilisateurs (compte, mdp, bio) VALUES ('$username', '$password', '$bio')";

	$base->query($sql);
	$redirect = "Projet.php";
}
		else{
		$redirect = "inscription.php";
		}	
	$base->close();
	header("location: $redirect");
	/*$dataOk = TRUE;

	$usename = trim($username);
		if (strpos($username, " ") == FALSE) {
			$dataOk
		}*/
}

?>