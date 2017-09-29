<?php
session_start();
try{
    $bdd = new PDO('mysql:host=localhost;dbname=logicielchantier;charset=utf8', 'root', 'root');
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
  }
catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }

  function displayTache($idCategorie){
    global $bdd;
    $taches = $bdd->query('SELECT * FROM Tache WHERE id_Categorie = '.$idCategorie);
    var_dump($taches->fetchAll());
    return $taches;
  }
