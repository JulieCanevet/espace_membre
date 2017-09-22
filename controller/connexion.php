<?php 
session_start();

include ('../model/connexion_post.php'); // fonction verification

if(!empty($_POST['pass']) && !empty($_POST['pseudo'])){
$_SESSION['pseudo'] = $_POST['pseudo'];

	$user = connexion($_POST['pseudo'], $bdd); // lance la fonction verif pseudo
	$user_pass = password_verify($_POST['pass'], $user['pass']);
	
	if ($user['pass'] == $user_pass){ // si le mot de passe est le bon
		header('Location:inscrit.php');
	}
	
	else {
		echo 'mauvais mot de passe';
	}
};
include('../vue/connexion_vue.php'); // formulaire de connexion