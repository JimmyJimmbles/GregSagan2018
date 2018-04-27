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
					<h1>
					  <?php
						print(esc_html("What's Happening"));
					  ?>
					</h1>
				</div>
			</div>
			<div class="col-md-9">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article class="blog-post">
						<div class="blog-post__header">
							<h2>
								<a href="<?php the_permalink(); ?>" class="permalink">
									<?php the_title(); ?>
								</a>
							</h2>
							<h6>
								<i class="fa fa-calendar"></i>
								<?php the_time('l, F jS, Y'); ?>
							</h6>
						</div>
						<div class="blog-post__body">
							<?php
              if( !has_post_thumbnail() ) :
              ?>
							<div class="no-thunbnail"></div>
							<?php
              else :
              ?>
							<div class="blog-post__thunbnail">
								<?php
									the_post_thumbnail('greg-sagan-2018-thumbnail',
																			array('class' => 'img-responsive') );
								?>
							</div>
						  <?php endif; ?>
							<div class="blog-post__content">
								<?php
								print( wp_trim_words(get_the_excerpt(), $num_words = 35, ' [...]') );
								?>
							</div>
							<div class="blog-post__readmore">
								<a href="<?php the_permalink(); ?>" class="btn btn-default">
									Read More
								</a>
							</div>
						</div>
					</article>
			 <?php endwhile; else: ?>
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
?>
