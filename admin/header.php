<?php include_once "../inc/dbconfig.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Life Productions Administration<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Foresite Group">

    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700i|Poppins:400,700|Raleway:400,500,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../inc/main.css?<?php echo filemtime('../inc/main.css'); ?>">
    <link rel="stylesheet" href="inc/admin.css?<?php echo filemtime('inc/admin.css'); ?>">

    <script type="text/javascript" src="../inc/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="inc/jquery-ui.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
      });
    </script>
  </head>
  <body>

    <div class="lp-header site-width">
      <a href="." id="logo"></a>
      
      <input type="checkbox" id="show-menu" role="button">
      <label for="show-menu" id="menu-toggle"></label>
      <div class="menu">
        <?php if ($PageTitle != "Login") { ?>
        <ul>
          <li><a href="testimonials.php">TESTIMONIALS</a></li>
        </ul>
        <?php } ?>
      </div>
    </div>

    <div class="banner banner-admin"></div>
    
    <div class="site-width admin">