<?php
include('model/modelindex.php');
$chantier = displayChantier();

if (isset($_POST['nom']) and isset($_POST['responsable']) and isset($_POST['date_depart']) and isset($_POST['date_fin']) and isset($_POST['resume']) and isset($_POST['type_chantier']) ) {
  $nom=$_POST['nom'];
  $responsable = $_POST['responsable'];
  $date_depart = DateTime::createFromFormat('d/m/Y', $_POST['date_depart']);
  $date_depart = date_format($date_depart, 'Y-m-d');
  $date_fin = DateTime::createFromFormat('d/m/Y', $_POST['date_fin']);
  $date_fin = date_format($date_fin, 'Y-m-d');
  $resume = $_POST['resume'];
  $type_chantier = $_POST['type_chantier'];
  addedChantier($nom, $responsable, $date_depart, $date_fin, $resume, $type_chantier);
}
include('vue/vueindex.php'); ?>
