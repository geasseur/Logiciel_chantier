<?php
include('../model/modeltache.php');
if (!empty($_POST['idCategorie'])){
    $_SESSION['idCategorie'] = $_POST['idCategorie'];
    displayTache($_SESSION['idCategorie']);
}
include('../vue/vuetache.php');
 ?>
