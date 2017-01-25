<?php $PageTitle = ""; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title>Life Productions<?php if ($PageTitle != "") echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Foresite Group">
    
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700i|Poppins:400,700|Raleway:400,500,700,800" rel="stylesheet">
    <link rel="stylesheet" href="inc/main.css?<?php echo filemtime('inc/main.css'); ?>">
    
    <script type="text/javascript" src="inc/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
      });
    </script>
  </head>
  <body>



    

    <div class="cycle-slideshow" data-cycle-slides="> div" data-cycle-timeout="10000" data-cycle-speed="2000" data-cycle-pause-on-hover="true" data-cycle-pager-template="<span></span>">
<!--       <div>
        <div class="video-banner"><div id="banner1"></div></div>

        <div class="video-text site-width">
          HELLO WORLD
        </div>
      </div>

      <div>
        <div class="video-banner"><div id="banner2"></div></div>

        <div class="video-text site-width">
          HOLA MUNDO
        </div>
      </div>

      <div>
        <div class="video-banner"><div id="banner3"></div></div>

        <div class="video-text site-width">
          HIYA EARTH
        </div>
      </div> -->

      <div>
        <div class="video-banner vimeo-banner"><div id="banner4"></div></div>

        <div class="video-text site-width">
          HEY VIMEO
        </div>
      </div>

      <div>
        <div class="video-banner vimeo-banner"><div id="banner5"></div></div>

        <div class="video-text site-width">
          YO VIMEO
        </div>
      </div>
    </div>
    
    <script>
      var playerInfoList = [
      {id:'banner1',videoId:'LG9kP7bWylA',source:'y'},
      {id:'banner2',videoId:'zvaZTryzJzs',source:'y'},
      {id:'banner3',videoId:'bACd24twSGk',source:'y'},
      {id:'banner4',videoId:'192156399',source:'v'},
      {id:'banner4',videoId:'183085974',source:'v'}
      ];
    </script>
    <script async src="https://www.youtube.com/iframe_api"></script>
    <script src="https://player.vimeo.com/api/player.js"></script>
    <script type="text/javascript" src="inc/video-slider.js"></script>
    <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>







    <div class="site-width">
      <div class="about">
        ABOUT<br>
        3 COL THAT BREAKS DOWN TO ROTATING 1 COL ON RESPONSIVE
      </div>

      <div class="our-work">
        OUR WORKS<br>
        3 COL VIDEOS
      </div>

      <div class="partners">
        PARTNERS
      </div>

      <div class="testimonials">
        TESTIMONIALS (ROTATING)
      </div>

      <div class="experience">
        Since 2005 Life Productions Inc. has produced over 225 videos for clients in the greater Milwaukee area. Our experience has helped us to develop a successful strategy to engage audiences, constituents and benefactors.
      </div>

      <div class="leadership">
        LEADERSHIP<br>
        2 COL TAMI AND LOUISE<br>
        1 ROTATING
      </div>
    </div>

    <div class="chat">
      LET'S CHAT
    </div>

    <div class="lp-footer">
      FOOTER
    </div>

  </body>
</html>