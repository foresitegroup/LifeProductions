<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

$TopDir = substr( home_url(), 0, strrpos( home_url(), '/')+1);

if ( is_single() ) { ?>
  <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/swipebox/swipebox.css">
	<script type="text/javascript" src="<?php echo $TopDir; ?>inc/swipebox/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
	  $(document).ready(function() {
	    $(".swipebox").swipebox();
	  });
	</script>

	<div class="site-width-wide journal-content-single">
		<div class="journal-date"><?php echo get_the_date(); ?></div>

		<h2><?php the_title(); ?></h2>

	  <?php the_content(); ?>
    
    <?php
	  // Previous/next post navigation.
	  $next_post = get_next_post();
	  $prev_post = get_previous_post();
    
    $next_bg = ($next_post->ID != "") ? wp_get_attachment_url(get_post_thumbnail_id($next_post->ID)) : $TopDir . "images/journal-banner.jpg";
    $prev_bg = ($prev_post->ID != "") ? wp_get_attachment_url(get_post_thumbnail_id($prev_post->ID)) : $TopDir . "images/journal-banner.jpg";
	  // $prev_bg = wp_get_attachment_url(get_post_thumbnail_id($prev_post->ID));
	  ?>

	  <script type="text/javascript">
      $(document).ready(function() {
      	$('.nav-links .next').css("background-image", "url(<?php echo $next_bg; ?>)");
      	$('.nav-links .prev').css("background-image", "url(<?php echo $prev_bg; ?>)");
      });
    </script>
    
    <?php
		FG_post_pagination(array(
			'next_text' => __($next_post->post_title),
			'prev_text' => __($prev_post->post_title)
		));
		?>
	</div>
<?php } else { ?>
	<div class="site-width-wide journal-content-index">

    <div class="journal-post <?php echo $GLOBALS['image_class']; ?>" style="display: none;">
      <a href="<?php the_permalink(); ?>" class="journal-post-image"<?php if (wp_get_attachment_url(get_post_thumbnail_id()) != "") echo ' style="background-image: url(' . wp_get_attachment_url(get_post_thumbnail_id()) . ');"'; ?>><div>READ</div></a>

      <div class="journal-post-text">
    		<div class="date"><?php echo get_the_date(); ?></div>

    		<h2><?php the_title(); ?></h2>

    		<?php echo get_the_excerpt(); ?><br>

    		<a href="<?php the_permalink(); ?>" class="readmore">READ STORY</a>
      </div>
    </div>
	</div>
<?php } ?>