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
    $taches = $bdd->query('SELECT id_Categorie, objectif,date_exe from Tache WHERE id_Categorie = "'.$idCategorie.'"');
    return $taches->fetchAll();
  }
