<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Greg_Sagan_2018
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="container-fluid site-footer">
		<div class="col-sm-9 left-box">
			<div class="row">
				<div class="col-sm-5">
					<img src="/wp-content/uploads/2018/04/texas_logo.png" alt="Footer Logo" class="img-responsive">
				</div>
				<div class="col-sm-3 mt_4">
					<div class="aside">
						<?php dynamic_sidebar('footer1') ?>
					</div>
				</div>
				<div class="col-sm-4 mt_4 contact-info">
					<div class="aside">
						<h3 class="footer-title">Contact Information</h3>
						<div class="footer-links">
							<ul>
								<li class="footer-li">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
									<span>Location:</span> <br>
									<a href="https://goo.gl/maps/FM8St6DwaY82">
										P.o. Box 31778 <br> Amarillo, TX 79120
									</a>
								</li>
								<li class="footer-li">
									<i class="fa fa-phone" aria-hidden="true"></i> <span>Phone:</span> <br>
									<a href="tel:806.340.3524">806-340-3524</a>
								</li>
								<li class="footer-li">
									<i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email:</span> <br>
									<a href="mailto:info@gmai.com">info@gmai.com</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-3 pull-right">
			<div class="aside">
				<div class="footer-letter">
					<h3>Our Newsletter</h3>
					<p>Keep up to date</p>
					<form class="footer-form" action="https://gregsagan2018.us16.list-manage.com/subscribe/post" method="post">
						<input type="hidden" name="u" value="5a53a60bded279e509267cc6b">
						<input type="hidden" name="id" value="6f9ba160df">

						<div class="input-group">
							<input type="email"
              autocapitalize="off"
              autocorrect="off"
              name="MERGE0"
              id="MERGE0"
              size="25"
							class="form-control"
							placeholder="Enter Your Email">
							<span class="input-group-btn">
								<button type="submit" name="button" class="btn btn-default">
									Sign Up
								</button>
							</span>
						</div>
					</form>
				</div>
			</div>
			<div class="footer-social">
				<span class="social-title">Follow Social:</span>
				<ul>
					<li>
						<a href="https://www.facebook.com/gregsagan2018/" target="_blank" rel="noreferrer">
							<i class="fa fa-facebook-official" aria-hidden="true"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</footer><!-- #colophon -->
	<div id="bottom" class="container-fluid">
		<div class="container">
			<div class="col-sm-12">
				<p>Paid for by the Greg Sagan for Congress Committee.</p>
			</div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
