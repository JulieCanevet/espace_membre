<?php
try //Connexion a la base de donnees
{
    $bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// inserer un nouveau membre dans la base de données
  function nvx_membre($pseudo, $mail, $pass, $bdd) {
  $req = $bdd->prepare('INSERT INTO membres (pseudo, mail, pass) VALUES (:pseudo, :mail, :pass)');
      $req->execute(array(
      'pseudo' => $pseudo,
      'mail' => $mail,
      'pass' => password_hash($pass, PASSWORD_BCRYPT)
      ));
  }