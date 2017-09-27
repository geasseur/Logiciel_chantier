<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
      <main>
        <?php
        while ($donnees = $chantier->fetch()) {
          ?>
          <header>
            <h1>liste Chantier</h1>
          </header>
          <section>
            <h2><?php echo $donnees['nom']; ?></h2>
            <small>Depart :<?php echo $donnees['date_depart']; ?></small>
            <small>Fin :<?php echo $donnees['date_fin']; ?></small>
            <p><?php echo $donnees['resume']; ?></p>
            <p><?php echo $donnees['responsable']; ?></p>
            <p>Chantier de type: <?php echo $donnees['type_chantier']; ?></p>
          </section>
          <?php
        }?>
        <form class="" action="index.php" method="post">
          <label for="">nom</label>
          <input type="text" name="nom" value=""><br>
          <label for="">responsable</label>
          <input type="text" name="responsable" value=""><br>
          <label for="">duree</label>
          <select name="jour">
            <option value="un jour">un jour</option>
          </select>
          <select name="semaine">

          </select>
          <select name="mois">

          </select>
        </form>
      </main>

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
