<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=logicielchantier;charset=utf8', 'root', 'root');
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
  }
catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }

  function displayChantier(){
    global $bdd;
    $chantier = $bdd->query("SELECT id, nom, responsable, date_depart, date_fin, resume, type_chantier from Chantier");
    return $chantier;
  }

  function addedChantier($nom, $responsable, $date_depart, $date_fin, $resume, $type_chantier){
    global $bdd;
    $chantier = $bdd->prepare('INSERT INTO Chantier(nom, responsable, date_depart, date_fin, resume, type_chantier) values (:nom, :responsable, :date_depart, :date_fin, :resume, :type_chantier)');
    $chantier->execute(array(
      'nom'=>$nom,
      'responsable'=>$responsable,
      'date_depart'=>$date_depart,
      'date_fin'=>$date_fin,
      'resume'=>$resume,
      'type_chantier'=>$type_chantier
    ));
    header('Location:index.php');
  }

?>
