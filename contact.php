<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
<?php require_once("header.php") ?>
  <div class="imageContact">
    <img src="img/contact.jpg">
  </div>
  <div class="wrapper">
    <div class="form">
        <form action="register.php" method="post">
          <div class="form-group">
            <h2>Contact</h2>
          </div>
          <div class="form-group">
            <label for="userName">Username:</label>
            <input type="text" name="userName">
          </div>
          <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email">
          </div>
          <div class="form-group">
            <label for="text">Titel:</label>
            <input type="text" name="titel">
          </div>
          <div class="form-group">
            <label for="textarea">Message:</label>
            <textarea id="textarea" name="textarea" rows="4" cols="50">
            </textarea>
          </div>
          <div class="form-group">
            <input id="submit" type="submit" value="Submit">
          </div>
        </form>
      </div>
    </div>
  <!-- Add your site or application content here -->
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
<?php require_once("footer.php") ?>
</body>

</html>
