<?php
if (!isset($TopDir)) $TopDir = "";

function email($address, $name="") {
  $email = "";
  for ($i = 0; $i < strlen($address); $i++) { $email .= (rand(0, 1) == 0) ? "&#" . ord(substr($address, $i)) . ";" : substr($address, $i, 1); }
  if ($name == "") $name = $email;
  echo "<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email\">$name</a>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Life Productions<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $TopDir; ?>images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $TopDir; ?>images/apple-touch-icon.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Foresite Group">

    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700i|Poppins:400,700|Raleway:400,500,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/main.css?<?php if ($TopDir == "") echo filemtime('inc/main.css'); ?>">

    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery.waypoints.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');

        $(".scrolling-menu").waypoint(function(direction) {
          $(".lp-header").toggleClass("sticky", direction == "down");
        });
      });
    </script>
    
    <!-- This will stop working July 1, 2023 -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-93567331-1', 'auto');
      ga('send', 'pageview');
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-524W8F3YZ6"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-524W8F3YZ6');
    </script>
  </head>
  <body>

    <div class="lp-header site-width<?php if (isset($HeaderClass) && ($HeaderClass == "journal-single")) echo " journal-single-header" ?>">
      <a href="<?php echo $TopDir; ?>." id="logo"></a>
      
      <input type="checkbox" id="show-menu" role="button">
      <label for="show-menu" id="menu-toggle"></label>
      <div class="menu">
        <ul>
          <li class="mobile"><a href="<?php echo $TopDir; ?>.">HOME</a></li>
          <li><a href="<?php echo $TopDir; ?>services.php">SERVICES</a></li>
          <li><a href="<?php echo $TopDir; ?>contact.php">CONTACT</a></li>
          <li><a href="<?php echo $TopDir; ?>journal">JOURNAL</a></li>
        </ul>
      </div>
    </div>

    <div class="scrolling-menu"></div>
