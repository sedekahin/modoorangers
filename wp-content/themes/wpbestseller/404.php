<?php get_header(); ?>
<div style="clear: both"></div>
<div id="bigcontent">
<div id="content">
<div class="post">
<form method="get" action="<?php bloginfo('url'); ?>">
<input id="search-box" type="text" name="s" class="searchtext" onblur="this.value=(this.value=='') ? '<?php _e('Search...', "wpct"); ?>' : this.value;" onfocus="this.value=(this.value=='<?php _e('Search...', "wpct"); ?>') ? '' : this.value;" value="<?php _e('Search...', "wpct"); ?>" />
 <input id="search-button" type="submit" class="button" value="Search " />
</form>
<h2>Not Found</h2>
Sorry, but you are looking for something that isn't here.
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>