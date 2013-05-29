<?php  $rand_posts = get_posts('numberposts=4&orderby=rand'); 
 foreach( $rand_posts as $post ) : setup_postdata($post); ?>
<div class="entry">
<p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo getImage('1'); ?>"&amp;w=140&amp;h=120&amp;zc=2&amp;q=100" alt="<?php the_title(); ?>"  width="140" height="120" /></a></p>
<div class="pictitle"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php
$the_title = $post->post_title;  $getlength = strlen($the_title); $thelength = 35; echo substr($the_title, 0, $thelength); if ($getlength > $thelength) ; ?></a></div>
<div class="entryrate">
<?php if(get_post_meta($post->ID, "price", $single = true) != ""){ ?><?php echo get_post_meta($post->ID, "price",$single = true); ?><?php } ?>
</div>
</div>
<?php endforeach; ?>