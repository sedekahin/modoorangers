<div class="compare">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php getImage('1'); ?>"
&amp;w=80&amp;h=80&amp;zc=2&amp;q=100" alt="<?php the_title(); ?>"  width="80" height="80" />
<div class="comparetitle"><h2><a href="javascript:void(0)" onclick="window.open ('<?php echo get_post_meta($post->ID, "link", $single = true); ?>')"  rel="nofollow" title="<?php the_title(); ?>"><?php $the_title = $post->post_title;  $getlength = strlen($the_title); $thelength = 50; echo substr($the_title, 0, $thelength); if ($getlength > $thelength) ; ?></a></h2>
<?php echo excerpt(10); ?>
</div>
<div class="compareprice">
<?php if(get_post_meta($post->ID, "price", $single = true) != ""){ ?><?php echo get_post_meta($post->ID, "price",$single = true); ?><?php } ?>
</div>  
<div class="comparelink">
<a href="javascript:void(0)" onclick="window.open ('<?php echo get_post_meta($post->ID, "link", $single = true); ?>')"  rel="nofollow" title="<?php the_title(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/images/see<?php echo rand(1,3);?>.gif" alt="Random Image" /></a></div>
<div style="clear: both"></div>
</div>