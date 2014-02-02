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
          <div class="content">
            <?php 
              echo get_the_content();
              comments_template( '/comments.php' );
            ?>
          </div>
        </article>
      </section>
      
    <?php endwhile; else: ?>
    
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
  </div>
<?php get_footer(); ?>
