<?php
get_header(); ?>

	<div id="primaryTemplate" class="page-template">
		<div class="container">
			<div class="col-sm-12">
				<div class="page-template__header">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="col-sm-12">
				<button onclick="window.history.back()" type="button" class="btn bt-default back-btn">
					<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
					Return
				</button>
			</div>
			<div class="col-sm-12">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php
          greg_sagan_2018_post_thumbnail();
          the_content();
          ?>
			 <?php endwhile; else: ?>
				 <p><?php print("Sorry this page does not exist"); ?></p>
			 <?php endif; ?>
			</div>
		</div>
	</div><!-- #primary -->

<?php
get_footer();
?>
