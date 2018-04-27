<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Greg_Sagan_2018
 */

?>
<article id="post-<?php the_ID(); ?>" class="search-result">
	<header class="search-result__header">
		<?php
		the_title(
			sprintf(
				'<h2 class="search-result__title"><a href="%s" rel="bookmark" class="search-result__link">',
				esc_url( get_permalink() )
			), '</a></h2>'
		);
		?>
	</header><!-- .entry-header -->

	<?php greg_sagan_2018_post_thumbnail(); ?>

	<div class="search-result__summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

</article><!-- #post-<?php the_ID(); ?> -->
