<div class='sidebar'>
	<div class='sidebar-toggle'>
		<i class='fa fa-bars'></i>
	</div>
	<aside id="sidebar-widget-area" role="complementary">
		<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
		<div id="primary" class="widget-area">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'primary-widget-area' ); ?>
			</ul>
		</div>
		<?php endif; ?>
	</aside>
</div>