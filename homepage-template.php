<?php
/**
 * Template Name: Home Page
**/

get_header();

?>

  <div id="primary" class="content-area">
    <!-- HERO SLIDER -->
    <div class="container-full">
      <div class="hero-banner">
        <div class="slide-show">
          <div class="item">
            <!--BACKGROUND IMG OF STATUE OF LIBERTY-->

          </div>
        </div>
      </div>
    </div>

    <!-- NEWSLETTER BLOCK -->
    <div class="subscribe-block">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <form class="subscribe-form" action="https://gregsagan2018.us16.list-manage.com/subscribe/post" method="post">
              <input type="hidden" name="u" value="5a53a60bded279e509267cc6b">
              <input type="hidden" name="id" value="6f9ba160df">

              <label for="MERGE0">Our Newsletter</label>
              <input type="email"
              autocapitalize="off"
              autocorrect="off"
              name="MERGE0"
              id="MERGE0"
              size="25"
              placeholder="Enter Email to Join Our News Letter">
              <button type="submit" name="button" class="btn btn-default">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- ABOUT SECTION -->
    <div class="about-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-offset-4 col-md-offset-4 col-sm-8">
            <div class="about-block">
              <h1>About Greg Sagan</h1>
              <p>
                Greg Sagan was raised in an Air Force family and grew up
                attending schools from Texas to South Dakota and Maine to
                California. He has a BA in Political Science with a minor
                in History from West Texas State University (now West
                Texas A&amp;M University), an MBA in Organizational Behavior
                with a minor in Marketing from the University of Colorado –
                Colorado Springs, and he has completed the course work for a
                Ph.D. in Industrial Relations with minors in Labor Economics and
                Research Methodology at the University of Texas at Austin.
              </p>
              <a href="/about/" class="btn btn-default view-more">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- POSITIONS SECTION -->
    <div class="positions-section positions">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="section-title text-center">
              <?php print(esc_html("Positions")); ?>
            </h2>
          </div>
        </div>
        <div class="row text-center">
          <?php
            $args = array(
              'post_type'      => 'positions_types',
              'orderby'        => 'post_date',
              'order'          => 'ASC',
              'posts_per_page' => 6
            );
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
              <div class="caption">
                <h2><?php the_title(); ?></h2>
              </div>
            </a>
          </div>
          <?php
            endwhile;
          ?>
        </div>
        <div class="row">
          <div class="col-sm-12 text-center">
            <a href="/positions/" class="btn btn-default view-all">
              View All
            </a>
          </div>
        </div>
      </div>
    </div>

<!-- DONATE BLOCK -->
    <div class="donate-block">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 text-center">
            <h2>Show Your Support!</h2>
          </div>
          <div class="col-sm-6">
            <a href="/volunteer/" class="btn btn-default volunteer">Volunteer</a>
            <a href="https://secure.actblue.com/donate/greg-sagan2" class="btn btn-default donate">Donate!</a>
          </div>
        </div>
      </div>
    </div>

    <!-- WHAT'S HAPPENING -->
    <div class="whats-happening">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center section-title">
              <?php print(esc_html("What's Happening")); ?>
            </h2>
          </div>
        </div>
        <div class="row">
          <?php
            $args = array(
              'post_type'      => 'post',
              'posts_per_page' => 3,
              'orderby'        => 'menu_order'
            );
            $blog_query = new WP_Query($args);
            while ( $blog_query->have_posts() ) : $blog_query->the_post();
          ?>
          <div class="col-sm-4">
            <div class="blog-card">
              <?php
              if( !has_post_thumbnail() ) :
              ?>
              <div class="no-img content">
              <?php
              else :
              ?>
              <div class="img-wrap">
                <a href="<?php the_permalink(); ?>">
                  <?php
                    the_post_thumbnail('greg-sagan-2018-thumbnail',
                                        array('class' => 'img-responsive') );
                  ?>
                </a>
              </div>
              <div class="content">
            <?php endif; ?>

                <div class="title">
                  <a href="<?php the_permalink(); ?>">
                    <h2> <?php the_title(); ?> </h2>
                    <span>
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                      <?php the_time('M'); ?>
                      <?php the_time('j'); ?>
                      <?php the_time('Y'); ?>
                    </span>
                  </a>
                </div>
                <div class="desc">
                  <p>
                    <?php print( wp_trim_words(get_the_excerpt(), $num_words = 35, ' [...]') ); ?>
                  </p>
                </div>
                <a href="<?php the_permalink(); ?>" class="read">
                  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                  Read More
                </a>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
        <div class="row">
          <div class="col-sm-12 text-center">
            <a href="/blog/" class="btn btn-default view-all">
              Read All
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- HOME CONTACT -->
    <div class="home-contact">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-7 contact-wrap">
            <div class="contact-title">
              <h2 class="align-left">Get in touch</h2>
            </div>
            <script type="text/javascript" src="https://form.jotform.com/jsform/81047671470153"></script>
          </div>
        </div>
      </div>
    </div>


  </div><!-- #primary -->

<?php

get_footer();
?>
