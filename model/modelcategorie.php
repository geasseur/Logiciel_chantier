<?php
session_start();
try{
    $bdd = new PDO('mysql:host=localhost;dbname=logicielchantier;charset=utf8', 'root', 'root');
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
  }
catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
// display all categorie on a Chantier
  function displayCategorie($id_Select){
    global $bdd;
    $categories = $bdd->query("SELECT id_Chantier, Chantier.id, Categorie.nom, Categorie.responsable, objectif FROM Chantier inner join Categorie on Chantier.id = id_Chantier where id_Chantier = ".$id_Select." ");
    return $categories->fetchAll();
  }

  function addedCategorie($id, $nom, $responsable, $objectif){
    global $bdd;
    $chantier = $bdd->prepare('INSERT INTO Categorie(id_Chantier,nom ,responsable, objectif) values (:id_Chantier,:nom ,:responsable, :objectif)');
    $chantier->execute(array(
      'id_Chantier'=>$id,
      'nom'=>$nom,
      'responsable'=>$responsable,
      'objectif'=>$objectif
    ));
    header('Location:../control/controlcategorie.php');
  }
  ?>
