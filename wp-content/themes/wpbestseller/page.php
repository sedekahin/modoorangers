<?php get_header(); ?>
<div style="clear: both"></div>
<div id="bigcontent">
<div id="content">
<?php if (have_posts()) :?><?php $postCount=0; ?><?php while (have_posts()) : the_post();?><?php $postCount++;?>
<div class="post post-<?php echo $postCount ;?>">
<div class="posttitle"><h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1></div>
<?php the_content(); ?>
	</div>
<?php endwhile; ?><?php else : ?>
<h2>Not Found</h2>
<div class="post">Sorry, but you are looking for something that isn't here.</div>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>