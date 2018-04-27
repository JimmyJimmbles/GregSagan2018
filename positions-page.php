<?php
/**
 * Template Name: Positions
**/

get_header(); ?>

	<div id="primaryTemplate" class="page-template">
		<div class="container">
			<div class="col-sm-12">
				<div class="page-template__header">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="row positions page-positions">
        <div class="col-sm-12">
          <?php
			$terms = get_terms('positions_types-categories', array('orderby' => 'title', 'order' => 'ASC'));
			foreach($terms as $term) :
            $args = array(
              'post_type'      => 'positions_types',
			  'tax_query'      => array(
			      array(
				      'taxonomy' => 'positions_types-categories',
					  'field' => 'slug',
					  'terms' => $term->slug
				  )
			  ),
              'posts_per_page' => -1
            );
				if($term->slug == 'kitchen-table'){
					print("<h1>Kitchen Table</h1>");
				} else if($term->slug == 'good-government'){
					print("<h1>Good Government</h1>");
				} else if($term->slug == 'threats-way-of-life'){
					print("<h1>Threats to Democracy and Our Way of Life</h1>");
				}
            $position_query = new WP_Query($args);
            while ($position_query->have_posts() ) : $position_query->the_post();
          ?>
          <div class="col-sm-4">
            <a href="<?php the_permalink(); ?>" class="positions-item">
              <div class="img-wrap">
                <?php
                  the_post_thumbnail('greg-sagan-2018-thumbnail',
                                      array('class' => 'img-responsive') );
                ?>
              </div>
							<div class="desc">
								<p>
									<?php print( wp_trim_words(get_the_excerpt(),
									      $num_words = 15, ' [...]') ); ?>
								</p>
							</div>
              <div class="caption">
                <h2><?php print(wp_trim_words(get_the_title(), 5, ' ...')); ?></h2>
              </div>
            </a>
          </div>
          <?php
            endwhile;
			endforeach;
          ?>
        </div>
      </div>
		</div>
	</div><!-- #primary -->

<?php
get_footer();
?>
