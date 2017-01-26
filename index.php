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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="inc/main.css?<?php echo filemtime('inc/main.css'); ?>">

    <script type="text/javascript" src="inc/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
      });
    </script>
  </head>
  <body>

    <div class="lp-header site-width">
      <a href="."><img src="images/logo.png" alt="Life Productions"></a>

      <ul class="menu">
        <li><a href="#">SERVICES.</a></li>
        <li><a href="#">CONTACT.</a></li>
        <li><a href="#">JOURNAL.</a></li>
      </ul>
    </div>

    <link rel="stylesheet" href="inc/swipebox/swipebox.css">
    <script type="text/javascript" src="inc/swipebox/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $(".swipebox-video").swipebox({autoplayVideos: true});
      });
    </script>

    <div class="video-banner">
      <video playsinline autoplay muted loop poster="images/video-banner-test-poster.jpg">
        <source src="video/test.mp4" type="video/mp4">
      </video>

      <div class="video-text">
        <h3>LIFE PRODUCTIONS, INC.</h3>

        A DIGITAL MARKETING VIDEO AGENCY
        <br>

        <a href="https://www.youtube.com/watch?v=43XkOUKYzj0" class="swipebox-video"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
      </div>
    </div>

    <div class="site-width">
      <div class="about">
        <div class="bisect-top-outer"></div>
        <div class="bisect-top"></div>

        <h3 class="home-header">ABOUT</h3>

        Life Productions is a video production agency that specializes in professionally produced videos for businesses, individuals and organizations. We believe our unscripted media presentations are powerful communication tools that showcase the essence of an individual, business or organization by letting our clients tell their story "in their own words" through digital video.<br>
        <br>

        <div class="one-third">
          <div class="image-box">
            <img src="images/about-aurora-awards.png" alt="The Aurora Awards">
          </div>

          Cardinal Stritch Ruth Coleman Tribute Gold<br>
          St. Catherine Residence Gold<br>
          Frank Mayer &amp; Associates, Inc. Best of Show
        </div>

        <div class="one-third">
          <div class="image-box">
            <img src="images/about-telly-awards.png" alt="The Telly Awards">
          </div>

          Milwaukee Women's Center<br>
          Marquette High School<br>
          Assitive Resource
        </div>

        <div class="one-third">
          <div class="image-box">
            <img src="images/about-wbe.png" alt="WBENC">
          </div>

          Nationally Certified as a Women's Business Enterprise
        </div>
      </div>
      
      <h3 class="home-header">OUR WORK</h3>
      <div class="our-work cf">
        <div class="bisect-top-outer"></div>
        
        <div class="our-work-video" style="background-image: url(images/video-milwaukee-excellence.jpg);">
          <a href="https://www.youtube.com/watch?v=43XkOUKYzj0" class="swipebox-video"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>

          <div>
            MILWAUKEE EXCELLENCE SCHOOL OPENING DAY 2016<br>
            <span>EDUCATION VIDEO</span>
          </div>
        </div>

        <div class="our-work-video" style="background-image: url(images/video-dsha.jpg);">
          <a href="https://www.youtube.com/watch?v=bACd24twSGk" class="swipebox-video"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>

          <div>
            DIVINE SAVIOR HOLY ANGELS<br>
            <span>EDUCATION VIDEO</span>
          </div>
        </div>

        <div class="our-work-video" style="background-image: url(images/video-girl-scouts.jpg);">
          <a href="https://www.youtube.com/watch?v=iTpVQgGjYAI" class="swipebox-video"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>

          <div>
            GIRL SCOUTS OF WISCONSIN SOUTHEAST<br>
            <span>ORGANIZATION VIDEO</span>
          </div>
        </div>

        <div class="our-work-video" style="background-image: url(images/video-mcw.jpg);">
          <a href="https://www.youtube.com/watch?v=zvaZTryzJzs" class="swipebox-video"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>

          <div>
            MCW ANESTHESIOLOGY RESIDENT PROGRAM<br>
            <span>EDUCATION VIDEO</span>
          </div>
        </div>

        <div class="our-work-video" style="background-image: url(images/video-david-j-frank.jpg);">
          <a href="https://www.youtube.com/watch?v=DKr2NiTjsaI" class="swipebox-video"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>

          <div>
            DAVID J. FRANK LANDSCAPING LLC<br>
            <span>BRAND VIDEO</span>
          </div>
        </div>

        <div class="our-work-video" style="background-image: url(images/video-saint-a.jpg);">
          <a href="https://www.youtube.com/watch?v=poWSxJcZ2KY" class="swipebox-video"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>

          <div>
            SAINT A FOSTER CARE<br>
            <span>RECRUITMENT VIDEO</span>
          </div>
        </div>
      </div>

      <div class="partners">
        <div class="bisect-top"></div>

        <h3 class="home-header">WE'VE PARTNERED WITH</h3>

        PARTNERS LOGOS HERE

        <div class="bisect-bottom"></div>
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