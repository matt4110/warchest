<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<!--Start Customer Footer-->
			<div id = "custom-footer">
				<ul class="footer-links">
					<div id = "CustomerService">
						<li><span>Customer Service</span>
							<ul>
								<li><a href="http://warchest.nrostores.com/shipping/">Shipping</a></li>
								<li><a href="http://warchest.nrostores.com/returns/">Returns</a></li>
								<li><a href="http://warchest.nrostores.com/terms/">Terms &amp; Conditions</a></li>
								<li><a href="http://warchest.nrostores.com/catalog/seo_sitemap/category/">Site Map</a></li>
							</ul>
						</li>
					</div>
					<div id = "AboutUs">
						<li><span>About Us</span>
							<ul>
								<li><a href="https://store.warchestboutique.com/index.php/manage/cms_wysiwyg/directive/___directive/e3tzdG9yZSB1cmw9ImNvbnRhY3QifX0,/">Contact Us</a></li>
								<li><a href="http://warchestboutique.com/our-story/">About Us</a></li>
								<li><a href="http://warinternational.org/about-us/faqs/" target="_blank">FAQ</a></li>
								<li><a href="http://warinternational.org/" target="_blank">WAR Home</a></li>
							</ul>
						</li>
					</div>
					<div id = "ConnectWithUs">
						<li><span>Connect with Us</span>
							<ul class="footer-social">
								<li><a href="https://www.facebook.com/WARChestBoutique" target="_blank"> <img style="float: left; margin-top: 3px;" src="http://warchestboutique.com/wp-content/uploads/2014/05/icon_facebook.png" alt="" /> <span style="margin-left: 30px; line-height: 22px; font-size: 12px; color: #798174;">Facebook</span></a></li>
								<li><a href="https://twitter.com/WomenAtRiskIntl/" target="_blank"> <img style="float: left; margin-top: 3px;" src="http://warchestboutique.com/wp-content/uploads/2014/05/icon_twitter.png" alt="" /> <span style="margin-left: 30px; line-height: 22px; font-size: 12px; color: #798174;">Twitter</span></a></li>
								<li><a href="http://www.pinterest.com/womenatriskintl/" target="_blank"> <img style="float: left; margin-left: 4px; margin-top: 3px;" src="http://warchestboutique.com/wp-content/uploads/2014/05/icon_pinterest.png" alt="" /> <span style="margin-left: 30px; line-height: 22px; font-size: 12px; color: #798174;">Pinterest</span></a></li>
							</ul>
						</li>
					</div>
				</ul>
			</div>
			<!--End Customer Footer-->
			
			
			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>