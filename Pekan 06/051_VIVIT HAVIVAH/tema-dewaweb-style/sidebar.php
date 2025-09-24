<?php
// sidebar.php
if (!defined('ABSPATH')) exit;
?>
<aside class="sidebar">
  <?php if ( is_active_sidebar('sidebar-1') ) : ?>
    <?php dynamic_sidebar('sidebar-1'); ?>
  <?php else : ?>
    <div class="widget">
      <h3>About</h3>
      <p>Tambahkan widget di Appearance → Widgets.</p>
    </div>

    <div class="widget">
      <h3>Recent Posts</h3>
      <ul>
        <?php
          $recent = wp_get_recent_posts(array('numberposts' => 5,'post_status' => 'publish'));
          foreach($recent as $rp){
            echo '<li><a href="'. get_permalink($rp['ID']) .'">'. esc_html($rp['post_title']) .'</a></li>';
          }
          wp_reset_query();
        ?>
      </ul>
    </div>
  <?php endif; ?>
</aside>
