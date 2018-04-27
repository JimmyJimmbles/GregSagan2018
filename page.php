<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Greg_Sagan_2018
 */

get_header(); ?>

	<div id="primaryTemplate" class="page-template">
		<div class="container">
			<div class="col-sm-12">
				<div class="page-template__header">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="col-sm-12">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
			 <?php endwhile; else: ?>
				 <p><?php print("Sorry this page does not exist"); ?></p>
			 <?php endif; ?>
			</div>
		</div>
	</div><!-- #primary -->

<?php
get_footer();
?>
