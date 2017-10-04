<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Compte Utilisateur</title>
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
    <body>
      <?php if (isset($_SESSION['pseudo'])) {
        ?>
        <form class="" action="../control/controlcompte.php" method="post">
          <label for="">Entrez un pseudo</label>
          <input type="text" name="pseudo" value=""><br>

          <label for="">entrez un mot de passe</label>
          <input type="password" name="password" value=""><br>

          <label for="">retapez le mot de passe</label>
          <input type="password" name="validation_password" value=""><br>

          <label for="">mail</label>
          <input type="text" name="mail_user" value=""><br>

          <label for="">prenom</label>
          <input type="text" name="prenom" value=""><br>

          <label for="">nom</label>
          <input type="text" name="nom" value=""><br>

          <input type="submit" value="s'inscrire">
        </form>
        <?php
      } ?>
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
