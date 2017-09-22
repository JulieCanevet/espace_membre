<?php 
try //Connexion a la base de donnees
{
    $bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// recupérer un membre déjà enregistré
function connexion ($pseudo, $bdd) {
	$req = $bdd -> prepare('SELECT * 
    FROM membres 
    WHERE pseudo = :pseudo');

$req->execute(array(
    'pseudo' => $pseudo
    ));

$user =$req->fetch();
return $user; // retourne l'entrée correspondante au pseudo
}