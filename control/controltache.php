<?php
include('../model/modeltache.php');
if (isset($_POST['idCategorie']) and !empty($_POST['idCategorie'])){
    $_SESSION['idCategorie'] = $_POST['idCategorie'];
    var_dump($_SESSION['idCategorie']);
    $test_taches = displayTache($_SESSION['idCategorie']);
    echo 'test : ';
    var_dump($test_taches);
}

if (isset($_POST['id_Categorie']) and isset($_POST['objectif']) and isset($_POST['executant']) and isset($_POST['date_exe'])) {
  $date_exe = DateTime::createFromFormat('d/m/Y', $_POST['date_fin']);
  $date_exe = date_format($date_exe, 'Y-m-d');
  addedtache($_POST['id_Categorie'],$_POST['objectif'],$_POST['executant'],$date_exe);
}
include('../vue/vuetache.php');
 ?>
