<?php
/**
 * Template Name: Landing Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 

//putRevSlider("frontpage")

?>
		
<div class  ="HomeBlock"style="display:block;width: 900px; height:750px; margin-left:auto; margin-right:auto; margin-top: 40px;">
   <a href="http://warchestboutique.com/wp-content/uploads/2014/05/2013-InfoGraphic.pdf" target="_blank"><div id="HomeButton01" style="width: 269px; height: 153px; float:left; margin-left:5px; margin-right: 6px; margin-top: 10px; margin-bottom: 6px;"></div></a>
   <a href="http://store.warchestboutique.com/home-accents/spa.html" target="_blank"><div id="HomeButton02" style="width: 269px; height: 261px; float:left; margin-left:5px; margin-right: 5px; margin-top: 10px; margin-bottom: -40px;"></div></a>
   <a href="http://warinternational.org/get-involved/host-a-party/" target = "_blank"><div id="HomeButton03" style="width: 269px; height: 152px; float:left; margin-left:5px; margin-right: 5px; margin-top: 10px; margin-bottom: 75px;"></div></a>
   <a href="http://store.warchestboutique.com/new/us-training-center.html" target = "_blank"><div id="HomeButton04" style="width: 269px; height: 366px; float:left; margin-left:5px; margin-right: 5px; margin-top: -64px; margin-bottom: 0px;"></div></a>
   <a href="http://www.warinternational.org/story-gallery/" target="_blank"><div id="HomeButton05" style="width: 269px; height: 152px; float:left; margin-left:6px; margin-right: 6px; margin-top: 45px; margin-bottom: 6px;"></div></a>
   <a href="http://store.warchestboutique.com/mens.html" target="_blank"><div id="HomeButton06" style="width: 269px; height: 367px; float:left; margin-left:5px; margin-right: 5px; margin-top: -63px; margin-bottom: 10px;"></div></a>
   <a href="http://warchestboutique.com/war-style-committee/" target="_blank"><div id="HomeButton07" style="width: 269px; height: 152px; float:left; margin-left:6px; margin-right: 5px; margin-top: 1px; margin-bottom: 0px;"></div></a>
   <a href="http://store.warchestboutique.com/accessories/scarves-shawls.html" target="_blank"><div id="HomeButton08" style="width: 269px; height: 261px; float:left; margin-left:7px; margin-right: 5px; margin-top: -105px; margin-bottom: 0px;"></div></a>
   <a class="lbp-video-link" href="#"><div id="HomeButton09" style="width: 269px; height: 152px; float:left; margin-left:5px; margin-right: 5px; margin-top: 4px; margin-bottom: 0px;"></div></a>
</div>
			
<div style="display:none">
    <div id="lbp-video-href">
        <iframe width="560" height="315" src="//www.youtube.com/embed/zyTur-vE7xc?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
</div>

<div id="preload">
   <img src="http://warchestboutique.com/wp-content/uploads/2014/11/WinterBox02-Hover.png" width="1" height="1" alt="Image 02-Hover" />
   <img src="http://warchestboutique.com/wp-content/uploads/2014/11/WinterBox04-Hover.png" width="1" height="1" alt="Image 04-Hover" />
   <img src="http://warchestboutique.com/wp-content/uploads/products-for-men-hover.png" width="1" height="1" alt="Image 06-Hover" />
   <img src="http://warchestboutique.com/wp-content/uploads/being-cozy-hover.png" width="1" height="1" alt="Image 08-Hover" />
</div>
		
<?php
get_sidebar();
get_footer();
?>