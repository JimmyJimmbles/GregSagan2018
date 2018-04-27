<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Greg_Sagan_2018
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<div id="header-wrapper" class="header-wrapper">
		<header id="masthead" class="site-header">
			<div id="top-bar" class="container-fluid">
				<div class="row top-content">
					<div class="col-sm-6 col-flex">
						<div class="phone mr_2">
							<a href="tel:806.340.3524">
								<i class="fa fa-phone mr_1" aria-hidden="true"></i>
								806-340-3524
							</a>
						</div>
						<div class="address">
							<a href="https://goo.gl/maps/18hYW3Ua3a32" target="_blank" rel="noreferrer">
								<i class="fa fa-map-marker mr_1" aria-hidden="true"></i>
								P.o. Box 3081 Amarillo, TX  79116
							</a>
						</div>
					</div>
					<div class="col-sm-6">
						<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
			        <div class="search-wrapper">
			          <input class="search-input" type="search" placeholder="Search …" value="" name="s" title="Search for:"><i class="fa fa-search s-btn"></i>
			        </div>
			      </form>
						<div class="social pull-right">
							<ul>
								<li>
									<a href="https://www.facebook.com/gregsagan2018/" target="_blank" rel="noreferrer">
										<i class="fa fa-facebook-official" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div id="site-navigation" class="navigation container-fluid">
				<div class="row flex">
					<div class="col-md-4 col-reset">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
							 rel="home"
							 class="navigation-subtitle">
							<h2>
								<?php
									$siteTitle = esc_html('Greg Sagan for Congress 2018');
									print($siteTitle);
								?>
							</h2>
							<span class="navigation-subtitle">
								U.S. House of Representatives, Texas District 13
							</span>
						</a>
					</div>
					<div class="col-md-8">
						<nav id="mainNav" class="main-navigation">
							<div id="button" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
								<div id="burger" class="burger">
									<span class="burger-bar top-bar"></span>
									<span class="burger-bar middle-bar"></span>
									<span class="burger-bar bottom-bar"></span>
								</div>
								<div class="close-btn burger">
									<span class="burger-bar top-bar"></span>
									<span class="burger-bar bottom-bar"></span>
								</div>
							</div>
							<?php
								wp_nav_menu( array(
									'menu'            => 'primary',
									'theme_location'  => 'primary',
									'container'       => 'div',
									'container_class' => 'collapse navbar-collapse',
									'container_id'    => 'gregsagan-navbar',
									'menu_class'      => 'nav navbar-nav'
								) );
							?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</div>
		</header><!-- #masthead -->
	</div>

	<div id="content" class="site-content">
