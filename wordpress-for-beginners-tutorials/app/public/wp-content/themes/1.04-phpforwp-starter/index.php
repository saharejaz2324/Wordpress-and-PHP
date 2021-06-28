<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP for WordPress</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>
<body>

  <header id="masthead">
    <h1><a href="#">PHP for WordPress</a></h1>
  </header>

  <div id="content">

    <?php

    $name = "Sahar";
    $last = "Ejaz";
    $posts = ["Hello World", "Hello Post"];

    foreach ($posts as $key=> $value) {
      display_title($value);
    }

         // Create an array of post objects using the display_post function


      // Loop through array of posts and display each one on the page

        // Call the display_title function and pass it the $post


      /**
       * Custom function for displaying the title and content for a post
       *
       * @param string $title The title to be displayed
       */
      function display_title( $title ) {

        ?>

        <h3><?php echo $title; ?></h3>

        <?php

      }

    ?>

    <h2>Welcome</h2>
    <p>My name is " <?php echo $name . " " . $last; ?>  "</p>


    <!-- Practice of Loops -->

      <div id="content">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>

    <?php endwhile; else: ?>

      <?php _e("Sorry No Content Found" ) ?>

    <?php endif; ?>

  </div>

  </div>

</body>
</html>
