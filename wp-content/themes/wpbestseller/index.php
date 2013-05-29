<?php get_header(); ?>
<div style="clear: both"></div>
<div id="bigcontent">
<div id="content">
<h1><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></h1>
<?php include (TEMPLATEPATH . '/loop.php'); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>