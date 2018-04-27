<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Greg_Sagan_2018
 */

?>
<div class="col-sm-12">
	<button onclick="window.history.back()" type="button" class="btn bt-default back-btn">
		<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
		Return
	</button>
</div>
<div class="col-sm-12">
	<article id="post-<?php the_ID(); ?>" class="single-post-page">

		<?php greg_sagan_2018_post_thumbnail(); ?>

		<div class="entry-content">
			<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'greg-sagan-2018' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'greg-sagan-2018' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

	</article><!-- #post-<?php the_ID(); ?> -->
</div>
