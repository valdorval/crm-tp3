<?php

/**
 * Template Name: Blog
 *
 */
get_header();
?>
<?php
$categories = get_categories();
foreach ($categories as $categorie) {
     echo '<div><a href="' . get_category_link($categorie->term_id) . '">' . $categorie->name . '</a></div>';
}
?>

<?php // affiche les 6 articles les plus récents
$wp_query = new WP_Query(array('posts_per_page' => 6));

if ($wp_query->have_posts()) :
     while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <h5><?php the_category(); ?></h5>
          <p><?php the_excerpt('Suite'); ?></p>

<?php endwhile;
endif; ?>
<section class="container">
    <div class="cardcontainer">
    <div class="card">
        <div class="card--imgBx">
            <img src="<?php echo get_template_directory_uri(); ?>/img/contact.png" alt="title1">
            <div class="card--contentBx">
              <div class="card--contentBx--title">HERE</div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

        </div>
    </div>
</div>
</section>
<?php
get_footer();
?>