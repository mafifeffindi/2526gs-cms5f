<aside class="sidebar">
<?php if(is_active_sidebar('sidebar-1')): ?>
<?php dynamic_sidebar('sidebar-1'); ?>
<?php else: ?>
<div class="card widget">
<h4>About</h4>
<p class="meta">This is a lightweight aesthetic theme — edit the sidebar from Appearance → Widgets.</p>
</div>
<?php endif; ?>
</aside>