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

          <div class="horizontal-spacebetween meta-container">
            <h4 class="article-meta">Posted on <?php the_time('F jS, Y') ?></h4>

            <div class="horizontal-end article-meta">
              <?php
                $categories = get_the_category();
                $separator = ' | ';
                $output = '';
                if($categories){
                  foreach($categories as $category) {
                    $output .= '<a href="'.get_category_link( $category->term_id ).'" title="' 
                    . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) 
                    . '">'.$category->cat_name.'</a>'.$separator;
                  }
                  echo trim($output, $separator);
                }
              ?>
            </div>
          </div>

          <div class="content">
            <?php 
              if ( has_post_thumbnail() ) {
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            ?>
                <div class="featured-image" style="background-image:url(<?php echo $url; ?>);"></div>
            <?php
              } 
            ?>
            <div class="common-padding floating-takes-place">
            <?php 
              the_content();
              comments_template( '/comments.php' );
            ?>
          </div>
        </article>
      </section>
      
    <?php endwhile; else: ?>
    
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
  </div>
<?php get_footer(); ?>
