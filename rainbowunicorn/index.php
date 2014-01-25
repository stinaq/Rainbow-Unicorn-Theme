<?php get_header(); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="row horizontal-centered">
      <article class="container">
        <a href="<?php the_permalink( ) ?>">
          <h1><?php the_title(); ?></h1>
        </a>
        <h4>Posted on <?php the_time('F jS, Y') ?></h4>
      </article>
    </section>
    


  <?php endwhile; else: ?>
  
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>



<?php get_footer(); ?>
