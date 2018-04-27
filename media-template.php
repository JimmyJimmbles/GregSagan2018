<?php
/**
 * Template Name: Media
**/

get_header(); ?>

	<div id="primaryTemplate" class="page-template">
		<div class="container">
			<div class="col-sm-12">
				<div class="page-template__header">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="row page-media">
        <div class="col-sm-12 flex-row">
          <?php
            $args = array(
              'post_type'      => 'media_posts',
              'orderby'        => 'menu_order',
              'order'          => 'ASC',
              'posts_per_page' => -1
            );
            $media_query = new WP_Query($args);
            while ($media_query->have_posts() ) : $media_query->the_post();
          ?>
          <div class="col-sm-3">
            <a href="<?php the_field('media_link') ?>" class="media-item" target="_blank">
              <div class="img-wrap">
                <?php
                  the_post_thumbnail('greg-sagan-2018-thumbnail',
                                      array('class' => 'img-responsive') );
                ?>
              </div>
              <div class="caption">
                <h3><?php print(wp_trim_words(get_the_title(), 5, ' ...')); ?></h3>
              </div>
							<div class="desc">
								<p>
									<?php print( wp_trim_words(get_the_excerpt(),
									      $num_words = 15, '...') ); ?>
								</p>
							</div>
							<div class="source">
								<span>Source: <?php the_field('source'); ?></span>
							</div>
            </a>
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
