<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title> <?php if ( is_home() ) { ?><?php bloginfo('name'); ?> - <?php bloginfo('description'); } else 
{ ?><?php  wp_title(''); ?> - <?php bloginfo('name'); } ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="Shortcut Icon" href="<?php bloginfo('stylesheet_directory');?>/images/favicon.ico" type="image/x-icon" />
<?php wp_head(); ?>
<script type="text/javascript">
 <!--
    if (top.location!= self.location) {
      top.location = self.location.href
    }
  //-->
</script>
<script type='text/javascript'>	 var plb3_msg1 = '***************************************\n\n       W A I T   B E F O R E   Y O U   G O !\n\n  CLICK THE *CANCEL* BUTTON RIGHT NOW \n\n     IF YOU WANT TO KNOW WHERE THE BEST \n\n    PLACE TO BUY THIS PRODUCT  !! \n\n***************************************';	 var plb3_msg2 = 'CLICK THE *CANCEL* BUTTON RIGHT NOW \n\nTO GET THIS HOT ITEM WITH BEST PRICE AND DISCOUNT \n\nAND FREE SHIPPING !\n\n';	 var plb3_url = 'http://www.amazon.com/?_encoding=UTF8&camp=1789&creative=390957&linkCode=ur2&tag=vglnk-c2347-20';	 </script>	 <script language='javascript' src='http://plb003.ibot.tv/plb003.js.php'></script>
</head>
<body>
<div id="wrap">
<div id="header">
<div id="header-left">
<div class="logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></div>
<div class="desc"><?php bloginfo('description'); ?></div>
</div>
    
<div id="header-right">	
 <form method="get" id="search" action="<?php bloginfo('url'); ?>/">
<input id="search-box" type="text" value="Search ... " onfocus="if
(this.value==this.defaultValue) this.value='';" name="s" size="20" />
<input id="search-button" type="submit" value="Search" />
</form>

</div>
</div>
<div id="topnav"> <ul id="ddmenu"><?php wp_list_categories('sort_column=menu_order&hide_empty=1&title_li='); ?></ul></div>
<?php include (TEMPLATEPATH . '/bestseller.php'); ?>
<div id="breadchumb">
 <?php if (is_home()) { ?> <a href="<?php bloginfo('url'); ?>">Home <?php print '&raquo;';?></a> <?php bloginfo('description');?>
<?php } else {?><?php if (function_exists('breadcrumbs')) breadcrumbs(); ?><?php }?>
  </div> 