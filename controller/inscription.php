<?php session_start();

	include ('../model/inscription_post.php');

 if (!empty($_POST['pseudo']) && !empty($_POST['pass']) && !empty($_POST['mail'])){

	$nvx_membre = nvx_membre($_POST['pseudo'], $_POST['mail'], $_POST['pass'], $bdd);
	$_SESSION['pseudo'] = $_POST['pseudo']; 
	//redirection
	header('Location: inscrit.php');
}
include('../vue/inscription_vue.php');

?>