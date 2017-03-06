<?php
$PageTitle = "Services";
include "header.php";
?>

<div class="banner" style="background-image: url(images/services-banner.jpg);">
  <div class="site-width">
    A Life Production is tailored to meet your specific goals. Our services are designed to walk you through the video production process with ease and efficiency to communicate your message and story in the best possible light.
  </div>
</div>

<div class="our-services">
  <div class="bisect-top-outer"></div>
  <div class="bisect-top"></div>

  <h3 class="headline">OUR SERVICES</h3>

  <div class="site-width-wide">
    <div>MARKETING VIDEOS</div>
    <div>RECRUITMENT</div>
    <div>CAPITAL CAMPAIGNS</div>
    <div>WEB BANNERS</div>
    <div>EVENT VIDEOS</div>
    <div>SOCIAL MEDIA CONTENT</div>
    <div>PROMOTIONAL TRAILERS</div>
    <div>TRIBUTE VIDEOS</div>
    <div>ON-SITE SHOOTS</div>
    <div>MOTION GRAPHICS</div>
    <div>CORPORATE VIDEOS</div>
    <div>SHORT FILMS</div>
    <div>EDUCATION VIDEOS</div>
    <div>BRAND VIDEOS</div>
    <div>ORGANIZATION VIDEOS</div>
    <div>DIGITAL ENCODING</div>
  </div>
</div>

<div class="site-width-wide">
  <div class="our-process" id="process">
    <div class="bisect-top"></div>

    <h3 class="headline">OUR PROCESS</h3>

    <div class="process p1">
      <h2>LEARN</h2>
      We meet with you to learn about you, your organization and business, taking special care to identify the objectives for your video presentation. We go over every aspect of the production and discuss all the ways you envision your video being used, the audience you are hoping to reach, the message you want to communicate and the type of emotion you want the video to evoke. We work with you to create a tape schedule that is both efficient and effective.
    </div>

    <div class="process p2">
      <h2>PRODUCE</h2>
      Our production team works on site to capture the essence of the business, organization or individual we are displaying. Interviews are conducted in an unscripted and relaxed conversational manner to create a genuine story that is communicated effortlessly and with ease. We capture on site video footage of the organization, business or individual and incorporate key elements that will help support your story.
    </div>

    <div class="process p3">
      <h2>EDIT</h2>
      In a timely and efficient manner we will edit your material and create a production piece that reflects the objectives that you have initially outlined. We celebrate your input making sure that we create a piece that you are happy with and schedule a post-production meeting so that we have your complete approval before we proceed with exporting your finished product.
    </div>

    <div class="process p4">
      <h2>DELIVER</h2>
      You want to have confidence that your production will be produced on time and deliver a message that will make you stand out to your prospective clients and donors.  We pride ourselves in providing impactful digital marketing pieces that will engage your special events audience, your website visitors and social media community.
    </div>

    <div style="clear: both;"></div>
  </div>

  <div class="partners partners-services">
    <h3 class="headline">WE'VE PARTNERED WITH</h3>

    <link rel="stylesheet" href="inc/slick/slick.css">
    <script type="text/javascript" src="inc/slick/slick.min.js"></script>
    <script type="text/javascript" src="inc/slick/slick.init.partners.js"></script>
    <div class="partner-images">
      <div class="image" style="background-image: url(images/logo-business-journal.png)"></div>
      <div class="image" style="background-image: url(images/logo-aurora-health.png)"></div>
      <div class="image" style="background-image: url(images/logo-childrens-hospital.png)"></div>
      <div class="image" style="background-image: url(images/logo-david-j-frank.png)"></div>
      <div class="image" style="background-image: url(images/logo-girl-scouts.png)"></div>
      <div class="image" style="background-image: url(images/logo-upaf.png)"></div>
      <div class="image" style="background-image: url(images/logo-greater-milwaukee-foundation.png)"></div>
      <div class="image" style="background-image: url(images/logo-kelmann.png)"></div>
      <div class="image" style="background-image: url(images/logo-ronald-mcdonald.png)"></div>
      <div class="image" style="background-image: url(images/logo-mcw.png)"></div>
      <div class="image" style="background-image: url(images/logo-mount-mary.png)"></div>
      <div class="image" style="background-image: url(images/logo-sainta.png)"></div>
    </div>
  </div>

  <div class="testimonials">
    <h3 class="headline">WHAT THEY'VE SAID</h3>

    <script type="text/javascript" src="inc/slick/slick.init.testimonials.js"></script>
    <div class="testimonials-slider">
      <?php
      include_once "inc/dbconfig.php";
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

  <div class="tag">
    A Life Production is unscripted, real and authentic.
  </div>
</div>

<?php include "footer.php"; ?>