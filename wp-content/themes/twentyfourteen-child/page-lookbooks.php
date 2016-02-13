<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="content" class="site-content" role="main">

	<?php
		// Start the Loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		endwhile;
	?>

</div><!-- #content -->
<?php
	$url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
	//echo $url;
	$q = parse_url($url, PHP_URL_PATH);
	//echo $q

	if ($q == "warchestboutique.com/get-involved/")
	{
		echo '<script type ="text/javascript">'
			, 'var _elm=document.getElementById("menu-item-24").getElementsByTagName("a");'
			,'_elm[0].style.backgroundColor="#B69959";'
			,'_elm[0].style.color="white";'
			,'</script>'
		;
	}
	elseif ($q == "warchestboutique.com/store-locations/")
	{
		echo '<script type ="text/javascript">'
			, 'var _elm=document.getElementById("menu-item-23").getElementsByTagName("a");'
			,'_elm[0].style.backgroundColor="#B69959";'
			,'_elm[0].style.color="white";'
			,'</script>'
		;
	}
	elseif ($q == "warchestboutique.com/lookbooks/")
	{
		echo '<script type ="text/javascript">'
			, 'var _elm=document.getElementById("menu-item-22").getElementsByTagName("a");'
			,'_elm[0].style.backgroundColor="#B69959";'
			,'_elm[0].style.color="white";'
			,'</script>'
		;
	}
	elseif ($q == "warchestboutique.com/our-story/")
	{
		echo '<script type ="text/javascript">'
			, 'var _elm=document.getElementById("menu-item-21").getElementsByTagName("a");'
			,'_elm[0].style.backgroundColor="#B69959";'
			,'_elm[0].style.color="white";'
			,'</script>'
		;
	}

	get_footer();
