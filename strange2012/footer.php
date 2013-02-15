<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	
	<!-- BEGIN FOOTER -->
	<div class="container footer">
		
		<div class="social">
			<div id="tweetbtn" class="nomobile">
				<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.meetstrange.com" data-text="Inusitus Bonum Est" data-related="meetstrange">Tweet</a>
			</div>
			<div id="fblike" class="nomobile">
				<fb:like href="https://www.facebook.com/meetstrange" send="false" layout="button_count" width="80" show_faces="false"></fb:like>
			</div>
		</div>

		<img class="eggs" src="<?php echo get_bloginfo('stylesheet_directory');?>/images/footer-eggs.png" alt="Eggs"/>	
		<img class="mound" src="<?php echo get_bloginfo('stylesheet_directory');?>/images/footer-ground.png" alt="Mound" class="scale-with-grid"/>	

	</div>
	<!-- END FOOTER -->


	<!-- JS
	================================================== -->
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
	<script src="<?php echo get_bloginfo('stylesheet_directory');?>/js/header.js" type="text/javascript" /></script>


		
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37834457-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>	

<script>
if(location.href.indexOf('work') != -1){
	$('a.active').removeClass('active');
	$('a.work').addClass('active');
}
$(function() {
   window.scrollTo(0,300);
});
</script>


<!-- End Document
================================================== -->
	
	
<?php wp_footer(); ?>
</body>
</html>