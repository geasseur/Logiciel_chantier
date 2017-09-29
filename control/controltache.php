<?php
include('../model/modeltache.php');
if (isset($_POST['idCategorie']) and !empty($_POST['idCategorie'])){
    $_SESSION['idCategorie'] = $_POST['idCategorie'];
    var_dump($_SESSION['idCategorie']);
    $test_taches = displayTache($_SESSION['idCategorie']);
    echo 'test : ';
    var_dump($test_taches);
}
include('../vue/vuetache.php');
 ?>
