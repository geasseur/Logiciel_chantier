<?php
include('../model/modelcategorie.php');
if (isset($_POST['id']) and !empty($_POST['id'])){
  displayChantier();
}
include('../vue/vuecategorie.php');
 ?>
