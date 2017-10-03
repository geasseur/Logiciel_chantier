<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Categorie</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../bootstrap4/css/bootstrap.css">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/style.css">
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <header class='container-fluid'>
      <h1>Categorie</h1>
      <h2><?php echo $_SESSION['nomChantier']; ?></h1>
      <form id="nouveauChantier" class='' action="../control/controlcategorie.php" method="post">
        <input class='invisible' type="text" name="id_Chantier" value="<?php echo $_SESSION['id_Chantier']?>">

        <label for="">Catégorie</label>
        <select name="nom">
          <option value="Fondation">Fondation</option>
          <option value="Maconnerie">Maçonnerie</option>
          <option value="Electricite">Electricite</option>
          <option value="Eau">Eau</option>
          <option value="Fenetre">Fenetre</option>
          <option value="Toiture">Toiture</option>
        </select>

        <label for="">responsable</label>
        <input type="text" name="responsable" value="">

        <label for="">Objectif</label>
        <textarea name="objectif" rows="2" cols="30">
        </textarea>
        <input type="submit" value="added Categorie">
      </form>
      <form class="" action="../index.php" method="post">
        <input type="submit" value="retour Chantier">
      </form>
    </header>
    <body>
      <main class='row justify-content-around align-items-center'>
        <?php
        foreach($categories as $donnees){
          ?>
          <section class='card col-xs-12 col-md-5 col-lg-3 <?php if ($donnees['termine'] == 0){
            ?>
            bg-success
            <?php
          }
          else{
            ?>
            bg-warning
            <?php
          } ?> d-inline-block'>
            <h2><?php echo $donnees['nom']; ?></h2>
            <div class="card-block">
              <p><?php echo $donnees['objectif']; ?></p>
              <p>responsable : <?php echo $donnees['responsable']; ?></p>
            </div>
            <section class='card-footer row'>
              <?php if ($donnees['termine'] == 0){
                ?>
                <form action="../control/controltache.php" method="post">
                  <input style='display:none' type='text' name="idCategorie" value="<?php echo $donnees['id_Categorie'] ?>">
                  <input class='btn btn-primary' type="submit" value="Afficher Tache">
                </form>
                <form class="" action="../control/controlcategorie.php" method="post">
                  <input style='display:none' type='text' name="id_Corbeille_Categorie" value="<?php echo $donnees['id_Categorie'] ?>">
                  <input class='btn btn-danger' type="submit" value="termine">
                </form>
                <?php
              }
              else{
                ?>
                <form class="" action="../control/controlcategorie.php" method="post">
                  <input style='display:none' type='text' name="id_Remettre_Categorie" value="<?php echo $donnees['id_Categorie'] ?>">
                  <input class='btn btn-primary' type="submit" value="remettre">
                </form>
                <?php
              } ?>
            </section>
          </section>
          <?php
        }?>
      </main>
      <footer class='bg-inverse'>
        <p class='text-white'>Propriété de Wolf head studio</p>
      </footer>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="../js/plugins.js"></script>
        <script src="../js/main.js"></script>

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
