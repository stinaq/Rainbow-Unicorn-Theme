<?php get_header(); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    <section class="row horizontal-centered unicorn-section <?php echo unicornify(get_the_ID()); ?>">
      <article class="container">
        
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
    
  <?php endwhile; else: ?>
  
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

<?php get_footer(); ?>
