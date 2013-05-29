<?php get_header(); ?>
<div style="clear: both"></div>
<div id="bigcontent">
<div id="content">
<?php echo spp(get_search_query());?>
<h1><?php echo wp_specialchars($s, 1);; ?></h1>
<?php include (TEMPLATEPATH . '/loop.php'); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>