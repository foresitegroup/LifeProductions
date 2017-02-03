<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

$TopDir = substr( home_url(), 0, strrpos( home_url(), '/')+1);

if (is_single()) :
	$HeaderBackground = wp_get_attachment_url(get_post_thumbnail_id());
	$HeaderClass = "journal-single";
  $PageTitle = get_the_title();
else :
	$HeaderClass = "journal-index";
  $PageTitle = "Our Journal";
endif;

include "../header.php";
?>

<div class="banner<?php echo " " . $HeaderClass; ?>"<?php if ($HeaderBackground != "") echo ' style="background-image: url(' . $HeaderBackground . ');"'; ?>>
  <div class="site-width">
    <?php if ($HeaderClass == "journal-index") echo $PageTitle; ?>
  </div>
</div>
