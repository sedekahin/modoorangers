<?php get_header(); ?>
<div style="clear: both"></div>
<div id="bigcontent">
<div id="content">
<?php if (have_posts()) :?><?php $postCount=0; ?><?php while (have_posts()) : the_post();?><?php $postCount++;?>
<div class="post post-<?php echo $postCount ;?>">
<div class="posttitle"><h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1></div>
<small><?php the_category(', ') ?> <?php edit_post_link('Edit', '', ''); ?></small><br/>
<?php the_content(); ?>	
<div class="tags"> <?php the_tags('tags: ',', ',''); ?> </div><div style="clear:both;"></div>
</div>
<?php endwhile; ?><?php else : ?>
<div class="post">
<h2>Not Found</h2>
Sorry, but you are looking for something that isn't here.</div>
<?php endif; ?>
<h4>Compare With Similar Products </h4>
<?php $orig_post = $post; global $post; $categories = get_the_category($post->ID);
 if ($categories) { $category_ids = array();
foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
$args=array('category__in' => $category_ids,'post__not_in' => array($post->ID),'posts_per_page'=> 5, 'caller_get_posts'=>1 );
 $my_query = new wp_query( $args );
if( $my_query->have_posts() ) {while( $my_query->have_posts() ) { $my_query->the_post();?>
<?php include (TEMPLATEPATH . '/compare.php'); ?>
<?
}
}
}
$post = $orig_post;
wp_reset_query(); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>