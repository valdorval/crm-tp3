<?php

/**
 * Template Name: Blog
 *
 */
get_header();
?>

<?php if (have_posts()) : ?>
     <ul>
          <?php while (have_posts()) : the_post(); ?>
               <li><?php the_title(); ?></li>
          <?php endwhile; ?>
     </ul>
<?php else : ?>
     <h1>Aucun article trouvé</h1>

<?php endif; ?>

<?php
get_footer();
?>