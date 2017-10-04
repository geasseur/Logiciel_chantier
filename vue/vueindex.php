<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Index</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../bootstrap4/css/bootstrap.css">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <header class='p-4'>
      <h1 class='p-3'>liste Chantier</h1>
      <section class='col-lg-3 card d-inline-block'>
        <section class='d-flex'>
          <?php if(!isset($_SESSION['pseudo'])){ ?>
          <form class="col-4 mb-3" action="index.php" method="post">
            <label for="">Pseudonyme</label>
            <input type="text" name="pseudo" value="">
            <label for="">Mot de passe</label>
            <input type="password" name="password" value="">
            <input class='btn btn-primary mt-2 mb-2' type="submit" value="connexion">
          </form>
          <?php } ?>
        </section>
        <section class='d-flex'>
          <?php if(!isset($_SESSION['pseudo'])){ ?>
            <form class="mb-3" action="control/controlcompte.php" method="post">
              <input class='btn btn-primary' type="submit" value="se creer un compte">
            </form>
          <?php } ?>
        </section>
        <section id='sectionDeco'>
          <?php if(isset($_SESSION['pseudo'])){?>
            <form  id='Deco' class="col-12" action="index.php" method="post">
              <input style='display:none' type="text" name="deco" value="<?php echo $_SESSION['pseudo'] ?>">
              <input class='btn btn-danger' type="submit" name="" value="deconnexion">
            </form>
          <?php } ?>
        </section>
      </section>
    </header>
    <body>
      <main class='container-fluid column justify-content-center align-items-center'>
          <?php if (isset($_SESSION['pseudo'])) {
          ?>
          <form id="nouveauChantier" class='col-6' action="index.php" method="post">
            <h3>Nouveau chantier</h3>
            <label for="">nom</label>
            <input type="text" name="nom" value=""><br>
            <label for="">responsable</label>
            <input type="text" name="responsable" value=""><br>

            <!-- debut du chantier -->
            <label for="">debut chantier(ex : 31/12/1999)</label>
            <input type="text" name="date_depart" value=""><br>

            <!-- fin chantier -->
            <label for="">fin chantier(ex : 31/12/1999)</label>
            <input type="text" name="date_fin" value=""><br>
            <label for="">resumé du chantier</label><br>
            <textarea name="resume" rows="8" cols="45">
            </textarea><br>
            <label for="">type de chantier</label>
            <select name="type_chantier">
              <option value="maison">maison</option>
              <option value="immeuble">immeuble</option>
              <option value="usine">usine</option>
            </select><br>
            <input type="submit" value="added Chantier">
          </form>
          <?php } ?>
        <h2>Chantier en cours</h2>
        <section class='d-flex justify-ccontent-around flex-wrap'>
        <?php
        while ($donnees = $chantier->fetch()) {
          ?>
          <section class='card col-xs-12 col-md-5 col-lg-3 <?php
            if ($donnees['en_cours'] == 1) {
              ?>
              bg-success
              <?php
            }
            else{
              ?>
              bg-danger
              <?php
            }
          ?> d-inline-block mt-2 mb-2'>
            <section>
              <h2><?php echo $donnees['nom']; ?></h2>
              <small>Depart :<?php echo $donnees['date_depart']; ?></small>
              <small>Fin :<?php echo $donnees['date_fin']; ?></small>
            </section>
            <section class='card-block'>
              <p class='card-text'>objectif : <?php echo $donnees['resume']; ?></p>
              <p>responsable : <?php echo $donnees['responsable']; ?></p>
              <p>Chantier de type: <?php echo $donnees['type_chantier']; ?></p>
            </section>

              <?php if ($donnees['en_cours'] == 1) {
                // display button for go to categories or for deleted
              ?>
              <!-- go to categories -->
              <form class='col-5 d-inline-block' action="control/controlcategorie.php" method="post">
                <input style='display:none;' type="text" name='id' value="<?php echo $donnees['id'] ?>">
                <input style='display:none;' type="text" name='nom' value="<?php echo $donnees['nom'] ?>">
                <input class='btn btn-primary' type="submit" value="Categorie">
              </form>
              <!-- ended Chantier  -->
              <form class="col-5 d-inline-block" action="index.php" method="post">
                <input style='display:none'; type="text" name='id_termine' value="<?php echo $donnees['id'] ?>">
                <input class='btn btn-danger' type="submit" value="Terminé">
              </form>
            <?php }
            else {
              ?>
              <!-- activate Chantier -->
              <form class="" action="index.php" method="post">
                <input style='display:none;' type="text" name='id_Chantier_Corbeille' value="<?php echo $donnees['id'] ?>">
                <input class='btn btn-primary' type="submit" value="Non Terminé">
              </form>
              <?php
            } ?>
          </section>
          <?php
        }?>
      </main>
      </section>
      <footer class='bg-inverse'>
        <p class='text-white'>Propriété de Wolf head studio</p>
      </footer>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
