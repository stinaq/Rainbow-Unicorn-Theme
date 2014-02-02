<?php get_header(); ?>
  <div class="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <section class="row horizontal-centered unicorn-section <?php echo unicornify(get_the_ID()); ?>">
        <article <?php post_class( 'container' ); ?> >
          
          <h1 class="article-headline">
            <a href="<?php the_permalink( ) ?>">
              <?php the_title(); ?>
            </a>
          </h1>
          <h4 class="article-meta">Posted on <?php the_time('F jS, Y') ?></h4>
          <div class="content two-columns">
            <?php 

              echo get_the_content();
            ?>
          </div>
        </article>
      </section>
      
    <?php endwhile; ?>
    <!-- End of the main loop -->

      <div class="horizontal-centered prev-next">
        <div class="container vertical-centered horizontal-spacebetween">
          <button class="nav-next button"><?php previous_posts_link( '<< Newer posts' ); ?></button>
          <button class="nav-previous button"><?php next_posts_link( 'Older posts >>' ); ?></button>
        </div>
      </div>
      <?php else : ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
  </div>
<?php get_footer(); ?>
