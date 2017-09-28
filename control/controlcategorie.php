<?php
include('../model/modelcategorie.php');
$_SESSION['id_Chantier'] = $_POST['id'];
var_dump($_SESSION['id_Chantier']);
if (isset($_POST['id']) and !empty($_POST['id'])){
  $categories = displayCategorie($_POST['id']);
  var_dump($categories);
}

if (isset($_SESSION['id_Chantier']) and isset($_POST['nom']) and isset($_POST['responsable']) and isset($_POST['objectif'])){
  $categories=addedCategorie($_SESSION['id_Chantier'],$_POST['nom'],$_POST['responsable'],$_POST['objectif']);
}
include('../vue/vuecategorie.php');
 ?>
