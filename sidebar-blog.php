<div>
	<div class="sidebar">
		<div class="sidebar-top-image">
			<img src="/wp-content/uploads/writerfinal.jpg" border="0">
		</div>
		<div class="sidebar-content">
			<!-- CJC: sidebar-blog.php -->
			<?php // add the class "panel" below here to wrap the sidebar in Bootstrap style ;) ?>
			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'Sidebar' ) ) : ?>
				<p>This should be filled in by a widget.</p>			
			<?php endif; ?>
			<aside class="widget">
				<h4 class="widget-title">RSS</h4>
				<ul class="sidebar-nav">
					<li><a href="/feed">Feed</a></li>
				</ul>
			</aside>
		</div>
  	</div>
</div>
