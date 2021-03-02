<?php
include "header.php";
?>

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

  <div class="video-text site-width">
    <h3>LIFE PRODUCTIONS, INC.</h3>

    A DIGITAL MARKETING VIDEO AGENCY
    <br>

    <a href="https://www.youtube.com/watch?v=43XkOUKYzj0" class="swipebox-video play-button" rel="home-banner"></a>
  </div>
</div>

<div class="site-width">
  <div class="about" id="about">
    <div class="bisect-top-outer"></div>
    <div class="bisect-top"></div>

    <h3 class="headline">ABOUT</h3>

    Life Productions is a video production agency that specializes in professionally produced videos for businesses, individuals and organizations. Our unscripted media presentations are powerful communication tools that showcase the essence of an individual, business or organization by letting our clients tell their story "in their own words" through digital video.<br>
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
        Assistive Resource
      </div>

      <div class="one-third">
        <div class="image-box">
          <img src="images/about-wbe.png" alt="WBENC">
        </div>

        Nationally Certified as a Women's Business Enterprise
      </div>
    </div>
  </div>
</div>

<div class="site-width-wide" id="our-work">
  <h3 class="headline">OUR WORK</h3>
  <div class="our-work cf">
    <div class="bisect-top-outer"></div>

    <?php
    include_once "inc/dbconfig.php";
    $result = $mysqli->query("SELECT * FROM home_videos WHERE publish = 'on' ORDER BY sort+0 ASC");

    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
      $TheImage = ($row['image'] != "") ? "images/home-videos/" . $row['image'] : VideoImage($row['video']);
      ?>
      <div class="our-work-video" style="background-image: url(<?php echo $TheImage; ?>);">
        <a href="<?php echo $row['video']; ?>" class="swipebox-video play-button" rel="<?php echo $row['id']; ?>"></a>

        <div>
          <?php echo $row['title']; ?><br>
          <span><?php echo $row['type']; ?></span>
        </div>
      </div>
      <?php
    }

    $result->close();
    ?>
  </div>

  <div class="partners">
    <div class="bisect-top"></div>

    <h3 class="headline">WE'VE PARTNERED WITH</h3>

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

    <h3 class="headline">WHAT THEY'VE SAID</h3>

    <script type="text/javascript" src="inc/slick/slick.init.testimonials.js"></script>
    <div class="testimonials-slider">
      <?php
      $result = $mysqli->query("SELECT * FROM testimonials WHERE publish = 'on' ORDER BY sort+0 ASC");

      while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        ?>
        <div>
          &ldquo;<?php echo nl2br($row['testimonial']); ?>&rdquo;

          <div><strong><?php echo $row['person']; ?></strong>, <?php echo $row['title']; ?></div>
        </div>
        <?php
      }

      $result->close();
      ?>
    </div>
  </div>

  <div class="experience">
    Since 2005 Life Productions Inc. has served hundreds of clients in the greater Milwaukee area. Our experience has helped us to develop a successful strategy to engage audiences, constituents and benefactors.
  </div>

  <h3 class="headline" id="leadership">LEADERSHIP</h3>
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
        <div>Executive Producer / Owner</div>
      </div>
    </div>

    <div class="leader content">
      <div class="leader-content-hover">
        A UW Madison graduate with a background in Public Broadcasting (WHA-TV) editing promotional pieces, doing research for local documentaries and working as a news reporter and public affairs host at WNDU-TV in Indiana. Her work has been featured on ESPN along with winning a Chicago Midwest Emmy Award for a Single Public Affairs Program in 1997-98.<br>
        <br>

        <div class="social">
          <a href="http://twitter.com/thetruetami"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="https://www.linkedin.com/in/tamisweeney/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
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

<?php include "footer.php"; ?>