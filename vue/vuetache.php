<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Taches</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../bootstrap4/css/bootstrap.css">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="../stylesheet" href="css/normalize.css">
        <link rel="../stylesheet" href="css/main.css">
        <link rel="../stylesheet" href="/css/style.css">
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <header class='container-fluid'>

    </header>
    <body>
      <main class='container column justify-content-center align-items-center'>
        <form class="" action="../control/controltache.php" method="post">
          <input type="text" name="id_Categorie" value="<?php echo $_SESSION['idCategorie'] ?>">
          <label for="">objectif</label>
          <input type="text" name="objectif" value=""><br>
          <label for="">executant</label>
          <input type="text" name="executant" value=""><br>
          <label for="">date d'execution</label>
          <input type="text" name="date_exe" value="">
          <input type="submit" value="nouvelle tache">
        </form>
        <form class="" action="../control/controlcategorie.php" method="post">
          <input type="submit" name="" value="retour categorie">
        </form>
        <?php
        // echo 'test : '.var_dump($test_taches);
        foreach($test_taches as $donnees) {
          ?>

          <article>
              <h2><?php echo $donnees['objectif']; ?></h2>
              <p>doit être fait à la date : <?php echo $donnees['date_exe']; ?></p><p>par <?php echo $donnees['executant'];?></p>
                <form class="" action="../control/controltache.php" method="post">
                  <input style='display:none;' type="text" name="id_tache_termine" value="<?php echo $donnees['id'] ?>">
                  <input type="submit" value="terminer tache">
                </form>
          </article>
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
