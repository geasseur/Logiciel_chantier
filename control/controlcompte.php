<?php
include('../model/modelcompte.php');
if (isset($_POST['pseudo']) and isset($_POST['password']) and isset($_POST['validation_password']) and isset($_POST['mail_user']) and isset($_POST['prenom']) and isset($_POST['nom'])) {
  if (!empty($_POST['pseudo']) and !empty($_POST['password']) and !empty($_POST['validation_password']) and !empty($_POST['mail_user']) and !empty($_POST['prenom']) and !empty($_POST['nom'])) {
    if ($_POST['password'] == $_POST['validation_password']) {
      if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail_user'])){
        addedUser($_POST['pseudo'],$_POST['password'],$_POST['mail_user'],$_POST['prenom'],$_POST['nom']);
      }
      else {
        echo('le mail n\'a pas été ecrit correctement');
      }
    }
    else{
      echo('les deux mots de passe de corresponde pas');
    }
  }
  else {
    echo('l\'un des champs n\'a pas été remplit');
  }

}
include('../vue/vuecompte.php'); ?>
