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

  function addedtache($idCategorie, $objectif, $executant, $date_exe){
    global $bdd;
    $categories = $bdd->prepare('INSERT INTO Tache(id_Categorie,objectif, executant,date_exe) values (:id_Categorie,:objectif,:executant, :date_exe)');
    $categories->execute(array(
      'id_Categorie'=>$idCategorie,
      'objectif'=>$objectif,
      'executant'=>$executant,
      'date_exe'=>$date_exe
    ));
    header('../control/controltache.php');
  }
