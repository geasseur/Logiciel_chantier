<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=logicielchantier;charset=utf8', 'root', 'root');
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
  }
catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }

  function displayCategorie(){
    global $bdd;
    $categorie = $bdd->query("SELECT id_Chantier,Chantier.id, Categorie.nom, Categorie.responsable, objectif, Categorie.date_depart, Categorie.date_fin from Chantier, Categorie where id_Chantier = Chantier.id");
    return $categorie;
  }
