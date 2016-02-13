<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<div id="instafoot" style="width:100%; max-width:1600px; margin: 0px auto;">
			<img class="instafoot-img" src="/wp-content/uploads/2015/10/i-wear-change-honor1.png" /> 
			<img class="instafoot-img" style="margin-left: -20px;" src="/wp-content/uploads/2015/10/i-wear-change-rewriting-her-story1.png" /> 
			<div id="followus-text"><a href="https://www.instagram.com/the_war_chest_boutique/" target="_blank">Follow us</a> on Instagram <img src= "http://warchestboutique.com/wp-content/uploads/2015/10/instgram-logo.png" /> @ <a href="https://www.instagram.com/explore/tags/iwearchange/"><small>#IWEARCHANGE</small></a></div>
			<div id="instagram-feed" style="display: inline-block; width:600px; float:left;margin-left: -10px;"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
			<img class="instafoot-img" style="margin-left: -20px;" src="/wp-content/uploads/2015/10/i-wear-change-rewriting-her-story-21.png" /> 
			<a href="http://warinternational.org/donate/" target="_blank"><img class="instafoot-img" src="http://warchestboutique.com/wp-content/uploads/2015/10/donate-button1-resized.png" /></a>
			<a href="http://warchestboutique.com/i-wear-change"><img class="instafoot-img" src="http://warchestboutique.com/wp-content/uploads/2015/10/iwearchange_button-sm.png" /></a>
		</div>
		<footer id="colophon" class="site-footer" role="contentinfo">

			
				
		</footer><!-- #colophon -->
	</div><!-- #page -->
	<?php wp_footer(); ?>
</body>
<script>
var addEvent = function(object, type, callback) {
    if (object == null || typeof(object) == 'undefined') return;
    if (object.addEventListener) {
        object.addEventListener(type, callback, false);
    } else if (object.attachEvent) {
        object.attachEvent("on" + type, callback);
    } else {
        object["on"+type] = callback;
    }
};

addEvent(window, "resize", sizefooter);

function sizefooter() {

	var width = window.innerWidth 
	if (width > 1600) { width = 1600;}
	var percent = width/ 1600;
	var imgs = document.getElementsByClassName('instafoot-img');
	var largestHeight = 0;
	var largestHeight = 0;
	for (i=0; i<imgs.length; i++) {
		imgs[i].width= imgs[i].naturalWidth*percent;
		if (imgs[i].height > largestHeight) { largestHeight = imgs[i].height;}
		console.log(imgs[i]);
	}	  

	var instafeed = document.getElementById('instagram-feed');
	instafeedwidth = Math.round(width * .45)
	instafeed.style.width = instafeedwidth+"px";
	instafeed.style.marginTop = Math.round(largestHeight - instafeedwidth * .375) + "px";

	var instatext = document.getElementById('followus-text');
	instatext.style.marginTop = Math.round(largestHeight - instafeedwidth*.3) + "px";

	/*var instadonate = document.getElementById('instafoot-donate');
	instadonate.style.marginTop = Math.round(largestHeight - instadonate.height) + "px";
	instadonate.style.width = instadonate.naturalWidth*percent + "px";*/
}

window.onload=setTimeout(sizefooter, 1000);

// these are just for safety sake, so that the page definitely loads right.  If the footer items are not in place when sizefooter is called the first time, the user will not see any difference from the subsequent calls below.
window.onload=setTimeout(sizefooter, 2000);
window.onload=setTimeout(sizefooter, 3000);
window.onload=setTimeout(sizefooter, 4000);
</script>
</html>