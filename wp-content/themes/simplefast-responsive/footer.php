<div style="clear: both"></div>
</div>
<footer id="footer">
<?php $pages = wp_list_pages('depth=1&title_li=&echo=0');
$pages2 = preg_split('/(<li[^>]*>)/' ,$pages);foreach($pages2 as $var){
echo str_replace('</li>', '', $var);}?><br/>
Copyright &#169; 2012  <a href="<?php echo home_url() ; ?>"><?php bloginfo('name'); ?></a>, All trademarks are the property of the respective trademark owners. <br/>
</footer>
</div>
<!-- Place this code above the closing body tag of the page. Note: An Overlay cannot be placed on top of an auto play or over a video player which is smaller than 320x280  -->
<script type="text/javascript">
var adParams = {serverdomain: "ads.adk2.com", a: "11698001",overlayEls: "ytIEmbed,ytIFrame,dailyMotionIFrame,dailyMotionEmbed,vmIFrame,vmEmbed"   };
</script>
<script type="text/javascript" src="http://cdn.adk2.com/adstract/scripts/overlay/overlay.js"></script>

</body>
</html>