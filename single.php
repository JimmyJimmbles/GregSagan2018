<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Greg_Sagan_2018
 */

get_header(); ?>
<div id="primaryTemplate" class="page-template">
	<div class="container">
		<div class="col-sm-12">
			<div class="page-template__header">
				<h1>
					<?php
					the_title();
					?>
				</h1>
			</div>
		</div>
		<div class="col-md-9">
			<?php
			  if ( have_posts() ) : while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				endwhile;
				//if there is no post
				else:
				?>
			 <p><?php print("Sorry this page does not exist"); ?></p>
			 <?php endif; ?>
		</div>
		<div class="col-md-3">
			<div id="sidebar" class="sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div><!-- #primary -->

<?php
get_footer();
