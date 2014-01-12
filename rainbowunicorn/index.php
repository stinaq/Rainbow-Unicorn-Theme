<?php get_header(); ?>
  <div id="main">
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Main Area</h1>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <a href="<?php the_permalink( ) ?>">
                <h1><?php the_title(); ?></h1>
              </a>
              <h4>Posted on <?php the_time('F jS, Y') ?></h4>

              <hr> 

            <?php endwhile; else: ?>
            
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>



          </div>
        </div>

      </div>
      
    </div>
  </div>

<?php get_footer(); ?>
