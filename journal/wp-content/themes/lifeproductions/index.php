<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();

$TopDir = substr( home_url(), 0, strrpos( home_url(), '/')+1);

if ( have_posts() ) :

	$GLOBALS['image_class'] = "image-right";

	/* Start the Loop */
	while ( have_posts() ) : the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		get_template_part( 'content', get_post_format() );
    
    $GLOBALS['image_class'] = ($GLOBALS['image_class'] == "image-right") ? "image-left" : "image-right";
	endwhile;

else :

	get_template_part( 'content', 'none' );

endif;

if (!is_single()) : ?>
<div class="learnmore">
	<a href="#" id="loadmore">LOAD MORE</a>
	<script type="text/javascript">
	  $(function () {
		  $(".journal-post").slice(0, 5).show();
		  $("#loadmore").on('click', function (e) {
		    e.preventDefault();
		    $(".journal-post:hidden").slice(0, 5).slideDown();
		    if ($(".journal-post:hidden").length == 0) {
		      $("#load").fadeOut('slow');
		    }
		  });
		});
	</script>
</div>
<?php endif;

get_footer();
?>