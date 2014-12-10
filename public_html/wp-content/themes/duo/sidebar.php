<aside id="aside">
    <div id="tab"><i class="icon-tasks"></i></div>
	<?php if( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'Sidebar Widgets' ) ) : ?>
		<?php // widgets load here ?>
	<?php endif; ?>
</aside>