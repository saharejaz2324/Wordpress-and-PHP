<?php get_header(); ?>

    <div id="content">

      <!-- Static Front Page -->
      <?php if( is_front_page() && !is_home() ): ?>
        <h1>Static Front Page</h1>
      <?php endif; ?>
      <!-- Blog Home -->
      <?php if( is_home()  ): ?>
        <h1>Blog Page</h1>
      <?php endif; ?>
      <!-- Page (Not Front Page) -->
      <?php if( is_page() && !is_front_page() ): ?>
        <h1>Not Front Page</h1>
      <?php endif; ?>
      <!-- Single Post -->
      <?php if( is_single() ): ?>
        <h1>Single Post</h1>
      <?php endif; ?>
      <!-- Single Attachment (Media) -->
      <?php if( is_attachment() ): ?>
        <h1>Attachment</h1>
      <?php endif; ?>
      <!-- Category Archive -->

      <!-- Tag Archive -->

      <!-- Author Archive -->

      <!-- Date Archive -->

      <!-- 404 Page -->

    </div>

<?php get_footer(); ?>
