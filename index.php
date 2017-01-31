<?php
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
      <video playsinline autoplay muted loop poster="images/home-banner.jpg">
        <source src="video/home-banner.mp4" type="video/mp4">
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
        
        <link rel="stylesheet" href="inc/slick/slick.css">
        <script type="text/javascript" src="inc/slick/slick.min.js"></script>
        <script type="text/javascript" src="inc/slick/slick.init.awards.js"></script>
        <div class="awards">
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
        
        <script type="text/javascript" src="inc/slick/slick.init.partners.js"></script>
        <div class="partner-images">
          <div class="image" style="background-image: url(images/logo-business-journal.png)"></div>
          <div class="image" style="background-image: url(images/logo-aurora-health.png)"></div>
          <div class="image" style="background-image: url(images/logo-childrens-hospital.png)"></div>
          <div class="image" style="background-image: url(images/logo-girl-scouts.png)"></div>
          <div class="image" style="background-image: url(images/logo-upaf.png)"></div>
          <div class="image" style="background-image: url(images/logo-kelmann.png)"></div>
          <div class="image" style="background-image: url(images/logo-ronald-mcdonald.png)"></div>
          <div class="image" style="background-image: url(images/logo-mcw.png)"></div>
          <div class="image" style="background-image: url(images/logo-mount-mary.png)"></div>
          <div class="image" style="background-image: url(images/logo-sainta.png)"></div>
        </div>

        <div class="bisect-bottom"></div>
      </div>

      <div class="testimonials">
        <div class="bisect-top"></div>

        <h3 class="home-header">WHAT THEY'VE SAID</h3>

        <script type="text/javascript" src="inc/slick/slick.init.testimonials.js"></script>
        <div class="testimonials-slider">
          <div>
            &ldquo;Life Productions was able to turn the tale of the Brewhouse Inn & Suites into a film showing potential foreign investors not only the historical significance of the building, but how our company truly brings historic buildings back to life through renovation. Life Productions is truly an asset when it comes to telling others your story.&rdquo;

            <div>
              <strong>Gary Gorman</strong>, CEO Gorman & Company, Inc.
            </div>
          </div>

          <div>
            &ldquo;As publisher of the Business Journal for 20-plus years, we turned to Life Productions to help us tell the stories of the winners of our biggest event each year &mdash; the Women of Influence Awards. The videos played a huge role in honoring the winners. And working with Tami and Louise was in itself a special part of the program. They are both women of influence.&rdquo;

            <div>
              <strong>Mark Sabljak</strong>, Milwaukee Film Festival, Corporate & Community Engagement Advisor
            </div>
          </div>

          <div>
            &ldquo;Life Productions provided excellent service and care in meeting our needs. They listened to us, provided creative suggestions, and accommodated all our requests. Their timeliness, professionalism and passion for their work resulted in a wonderful product that highlights our important work. They have the attention-to-detail, customer-centered, creative and professional approach along with high-end equipment necessary to achieve a successful video. We have worked with a lot of external vendors and Life Productions easily rises to the top of our favorites.&rdquo;

            <div>
              <strong>Karen Ordinans</strong>, Executive Director Children's Health Alliance of Wisconsin | Wisconsin's voice for children's health
            </div>
          </div>

          <div>
            &ldquo;The Sacagawea Awards dinner serves as the signature event for Professional Dimensions, Inc. Each year, the pinnacle of the event is a video produced by Life Productions, Inc. that highlights our two award winners.  The video makes people laugh, cry and leave our event with the feeling they got to know our winners personally.  The video production is first class in every respect.  From the scheduling of shoots with our winners, to the unveiling of the final product, Life Productions is a pleasure to work with.  Attention to detail, no matter how many takes are necessary and a first class quality video is why Professional Dimensions uses Life Productions year after year.&rdquo;

            <div>
              <strong>Mary Bridges</strong>, Professional Dimensions Executive Director
            </div>
          </div>
        </div>
      </div>

      <div class="experience">
        Since 2005 Life Productions Inc. has produced over 225 videos for clients in the greater Milwaukee area. Our experience has helped us to develop a successful strategy to engage audiences, constituents and benefactors.
      </div>

      <h3 class="home-header">LEADERSHIP</h3>
      <div class="leadership">
        <div class="bisect-top-outer"></div>

        <script type="text/javascript">
          $(document).ready(function() {
            $('.leader').on('touchstart touchend', function(e){
              e.preventDefault();
              $(this).toggleClass('hover');
            });
          });
        </script>

        <div class="leader" style="background-image: url(images/leadership-tami.jpg);">
          <div class="leader-content">
            TAMI SWEENEY
            <div>Executive Producer / Partner</div>
          </div>

          <div class="leader-content-hover">
            A UW Madison graduate with a background in Public Television (WHA-TV, WNDU-TV), editing promotional pieces and doing research for local documentaries. Her work has been featured on ESPN along with winning a Chicago Midwest Emmy Award for a Single Public Affairs Program in 1997-98.<br>
            <br>

            <div class="social">
              <a href="http://twitter.com/thetruetami"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>

        <div class="leader" style="background-image: url(images/leadership-louise.jpg);">
          <div class="leader-content">
            LOUISE BERG
            <div>Executive Producer / Partner</div>
          </div>

          <div class="leader-content-hover">
            A University of Minnesota graduate with a background in software, graphic and technical support while also volunteering in many capacities.  She has won awards for editing and production and was recently named as a member of The Aurora Awards International Judging Committee.<br>
            <br>

            <div class="social">
              <a href="http://twitter.com/lpivideo"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>

        <div style="clear: both;"></div>

        <script type="text/javascript" src="inc/slick/slick.init.home-slider.js"></script>
        <div class="leadership-slider">
          <div style="background-image: url(images/home-slider1.jpg);"></div>
          <div style="background-image: url(images/home-slider2.jpg);"></div>
          <div style="background-image: url(images/home-slider3.jpg);"></div>
          <div style="background-image: url(images/home-slider4.jpg);"></div>
          <div style="background-image: url(images/home-slider5.jpg);"></div>
          <div style="background-image: url(images/home-slider6.jpg);"></div>
        </div>
      </div>
    </div>

    <div class="chat">
      <div class="site-width">
        HAVE A STORY TO TELL? <a href="#">LET'S CHAT</a>
      </div>
    </div>

    <div class="lp-footer">
      <div class="site-width">
        <div class="footer-col2">
          <?php email("hello@lifeproductonsinc.com"); ?><br>
          (414) 123-4567
        </div>

        <div class="footer-col1">
          5061 N. Cumberland Blvd<br>
          Milwaukee, WI 53217
        </div>

        <div class="footer-col3">
          <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>

  </body>
</html>