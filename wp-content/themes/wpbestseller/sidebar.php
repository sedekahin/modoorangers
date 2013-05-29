<div id="sidebar">
<div id="sidebarright">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('right Sidebar') ) : ?>	
<?php endif; ?>	
<div class="box">
<h4>Popular Product</h4>
<?php include (TEMPLATEPATH . '/popular.php'); ?>	<div style="clear: both"></div></div>
</div></div>