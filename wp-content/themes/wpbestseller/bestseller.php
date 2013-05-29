<div class="top">
<h3>Best Seller And Top Rated Product </h3>
<?php $featured_category = get_theme_option('featured_category_id1');?>
<?php $category_id = get_cat_id($featured_category); $category = get_cat_name($category_id); ?>
<?php $category_id = get_cat_id($featured_category); $my_query = new WP_Query('cat='. $category_id . '&' . 'offset=' . '&' . 'showposts='. '5');
while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; $the_post_ids = get_the_ID(); ?>
<div class="bestseller">
<div class="picbestseller">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo getImage('1'); ?>"&amp;w=150&amp;h=120&amp;zc=0&amp;q=100" alt="<?php the_title(); ?>"  width="150" height="100" /></a>
<div class="pictitle"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php
$the_title = $post->post_title;  $getlength = strlen($the_title); $thelength = 35; echo substr($the_title, 0, $thelength); if ($getlength > $thelength) ; ?></a></div> </div>
<div class="pricebestseller"><?php if(get_post_meta($post->ID, "price", $single = true) != ""){ ?>
<?php echo get_post_meta($post->ID, "price",$single = true); ?>
<?php } ?></div>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?> 
<div style="clear: both"></div>
</div>