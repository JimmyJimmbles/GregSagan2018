<?php
/**
 * Template Name: Coming Events
**/

get_header(); ?>

	<div id="primaryTemplate" class="page-template">
		<div class="container">
			<div class="col-sm-12">
				<div class="page-template__header">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="row">
        <div class="col-sm-12 flex-row">
          <?php
            $args = array(
              'post_type'      => 'coming_events',
              'posts_per_page' => -1
            );
            $media_query = new WP_Query($args);
            while ($media_query->have_posts() ) : $media_query->the_post();
          ?>
          <div class="col-sm-4">
			  <div class="event">
				<div class="event-content">
				  <div class="event-content__img">
					  <?php
					  the_post_thumbnail('greg-sagan-2018-thumbnail',
										 array('class' => 'img-responsive') );
					  ?>
				  </div>
				  <div class="event-content__details">
					<span class="date"> <i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_field('date'); ?></span>
					<h4 class="event-title"><?php the_title(); ?></h4>
					<p class="event-desc">
						<?php
						print( wp_trim_words(get_the_excerpt(), $num_words = 28, ' ...') );
						?>
					</p>
				    <a href="<?php the_permalink(); ?>" class="read"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Read More</a>
				  </div>
				</div>
			  </div>
          </div>
          <?php
            endwhile;
          ?>
        </div>
      </div>
		</div>
	</div><!-- #primary -->

<?php
get_footer();
?>
