<?php
get_header();

?>

<h1>Annonces</h1>

<?php query_posts('cat=2');
if (have_posts()) : ?>
     <ul>
          <?php while (have_posts()) : the_post(); ?>
               <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
     </ul>

<?php endwhile;
     endif; ?>

<?php
get_footer();
?>