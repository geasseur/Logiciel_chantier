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
    $chantier = $bdd->query("SELECT nom, responsable, date_depart, date_fin, resume, type_chantier from Chantier");
    return $chantier;
  }

  function addedChantier(){
    global $bdd;
    $chantier = $bdd->prepare('INSERT INTO chantier(nom, responsable, resume, type) values (:nom, :responsable, :date_depart, :date_fin, :resume, :type)');
    $chantier->execute(array(
      'nom'=>$nom,
      'responsable'=>$responsable,
      // 'date_depart'=>,
      // 'date_fin'=>,
      'resume'=>$resume,
      'type_chantier'=>$type
    ));
  }

?>
