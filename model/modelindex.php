<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=logicielchantier;charset=utf8', 'root', 'root');
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
  }
catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
// Function for display all chantier
  function displayChantier(){
    global $bdd;
    $chantier = $bdd->query("SELECT id, nom, responsable, date_depart, date_fin, resume,en_cours, type_chantier from Chantier");
    return $chantier;
  }

// function for added a new chantier
  function addedChantier($nom, $responsable, $date_depart, $date_fin, $resume, $type_chantier){
    global $bdd;
    $chantier = $bdd->prepare('INSERT INTO Chantier(nom, responsable, date_depart, date_fin, resume,en_cours, type_chantier) values (:nom, :responsable, :date_depart, :date_fin, :resume,:en_cours, :type_chantier)');
    $chantier->execute(array(
      'nom'=>$nom,
      'responsable'=>$responsable,
      'date_depart'=>$date_depart,
      'date_fin'=>$date_fin,
      'resume'=>$resume,
      'en_cours'=>1,
      'type_chantier'=>$type_chantier
    ));
    header('Location:index.php');
  }

  function connexionUser($pseudo, $password){
    global $bdd;
    $test_connexion = $bdd->query('SELECT pseudo,password FROM utilisateur where pseudo = "'.$pseudo.'"');
    while($donnees = $test_connexion->fetch()){
      $testPassword = password_verify($password, $donnees['password']);
      if ($testPassword == true) {
        $_SESSION['pseudo'] = $donnees['pseudo'];
        //var_dump($_SESSION['pseudo']);
      }
      else{
        echo 'raté';
      }
    }
  }

  function deconnexionUtilisateur(){
  session_unset();
  session_destroy();
  }

  function endedChantier($id){
    global $bdd;
    $Chantier = $bdd->query('UPDATE Chantier set en_cours = 0 where id = "'.$id.'"');
    header('Location:index.php');
  }

  // function displayCorbeille(){
  //   global $bdd;
  //   $corbeilleChantier = $bdd->query("SELECT id, nom, responsable, date_depart, date_fin, resume, type_chantier from Chantier where en_cours = 0");
  //   return $corbeilleChantier->fetchAll();
  // }

  function restartChantier($id){
    global $bdd;
    $Chantier = $bdd->query('UPDATE Chantier set en_cours = 1 where id = "'.$id.'"');
    header('Location:index.php');
  }

  function clearCorbeille(){
    global $bdd;
    $Chantier = $bdd->query('DELETE FROM Chantier as Ch inner join Categorie as Ca on Ch.id = id_Chantier inner join Tache as T on Ca.id = id_Categorie where en_cours = 0 ');
    header('Location:index.php');
  }

?>
