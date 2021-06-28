<?php require_once("header.php"); ?>
<body>

  <header id="masthead">
    <h1><a href="#">PHP for WordPress</a></h1>
  </header>

  <div id="content">

<!-- Add any template tags outside of loop -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php

      $title = get_the_title();

      echo "title from Template  :  " . $title ;

      ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; else: ?>

      <h2><?php esc_html_e( '404 Error', 'phpforwp' ); ?></h2>
      <p><?php esc_html_e( 'Sorry, content not found.', 'phpforwp' ); ?></p>

    <?php endif; ?>

<!-- Add any template tags outside of loop -->

  </div>

</body>

