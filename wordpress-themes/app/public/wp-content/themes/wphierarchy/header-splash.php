<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >

    <div id="page">
      <a href="#content" class="skip-link screen-reader-text">
        <?php esc_html_e( 'Skip to Content', 'wphierarchy' ); ?>
      </a>

      <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">
          <p class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <?php bloginfo( 'name' ); ?>
            </a>
          </p>
        </div>
        <nav id="site-navigation" class="main-navigation" role="navigation">
          <?php wp_nav_menu( array(
                'theme_location' => 'main-menu'
             ) );
          ?>
        </nav>
      </header>

    </div>
