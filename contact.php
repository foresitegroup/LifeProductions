<?php
session_start();

$PageTitle = "Contact";
$Chat = "no";
include "header.php";
?>

<div class="banner" style="background-image: url(images/contact-banner.jpg);">
  <div class="site-width big-text">
    <h2>Life Productions, Inc.</h2>
    would be excited to work with your organization in developing a message through video to help you tell your story.
  </div>
</div>

<div class="site-width contact-intro">
  <h3 class="headline">CONTACT US</h3>

  If you are interested in starting a project, have an idea or a question we would love to hear from you.<br>

  <div class="contact-links">
    <?php email("tami@lifeproductionsinc.com,louise@lifeproductionsinc.com", "HELLO@LIFEPRODUCTIONSINC.COM"); ?>
    <span></span>
    (414) 395-0811
  </div>

  <div class="contact-links half">
    TAMI SWEENEY <span>Executive Producer / Partner</span>
    <?php email("tami@lifeproductionsinc.com"); ?>
  </div>

  <div class="contact-links half">
    LOUISE BERG <span>Executive Producer / Partner</span>
    <?php email("louise@lifeproductionsinc.com"); ?>
  </div>
</div>

<div class="site-width-wide contact-form">
  <script type="text/javascript">
    $(document).ready(function() {
      var form = $('#contact-form');
      var formMessages = $('#form-messages');
      $(form).submit(function(event) {
        event.preventDefault();

        function formValidation() {
          if ($('#name').val() === '') { alert('Name required.'); $('#name').focus(); return false; }
          if ($('#email').val() === '') { alert('Email required.'); $('#email').focus(); return false; }
          if ($('#subject').val() === '') { alert('Subject required.'); $('#subject').focus(); return false; }
          if ($('#message').val() === '') { alert('Message required.'); $('#message').focus(); return false; }
          return true;
        }

        if (formValidation()) {
          var formData = $(form).serialize();
          formData += '&src=ajax';

          $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
          })
          .done(function(response) {
            $(formMessages).html(response);

            $(form).find('input:text, textarea').val('');
            $('#email').val('');
          })
          .fail(function(data) {
            if (data.responseText !== '') {
              $(formMessages).html(data.responseText);
            } else {
              $(formMessages).text('Oops! An error occured and your message could not be sent.');
            }
          });
        }
      });
    });
  </script>

  <?php
  // Settings for randomizing form field names
  $ip = $_SERVER['REMOTE_ADDR'];
  $timestamp = time();
  $salt = "LifeProductionsContactForm";
  ?>

  <noscript>
  <?php
  $feedback = (!empty($_SESSION['feedback'])) ? $_SESSION['feedback'] : "";
  unset($_SESSION['feedback']);
  ?>
  </noscript>

  <form action="form-contact.php" method="POST" id="contact-form">
    <div>
      <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name" placeholder="NAME">

      <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="EMAIL">

      <input type="text" name="<?php echo md5("subject" . $ip . $salt . $timestamp); ?>" id="subject" placeholder="SUBJECT">

      <div class="my-form-label">MESSAGE</div>
      <textarea name="<?php echo md5("message" . $ip . $salt . $timestamp); ?>" id="message"></textarea>

      <script src='https://www.google.com/recaptcha/api.js'></script>
      <div class="g-recaptcha" data-sitekey="6LdwREcUAAAAAMTtUUPsTGECFA9LxYfXizkzLQkG"></div>

      <input type="hidden" name="referrer" value="contact.php">

      <input type="text" name="confirmationCAP" style="display: none;">

      <input type="hidden" name="ip" value="<?php echo $ip; ?>">
      <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

      <input type="submit" name="submit" value="SEND" id="submit">

      <div id="form-messages"><?php echo $feedback; ?></div>
    </div>
  </form>
</div>

<?php include "footer.php"; ?>