<?php $postcounter = 1; if (have_posts()) : ?>
<?php while (have_posts()) : $postcounter = $postcounter + 1; the_post(); $do_not_duplicate = $post->ID; $the_post_ids = get_the_ID(); ?>
<div class="post">
<div class="picthumb" onmouseover="this.className='picthumba'" onmouseout="this.className='picthumb'">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php getImage('1'); ?>"&amp;w=150&amp;h=160&amp;zc=2&amp;q=100" alt="<?php the_title(); ?>"  width="150" height="160" /></a>
<p><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php
$the_title = $post->post_title;  $getlength = strlen($the_title); $thelength = 35; echo substr($the_title, 0, $thelength); if ($getlength > $thelength) ; ?></a></p>
<div class="pricebestseller"><?php if(get_post_meta($post->ID, "price", $single = true) != ""){ ?><?php echo get_post_meta($post->ID, "price",$single = true); ?><?php } ?></div>
</div>
<div class="posttitle post-<?php echo $postCount ;?>">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2> </div>
<?php echo excerpt(35); ?><br/><div style="clear: both"></div>
</div>
<?php endwhile; ?>
<div style="clear: both"></div>
<?php include (TEMPLATEPATH . '/navigator.php'); ?>	
<?php else : ?>
<div class="post">
<h2>Not Found</h2>
Sorry, but you are looking for something that isn't here.</div>
<?php endif; ?>