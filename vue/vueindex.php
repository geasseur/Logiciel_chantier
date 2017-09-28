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
    <header class='container-fluid'>
      <h1>liste Chantier</h1>
      <form id="nouveauChantier" action="index.php" method="post">
        <label for="">nom</label>
        <input type="text" name="nom" value=""><br>
        <label for="">responsable</label>
        <input type="text" name="responsable" value=""><br>

        <!-- debut du chantier -->
        <label for="">debut chantier</label>
        <input type="text" name="date_depart" value=""><br>

        <!-- fin chantier -->
        <label for="">fin chantier</label>
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
    </header>
    <body>
      <main class='container column justify-content-center align-items-center'>
        <?php
        while ($donnees = $chantier->fetch()) {
          ?>
          <section class='col-xs-12 col-md-5 col-lg-3 bg-warning d-inline-block mt-2 mb-2'>
            <h2><?php echo $donnees['nom']; ?></h2>
            <small>Depart :<?php echo $donnees['date_depart']; ?></small>
            <small>Fin :<?php echo $donnees['date_fin']; ?></small>
            <p><?php echo $donnees['resume']; ?></p>
            <p><?php echo $donnees['responsable']; ?></p>
            <p>Chantier de type: <?php echo $donnees['type_chantier']; ?></p>
            <section class='row'>
              <form class='col-5' action="control/controlcategorie.php" method="post">
                <input style='display:none;' type="text" name='id' value="<?php echo $donnees['id'] ?>">
                <input class='btn btn-primary' type="submit" value="Categorie">
              </form>
              <form class="col-6" action="index.php" method="post">
                <input style='display:none;' type="text" name='id' value="<?php echo $donnees['id'] ?>">
                <input class='btn btn-danger' type="submit" value="Terminé">
              </form>
            </section>
          </section>
          <?php
        }?>
      </main>
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
