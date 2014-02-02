  <footer class="horizontal-centered">
    <div class="container footer-container">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widgets') ) : ?>
      <?php endif; ?>
    </div>
  </footer>
  <?php wp_footer(); ?> 
</body>
</html>