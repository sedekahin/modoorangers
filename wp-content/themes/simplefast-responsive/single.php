<?php get_header(); ?>
<div id="container">
<div id="contents">
<?php if (have_posts()) : while (have_posts()) : the_post();  ?>
<h1 style="text-align: center;"><strong><span style="color: red; font-size: 1.3em; text-decoration: blink;">Wait, Get Special Price Products {{ term | ucwords }} here</span></strong></h1>
<h1 style="text-align: center;"><strong><span style="color: red; font-size: 1.3em; text-decoration: blink;"> ... This Promo Will Ended Soon...</span></strong></h1><br /><br />
<img class="aligncenter" alt="" src="http://i1154.photobucket.com/albums/p536/azonpid/hands8.gif" width="125" height="70" /><br />
<h1 align="center"><span style="text-decoration: underline;"><strong>Special Promo only for This Month</strong></span><br /><img src="http://2.bp.blogspot.com/-Xjib9i7ZguM/UNfkGdHMy_I/AAAAAAAAAF0/gvGSkwBPu5E/s1600/ArrowDownBlueGloss.gif" alt="Go"/></h1>
<iframe frameborder="1" src="http://mandiricollections138.com/read/{{ term | ucwords }}.html" scrolling="yes" height="1500" width="100%"></iframe><br />
<article class="post">
<section class="post-single"> <h1><?php the_title(); ?></h1>
<hr/><hr/></section>  
<?php the_content(); ?>	
<?php get_template_part( 'ads' ); ?>
<div style="clear: both"></div>
<section class="tags"><?php the_tags('tags: ',', ',''); ?></section><section class="social">
<div class="facebook">
<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;
width=50&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:50px; height:60px;">
</iframe>
</div>
<div class="twitter">
<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
<a href="http://twitter.com/share?url=<?php echo urlencode(get_permalink($post->ID)); ?>&count=horizontal" class="twitter-share-button">Tweet</a></div>
<g:plusone size="medium" href="<?php the_permalink(); ?>"></g:plusone>
<div style="clear: both"></div>
</section>
</article>
<?php endwhile; ?>
<section class="related"><?php get_template_part( 'related' ); ?></section>
<?php else : ?>
<article class="post"><h2>Not Found</h2>Sorry, but you are looking for something that isn't here.</article>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>