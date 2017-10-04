<?php
session_start();
try{
    $bdd = new PDO('mysql:host=localhost;dbname=logicielchantier;charset=utf8', 'root', 'root');
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
  }
catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
  function addedUser($pseudo, $user_password,$email, $prenom, $nom){
    global $bdd;
    $req = $bdd->prepare('INSERT INTO utilisateur(pseudo, password, email, nom, prenom) VALUES (:pseudo, :user_password, :email, :nom,:prenom)');
    $req->execute(array(
      'pseudo'=>$pseudo,
      'user_password'=>password_hash($user_password, PASSWORD_BCRYPT),
      'email'=> $email,
      'nom' => $nom,
      'prenom' => $prenom
    ));
    $_SESSION['pseudo'] = $pseudo;
    header('Location:../index.php');
  }

  function verification($test){
    $test_verifie = htmlspecialchars($test);
    return $test_verifie;
  }
