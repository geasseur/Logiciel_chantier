<?php
include('../model/modelcategorie.php');
if (!empty($_POST['id'])) {
    $_SESSION['id_Chantier'] = $_POST['id'];
}
  echo 'la valeur session id est : '.$_SESSION['id_Chantier'];
  $categories = displayCategorie($_SESSION['id_Chantier']);

if (isset($_SESSION['id_Chantier']) and isset($_POST['nom']) and isset($_POST['responsable']) and isset($_POST['objectif'])){
  addedCategorie($_SESSION['id_Chantier'],$_POST['nom'],$_POST['responsable'],$_POST['objectif']);
}
include('../vue/vuecategorie.php');
 ?>
