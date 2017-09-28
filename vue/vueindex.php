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
    <header>
      <h1>liste Chantier</h1>
      <form id="nouveauChantier" action="index.php" method="post">
        <label for="">nom</label>
        <input type="text" name="nom" value=""><br>
        <label for="">responsable</label>
        <input type="text" name="responsable" value=""><br>

        <!-- debut du chantier -->
        <label for="">debut chantier</label>
        <input type="text" name="date_depart" value="">
        <!-- <label for="">start chantier</label><br>
        <label for="">day</label>
        <input type="text" maxlength="2" name="d_day" />
        <label for="">month</label>
        <input type="text" maxlength="2" name="d_month" />
        <label for="">year</label>
        <input type="text" maxlength="4" name="d_year" /><br> -->

        <!-- fin chantier -->
        <label for="">fin chantier</label>
        <input type="text" name="date_fin" value="">
        <!-- <label for="">end chantier</label><br>
        <label for="">day</label>
        <input type="text" maxlength="2" name="f_day" />
        <label for="">month</label>
        <input type="text" maxlength="2" name="f_month" />
        <label for="">year</label>
        <input type="text" maxlength="4" name="f_year" /><br> -->
        <!-- <select name="jour">
          <option value="1jour">un jour</option>
          <option value="2jour">deux jour</option>
          <option value="3jour">trois jour</option>
          <option value="4jour">quatre jour</option>
          <option value="5jour">cinq jour</option>
          <option value="6jour">six jour</option>
          <option value="7jour">sept jour</option>
        </select>
        <select name="semaine">
          <option value="1semaine">une semaine</option>
          <option value="2semaine">deux semaines</option>
          <option value="3semaine">trois semaines</option>
          <option value="4semaine">quatre semaines</option>
        </select>
        <select name="mois">
          <option value="1mois">un mois</option>
          <option value="2mois">deux mois</option>
          <option value="3mois">trois mois</option>
          <option value="4mois">quatre mois</option>
          <option value="5mois">cinq mois</option>
          <option value="6mois">six mois</option>
          <option value="7mois">sept mois</option>
          <option value="8mois">huit mois</option>
          <option value="9mois">neuf mois</option>
          <option value="10mois">dix mois</option>
          <option value="11mois">onze mois</option>
          <option value="12 mois">douze mois</option>
        </select>
        <select name="annee">
          <option value="1an">une année</option>
          <option value="2an">deux années</option>
          <option value="3an">trois années</option>
          <option value="4an">quatre années</option>
          <option value="5an">cinq années</option>
        </select><br> -->
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
      <main>
        <?php
        while ($donnees = $chantier->fetch()) {
          ?>
          <section>
            <h2><?php echo $donnees['nom']; ?></h2>
            <small>Depart :<?php echo $donnees['date_depart']; ?></small>
            <small>Fin :<?php echo $donnees['date_fin']; ?></small>
            <p><?php echo $donnees['resume']; ?></p>
            <p><?php echo $donnees['responsable']; ?></p>
            <p>Chantier de type: <?php echo $donnees['type_chantier']; ?></p>
            <form action="control/controlindex.php" method="post">
              <input style='display:none;' type="id" value="<?php echo $donnees['id'] ?>">
              <input type="submit" value="Categorie">
            </form>
          </section>
          <?php
        }?>
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
