<?php
/**
 * Template Name: Landing Page Redux 2
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();

//putRevSlider("frontpage");

// The ID of the FrontPage Post object is 537
$img01 = wp_get_attachment_image_src(get_post_meta(537, 'image01', true),full);
$img02 = wp_get_attachment_image_src(get_post_meta(537, 'image02', true),full);
$img02_hover = wp_get_attachment_image_src(get_post_meta(537, 'image02-hover', true),full);
$img03 = wp_get_attachment_image_src(get_post_meta(537, 'image03', true),full);
$img04 = wp_get_attachment_image_src(get_post_meta(537, 'image04', true),full);
$img04_hover = wp_get_attachment_image_src(get_post_meta(537, 'image04-hover', true),full);
$img05 = wp_get_attachment_image_src(get_post_meta(537, 'image05', true),full);
$img06 = wp_get_attachment_image_src(get_post_meta(537, 'image06', true),full);
$img06_hover = wp_get_attachment_image_src(get_post_meta(537, 'image06-hover', true),full);
$img07 = wp_get_attachment_image_src(get_post_meta(537, 'image07', true),full);
$img08 = wp_get_attachment_image_src(get_post_meta(537, 'image08', true),full);
$img08_hover = wp_get_attachment_image_src(get_post_meta(537, 'image08-hover', true),full);
$img09 = wp_get_attachment_image_src(get_post_meta(537, 'image09', true),full);

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		
<div class  ="HomeBlock">
	<div class ="HomeColumn">
		<a href="<?php echo get_post_meta(537, 'link01', true) ?>" target="_blank"><img src="<?php echo $img01[0]; ?>" id="HomeButton01"></img></a>
		<a href="<?php echo get_post_meta(537, 'link04', true) ?>" target="_blank"><img src="<?php echo $img04[0]; ?>" id="HomeButton04"></img></a>
		<a href="<?php echo get_post_meta(537, 'link07', true) ?>" target="_blank"><img src="<?php echo $img07[0]; ?>" id="HomeButton07"></img></a>
	</div>
	<div class ="HomeColumn">
		<a href="<?php echo get_post_meta(537, 'link02', true) ?>" target="_blank"><img src="<?php echo $img02[0]; ?>" id="HomeButton02"></img></a>
		<a href="<?php echo get_post_meta(537, 'link05', true) ?>" target="_blank"><img src="<?php echo $img05[0]; ?>"  id="HomeButton05"></img></a>
		<a href="<?php echo get_post_meta(537, 'link08', true) ?>" target="_blank"><img src="<?php echo $img08[0]; ?>"  id="HomeButton08"></img></a>
	</div>
	<div class ="HomeColumn">
		<a href="<?php echo get_post_meta(537, 'link03', true) ?>" target="_blank"><img src="<?php echo $img03[0]; ?>"  id="HomeButton03"></img></a>
		<a href="<?php echo get_post_meta(537, 'link06', true) ?>" target="_blank"><img src="<?php echo $img06[0]; ?>"  id="HomeButton06"></img></a>
		<a class="lbp-video-link" href="#"><img src="<?php echo $img09[0]; ?>" id="HomeButton09"></img></a>
	</div>
</div>
			
<div style="display:none">
    <div id="lbp-video-href">
        <iframe width="560" height="315" src="//www.youtube.com/embed/zyTur-vE7xc?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
</div>

<div id="preload">
   <img src="<?php echo $img02_hover[0]; ?>" width="1" height="1" alt="Image 02-Hover" />
   <img src="<?php echo $img04_hover[0]; ?>" width="1" height="1" alt="Image 04-Hover" />
   <img src="<?php echo $img06_hover[0]; ?>" width="1" height="1" alt="Image 06-Hover" />
   <img src="<?php echo $img08_hover[0]; ?>" width="1" height="1" alt="Image 08-Hover" />
</div>

<script>
// Jquery Functions to do hover effects. -PjF -3/20/2015
$(function() {
   $('#HomeButton02').hover( function(){
      $(this).attr('src','<?php echo $img02_hover[0]; ?>');
   },
   function(){
      $(this).attr('src','<?php echo $img02[0]; ?>');
   });
   $('#HomeButton04').hover( function(){
      $(this).attr('src','<?php echo $img04_hover[0]; ?>');
   },
   function(){
      $(this).attr('src','<?php echo $img04[0]; ?>');
   });
   $('#HomeButton06').hover( function(){
      $(this).attr('src','<?php echo $img06_hover[0]; ?>');
   },
   function(){
      $(this).attr('src','<?php echo $img06[0]; ?>');
   });
   $('#HomeButton08').hover( function(){
      $(this).attr('src','<?php echo $img08_hover[0]; ?>');
   },
   function(){
      $(this).attr('src','<?php echo $img08[0]; ?>');
   });
});
</script>

<?php
get_sidebar();
get_footer();
?>