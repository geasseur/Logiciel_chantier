<?php
include('../model/modelcategorie.php');
if (!empty($_POST['id']) and !empty($_POST['nom'])){
    $_SESSION['id_Chantier'] = $_POST['id'];
    $_SESSION['nomChantier'] = $_POST['nom'];
}
  //echo 'la valeur session id est : '.$_SESSION['id_Chantier'];
  $categories = displayCategorie($_SESSION['id_Chantier']);

if (isset($_SESSION['id_Chantier']) and isset($_POST['nom']) and isset($_POST['responsable']) and isset($_POST['objectif'])){
  addedCategorie($_SESSION['id_Chantier'],$_POST['nom'],$_POST['responsable'],$_POST['objectif']);
}
if (isset($_POST['id_Corbeille_Categorie']) and !empty($_POST['id_Corbeille_Categorie'])) {
  endedCategorie($_POST['id_Corbeille_Categorie']);
}

if (isset($_POST['id_Remettre_Categorie']) and !empty($_POST['id_Remettre_Categorie'])) {
  restartChantier($_POST['id_Remettre_Categorie']);
}
include('../vue/vuecategorie.php');
 ?>
